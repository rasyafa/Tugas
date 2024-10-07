<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Tambah Pengguna</title>
</head>
<body>
    <h1>Tambah Pengguna</h1>
    <form action="/pengguna/store" method="POST">
        @csrf
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="alamat_ktp">Alamat KTP:</label>
            <input type="text" id="alamat_ktp" name="alamat_ktp" required>
        </div>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
