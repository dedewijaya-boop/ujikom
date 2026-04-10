<!-- resources/views/admin/dashboard.blade.php -->
@extends('admin.layouts.app')

@section('title', 'Dasbor')

@section('content')
<div class="space-y-6">
    <!-- Welcome Banner -->
    <div class="bg-gradient-to-r from-emerald-500 to-emerald-600 rounded-xl shadow-lg p-8 text-white">
        <h2 class="text-3xl font-bold">Selamat Datang, {{ auth()->user()->name }}!</h2>
        <p class="text-emerald-100 mt-2">Kelola toko Anda dengan mudah dari sini</p>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Products Card -->
        <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-500 hover:shadow-lg transition">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-gray-600 text-sm font-medium">Total Produk</p>
                    <p class="text-3xl font-bold text-gray-900 mt-2">{{ $stats['products'] }}</p>
                </div>
                <div class="text-3xl">📦</div>
            </div>
            <a href="{{ route('admin.products.index') }}" class="text-blue-500 text-sm mt-4 inline-flex items-center hover:text-blue-700">
                Lihat produk → 
            </a>
        </div>

        <!-- Orders Card -->
        <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-yellow-500 hover:shadow-lg transition">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-gray-600 text-sm font-medium">Total Pesanan</p>
                    <p class="text-3xl font-bold text-gray-900 mt-2">{{ $stats['orders'] }}</p>
                </div>
                <div class="text-3xl">🛒</div>
            </div>
            <a href="{{ route('admin.orders.index') }}" class="text-yellow-500 text-sm mt-4 inline-flex items-center hover:text-yellow-700">
                Lihat pesanan → 
            </a>
        </div>

        <!-- Users Card -->
        <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-purple-500 hover:shadow-lg transition">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-gray-600 text-sm font-medium">Total Pengguna</p>
                    <p class="text-3xl font-bold text-gray-900 mt-2">{{ $stats['users'] }}</p>
                </div>
                <div class="text-3xl">👥</div>
            </div>
            <a href="{{ route('admin.users.index') }}" class="text-purple-500 text-sm mt-4 inline-flex items-center hover:text-purple-700">
                Lihat pengguna → 
            </a>
        </div>

        <!-- Revenue Card -->
        <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-green-500 hover:shadow-lg transition">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-gray-600 text-sm font-medium">Total Pendapatan</p>
                    <p class="text-3xl font-bold text-gray-900 mt-2">{{ rupiah($stats['revenue']) }}</p>
                </div>
                <div class="text-3xl">💰</div>
            </div>
            <a href="{{ route('admin.orders.index') }}" class="text-green-500 text-sm mt-4 inline-flex items-center hover:text-green-700">
                Detail → 
            </a>
        </div>
    </div>

    <!-- Recent Orders Section -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
            <div class="flex justify-between items-center">
                <h3 class="text-lg font-bold text-gray-900">Pesanan Terbaru</h3>
                <a href="{{ route('admin.orders.index') }}" class="text-emerald-600 hover:text-emerald-700 text-sm font-medium">
                    Lihat Semua →
                </a>
            </div>
        </div>

        @if($recentOrders->isEmpty())
            <div class="px-6 py-8 text-center text-gray-500">
                <p class="text-lg">Belum ada pesanan</p>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50 border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Order ID</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Pelanggan</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Total</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Tanggal</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($recentOrders as $order)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 text-sm font-medium text-gray-900">#{{ $order->id }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $order->user->name }}</td>
                            <td class="px-6 py-4 text-sm font-bold text-gray-900">{{ rupiah($order->total) }}</td>
                            <td class="px-6 py-4 text-sm">
                                <span class="px-3 py-1 text-xs font-semibold rounded-full 
                                    @if($order->status === 'completed')
                                        bg-green-100 text-green-800
                                    @elseif($order->status === 'cancelled')
                                        bg-red-100 text-red-800
                                    @else
                                        bg-yellow-100 text-yellow-800
                                    @endif
                                ">
                                    {{ ucfirst($order->status) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $order->created_at->format('d M Y') }}</td>
                            <td class="px-6 py-4 text-sm">
                                <a href="{{ route('admin.orders.show', $order) }}" class="text-emerald-600 hover:text-emerald-700 font-medium">
                                    Lihat
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>

<style>
    body {
        background-color: #f9fafb;
    }
</style>
@endsection