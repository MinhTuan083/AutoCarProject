<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\CarType;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;

class CRUDCarController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function listCartp()
    {
        $carTypes = CarType::orderBy('created_at', 'desc')->get();
        return view('crud-car.listCarTypes', compact('carTypes'));
    }

    public function create()
    {   
        
        $response = Http::get('https://restcountries.com/v3.1/all');
    $countries = $response->json();
    // Sắp xếp danh sách quốc gia theo thứ tự ABC dựa trên tên
    usort($countries, function($a, $b) {
        return $a['name']['common'] <=> $b['name']['common'];
    });

    // Truyền danh sách quốc gia đã sắp xếp vào view
    return view('crud-car.addCarTypes', compact('countries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'country' => 'required|string|max:255',
        ]);

       

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('car_types'), $imageName);
        }
        $carType = new CarType;
        $carType->name = $request->input('name');
        $carType->description = $request->input('description');
        $carType->country = $request->input('country');
        $carType->image = $imageName ?? null;
        $carType->save();

        return redirect()->route('view')->with('success', 'Thêm loại xe thành công!');
    }

    public function edit($id)
    {
        $carType = CarType::findOrFail($id);

    // Gửi yêu cầu HTTP đến API lấy danh sách các quốc gia
    $response = Http::get('https://restcountries.com/v3.1/all');
    $countries = $response->json();
    usort($countries, function($a, $b) {
        return $a['name']['common'] <=> $b['name']['common'];
    });
    return view('crud-car.editCarTypes', compact('carType', 'countries'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'country' => 'required|string|max:255',
        ]);
        $carType = CarType::findOrFail($id);
        // Update the car type with new data
        $carType->name = $request->input('name');
        $carType->description = $request->input('description');
        $carType->country = $request->input('country');

        if ($request->hasFile('image')) {
            // Xử lý việc lưu file ảnh và lấy đường dẫn đã lưu
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('car_types'), $imageName);
            
            // Xóa hình ảnh cũ nếu có
            if (File::exists(public_path('car_types/' . $carType->image))) {
                File::delete(public_path('car_types/' . $carType->image));
            }
            // Lưu hình ảnh mới
            $carType->image = $imageName;
        }

        $carType->save();
        
        return redirect()->route('view')->with('success', 'Cập nhật thông tin loại xe thành công!');
    }



    public function deleteCar($id)
    {
        // Tìm và xoá loại xe dựa vào id
        $carType = CarType::findOrFail($id);
        // Xóa tệp tin hình ảnh của xe
        if (File::exists(public_path('car_types/' . $carType->image))) {
            File::delete(public_path('car_types/' . $carType->image));
        }

        $carType->delete();
        // Chuyển hướng về danh sách loại xe với thông báo thành công

        if (!$carType) {
            return redirect()->back()->with('error', 'Cartype not found');
        }
        return redirect()->route('view')->with('success', 'Loại xe đã được xoá thành công');

    }

    
}
