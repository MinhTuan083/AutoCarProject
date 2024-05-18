<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BrandController extends Controller
{
    public function index()
    {
        // Hiển thị trang dashboard cho thương hiệu
        return view('brands.dashboard');
    }

    public function addBrand()
    {
        // Hiển thị form thêm mới thương hiệu
        return view('brands.addbrand');
    }

    public function storeBrand(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'founded_year' => 'required|integer',
            'description' => 'nullable|string',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Xử lý việc lưu file logo và lấy đường dẫn đã lưu
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = time().'.'.$logo->getClientOriginalExtension();
            $logo->move(public_path('logos'), $logoName);
        }

        // Tạo mới một thương hiệu
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->country = $request->country;
        $brand->founded_year = $request->founded_year;
        $brand->description = $request->description;
        $brand->logo = $logoName ?? null; // Lưu tên logo vào cơ sở dữ liệu
        $brand->save();

        return redirect()->route('listbrand')->with('success', 'Brand added successfully');
    }
    public function updateBrand(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'founded_year' => 'required|integer',
            'description' => 'nullable|string',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
    
        $brand = Brand::findOrFail($id);
    
        $brand->name = $request->input('name');
        $brand->country = $request->input('country');
        $brand->founded_year = $request->input('founded_year');
        $brand->description = $request->input('description');

    
        if ($request->hasFile('logo')) {
            // Xử lý việc lưu file ảnh và lấy đường dẫn đã lưu
            $logo = $request->file('logo');
            $logoName = time().'.'.$logo->getClientOriginalExtension();
            $logo->move(public_path('logos'), $logoName);
            
            // Xóa hình ảnh cũ nếu có
            if (File::exists(public_path('logos/' . $brand->logo))) {
                File::delete(public_path('logos/' . $brand->logo));
            }
            // Lưu hình ảnh mới
            $brand->logo = $logoName;
        }
    
        $brand->save();
    
        return redirect("listbrand")->with('message','Car updated successfully');
    }
    
    public function editBrand($id)
    {
        $brand = Brand::findOrFail($id); // Lấy danh sách các thương hiệu
        return view('brands.edit', compact('brand')); // Truyền biến $brands vào view
    }
    public function listBrand()
    {
        // Lấy danh sách các thương hiệu từ cơ sở dữ liệu
        $brands = Brand::all();
        // Trả về view 'brands.listbrand' kèm theo dữ liệu về danh sách các thương hiệu
        return view('brands.listbrand', ['brands' => $brands]);
    }

    public function deleteBrand($id)
    {
        // Tìm và xóa thương hiệu theo ID
        $brand = Brand::find($id);
        if (!$brand) {
            return redirect()->back()->with('error', 'Brand not found');
        }
    
        // Xóa tệp tin logo của thương hiệu
        if (File::exists(public_path('logos/' . $brand->logo))) {
            File::delete(public_path('logos/' . $brand->logo));
        }
    
        // Xóa dữ liệu thương hiệu khỏi cơ sở dữ liệu
        $brand->delete();
    
        // Chuyển hướng về trang danh sách thương hiệu với thông báo thành công
        return redirect("listbrand")->with('message', 'Brand deleted successfully');
    }

    public function showBrand($id)
    {
        $brand = Brand::find($id);
        if (!$brand) {
            return redirect()->back()->with('error', 'Brand not found');
        }
    
        return view('brands.show', ['brand' => $brand]);
    }
}