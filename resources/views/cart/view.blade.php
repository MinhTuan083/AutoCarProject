@extends('dashboard')

@section('content')
<main class="cart-view">
    <div class="container">
        <h2 class="text-center my-4">Giỏ hàng của bạn</h2>
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @if(count($cart) > 0)
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Year</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart as $id => $details)
                    <tr>
                        <td><img src="{{ asset('images/' . $details['image']) }}" width="100" alt="{{ $details['name'] }}"></td>
                        <td>{{ $details['name'] }}</td>
                        <td>{{ $details['brand'] }}</td>
                        <td>{{ $details['model'] }}</td>
                        <td>{{ $details['year'] }}</td>
                        <td>{{ number_format($details['price']) }} VND</td>
                        <td>{{ $details['quantity'] }}</td>
                        <td>{{ number_format($details['price'] * $details['quantity']) }} VND</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="text-right">
            <h4><strong>Total: {{ number_format(array_sum(array_map(function($item) { return $item['price'] * $item['quantity']; }, $cart))) }} VND</strong></h4>
        </div>
        <div class="text-center mb-4">
            <a href="{{ route('viewThanhToan') }}" class="btn btn-primary btn-lg">Thanh Toán</a>
        </div>
        @else
        <p class="text-center">Your cart is empty</p>
        @endif
    </div>
</main>
@endsection