@extends('dashboard')

@section('content')
    <main class="read-car">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card" style="border: 1px solid black">
                    <h3 class="card-header text-center">Read Car</h3>
                    <div class="card-body">
                        @if($car)
                            <div class="row">
                                <div class="col-4">
                                <img src="/./images/{{ $car->image }}" width="400">
                                </div>
                                <div class="col-8">
                                    <p>Name: {{ $car->name }}</p>
                                    <p>Brand: {{ $car->brand }}</p>
                                    <p>Model: {{ $car->model }}</p>
                                    <p>Year: {{ $car->year }}</p>
                                    <p>Price: {{ $car->price }}</p>
                                    <p>Seats: {{ $car->seats }}</p>
                                    <p>Fuel: {{ $car->fuel }}</p>
                                    <p>Description: {{ $car->description }}</p>
                                </div>
                            </div>
                        @else
                            <p>Car not found</p>
                        @endif
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
