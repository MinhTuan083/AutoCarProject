@extends('dashboard')

@section('content')

<main class="list-car">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <style>
                    .card {
                        border: none !important;
                        position: relative;
                        overflow: hidden;
                    }

                    /* Áp dụng hiệu ứng transform khi hover cho card bên trong */
                    .card .card {
                        transition: transform 0.3s ease-in-out;
                    }

                    .card .card:hover {
                        transform: scale(1.15);
                    }

                    .card-overlay {
                        position: absolute;
                        bottom: 0;
                        left: 0;
                        width: 100%;
                        background-color: rgba(255, 255, 255, 0.7); 
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

                    /* Đảm bảo rằng tất cả hình ảnh đều có kích thước cố định và không bị bóp méo */
                    .card-img-top {
                        width: 100%;
                        height: auto;
                    }
                </style>
                <div class="card">
                    <h3 class="card-header text-center bg-dark text-light mt-5">List of Brands</h3>
                    <div class="card-body mt-5 ">
                        <div class="row row-cols-1 row-cols-md-3 g-4 ">
                            @foreach($brands as $brand)
                            <div class="col">
                                <div class="card">
                                    <img src="/./logos/{{ $brand->logo }}" class="card-img-top" alt="Brand Logo" style="width: 100%; height: 200px; object-fit: contain;">
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
