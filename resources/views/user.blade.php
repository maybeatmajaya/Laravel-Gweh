<!DOCTYPE html>
<html lang="en">
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
        }
        .admin { background-color: #ffcccb; }
        .editor { background-color: #ffeb99; }
        .user { background-color: #d1e7dd; }
        .status { font-weight: bold; }
    </style>
</head>
<body>

    <h2>Welcome to User Panel</h2>

    {{-- Tampilkan panel sesuai role user --}}
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
    @endif

    {{-- Tampilkan status pesanan --}}
    <h3>Status Pesanan:</h3>
    @switch($status)
        @case('pending')
            <p class="status">🚀 Pesanan Anda sedang diproses.</p>
            @break
        @case('completed')
            <p class="status">✅ Pesanan Anda telah selesai.</p>
            @break
        @default
            <p class="status">❓ Status pesanan tidak diketahui.</p>
    @endswitch

</body>
</html>
