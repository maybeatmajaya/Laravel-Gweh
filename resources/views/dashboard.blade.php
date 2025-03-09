<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pengguna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            margin: auto;
        }
        h2 {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background: #28a745;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Dashboard Pengguna</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Gaji Pokok</th>
                <th>Potongan</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->nama_lengkap }}</td>
                <td>{{ $user->alamat }}</td>
                <td>Rp {{ number_format($user->gaji_pokok, 0, ',', '.') }}</td>
                <td>Rp {{ number_format($user->potongan, 0, ',', '.') }}</td>
                {{-- <td>Rp {{ $user->gaji_pokok }}</td>
                <td>Rp {{ $user->potongan }}</td> --}}
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
