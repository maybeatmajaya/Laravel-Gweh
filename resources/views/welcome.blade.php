@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')
    <section class="hero rounded-lg text-white p-12 text-center mb-8 shadow-xl">
        <h2 class="text-4xl font-bold mb-4">SELAMAT DATANG</h2>
        <p class="text-xl opacity-90">Tampilan <span class="font-bold">RED & BLACK</span> yang powerful!</p>
    </section>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Card 1 (Hitam dengan aksen merah) -->
        <div class="bg-black p-6 rounded-lg shadow-md text-white">
            <h3 class="text-xl font-semibold mb-4 text-red-500">🔥 FITUR UTAMA</h3>
            <ul class="space-y-3">
                <li class="flex items-center">
                    <span class="bg-red-500 w-2 h-2 mr-2 rounded-full"></span>
                    Performa Level Max
                </li>
                <li class="flex items-center">
                    <span class="bg-red-500 w-2 h-2 mr-2 rounded-full"></span>
                    Desain Brutal
                </li>
                <li class="flex items-center">
                    <span class="bg-red-500 w-2 h-2 mr-2 rounded-full"></span>
                    Keamanan Elite
                </li>
            </ul>
        </div>

        <!-- Card 2 (Merah dengan aksen hitam) -->
        <div class="bg-red-600 p-6 rounded-lg shadow-md text-white">
            <h3 class="text-xl font-semibold mb-4 text-black">🚀 ACTION</h3>
            <a href="/login" class="inline-block bg-black text-red-500 px-6 py-2 rounded-md font-bold hover:bg-gray-900 transition">
                GET STARTED
            </a>
        </div>
    </div>
@endsection
