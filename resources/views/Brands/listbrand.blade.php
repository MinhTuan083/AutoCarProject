@extends('dashboard')

@section('content')

<main class="list-car">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <style>
                    .card {
                        border: none !important;
                        transition: transform 0.3s ease-in-out;
                        position: relative;
                        overflow: hidden;
                    }

                    .card:hover {
                        transform: scale(1.05);
                    }

                    .card-overlay {
                        position: absolute;
                        bottom: 0;
                        left: 0;
                        width: 100%;
                        background-color: rgba(#ffff, 0, 0, 0.7); 
                        transform: translateY(100%);
                        transition: transform 0.3s ease-in-out;
                        padding: 1rem;
                        opacity: 0;
                        pointer-events: none;
                    }

                    .card:hover .card-overlay {
                        transform: translateY(-20px);
                        opacity: 1;
                        pointer-events: auto;
                    }

                    .card-body {
                        padding: 1.25rem;
                    }

                    .card-actions {
                        position: absolute;
                        bottom: 0;
                        left: 50%;
                        transform: translateX(-50%);
                        opacity: 0;
                        transition: opacity 0.3s ease-in-out;
                    }

                    .card-overlay:hover .card-actions {
                        opacity: 1;
                    }
                </style>
                <div class="card">
                    <h3 class="card-header text-center bg-dark text-light">List of Brands</h3>
                    <div class="card-body mt-4">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            @foreach($brands as $brand)
                            <div class="col">
                                <div class="card">
                                    <img src="/./logos/{{ $brand->logo }}" class="card-img-top" style="width: 100%; height: 200px; object-fit: contain;" alt="Brand Logo">
                                    <div class="card-overlay">
                                        <div class="card-actions">
                                            <a href="{{ route('brands.show', ['id' => $brand->id]) }}" class="btn btn-primary btn-sm mr-2">View</a>
                                            <a href="{{ route('brands.edit', ['id' => $brand->id]) }}" class="btn btn-primary btn-sm mr-2">Edit</a>
                                            <form method="POST" action="{{ route('brands.delete', ['id' => $brand->id]) }}" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this brand?')">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $brand->name }}</h5>
                                        <p class="card-text">
                                            <strong>Country:</strong> {{ $brand->country }}<br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
