<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            {{-- Looping untuk setiap atribut yang ada di produk pertama --}}
            {{-- Ini untuk membuat header tabel berdasarkan atribut produk --}}
            @foreach ($Products->first()->getAttributes() as $key => $value)
            {{-- $key adalah nama atribut, misalnya "nama" atau "harga" --}}
            <th>{{ $key }}</th>
            @endforeach
        </tr>
        {{-- Looping untuk setiap produk yang ada --}}
        @foreach ($Products as $Product)
        <tr>
            {{-- Looping untuk setiap atribut yang ada di produk --}}
            @foreach ($Product->getAttributes() as $key => $value)
            {{-- $value adalah isi dari atribut, misalnya "Laptop" atau "1000000" --}}
            <td>{{ $value }}</td>
            @endforeach
        </tr>
        @endforeach
    </table>
</body>

</html>
