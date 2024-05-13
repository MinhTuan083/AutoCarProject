@extends('dashboard')

@section('content')
<main class="add-brand-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <h3 class="card-header text-center bg-dark text-light">Add New Brand</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('brands.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required autofocus>
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" class="form-control" id="country" name="country" required>
                                @error('country')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="founded_year" class="form-label">Founded Year</label>
                                <input type="text" class="form-control" id="founded_year" name="founded_year" required>
                                @error('founded_year')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description"></textarea>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="logo" class="form-label">Choose Brand Logo</label>
                                <input type="file" class="form-control" id="logo" name="logo" accept="image/*">
                                @error('logo')
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
<style>
    .btn-update {
        width: 300px; 
    }
</style>
@endsection
