<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid #333;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background: #f4f4f4;
        }
    </style>
</head>
<body>
    <a href="{{ url('/product/create') }}" style="border: 2 px solid black; background-color:blue;color:white;padding:5px;">Create Product</a>
    <h1 style="text-align: center;">Product List Data</h1>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $mahfuz_product)
                <tr>
                    <td>{{ $mahfuz_product->title }}</td>
                    <td>{{ $mahfuz_product->quantity }}</td>
                    <td>{{ $mahfuz_product->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
