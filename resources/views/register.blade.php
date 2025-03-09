<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#06c1db">
    <title>Registrasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .error {
            color: red;
            font-size: 12px;
            margin-top: -10px;
            margin-bottom: 10px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background: #218838;
        }
    </style>
    <script>
        function confirmSubmit(event) {
            event.preventDefault();
            if (confirm("Apakah anda yakin data sudah benar?")) {
                event.target.submit();
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Registrasi</h2>

        @if(session('success'))
            <p style="color: green; text-align: center;">{{ session('success') }}</p>
        @endif

        <form action="{{ url('/register') }}" method="POST" onsubmit="confirmSubmit(event)">
            @csrf

            <label>Username:</label>
            <input type="text" name="username" value="{{ old('username') }}">
            @error('username') <p class="error">{{ $message }}</p> @enderror

            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email') <p class="error">{{ $message }}</p> @enderror

            <label>Password:</label>
            <input type="password" name="password">
            @error('password') <p class="error">{{ $message }}</p> @enderror

            <label>Nama Lengkap:</label>
            <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}">
            @error('nama_lengkap') <p class="error">{{ $message }}</p> @enderror

            <label>Alamat:</label>
            <input type="text" name="alamat" value="{{ old('alamat') }}">
            @error('alamat') <p class="error">{{ $message }}</p> @enderror

            <label>Gaji Pokok:</label>
            <input type="number" name="gaji_pokok" value="{{ old('gaji_pokok') }}">
            @error('gaji_pokok') <p class="error">{{ $message }}</p> @enderror

            <label>Potongan:</label>
            <input type="number" name="potongan" value="{{ old('potongan') }}">
            @error('potongan') <p class="error">{{ $message }}</p> @enderror

            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>
