<!-- Kiểm tra và hiển thị thông báo nếu có -->
@if(Session::has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif

@extends('dashboard')

@section('content')
<div class="container">
    <h2 class="text-center my-4">Hóa Đơn</h2>

    <!-- Hiển thị thông tin khách hàng -->
    <div class="mt-4">
        <h3>Thông tin khách hàng:</h3>
        <p><strong>Họ và tên:</strong> {{ $name }}</p>
        <p><strong>Số điện thoại:</strong> {{ $phone }}</p>
        <p><strong>Địa chỉ:</strong> {{ $address }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
    </div>

    <!-- Hiển thị thông tin đơn hàng -->
    <div class="mt-4">
        <h3>Thông tin đơn hàng:</h3>
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
    </div>

    <!-- Hiển thị tổng tiền và tổng số lượng -->
    <div class="text-right mt-4">
        <p><strong>Tổng số lượng:</strong> {{ $totalQuantity }}</p>
        <p><strong>Tổng tiền:</strong> {{ number_format($totalPrice) }} VND</p>
    </div>
</div>
@endsection