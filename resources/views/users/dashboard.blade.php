@extends('layouts.app')

@section('content')
<div class="flex min-h-screen bg-gray-100 text-gray-800">

    <!-- Sidebar Kiri (Modern) -->
    <aside class="w-64 bg-white shadow-xl border-r border-gray-200">
        <div class="flex items-center justify-center h-16 border-b">
            <span class="text-xl font-bold text-indigo-600">📘 Mutaqqien Edu</span>
        </div>
        <nav class="p-4 space-y-2">
            <a href="{{ route('user.dashboard') }}" class="flex items-center p-3 rounded-lg hover:bg-indigo-100 transition">
                <i class="fas fa-chart-line text-indigo-600 mr-3"></i>
                <span class="font-medium">Dashboard</span>
            </a>
            <a href="{{ route('user.santri') }}" class="flex items-center p-3 rounded-lg hover:bg-indigo-100 transition">
                <i class="fas fa-user-graduate text-indigo-600 mr-3"></i>
                <span class="font-medium">Data Santri</span>
            </a>
            <a href="{{ route('user.wali') }}" class="flex items-center p-3 rounded-lg hover:bg-indigo-100 transition">
                <i class="fas fa-users text-indigo-600 mr-3"></i>
                <span class="font-medium">Data Wali</span>
            </a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="flex items-center p-3 text-red-600 hover:bg-red-100 rounded-lg transition">
                <i class="fas fa-sign-out-alt mr-3"></i>
                <span class="font-medium">Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        </nav>
    </aside>

    <!-- Konten Dashboard -->
    <main class="flex-1 p-8">
        <h1 class="text-3xl font-bold mb-2">Selamat Datang, Operator Unit!</h1>
        <p class="text-gray-600 mb-6">Anda sedang mengakses sistem informasi santri <strong>Mutaqqien Edu System</strong>.</p>

        <!-- Kartu Statistik -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white rounded-xl shadow p-6 border-l-4 border-blue-500">
                <h2 class="text-lg text-gray-600">Total Santri di Unit</h2>
                <p class="text-4xl font-bold text-blue-600 mt-2">45</p>
            </div>
            <div class="bg-white rounded-xl shadow p-6 border-l-4 border-green-500">
                <h2 class="text-lg text-gray-600">Total Wali di Unit</h2>
                <p class="text-4xl font-bold text-green-600 mt-2">40</p>
            </div>
        </div>
    </main>
</div>
@endsection
