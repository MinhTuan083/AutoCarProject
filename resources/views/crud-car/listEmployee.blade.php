
@extends('dashboard')

@section('content')
    <div class="container">
        <h2>Danh sách nhân viên</h2>
        <a href="{{ route('employees.create') }}" class="btn btn-primary">Thêm nhân viên mới</a>
        <table class="table mt-3">
            <thead>
            <tr>
                <th>Tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Giới tính</th>
               
                <th>Tùy chọn</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>{{ $employee->address }}</td>
                    
                    <td>{{ $employee->sex }}</td>


                   
                    <td>
                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-sm btn-primary">Sửa</a>
                        <form action="{{ route('deleteEmp', $employee->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa nhân viên này không?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
