<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna</title>
</head>

<body>
    <h1>Daftar Pengguna</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat KTP</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengguna as $p)
            <tr>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->ktp->alamat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
