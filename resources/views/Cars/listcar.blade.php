@extends('dashboard')

@section('content')

<main class="list-car">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card" style="border: 1px solid black">
                <h3 class="card-header text-center">List of Cars</h3>
                <div class="card-body">
                    <div class="row">
                        @foreach($cars as $car)
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img src="/./images/{{ $car->image }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $car->name }}</h5>
                                    <p class="card-text">
                                        <strong>Brand:</strong> {{ $car->brand }}<br>
                                        <strong>Model:</strong> {{ $car->model }}<br>
                                        <strong>Year:</strong> {{ $car->year }}<br>
                                        <strong>Price:</strong> {{ number_format($car->price) }}<br>
                                        <strong>Description:</strong> {{ $car->description }}
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                            <a href="#" class="btn btn-sm btn-outline-secondary">Edit</a>
                                            <form method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this car?')">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
