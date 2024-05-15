@extends('dashboard')

@section('content')
<main class="read-car">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="card">
                    <h3 class="card-header text-center">Read Car</h3>
                    <div class="card-body">
                        @if($car)
                        <div class="row">
                            <div class="col-md-6 order-md-2 text-center mt-5">
                                <img src="/./images/{{ $car->image }}" class="img-fluid rounded" style="width: 631px; height: 250px;" alt="{{ $car->name }}">
                            </div>
                            <div class="col-md-6 order-md-1">
                                <p><strong><span style="font-size: 1em;">Name: {{ $car->name }}</strong></p>
                                <p><strong><span style="font-size: 1em;">Brand: {{ $car->brand }}</strong></p>
                                <p><strong><span style="font-size: 1em;">Model: {{ $car->model }}</strong></p>
                                <p><strong><span style="font-size: 1em;">Year: {{ $car->year }}</strong></p>
                                <p><strong><span style="font-size: 1em;">Price: <span style="color: red;">{{ number_format($car->price) }} VND</span></strong></p>
                                <p><strong><span style="font-size: 1em;">Seats: {{ $car->seats }}</strong></p>
                                <p><strong><span style="font-size: 1em;">Fuel: {{ $car->fuel }}</strong></p>
                                <p><strong><span style="font-size: 1em;">Description: {{ $car->description }}</strong></p>
                            </div>
                        </div>
                        @else
                        <p>Car not found</p>
                        @endif
                    </div>
                    <div class="card-footer text-center py-3">
                        <a href="{{ route('listcar') }}" class="btn btn-lg btn-dark">Back to Cars</a>
                    </div>
                    </div>
            </div>
        </div>
    </div>
    <style>
        .card {
            border: none !important; /* Loại bỏ khung viền */
            border-radius: 0; /* Loại bỏ bo tròn góc */
            box-shadow: none !important; /* Loại bỏ bóng đổ */
        }
        
        .card-body img {
            transition: transform 0.3s ease-in-out; /* Thêm transition cho hiệu ứng mượt mà */
        }
        
        .card-body img:hover {
            transform: scale(1.2); /* Kích thước của hình ảnh tăng lên 10% */
        }
    </style>
</main>
@endsection
