<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Produk</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f8f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            padding: 20px;
            background-color: #e3f2fd;
            color: #2196f3;
            margin-top: 0;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        th {
            background-color: #e0f7fa;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        button {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .edit-button {
            background-color: #2196f3;
            color: white;
        }

        .edit-button:hover {
            background-color: #1976d2;
        }

        .delete-button {
            background-color: #f44336;
            color: white;
        }

        .delete-button:hover {
            background-color: #d32f2f;
        }
    </style>
</head>

<body>
    <h2>Daftar Produk</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Products as $Product)
            <tr>
                <td>{{ $Product->nama_produk }}</td>
                <td>{{ $Product->harga }}</td>
                <td>{{ $Product->stok }}</td>
                <td>{{ $Product->deskripsi }}</td>
                <td>
                    <form action="/Products/{{ $Product->id }}/edit" method="GET">
                    <button type="submit" class="edit-button">Edit</button></form>
                <br>
                    <form action="/Products/{{ $Product->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
