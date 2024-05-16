@extends('dashboard')

@section('content')
    <div class="container">
        <h2>Thêm loại xe mới</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Tên:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">Mô tả:</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Hình ảnh:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" class="form-control" id="country" name="country" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
        <br>
        <a href="{{ route('car-types.index') }}" class="btn btn-secondary">Quay lại danh sách loại xe</a>
    </div>
@endsection
