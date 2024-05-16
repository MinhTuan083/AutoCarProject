@extends('dashboard')

@section('content')
    <div class="container">
        <h2>Danh sách loại xe</h2>
        <a href="{{ route('addcar') }}" class="btn btn-primary">Thêm loại xe mới</a>
        <table class="table mt-3">
            <thead>
            <tr>
                <th>Tên</th>
                <th>Mô tả</th>
                <th>Hình ảnh</th>
                <th>Country</th>
                <th>Tuy chon</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($carTypes as $carType)
                <tr>
                    <td>{{ $carType->name }}</td>
                    <td>{{ $carType->description }}</td>
                    <td>
                        @if($carType->image)
                            <img src="/./car_types/{{ $carType->image }}" alt="Ảnh xe" style="max-width: 100px;">
                        @else
                            N/A
                        @endif
                    </td>
                    <td>{{ $carType->country }}</td>
                    <td>
                        <a href="{{ route('edit', $carType->id) }}" class="btn btn-sm btn-primary">Sửa</a>
                        <form action="{{ route('deleteCar', $carType->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa loại xe này không?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            
            </tbody>
        </table>
    </div>
@endsection
