<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Dealership</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #343a40;
            /* Màu nền */
        }

        .navbar-brand {
            color: #ffffff;
            /* Màu chữ */
            font-size: 1.5rem;
            /* Kích thước chữ */
        }

        .navbar-nav .nav-link {
            color: #ffffff !important;
            /* Màu chữ */
            font-weight: 600;
            /* Độ đậm của chữ */
            margin-left: 20px;
            /* Khoảng cách giữa các mục */
        }

        .navbar-nav .nav-link:hover {
            color: #ffc107 !important;
            /* Màu chữ khi hover */
        }

        .navbar-nav .nav-item:last-child .nav-link {
            margin-right: 0;
            /* Loại bỏ khoảng cách bên phải của mục cuối cùng */
        }

        .navbar-toggler {
            border-color: #ffffff;
            /* Màu của biểu tượng mở rộng menu */
        }

        .navbar-toggler-icon {
            background-color: #ffffff;
            /* Màu của biểu tượng mở rộng menu */
        }

        .footer {
            background-color: #343a40;
            /* Màu nền */
            color: #ffffff;
            /* Màu chữ */
            text-align: center;
            /* Căn giữa nội dung */
            padding: 20px 0;
            /* Khoảng cách bên trong */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark mb-5">
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

    @yield('content')


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
</body>

</html>