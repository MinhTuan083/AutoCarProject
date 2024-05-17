<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Dealership</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #343a40; /* Background color */
        }
        .navbar-brand {
            color: #ffffff; /* Text color */
            font-size: 1.5rem; /* Font size */
        }
        .navbar-nav .nav-link {
            color: #ffffff !important; /* Text color */
            font-weight: 600; /* Font weight */
            margin-left: 20px; /* Spacing between items */
        }
        .navbar-nav .nav-link:hover {
            color: #ffc107 !important; /* Hover text color */
        }
        .navbar-nav .nav-item:last-child .nav-link {
            margin-right: 0; /* Remove right margin from the last item */
        }
        .navbar-toggler {
            border-color: #ffffff; /* Toggler border color */
        }
        .navbar-toggler-icon {
            background-color: #ffffff; /* Toggler icon color */
        }
        .footer {
            background-color: #343a40; /* Background color */
            color: #ffffff; /* Text color */
            text-align: center; /* Center align content */
            padding: 20px 0; /* Padding */
        }
        .carousel-item img {
            object-fit: cover;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard') }}">Car Dealership</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Cars
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('addcar') }}">Add New Car</a></li>
                        <li><a class="dropdown-item" href="{{ route('listcar') }}">List Cars</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Brands
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('addbrand') }}">Add New Brand</a></li>
                        <li><a class="dropdown-item" href="{{ route('listbrand') }}">List Brands</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        CarTypes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('addcar') }}">Add New CarTypes</a></li>
                        <li><a class="dropdown-item" href="{{ route('view') }}">List CarTypes</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Employee
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('employees.create') }}">Add Employee</a></li>
                        <li><a class="dropdown-item" href="{{ route('viewEmp') }}">List Employee</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart.view') }}">Cart <span class="badge badge-pill badge-danger">{{ count(session('cart', [])) }}</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Chi Nhánh
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('register-CN') }}">Thêm chi nhánh</a></li>
                        <li><a class="dropdown-item" href="{{ route('CN.list') }}">Danh sách chi nhánh</a></li>
                    </ul>
                </li>
                @guest
                <li class="nav-item">
                   <a class="nav-link" href="{{ route('login') }}">ListUser</a>
                </li>
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown ten" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Users
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('user.list') }}">List User</a></li>
                        <li><a class="dropdown-item" href="{{ route('signout') }}">Sign out</a></li>
                    </ul>
                </li>
                @endguest
                

            </ul>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const dropdownMenus = document.querySelectorAll('.nav-item.dropdown');
                dropdownMenus.forEach(function(menu) {
                    menu.addEventListener('mouseover', function() {
                        this.querySelector('.dropdown-menu').classList.add('show');
                    });
                    menu.addEventListener('mouseleave', function() {
                        this.querySelector('.dropdown-menu').classList.remove('show');
                    });
                });
            });
        </script>
    </div>
</nav>


@if (Request::is('dashboard'))
    <div id="carouselBanner" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('banner/camry-Banner.jpg') }}" class="d-block w-100 h-100" alt="Car 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('banner/banner-stargazer.jpg') }}" class="d-block w-100 h-100" alt="Car 3">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('banner/banner_MMC.jpg') }}" class="d-block w-100 h-100" alt="Car 4">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanner" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselBanner" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!---->
    <h1 style="text-align: center; margin-top: 50px; margin-bottom: 50px;">EXPLORE CAR MODELS</h1>
