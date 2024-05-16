@extends('dashboard')

@section('content')
<div class="container">
    <h2>Chỉnh sửa thông tin loại xe</h2>
    <form action="{{ route('update', $carType->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Tên:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $carType->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Mô tả:</label>
            <textarea class="form-control" id="description" name="description">{{ $carType->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Hình ảnh:</label>
            <input type="file" class="form-control-file" id="image" name="image">
            @if($carType->image)
            <img src="{{ asset('storage/' . $carType->image) }}" alt="Ảnh xe" style="max-width: 200px;">
            @else
            <p>Không có hình ảnh</p>
            @endif
        </div>
        <div class="form-group">
            <label for="country">Quốc gia:</label>
            <select class="form-control" id="country" name="country" required>
                @foreach($countries as $country)
                <option value="{{ $country['name']['common'] }}">{{ $country['name']['common'] }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>
@endsection