@extends('dashboard')

@section('content')
<main class="signup-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Update Car</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cars.update', ['id' => $car->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name" value="{{ $car->name }}" required autofocus>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Brand" id="brand" class="form-control" name="brand" value="{{ $car->brand }}" required>
                                @error('brand')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Model" id="model" class="form-control" name="model" value="{{ $car->model }}" required>
                                @error('model')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <input type="number" placeholder="Year" id="year" class="form-control" name="year" value="{{ $car->year }}" required>
                                @error('year')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <input type="number" placeholder="Price" id="price" class="form-control" name="price" value="{{ $car->price }}" required>
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <textarea placeholder="Description" id="description" class="form-control" name="description" required>{{ $car->description }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="image">Choose Car Image</label>
                                <input type="file" id="image" class="form-control" name="image" accept="image/*" required>
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <input type="number" placeholder="Seats" id="seats" class="form-control" name="seats" value="{{ $car->seats }}" required>
                                @error('seats')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Fuel" id="fuel" class="form-control" name="fuel" value="{{ $car->fuel }}" required>
                                @error('fuel')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-dark btn-block">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
