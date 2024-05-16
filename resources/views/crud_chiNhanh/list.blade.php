

@extends('dashboard')

@section('content')

    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                    <div class="card" style="border: 1px solid black">
                        <h3 class="card-header text-center">Danh sách chi nhánh</h3>
                        <div class="card-body">
                        <table style=" border-collapse: collapse;">
                    
                    <tr>
                        <td>ID</td>
                        <td>Image</td>
                        <td>Name</td>
                        <td>DiaChi</td>
                        <td>Phone</td>
                        <td>Mô tả</td>
                        <td>Action</td>
                    </tr>
                    <?php $i = 1 ;
                     ?>
                    @foreach($ChiNhanh as $user)
                        
                        <tr>
                            <th>{{ $i++ }}</th>
                            <th><img src=" /./storage/{{ $user->image }} " width="100px"></th>
                            <th>{{ $user->name }}</th>
                            <th>{{ $user->diachi }}</th>
                            <th>{{ $user->phone }}</th>
                            <th>{{ $user->des }}</th>
                            <th>
                               <button type="button"> <a href="{{ route('view.ChiNhanh', ['id' => $user->id]) }}">View</a> </button>
                                <button type="button"><a href="{{ route('edit.CN', ['id' => $user->id]) }}">Edit</a> </button>
                                <button type="button"><a href="{{ route('crud_CN.deleteCN', ['id' => $user->id]) }}" class="btn btn-danger btn-sm">Delete</a> </button>

                            </th>
                        </tr>
                    @endforeach
                
                        </table>
                       <div > 
                       {{ $ChiNhanh->render('vendor.pagination.custom') }}</div>
                        </div>
                    </div>
            <!-- Phan trang -->
           
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
