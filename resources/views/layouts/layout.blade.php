<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title> <!-- Bagian yang bisa diisi oleh halaman lain -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Tambahkan CSS jika diperlukan -->
    @stack('styles')
</head>
<body>
    <header>
        <h1>My Website</h1>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content') <!-- Bagian ini akan diisi oleh halaman lain -->
    </main>
        @stack('scripts')
    <footer>
        <p>&copy; 2025 My Website</p>
    </footer>
</body>
</html>









    {{-- <!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')
</body>
</html> --}}
