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
                                <img src="{{ asset('images/' . $car->image) }}" class="img-fluid rounded" style="width: 631px; height: 250px;" alt="{{ $car->name }}">
                            </div>
                            <div class="col-md-6 order-md-1">
                                <p><strong>Name:</strong> <span style="font-size: 1em;">{{ $car->name }}</span></p>
                                <p><strong>Brand:</strong> <span style="font-size: 1em;">{{ $car->brand }}</span></p>
                                <p><strong>Model:</strong> <span style="font-size: 1em;">{{ $car->model }}</span></p>
                                <p><strong>Year:</strong> <span style="font-size: 1em;">{{ $car->year }}</span></p>
                                <p><strong>Price:</strong> <span style="font-size: 1em; color: red;">{{ number_format($car->price) }} VND</span></p>
                                <p><strong>Seats:</strong> <span style="font-size: 1em;">{{ $car->seats }}</span></p>
                                <p><strong>Fuel:</strong> <span style="font-size: 1em;">{{ $car->fuel }}</span></p>
                                <p><strong>Description:</strong> <span style="font-size: 1em;">{{ $car->description }}</span></p>
                                <form method="POST" action="{{ route('cart.add', ['id' => $car->id]) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-lg btn-add-to-cart mt-4">Add to Cart</button>
                                </form>
                            </div>
                        </div>
                        @else
                        <p>Car not found</p>
                        @endif
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
            transform: scale(1.2); /* Kích thước của hình ảnh tăng lên 20% */
        }
    </style>
</main>
@endsection
