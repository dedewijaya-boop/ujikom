@extends('layouts.app')

@section('content')
<div class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow rounded-lg p-8 text-center">
            <svg class="mx-auto h-12 w-12 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            
<<<<<<< HEAD
            <h1 class="mt-4 text-3xl font-bold text-gray-900">Commande confirmée</h1>
            <p class="mt-2 text-lg text-gray-600">Merci pour votre achat!</p>
            
            <div class="mt-6">
                <p class="text-sm text-gray-500">Numéro de commande</p>
=======
            <h1 class="mt-4 text-3xl font-bold text-gray-900">Pesanan Berhasil Dikonfirmasi</h1>
            <p class="mt-2 text-lg text-gray-600">Terima kasih atas pembelian Anda!</p>
            
            <div class="mt-6">
                <p class="text-sm text-gray-500">Nomor Pesanan</p>
>>>>>>> 4ec54b9e (update terbaru)
                <p class="text-lg font-medium text-gray-900">{{ $orderId }}</p>
            </div>
            
            <div class="mt-8">
<<<<<<< HEAD
                <p class="text-gray-600">Nous avons envoyé un email de confirmation à <span class="font-medium">{{ auth()->user()->email }}</span>.</p>
                <p class="text-gray-600 mt-2">Vous recevrez un email lorsque votre commande sera expédiée.</p>
=======
                <p class="text-gray-600">Kami telah mengirim email konfirmasi ke <span class="font-medium">{{ auth()->user()->email }}</span>.</p>
                <p class="text-gray-600 mt-2">Anda akan menerima email lagi saat pesanan Anda dikirim.</p>
>>>>>>> 4ec54b9e (update terbaru)
            </div>
            
            <div class="mt-8">
                <a href="{{ route('home') }}" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-emerald-600 hover:bg-emerald-700">
<<<<<<< HEAD
                    Retour à l'accueil
=======
                    Kembali ke Beranda
>>>>>>> 4ec54b9e (update terbaru)
                </a>
            </div>
        </div>
    </div>
</div>
@endsection