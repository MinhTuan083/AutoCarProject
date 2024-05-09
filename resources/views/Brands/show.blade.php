@extends('dashboard')

@section('content')
    <main class="read-brand">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card" style="border: 1px solid black">
                    <h3 class="card-header text-center">Read Brand</h3>
                    <div class="card-body">
                        @if($brand)
                            <div class="row">
                                <div class="col-4">
                                    <img src="/./images/{{ $brand->logo }}" width="400">
                                </div>
                                <div class="col-8">
                                    <p>Name: {{ $brand->name }}</p>
                                    <p>Country: {{ $brand->country }}</p>
                                    <p>Founded Year: {{ $brand->founded_year }}</p>
                                    <p>Description: {{ $brand->description }}</p>
                                </div>
                            </div>
                        @else
                            <p>Brand not found</p>
                        @endif
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
