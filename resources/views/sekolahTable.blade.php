<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Siswa dan Ekstrakulikuler</title>
</head>
<body>
    <h1>Daftar Siswa dan Ekstrakulikuler</h1>

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Nama Siswa</th>
                <th>Ekstrakulikuler yang di ikuti</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $siswa)
                <tr>
                    <td>{{ $siswa->nama }}</td>
                    <td>
                        <ul>
                            @if($siswa->extra->isNotEmpty())
                                @foreach($siswa->extra as $extra)
                                    <li>{{ $extra->nama }} - {{ $extra->jadwal }}</li>
                                @endforeach
                            @else
                            <li>Tidak mengikuti ekstrakurikuler</li>
                            @endif
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
