@if (session('message'))
    <script>
        window.onload = function() {
            alert('{{ Session::get('message') }}');
        }
    </script>
@endif

@extends('dashboard')

@section('content')

    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card" style="border: 1px solid black">
                    <h3 class="card-header text-center">List car</h3>
                    <div class="card-body">
                        <table style=" border-collapse: collapse;">

                            <tr>
                                <td>Name</td>
                                <td>Description</td>
                                <td>Image</td>
                            </tr>
                            <?php $i = 1 ;
                            ?>
                            @foreach($carTypes as $user)
                                <tr>
                                    <th>{{ $user->name }}</th>
                                    <th>{{ $user->description }}</th>
                                    <th><img src=" /./storage/{{ $user->image }} " width="100" ></th>

                                </tr>
                            @endforeach

                        </table>

                </div>
                <!-- Phan trang -->

            </div>
        </div>
        </div>
    </main>
    <style>
        table{
            border-collapse: collapse;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 20px;

        }
        td,th{
            border: 1px solid black;
            text-align: center;
            width: 10%;}
    </style>
@endsection
