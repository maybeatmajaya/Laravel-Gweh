<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laporan Pegawai</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
        }

        h2 {
            margin-bottom: 5px;
        }

        p {
            margin-top: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>{{ $title }}</h2>
    <p>Tanggal: {{ $tanggal }}</p>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jabatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawai as $index => $p)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $p['nama'] }}</td>
                    <td>{{ $p['jabatan'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