<!---->
<div style="text-align: center;">
<img src="{{ asset('banner/toyota-camry-banner2.jpg') }}" class="d-block w-100 h-100" alt="Car 1">
</div>
<h3 style="text-align: center; margin-top: 20px; margin-bottom: 20px;">TOYOTA</h3>
<!--  -->
<div id="carouselCars1" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach($toyota_cars->chunk(5) as $chunk)
            <button type="button" data-bs-target="#carouselCars1" data-bs-slide-to="{{ $loop->index }}" class="@if($loop->first) active @endif" aria-current="true" aria-label="Slide {{ $loop->index }}" style="width: 10px; height: 10px;"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($toyota_cars->chunk(5) as $chunk)
            <div class="carousel-item @if($loop->first) active @endif">
                <div class="row row-cols-1 row-cols-md-5 g-4 mb-4">
                    @foreach($chunk as $car)
                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/' . $car->image) }}" class="card-img-top" alt="{{ $car->name }}">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $car->name }}</h5>
                                    <p class="card-text"><strong>Price:</strong> {{ number_format($car->price) }} VND</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="{{ route('cars.show', ['id' => $car->id]) }}" class="btn btn-primary btn-block">View Details</a>
                                        </div>
                                        <div class="col-md-6">
                                            <form method="POST" action="{{ route('cart.add', ['id' => $car->id]) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-block">Add to Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCars1" data-bs-slide="prev" style="background-color: red;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselCars1" data-bs-slide="next" style="background-color: red;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<style>
    .card {
        height: 100%; /* Đặt chiều cao của thẻ card */
    }

    .card-img-top {
        height: 200px; /* Đặt chiều cao của hình ảnh */
        object-fit: cover; /* Đảm bảo hình ảnh không bị bóp méo */
    }

    .card-body {
        height: 100%; /* Sử dụng chiều cao còn lại của thẻ card */
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* Căn giữa nội dung trong card */
    }

    .card-title {
        margin-top: 15px; /* Điều chỉnh khoảng cách dưới tiêu đề */
    }




    .card-text {
        margin-bottom: 10px; /* Loại bỏ khoảng cách trên nội dung của thẻ card */
    }

    /* Đảm bảo rằng các nút chuyển đổi của carousel hiển thị trên cùng */
    .carousel-control-prev,
    .carousel-control-next {
        z-index: 1;
    }
    .carousel-control-prev,
    .carousel-control-next {
        width: 50px; /* Đặt chiều rộng */
        height: 50px; /* Đặt chiều cao */
        top: 50%; /* Đặt ở giữa theo chiều dọc */
        position: absolute; /* Vị trí tuyệt đối */
        transform: translateY(-50%); /* Dịch chuyển lên trên 50% chiều cao */
    }
</style>
<!--  -->
<div style="text-align: center;">
<img src="{{ asset('banner/hyundai-banner.png') }}" class="d-block w-100 h-100 mt-5" alt="Car 1">
</div>
<h3 style="text-align: center; margin-top: 20px; margin-bottom: 20px;">HYUNDAI</h3>
<div id="carouselCars2" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach($hyundai_cars->chunk(5) as $chunk)
            <button type="button" data-bs-target="#carouselCars2" data-bs-slide-to="{{ $loop->index }}" class="@if($loop->first) active @endif" aria-current="true" aria-label="Slide {{ $loop->index }}" style="width: 10px; height: 10px;"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($hyundai_cars->chunk(5) as $chunk)
            <div class="carousel-item @if($loop->first) active @endif">
                <div class="row row-cols-1 row-cols-md-5 g-4 mb-4">
                    @foreach($chunk as $car)
                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/' . $car->image) }}" class="card-img-top" alt="{{ $car->name }}">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $car->name }}</h5>
                                    <p class="card-text"><strong>Price:</strong> {{ number_format($car->price) }} VND</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="{{ route('cars.show', ['id' => $car->id]) }}" class="btn btn-primary btn-block">View Details</a>
                                        </div>
                                        <div class="col-md-6">
                                            <form method="POST" action="{{ route('cart.add', ['id' => $car->id]) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-block">Add to Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCars2" data-bs-slide="prev" style="background-color: red;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselCars2" data-bs-slide="next" style="background-color: red;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!--  -->
