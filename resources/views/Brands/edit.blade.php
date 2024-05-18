@extends('dashboard')

@section('content')
<main class="edit-brand-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <h3 class="card-header text-center bg-dark text-light">Edit Brand</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('brands.update', $brand->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus>
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" class="form-control" id="country" name="country" placeholder="Country" required>
                                @error('country')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="founded_year" class="form-label">Founded Year</label>
                                <input type="text" class="form-control" id="founded_year" name="founded_year" placeholder="Founded Year" required>
                                @error('founded_year')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
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
                                <button type="submit" class="btn btn-dark btn-lg btn-update">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .btn-update {
    width: 300px; 
}
    </style>
</main>
@endsection
