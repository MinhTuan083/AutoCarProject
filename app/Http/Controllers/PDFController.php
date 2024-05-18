<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public static function generatePDF(HoaDon $hoaDon)
    {
        // Lấy thông tin hóa đơn từ model HoaDon
        $cart = session()->get('cart', []);

        $name = $hoaDon->name;
        $address = $hoaDon->address;
        $email = $hoaDon->email;
        $phone = $hoaDon->phone;
        $totalPrice = $hoaDon->total_price;
        $totalQuantity = $hoaDon->total_quantity;

        // Truyền dữ liệu vào view
        $data = compact('cart', 'name', 'email', 'address', 'phone', 'totalPrice', 'totalQuantity');
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.report', $data);

        // Lưu file PDF vào thư mục storage/app/public
        $pdfPath = storage_path('app/public/') . 'report.pdf';
        $pdf->save($pdfPath);

        return $pdfPath;
    }
    public function downloadPDF(Request $request)
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

        // Tạo file PDF từ dữ liệu hóa đơn
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.report', compact('name', 'address', 'email', 'phone', 'cart', 'totalPrice', 'totalQuantity'));

        // Xóa hết dữ liệu trong session
        $request->session()->flush();
        // Tải file PDF xuống
        return $pdf->download('report.pdf');
    }
}
