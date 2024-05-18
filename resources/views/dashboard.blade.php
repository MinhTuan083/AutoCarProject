<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Dealership</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #343a40;
            /* Background color */
        }

        .navbar-brand {
            color: #ffffff;
            /* Text color */
            font-size: 1.5rem;
            /* Font size */
        }

        .navbar-nav .nav-link {
            color: #ffffff !important;
            /* Text color */
            font-weight: 600;
            /* Font weight */
            margin-left: 20px;
            /* Spacing between items */
        }

        .navbar-nav .nav-link:hover {
            color: #ffc107 !important;
            /* Hover text color */
        }

        .navbar-nav .nav-item:last-child .nav-link {
            margin-right: 0;
            /* Remove right margin from the last item */
        }

        .navbar-toggler {
            border-color: #ffffff;
            /* Toggler border color */
        }

        .navbar-toggler-icon {
            background-color: #ffffff;
            /* Toggler icon color */
        }

        .footer {
            background-color: #343a40;
            /* Background color */
            color: #ffffff;
            /* Text color */
            text-align: center;
            /* Center align content */
            padding: 20px 0;
            /* Padding */
        }

        .carousel-item img {
            object-fit: cover;
        }

        .navbar-logo {
            height: 40px;
            /* Adjust the height as needed */
            margin-right: 10px;
            /* Space between the logo and the text */
        }

      
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <img src="{{ asset('banner/logo.png') }}" alt="Logo" class="navbar-logo">
                TPTQ AUTOCAR
            </a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                            <li><a class="dropdown-item" href="{{ route('addbrand') }}">Add New Brand</a></li>
                            <li><a class="dropdown-item" href="{{ route('addcartype') }}">Add New CarTypes</a></li>
                            <li><a class="dropdown-item" href="{{ route('listcar') }}">List Cars</a></li>
                            <li><a class="dropdown-item" href="{{ route('listbrand') }}">List Brands</a></li>
                            <li><a class="dropdown-item" href="{{ route('view') }}">List CarTypes</a></li>
                            <li><a class="dropdown-item" href="{{ route('view.invoices') }}">List Invoices</a></li>
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
                            <li><a class="dropdown-item" href="{{ route('employees.create') }}">Add Employee</a></li>
                            <li><a class="dropdown-item" href="{{ route('viewEmp') }}">List Employee</a></li>
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
            height: 100%;
            /* Đặt chiều cao của thẻ card */
        }

        .card-img-top {
            height: 200px;
            /* Đặt chiều cao của hình ảnh */
            object-fit: cover;
            /* Đảm bảo hình ảnh không bị bóp méo */
        }

        .card-body {
            height: 100%;
            /* Sử dụng chiều cao còn lại của thẻ card */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            /* Căn giữa nội dung trong card */
        }

        .card-title {
            margin-top: 15px;
            /* Điều chỉnh khoảng cách dưới tiêu đề */
        }




        .card-text {
            margin-bottom: 10px;
            /* Loại bỏ khoảng cách trên nội dung của thẻ card */
        }

        /* Đảm bảo rằng các nút chuyển đổi của carousel hiển thị trên cùng */
        .carousel-control-prev,
        .carousel-control-next {
            z-index: 1;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 50px;
            /* Đặt chiều rộng */
            height: 50px;
            /* Đặt chiều cao */
            top: 50%;
            /* Đặt ở giữa theo chiều dọc */
            position: absolute;
            /* Vị trí tuyệt đối */
            transform: translateY(-50%);
            /* Dịch chuyển lên trên 50% chiều cao */
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
    <!--banner qc-->
    <h1 style="text-align: center; margin-top: 200px; margin-bottom: 50px;">Promotion</h1>
    <div class="container">
        <div class="banner">
            <h2>Saigon Car Prices and Promotions</h2>
            <img src="{{ asset('banner/banner.jpg') }}" alt="Banner 1">
            <p>Don't miss the golden opportunity to own some great Kia Saigon cars this month! Special program with great deals, quick registration, instant cash receipt, attractive insurance, high-quality accessories and valuable gifts await you! Hurry, the quantity is limited! <a href="#">View details</a></p>
        </div>
        <div class="banner">
            <h2>INSTALLMENT CARS</h2>
            <img src="{{ asset('banner/banner1.jpg') }}" alt="Banner 2">
            <p>Experience perfection and convenience every time you buy a car in Ho Chi Minh City. Ho Chi Minh City with a special Kia car loan program this month! Competitive interest rates, attractive incentives, and valuable gifts will be the perfect choice for you. Don't miss this opportunity with many exclusive offers awaiting. <a href="#">View details</a> </p>
        </div>

    </div>
    <!--  -->
    <h3 class="popular-news-title">Popular News</h3>
    <div class="row justify-content-center">
        <div class="col-md-2 news-card first-card" style="width: 200px; height: 150px;">
            <h5>17 October, 2022</h5>
            <p><strong>Specifications KD Hotline 24/7 0904 327 517 "Please make sure you call me before</strong></p>
            <a href="#" class="btn btn-read-more">View More</a>
        </div>
        <div class="col-md-2 news-card mx-3">
            <img src="{{ asset('banner/qc_2.jpg') }}" class="news-image" alt="Car 1">
            <h3>THINGS TO KNOW V....</h3>
            <p><strong>Automatic toll collection is a new and convenient form in Vietnam. This form was and</strong></p>
            <a href="#" class="btn btn-read-more">View More</a>
        </div>
        <div class="col-md-2 news-card mx-3">
            <img src="{{ asset('banner/qc_3.jpg') }}" class="news-image" alt="Car 1">
            <h3>NEED MAINTENANCE OF THESE PARTS...</h3>
            <p><strong>Routine maintenance of 10,000 km is an important time to ensure that cars are always running</strong></p>
            <a href="#" class="btn btn-read-more">View More</a>
        </div>
        <div class="col-md-2 news-card mx-3">
            <img src="{{ asset('banner/qc_4.jpg') }}" class="news-image" alt="Car 1">
            <h3>THE DRIVER'S HABITS HARM L...</h3>
            <p><strong>Tires are parts that drivers often don't care about. And seemingly endless habits</strong></p>
            <a href="#" class="btn btn-read-more">View More</a>
        </div>
    </div>
    <!--css cho banner  -->
    <style>
        .container {
            display: flex;
            justify-content: space-between;
        }

        .banner {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin-right: 20px;
        }

        .banner img {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        .banner h2 {
            text-align: left;

        }

        .banner p {
            font-size: 1.2em;
            /* Điều chỉnh kích thước chữ tại đây */
            text-align: left;
            font-weight: bold;
            opacity: 0.7;
        }

        .popular-news-title {
            text-align: center;
            margin-top: 200px;
            left: 45%;
            margin-bottom: 40px;
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
        }

        .popular-news-title::after {
            content: "";
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: 0;
            width: 60px;
            height: 4px;
            background-color: #000;
            border-radius: 2px;
        }

        .news-card {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15), 0 1px 3px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px 0;
            border-radius: 5px;
            background-color: #fff;
            transition: box-shadow 0.3s ease;
            min-height: 220px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .news-card img.news-image {
            width: calc(100% + 40px);
            /* Đảm bảo hình ảnh rộng hơn thẻ để có khoảng cách với viền */
            height: auto;
            margin: -20px 0 15px -20px;
            /* Điều chỉnh khoảng cách để hình ảnh không dính sát vào viền */
            border-radius: 5px 5px 0 0;
        }

        .news-card h3,
        .news-card h5 {
            margin-top: 0;
        }

        .news-card p {
            font-size: 14px;
            color: #555;
        }

        .news-card .btn-read-more {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background-color: white;
            color: black;
            text-decoration: none;
            border: 3px solid black;
            border-radius: 2px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .news-card .btn-read-more:hover {
            background-color: black;
            color: white;
        }

        .news-card:hover {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2), 0 1px 3px rgba(0, 0, 0, 0.1);
        }
    </style>

    <!--  -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <!-- About Section -->
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <p>We are a trusted car dealership offering a wide range of vehicles to meet your needs and
                        preferences.</p>
                </div>
                <!-- Quick Links Section -->
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('dashboard') }}" class="text-white">Home</a></li>
                        <li><a href="#" class="text-white">About Us</a></li>
                        <li><a href="#" class="text-white">Inventory</a></li>
                        <li><a href="#" class="text-white">Services</a></li>
                        <li><a href="#" class="text-white">Contact Us</a></li>
                    </ul>
                </div>
                <!-- Contact Information Section -->
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt-fill"></i> 123 Main Street, Hanoi, Vietnam</li>
                        <li><i class="bi bi-telephone-fill"></i> +84 123 456 789</li>
                        <li><i class="bi bi-envelope-fill"></i> info@cardealership.com</li>
                    </ul>
                    <!-- Social Media Icons -->
                    <div class="social-icons">
                        <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white me-2"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <!--thiet ke nut cuon len man hinh-->
            <button id="scrollToTopBtn" class="scrollToTopBtn">
                <i class="bi bi-arrow-up-circle"></i>
            </button>
            <div class="text-center mt-3">
                <p>&copy; 2024 Car Dealership. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <style>
        footer {
            background-color: #343a40;
            color: #fff;
            padding: 40px 0;
        }

        footer h5 {
            margin-bottom: 20px;
            font-weight: bold;
        }

        footer p {
            margin-bottom: 10px;
        }

        footer ul {
            padding-left: 0;
            list-style-type: none;
        }

        footer ul li {
            margin-bottom: 10px;
        }

        footer ul li a {
            color: #fff;
            text-decoration: none;
        }

        footer ul li a:hover {
            text-decoration: underline;
        }

        footer .social-icons {
            margin-top: 20px;
        }

        footer .social-icons a {
            font-size: 1.5rem;
            margin-right: 15px;
            color: #fff;
            transition: color 0.3s;
        }

        footer .social-icons a:hover {
            color: #007bff;
        }

        footer .text-center {
            margin-top: 30px;
        }

        /* css nut cuon trang chu */
        .scrollToTopBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            display: none;
            /* Ẩn nút ban đầu */
            align-items: center;
            justify-content: center;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            z-index: 1000;
        }

        .scrollToTopBtn i {
            font-size: 30px;
        }

        .scrollToTopBtn:hover {
            background-color: #0056b3;
        }
    </style>
    @endif

    @yield('content')
    <!-- viet su kien cho nut cuon trang chu -->
    <script>
        // Hiển thị nút khi người dùng cuộn xuống 100px từ đầu trang
        window.onscroll = function() {
            const scrollToTopBtn = document.getElementById("scrollToTopBtn");
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                scrollToTopBtn.style.display = "flex";
            } else {
                scrollToTopBtn.style.display = "none";
            }
        };

        // Cuộn lên đầu trang khi người dùng nhấn vào nút
        document.getElementById("scrollToTopBtn").onclick = function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        };
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
</body>

</html>