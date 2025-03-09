<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }
        .panel {
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
        }
        .admin { background-color: #ffcccb; }
        .editor { background-color: #ffeb99; }
        .user { background-color: #d1e7dd; }
    </style>
</head>
<body>

    <h2>Selamat Datang di User Panel</h2>

    {{-- Cek apakah user tersedia --}}
    @if(isset($user))
        <div class="panel">
            <h3>Informasi Pengguna</h3>
            <p><strong>Username:</strong> {{ $user->username }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Nama Lengkap:</strong> {{ $user->nama_lengkap }}</p>
            <p><strong>Alamat:</strong> {{ $user->alamat ?? 'Tidak diisi' }}</p>
            <p><strong>Gaji Pokok:</strong> Rp{{ number_format($user->gaji_pokok, 2, ',', '.') }}</p>
            <p><strong>Potongan:</strong> Rp{{ number_format($user->potongan, 2, ',', '.') }}</p>
        </div>

        {{-- Panel berdasarkan role
        @if($user->role == 'admin')
            <div class="panel admin">
                <h3>Admin Panel</h3>
                <p>Anda memiliki akses penuh ke sistem.</p>
            </div>
        @elseif($user->role == 'editor')
            <div class="panel editor">
                <h3>Editor Panel</h3>
                <p>Anda dapat mengedit dan mengelola konten.</p>
            </div>
        @else
            <div class="panel user">
                <h3>User Panel</h3>
                <p>Selamat datang, pengguna biasa.</p>
            </div>
        @endif --}}

    @else
        <p>❌ Data user tidak ditemukan.</p>
    @endif

</body>
</html>
