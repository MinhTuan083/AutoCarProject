@extends('dashboard')

@section('content')
<main class="read-brand">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg">
                    <h3 class="card-header text-center bg-dark text-light py-3">Read Brand</h3>
                    <div class="card-body">
                        @if($brand)
                        <div class="row align-items-center">
                            <div class="col-md-6 text-center">
                                <img src="/./images/{{ $brand->logo }}" class="img-fluid rounded shadow-sm mb-3" alt="{{ $brand->name }}" style="max-height: 350px;">
                            </div>
                            <div class="col-md-6">
                                <p class="h4"><strong>Name:</strong> {{ $brand->name }}</strong></p>
                                <p class="h5"><strong>Country:</strong> {{ $brand->country }}</p>
                                <p class="h5"><strong>Founded Year:</strong> {{ $brand->founded_year }}</p>
                                <p class="h5"><strong>Description:</strong></p>
                                <p>{{ $brand->description }}</p>
                            </div>
                        </div>
                        @else
                        <p class="text-center h4">Brand not found</p>
                        @endif
                    </div>
                    <div class="card-footer text-center py-3">
                        <a href="{{ route('listbrand') }}" class="btn btn-lg btn-dark">Back to Brands</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .card {
            border: none !important;
            border-radius: 1rem;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
            font-size: 1.5em;
        }

        .card-body img {
            transition: transform 0.3s ease-in-out;
        }

        .card-body img:hover {
            transform: scale(1.05);
        }

        .card-body p {
            font-size: 1.2em;
            margin-bottom: 1rem;
        }

        .card-footer {
            background-color: #f8f9fa;
            border-bottom-left-radius: 1rem;
            border-bottom-right-radius: 1rem;
        }

        .btn-outline-primary {
            font-size: 1.1em;
            padding: 0.75rem 1.5rem;
        }
    </style>
</main>
@endsection
