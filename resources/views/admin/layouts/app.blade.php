<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dasbor') - Lasvara Decor ID</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .sidebar-nav a {
            transition: all 0.3s ease;
        }
        .sidebar-nav a.active {
            background-color: rgba(16, 185, 129, 0.2);
            border-left: 4px solid #10b981;
            padding-left: 20px;
        }
        .sidebar-nav a:hover {
            background-color: rgba(75, 85, 99, 0.5);
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gradient-to-b from-gray-900 to-gray-800 text-white fixed h-screen overflow-y-auto shadow-xl">
            <!-- Logo -->
            <div class="p-6 border-b border-gray-700">
                <h1 class="text-2xl font-bold text-emerald-400">◆ Emeraude</h1>
                <p class="text-xs text-gray-400 mt-1">Admin Dashboard</p>
            </div>

            <!-- Navigation -->
            <nav class="mt-6 sidebar-nav">
                <a href="{{ route('admin.dashboard') }}" class="block py-3 px-6 text-gray-200 hover:bg-gray-700 {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <span class="inline-block mr-3">📊</span> Dasbor
                </a>
                <a href="{{ route('admin.products.index') }}" class="block py-3 px-6 text-gray-200 hover:bg-gray-700 {{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
                    <span class="inline-block mr-3">📦</span> Produk
                </a>
                <a href="{{ route('admin.categories.index') }}" class="block py-3 px-6 text-gray-200 hover:bg-gray-700 {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
                    <span class="inline-block mr-3">📂</span> Kategori
                </a>
                <a href="{{ route('admin.orders.index') }}" class="block py-3 px-6 text-gray-200 hover:bg-gray-700 {{ request()->routeIs('admin.orders.*') ? 'active' : '' }}">
                    <span class="inline-block mr-3">🛒</span> Pesanan
                </a>
                <a href="{{ route('admin.discounts.index') }}" class="block py-3 px-6 text-gray-200 hover:bg-gray-700 {{ request()->routeIs('admin.discounts.*') ? 'active' : '' }}">
                    <span class="inline-block mr-3">🎁</span> Diskon
                </a>
                <a href="{{ route('admin.users.index') }}" class="block py-3 px-6 text-gray-200 hover:bg-gray-700 {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                    <span class="inline-block mr-3">👥</span> Pengguna
                </a>
                
                <div class="border-t border-gray-700 my-4"></div>
                
                <a href="{{ route('home') }}" class="block py-3 px-6 text-gray-200 hover:bg-gray-700">
                    <span class="inline-block mr-3">🏪</span> Lihat Toko
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="ml-64 flex-1 flex flex-col">
            <!-- Top Header -->
            <header class="bg-white border-b border-gray-200 shadow-sm sticky top-0 z-10">
                <div class="flex justify-between items-center px-8 py-4">
                    <h2 class="text-2xl font-bold text-gray-800">@yield('title', 'Dasbor')</h2>
                    <div class="flex items-center gap-4">
                        <span class="text-gray-600 text-sm">{{ auth()->user()->name ?? 'Admin' }}</span>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="ml-4 px-4 py-2 bg-red-500 text-white text-sm rounded-lg hover:bg-red-600 transition">
                                Keluar
                            </button>
                        </form>
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-auto p-8">
                @if ($errors->any())
                    <div class="mb-4 bg-red-50 border border-red-200 rounded-lg p-4">
                        <h3 class="text-red-800 font-semibold">Terjadi Kesalahan:</h3>
                        <ul class="text-red-700 text-sm mt-2">
                            @foreach ($errors->all() as $error)
                                <li>• {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('error'))
                    <div class="mb-4 bg-red-50 border border-red-200 rounded-lg p-4 flex justify-between items-center">
                        <span class="text-red-800">{{ session('error') }}</span>
                        <button onclick="this.parentElement.style.display='none'" class="text-red-600 hover:text-red-800">✕</button>
                    </div>
                @endif

                @if (session('success'))
                    <div class="mb-4 bg-green-50 border border-green-200 rounded-lg p-4 flex justify-between items-center">
                        <span class="text-green-800">{{ session('success') }}</span>
                        <button onclick="this.parentElement.style.display='none'" class="text-green-600 hover:text-green-800">✕</button>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    <script>
        // Auto-hide success messages after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const successAlert = document.querySelector('[role="alert"]');
            if (successAlert) {
                setTimeout(() => {
                    successAlert.style.display = 'none';
                }, 5000);
            }
        });
    </script>
</body>
</html>