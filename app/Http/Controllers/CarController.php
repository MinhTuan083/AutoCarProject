<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Brand;
use App\Models\CarType;

class CarController extends Controller
{
    /**
     * Show form to add new car
     */
    public function index()
    {
        $toyota_cars = Car::where('brand', 'TOYOTA')->get();
        $hyundai_cars = Car::where('brand', 'HYUNDAI')->get();
        $kia_cars = Car::where('brand', 'KIA')->get();
        $mitsubishi_cars = Car::where('brand', 'MITSUBISHI')->get();
        $nissan_cars = Car::where('brand', 'NISSAN')->get();

        return view('dashboard', compact('toyota_cars', 'hyundai_cars', 'kia_cars', 'mitsubishi_cars', 'nissan_cars'));
    }

    public function addCar()
    {
        $brands = Brand::all();
        $cartypes = CarType::all();
        return view('cars.addcar', ['brands' => $brands], ['cartypes' => $cartypes]);
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
            'cartype' => 'required',
        ]);

        // Xử lý việc lưu file ảnh và lấy đường dẫn đã lưu
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }

        $car = new Car();
        $car->name = $request->name;
        $car->brand= $request->brand; 
        $car->model = $request->model;
        $car->year = $request->year;
        $car->price = $request->price;
        $car->description = $request->description;
        $car->image = $imageName ?? null; // Lưu tên hình ảnh vào cơ sở dữ liệu
        $car->seats = $request->seats; // Lưu số chỗ
        $car->fuel = $request->fuel; // Lưu nhiên liệu
        $car->cartype= $request->cartype; 
        $car->save();

        return redirect()->route('listcar')->with('success', 'Car added successfully');
    }

    public function listCar()
    {
        // Lấy danh sách các xe từ cơ sở dữ liệu
        $cars = Car::paginate(6);
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
        return redirect("listcar")->with('message', 'Car deleted successfully');
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
        'cartype' => 'required|string|max:255',
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
    $car->cartype = $request->input('cartype');


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

    return redirect("listcar")->with('message','Car updated successfully');
}

public function editCar($id)
{
    $car = Car::findOrFail($id);
    $brands = Brand::all(); // Lấy danh sách các thương hiệu
    $cartypes = CarType::all(); // Lấy danh sách các thương hiệu
    return view('cars.edit', compact('car', 'brands', 'cartypes')); // Truyền biến $brands vào view
}

}


