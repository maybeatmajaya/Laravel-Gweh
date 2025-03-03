<!-- resources/views/databuku/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data Buku</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #999;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Data Buku</h1>
    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Tanggal Pembelian</th>
                <th>Jumlah Exp</th>
                <th>Status</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($buku as $buku)
            <tr>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->pengarang }}</td>
                <td>{{ $buku->tgl_pembelian }}</td>
                <td>{{ $buku->jumlah_ex }}</td>
                <td>{{ $buku->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
