<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{

    /**
     * Show form to add new car
     */
    public function index()
    {
        return view('cars.dashboard');
    }
    public function AddCar()
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
        ]);
    
        // Xử lý việc lưu file ảnh và lấy đường dẫn đã lưu
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $imageName = basename($imagePath); // Lấy tên file ảnh
        }
     //Nhớ chạy lệnh này trong cmder
        // php artisan storage:link

        $car = new Car();
        $car->name = $request->name;
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->year = $request->year;
        $car->price = $request->price;
        $car->description = $request->description;
        $car->image = $imageName ?? null; // Lưu tên hình ảnh vào cơ sở dữ liệu
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
}