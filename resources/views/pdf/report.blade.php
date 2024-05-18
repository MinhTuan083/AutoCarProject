<!DOCTYPE html>
<html>

<head>
    <title>Invoice</title>
    <style>
        /* Add CSS to style the invoice */
        body {
            font-family: DejaVu Sans, sans-serif;
        }

        css Copy code .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <h2>Invoice</h2>
                            </td>
                            <td>
                                Date: {{ date('d/m/Y') }}<br>
                                Invoice #: N/A <!-- Not using $hoaDon->id variable anymore -->
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                {{ $name }}<br>
                                {{ $address }}<br>
                                {{ $email }}<br>
                                {{ $phone }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="heading">
                <td>Product</td>
                <td>Price</td>
            </tr>
            @foreach ($cart as $item)
            <tr class="item">
                <td>{{ $item['name'] }} x {{ $item['quantity'] }}</td>
                <td>{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }} VND</td>
            </tr>
            @endforeach
            <tr class="total">
                <td></td>
                <td>Total: N/A <!-- Not using $hoaDon->totalPrice variable anymore --></td>
            </tr>
        </table>
    </div>
</body>

</html>