@extends('dashboard')

@section('content')
<div class="container">
    <h2>Thêm loại xe mới</h2>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <form action="{{ route('carsstore') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Tên:</label>
            <input type="text" class="form-control" id="name" name="name" required>

            @error('description')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Mô tả:</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
            @error('description')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Hình ảnh:</label>
            <input type="file" class="form-control-file" id="image" name="image" required>
        </div>
        <div class="form-group">
            <label for="country">Quốc gia:</label>
            <select class="form-control" id="country" name="country" required>
                @foreach ($countries as $country)
                <option value="{{ $country['name']['common'] }}">{{ $country['name']['common'] }}</option>
                @endforeach
            </select>
            @if ($errors->has('country'))
            <div class="text-danger">{{ $errors->first('country') }}</div>
            @endif
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
    <br>
    <a href="{{ route('view') }}" class="btn btn-secondary">Quay lại danh sách loại xe</a>
</div>
@endsection