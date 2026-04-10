@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between mb-6">
        <div>
            <h1 class="text-3xl font-semibold">Order #{{ $order->id }}</h1>
            <p class="text-sm text-gray-600">Tanggal: {{ $order->created_at->format('d M Y H:i') }}</p>
        </div>
        <a href="{{ route('orders.index') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Kembali ke Riwayat</a>
    </div>

    <div class="grid gap-6 lg:grid-cols-2">
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Ringkasan Pesanan</h2>
            @php
                $statusLabels = [
                    'pending' => 'Menunggu Pembayaran',
                    'processing' => 'Sedang Diproses',
                    'completed' => 'Selesai',
                    'cancelled' => 'Dibatalkan',
                    'shipped' => 'Dikirim',
                ];
                $orderStatusLabel = $statusLabels[$order->status] ?? ucfirst($order->status);
            @endphp
            <p class="mb-2"><strong>Status:</strong> {{ $orderStatusLabel }}</p>
            <p class="mb-2"><strong>Total:</strong> {{ rupiah($order->total) }}</p>
            <p class="mb-2"><strong>Ongkos Kirim:</strong> {{ rupiah($order->shipping) }}</p>
        </div>
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Alamat Pengiriman</h2>
            <p class="mb-2">{{ $order->shipping_address }}</p>
            <p class="mb-2">{{ $order->shipping_city }}, {{ $order->shipping_zip }}</p>
            <p class="mb-2">{{ $order->shipping_country }}</p>
        </div>
    </div>

    <div class="mt-6 bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-semibold mb-4">Detail Item</h2>

        @if($order->items->isEmpty())
            <p class="text-gray-600">Tidak ada item dalam pesanan ini.</p>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Produk</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kuantitas</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($order->items as $item)
                            <tr>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->product?->nom ?? 'Produk tidak tersedia' }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">{{ rupiah($item->price) }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->quantity }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">{{ rupiah($item->price * $item->quantity) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>
@endsection