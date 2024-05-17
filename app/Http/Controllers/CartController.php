<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Mail\MailInvoke;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function add($id)
    {
        $car = Car::find($id);

        if (!$car) {
            return redirect()->back()->with('error', 'Car not found');
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $car->name,
                "brand" => $car->brand,
                "model" => $car->model,
                "year" => $car->year,
                "price" => $car->price,
                "quantity" => 1,
                "image" => $car->image,
                "seats" => $car->seats,
                "fuel" => $car->fuel,
                "description" => $car->description,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Car added to cart');
    }

    public function view()
    {
        $cart = session()->get('cart', []);

        return view('cart.view', compact('cart'));
    }

    public function viewThanhToan()
    {
        $cart = session()->get('cart', []);

        return view('cart.viewThanhToan', compact('cart'));
    }

    public function viewHoaDon(Request $request)
    {

        // Lấy thông tin khách hàng từ form
        $name = $request->input('name');
        $address = $request->input('address');
        $email = $request->input('email');
        $phone = $request->input('phone');


        // Lấy thông tin đơn hàng từ session (đã lưu từ trước khi chuyển từ trang thanh toán)
        $cart = session()->get('cart', []);

        // Tính tổng tiền và tổng số lượng
        $totalPrice = 0;
        $totalQuantity = 0;
        foreach ($cart as $id => $details) {
            $totalPrice += $details['price'] * $details['quantity'];
            $totalQuantity += $details['quantity'];
        }

        // Tạo một bản ghi mới trong bảng hóa đơn
        $hoaDon = new HoaDon();
        $hoaDon->name = $name;
        $hoaDon->address = $address;
        $hoaDon->email = $email;
        $hoaDon->phone = $phone;

        $hoaDon->total_price = $totalPrice;
        $hoaDon->total_quantity = $totalQuantity;
        $hoaDon->save();

        // Gửi email đến địa chỉ email của người dùng
        Mail::to($email)->send(new MailInvoke($name, $address, $email, $phone, $totalPrice, $totalQuantity, $cart));

        //Report
        PDFController::generatePDF($hoaDon);

        // Lưu thông báo vào session
        session()->put('success', "Thanh toán thành công");

        return view('cart.viewHoaDon', compact(
            'cart',
            'name',
            'email',
            'address',
            'phone',
            'totalPrice',
            'totalQuantity'
        ));
    }
}
