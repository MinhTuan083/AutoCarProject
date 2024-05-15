<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        /* Style cho email */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Invoice</h2>

    <div>
        <h3>Customer Information:</h3>
        <p><strong>Tên:</strong> {{ $name }}</p>
        <p><strong>SĐT:</strong> {{ $phone }}</p>
        <p><strong>Địa Chỉ:</strong> {{ $address }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
    </div>

    <div>
        <h3>Thông tin sản phẩm:</h3>
        <table>
            <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>{{ number_format($item['price']) }} VND</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div>
        <p><strong>Tổng số lượng:</strong> {{ $totalQuantity }}</p>
        <p><strong>Thành tiền:</strong> {{ number_format($totalPrice) }} VND</p>
    </div>
</body>
</html>
