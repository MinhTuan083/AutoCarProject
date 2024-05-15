@extends('dashboard')

@section('content')
    <div class="container">
        <h2 class="text-center my-4">Thanh Toán</h2>

        <!-- Form nhập thông tin khách hàng -->
        <form action="{{ route('viewHoaDon') }}" method="post">
            @csrf
            <!-- Ô nhập tên -->
            <div class="form-group">
                <label for="name">Họ và tên:</label>
                <input type="text" class="form-control form-control-sm" id="name" name="name" required>
            </div>
            <!-- Ô nhập số điện thoại -->
            <div class="form-group">
                <label for="phone">Số điện thoại:</label>
                <input type="tel" class="form-control form-control-sm" id="phone" name="phone" required>
            </div>
            <!-- Ô nhập địa chỉ -->
            <div class="form-group">
                <label for="address">Địa chỉ:</label>
                <input type="text" class="form-control form-control-sm" id="address" name="address" required>
            </div>
            <!-- Ô nhập email -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control form-control-sm" id="email" name="email" required>
            </div>
            
            <!-- Hiển thị thông tin đơn hàng -->
            <h4 class="mt-5">Thông tin đơn hàng</h4>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart as $id => $details)
                        <tr>
                            <td>{{ $details['name'] }}</td>
                            <td>{{ $details['quantity'] }}</td>
                            <td>{{ number_format($details['price']) }} VND</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Hiển thị tổng tiền -->
            <div class="text-right">
                <h4><strong>Tổng: {{ number_format(array_sum(array_map(function($item) { return $item['price'] * $item['quantity']; }, $cart))) }} VND</strong></h4>
            </div>
            
            <!-- Nút xác nhận thanh toán -->
            <button type="submit" class="btn btn-primary btn-lg mt-4">Xác nhận thanh toán</button>
        </form>
    </div>
@endsection
