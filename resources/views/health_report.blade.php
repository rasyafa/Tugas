<!DOCTYPE html>
<html>

<head>
    <title>{{$title}}</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h2>{{ $title }}</h2>
        <p>Tanggal: {{ $date }}</p>
    </div>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Pasien</th>
                <th>Keluhan</th>
                <th>Diagnosis</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($patients as $patient)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $patient->name }}</td>
                <td>{{ $patient->complaint }}</td>
                <td>{{ $patient->diagnosis }}</td>
                <td>{{ $patient->action }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
