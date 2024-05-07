<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CarController extends Controller
{
    /**
     * Show form to add new car
     */
    public function index()
    {
        return view('cars.dashboard');
    }

    public function addCar()
    {
        return view('cars.addcar');
    }

    /**
     * Store a newly created car in storage.
     */
    public function storeCar(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'seats' => 'required|integer', // Validate số chỗ
            'fuel' => 'required', // Validate nhiên liệu
        ]);

        // Xử lý việc lưu file ảnh và lấy đường dẫn đã lưu
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }

        $car = new Car();
        $car->name = $request->name;
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->year = $request->year;
        $car->price = $request->price;
        $car->description = $request->description;
        $car->image = $imageName ?? null; // Lưu tên hình ảnh vào cơ sở dữ liệu
        $car->seats = $request->seats; // Lưu số chỗ
        $car->fuel = $request->fuel; // Lưu nhiên liệu
        $car->save();

        return redirect()->route('addcar')->with('success', 'Car added successfully');
    }

    public function listCar()
    {
        // Lấy danh sách các xe từ cơ sở dữ liệu
        $cars = Car::all();
        // Trả về view 'cars.listcar' kèm theo dữ liệu về danh sách các xe
        return view('cars.listcar', ['cars' => $cars]);
    }
    public function deleteCar($id)
    {
        // Tìm và xóa xe theo ID
        $car = Car::find($id);
        if (!$car) {
            return redirect()->back()->with('error', 'Car not found');
        }
    
        // Xóa tệp tin hình ảnh của xe
        if (File::exists(public_path('images/' . $car->image))) {
            File::delete(public_path('images/' . $car->image));
        }
    
        // Xóa dữ liệu xe khỏi cơ sở dữ liệu
        $car->delete();
    
        // Chuyển hướng về trang danh sách xe với thông báo thành công
        return redirect("list")->with('message', 'Car deleted successfully');
    }
    
    public function showCar($id)
    {
        $car = Car::find($id);
        if (!$car) {
            return redirect()->back()->with('error', 'Car not found');
        }
    
        return view('cars.show', ['car' => $car]);
    }
    public function updateCar(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'brand' => 'required|string|max:255',
        'model' => 'required|string|max:255',
        'year' => 'required|integer',
        'price' => 'required|numeric',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'seats' => 'required|integer',
        'fuel' => 'required|string',
    ]);
    

    $car = Car::findOrFail($id);

    $car->name = $request->input('name');
    $car->brand = $request->input('brand');
    $car->model = $request->input('model');
    $car->year = $request->input('year');
    $car->price = $request->input('price');
    $car->description = $request->input('description');
    $car->seats = $request->input('seats');
    $car->fuel = $request->input('fuel');

    if ($request->hasFile('image')) {
        // Xử lý việc lưu file ảnh và lấy đường dẫn đã lưu
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        
        // Xóa hình ảnh cũ nếu có
        if (File::exists(public_path('images/' . $car->image))) {
            File::delete(public_path('images/' . $car->image));
        }
        // Lưu hình ảnh mới
        $car->image = $imageName;
    }

    $car->save();

    return redirect("list")->with('message','Car updated successfully');
}

public function editCar($id)
{
    $car = Car::findOrFail($id);
    return view('cars.edit', compact('car'));
}



}
