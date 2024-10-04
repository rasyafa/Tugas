<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Product</title>
</head>
<body>
    <h1>Tambah produk baru</h1>

    @if ($errors->any())
    <p style="color: red;">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    </p>
    @endif

    <form action="/create" method="POST">
        @csrf
        <label for="nama_produk">Nama Produk</label>
        <input type="text" name="nama_produk" id="nama_produk" value="{{ old('nama_produk') }}" required><br><br>

        <label for="harga">Harga Produk</label>
        <input type="number" name="harga" id="harga" value="{{ old('harga') }}" required min="0"><br><br>

        <label for="stok">Stok Produk</label>
        <input type="number" name="stok" id="stok" value="{{ old('stok') }}" required min="0"><br><br>

        <label for="deskripsi">Deskripsi Produk</label>
        <textarea name="deskripsi" id="deskripsi">{{ old('deskripsi') }}</textarea><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
