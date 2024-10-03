<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Produk</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f5f5;
        }

        h2 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bold;
        }

        .table-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        .table th {
            background-color: #495057;
            color: #fff;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f3f5;
        }

        .btn-edit {
            background-color: #17a2b8;
            color: #fff;
        }

        .btn-edit:hover {
            background-color: #138496;
        }

        .btn-delete {
            background-color: #e74c3c;
            color: #fff;
        }

        .btn-delete:hover {
            background-color: #c0392b;
        }

        .pagination {
            margin-top: 20px;
            justify-content: center;
        }
    </style>
</head>

<body>

    <div class="container my-5">
        <h2 class="text-center text-dark py-3">Daftar Produk</h2>
        <div class="table-container">
            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Products as $index => $Product)
                        <tr>
                            <th scope="row">{{ $index + $Products->firstItem() }}</th>
                            <td>{{ $Product->nama_produk }}</td>
                            <td>{{ $Product->harga }}</td>
                            <td>{{ $Product->stok }}</td>
                            <td>{{ $Product->deskripsi }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <form action="/Products/{{ $Product->id }}/edit" method="GET">
                                        <button type="submit" class="btn btn-edit btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>
                                    </form>
                                    <form action="/Products/{{ $Product->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-delete btn-sm">
                                            <i class="fas fa-trash-alt"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                {{ $Products->links() }}
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
