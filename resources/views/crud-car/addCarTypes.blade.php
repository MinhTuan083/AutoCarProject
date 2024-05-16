@extends('dashboard')

@section('content')
    <main class="add-car-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow">
                        <h3 class="card-header text-center bg-dark text-light">Add New Car</h3>
                        <div class="card-body">
                            <form method="POST" action="{{ route('cars.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required autofocus>
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="brand" class="form-label">Brand</label>
                                    <select id="brand" class="form-control" name="brand" required>
                                        <option value="" disabled selected>Select Brand</option>
                                        @foreach($brands as $brand)
                                            <option value="{{ $brand->name }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('brand')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="model" class="form-label">Model</label>
                                        <input type="text" class="form-control" id="model" name="model" required>
                                        @error('model')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="year" class="form-label">Year</label>
                                        <input type="text" class="form-control" id="year" name="year" required>
                                        @error('year')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="text" class="form-control" id="price" name="price" required>
                                        @error('price')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="seats" class="form-label">Seats</label>
                                        <input type="text" class="form-control" id="seats" name="seats" required>
                                        @error('seats')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="fuel" class="form-label">Fuel</label>
                                    <select id="fuel" class="form-control" name="fuel" required>
                                        <option value="" disabled selected>Select Fuel</option>
                                        <option value="Gasolie">Gasolie</option>
                                        <option value="Electric">Electric</option>
                                        <option value="Oil">Oil</option>
                                        <option value="Hybrid">Hybrid</option>
                                    </select>
                                    @error('fuel')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" required></textarea>
                                    @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Choose Car Image</label>
                                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                                    @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-4 text-center">
                                    <button type="submit" class="btn btn-dark btn-lg btn-update">Add Brand</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
<style>
    .btn-update {
        width: 300px;
    }
</style>
