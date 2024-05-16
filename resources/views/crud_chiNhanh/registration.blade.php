@extends('dashboard')

@section('content')
<main class="signup-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Register User</h3>
                    <div class="card-body">
                    <form method="POST" action="{{ route('register.CN') }}" enctype="multipart/form-data"> <!-- thêm thuộc tính enctype để xử lý tệp -->
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                             <!-- Trường địa chỉ -->
                             <div class="form-group mb-3">
                                <input type="text" placeholder="Địa chỉ" id="diachi" class="form-control" name="diachi" required>
                                @if ($errors->has('diachi'))
                                    <span class="text-danger">{{ $errors->first('diachi') }}</span>
                                @endif
                            </div>
                             <!-- Trường mô tả -->
                             <div class="form-group mb-3">
                                <input type="text" placeholder="Mô tả" id="des" class="form-control" name="des" required>
                                @if ($errors->has('des'))
                                    <span class="text-danger">{{ $errors->first('des') }}</span>
                                @endif
                            </div>
                            <!-- Trường điện thoại -->
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Phone" id="phone" class="form-control" name="phone" required>
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>

                            <!-- Trường ảnh -->
                            <div class="form-group mb-3">
                                <label for="image">Choose profile image</label>
                                <input type="file" id="image" class="form-control" name="image" accept="image/*">
                                @if ($errors->has('image'))
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                            
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection