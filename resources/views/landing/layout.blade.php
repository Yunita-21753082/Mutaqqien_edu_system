<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Mutaqqien</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 text-gray-800">
    <!-- Navbar -->
    <nav class="bg-blue-900 text-white p-4 shadow-md flex justify-between items-center">
        <div class="flex items-center gap-2">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="h-10">
            <span class="text-lg font-bold">Pondok Pesantren</span>
        </div>
        <ul class="hidden md:flex space-x-6 text-sm font-semibold">
            <li><a href="{{ route('landing.home') }}" class="hover:text-yellow-300">Home</a></li>
            <li><a href="{{ route('landing.profil') }}" class="hover:text-yellow-300">Profil</a></li>
            <li><a href="{{ route('landing.kontak') }}" class="hover:text-yellow-300">Kontak</a></li>
            <li><a href="{{ route('login') }}" class="bg-white text-blue-900 px-4 py-1 rounded-full hover:bg-yellow-200">Login</a></li>
        </ul>
    </nav>

    <!-- Konten -->
    <main class="p-6">
        @yield('content')
    </main>
</body>
</html>
