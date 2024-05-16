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
                    <a class="nav-link" href="#">Home</a>
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
    <div id="carouselExampleIndicators" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
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