<div style="text-align: center;">
<img src="{{ asset('banner/kia-banner.jpg') }}" class="d-block w-100 h-100 mt-5" alt="Car 1">
</div>
<h3 style="text-align: center; margin-top: 20px; margin-bottom: 20px;">KIA</h3>
<div id="carouselCars3" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach($kia_cars->chunk(5) as $chunk)
            <button type="button" data-bs-target="#carouselCars3" data-bs-slide-to="{{ $loop->index }}" class="@if($loop->first) active @endif" aria-current="true" aria-label="Slide {{ $loop->index }}" style="width: 10px; height: 10px;"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($kia_cars->chunk(5) as $chunk)
            <div class="carousel-item @if($loop->first) active @endif">
                <div class="row row-cols-1 row-cols-md-5 g-4 mb-4">
                    @foreach($chunk as $car)
                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/' . $car->image) }}" class="card-img-top" alt="{{ $car->name }}">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $car->name }}</h5>
                                    <p class="card-text"><strong>Price:</strong> {{ number_format($car->price) }} VND</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="{{ route('cars.show', ['id' => $car->id]) }}" class="btn btn-primary btn-block">View Details</a>
                                        </div>
                                        <div class="col-md-6">
                                            <form method="POST" action="{{ route('cart.add', ['id' => $car->id]) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-block">Add to Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCars3" data-bs-slide="prev" style="background-color: red;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselCars3" data-bs-slide="next" style="background-color: red;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!--  -->
<div style="text-align: center;">
<img src="{{ asset('banner/banner_mitsubishi2.jpg') }}" class="d-block w-100 h-100 mt-5" alt="Car 1">
</div>
<h3 style="text-align: center; margin-top: 20px; margin-bottom: 20px;">MITSUBISHI</h3>
<div id="carouselCars4" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach($mitsubishi_cars->chunk(5) as $chunk)
            <button type="button" data-bs-target="#carouselCars4" data-bs-slide-to="{{ $loop->index }}" class="@if($loop->first) active @endif" aria-current="true" aria-label="Slide {{ $loop->index }}" style="width: 10px; height: 10px;"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($mitsubishi_cars->chunk(5) as $chunk)
            <div class="carousel-item @if($loop->first) active @endif">
                <div class="row row-cols-1 row-cols-md-5 g-4 mb-4">
                    @foreach($chunk as $car)
                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/' . $car->image) }}" class="card-img-top" alt="{{ $car->name }}">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $car->name }}</h5>
                                    <p class="card-text"><strong>Price:</strong> {{ number_format($car->price) }} VND</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="{{ route('cars.show', ['id' => $car->id]) }}" class="btn btn-primary btn-block">View Details</a>
                                        </div>
                                        <div class="col-md-6">
                                            <form method="POST" action="{{ route('cart.add', ['id' => $car->id]) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-block">Add to Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCars4" data-bs-slide="prev" style="background-color: red;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselCars4" data-bs-slide="next" style="background-color: red;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!--  -->
<div style="text-align: center;">
<img src="{{ asset('banner/banner-nissan.jpg') }}" class="d-block w-100 h-100 mt-5" alt="Car 1">
</div>
<h3 style="text-align: center; margin-top: 20px; margin-bottom: 20px;">NISSAN</h3>
<div id="carouselCars5" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach($nissan_cars->chunk(5) as $chunk)
            <button type="button" data-bs-target="#carouselCars5" data-bs-slide-to="{{ $loop->index }}" class="@if($loop->first) active @endif" aria-current="true" aria-label="Slide {{ $loop->index }}" style="width: 10px; height: 10px;"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($nissan_cars->chunk(5) as $chunk)
            <div class="carousel-item @if($loop->first) active @endif">
                <div class="row row-cols-1 row-cols-md-5 g-4 mb-4">
                    @foreach($chunk as $car)
                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/' . $car->image) }}" class="card-img-top" alt="{{ $car->name }}">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $car->name }}</h5>
                                    <p class="card-text"><strong>Price:</strong> {{ number_format($car->price) }} VND</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="{{ route('cars.show', ['id' => $car->id]) }}" class="btn btn-primary btn-block">View Details</a>
                                        </div>
                                        <div class="col-md-6">
                                            <form method="POST" action="{{ route('cart.add', ['id' => $car->id]) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-block">Add to Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCars5" data-bs-slide="prev" style="background-color: red;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselCars5" data-bs-slide="next" style="background-color: red;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endif

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
</body>
</html>
