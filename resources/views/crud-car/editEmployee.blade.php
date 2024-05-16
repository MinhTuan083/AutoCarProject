@extends('dashboard')

@section('content')
    <div class="container">
        <h2>Sửa thông tin nhân viên</h2>
        <form action="{{ route('employees.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Tên:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}" required>
                @if ($errors->has('name'))
                    <div class="text-danger">{{ $errors->first('name') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $employee->email }}" required>
                @if ($errors->has('email'))
                    <div class="text-danger">{{ $errors->first('email') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại:</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $employee->phone }}" required>
                @if ($errors->has('phone'))
                    <div class="text-danger">{{ $errors->first('phone') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="address">Địa chỉ:</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $employee->address }}">
                @if ($errors->has('address'))
                    <div class="text-danger">{{ $errors->first('address') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="sex">Giới tính:</label>
                <select class="form-control" id="sex" name="sex" required>
                    <option value="male" {{ $employee->sex == 'male' ? 'selected' : '' }}>Nam</option>
                    <option value="female" {{ $employee->sex == 'female' ? 'selected' : '' }}>Nữ</option>
                </select>
                @if ($errors->has('sex'))
                    <div class="text-danger">{{ $errors->first('sex') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" class="form-control" id="password" name="password">
                @if ($errors->has('password'))
                    <div class="text-danger">{{ $errors->first('password') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="password_confirmation">Xác nhận mật khẩu:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                @if ($errors->has('password_confirmation'))
                    <div class="text-danger">{{ $errors->first('password_confirmation') }}</div>
                @endif
            </div>
            
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
@endsection
