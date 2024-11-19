<!DOCTYPE html>
<html>

<head>
    <title>Export Products</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }
    </style>
</head>

<body>
    <h1>Daftar Produk</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Unit</th>
                <th>Type</th>
                <th>information</th>
                <th>qty</th>
                <th>producer</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->unit }}</td>
                    <td>{{ $product->type }}</td>
                    <td>{{ $product->information }}</td>
                    <td>{{ $product->qty }}</td>
                    <td>{{ $product->producer }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
