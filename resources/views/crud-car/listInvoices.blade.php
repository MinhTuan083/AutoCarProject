@extends('dashboard')

@section('content')
<div class="container">
    <h2>Danh sách hóa đơn</h2>
   
    <table class="table mt-3">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Email</th>
            <th>Total Price</th>
            <th>Total Quantity</th>
            <th>Action</th>
        </tr>
        @foreach($invoices as $invoice)
        <tr>
            <td>{{ $invoice->name }}</td>
            <td>{{ $invoice->phone }}</td>
            <td>{{ $invoice->address }}</td>
            <td>{{ $invoice->email }}</td>
            <td>{{ $invoice->total_price }}</td>
            <td>{{ $invoice->total_quantity }}</td>
            <td>
                <form action="{{ route('delete.invoice', $invoice->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa hóa đơn này không?')">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection