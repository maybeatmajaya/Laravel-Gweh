<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Laravel 12</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #000000;
        }
        .hero {
            background: linear-gradient(135deg, #FF0000 0%, #990000 100%);
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Header Hitam -->
    <header class="bg-black shadow-lg">
        <div class="container mx-auto px-4 py-4">
            <h1 class="text-2xl font-bold text-red-500">LARAVEL 12</h1>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer Hitam -->
    <footer class="bg-black py-6 mt-12">
        <div class="container mx-auto px-4 text-center text-red-400">
            &copy; {{ date('Y') }} Power by Red & Black Design
        </div>
    </footer>
</body>
</html>
