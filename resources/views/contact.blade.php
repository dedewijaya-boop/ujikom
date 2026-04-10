@extends('layouts.app')

@section('content')
<div class="bg-emerald-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-3xl font-bold text-emerald-800 mb-4">Hubungi Kami</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Kami siap membantu menjawab pertanyaan Anda tentang produk dekorasi papan MDF kami. Silakan isi formulir di bawah ini atau hubungi kami secara langsung.
            </p>
        </div>

        <div class="flex justify-center">
            <div class="w-full max-w-4xl">
                <div class="bg-white p-8 rounded-xl shadow-lg border border-emerald-100 text-center">
                    <h2 class="text-2xl font-semibold text-emerald-800 mb-4">Kontak Kami</h2>
                    <p class="text-gray-600 mb-10">Silakan hubungi kami melalui informasi di bawah ini. Kami siap membantu Anda.</p>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left">
                        <div class="bg-emerald-50 p-6 rounded-2xl">
                            <h3 class="text-lg font-semibold text-emerald-800 mb-4">Lokasi Toko</h3>
                            <p class="text-gray-700">Alamat toko Anda<br>Indonesia</p>
                        </div>
                        <div class="bg-emerald-50 p-6 rounded-2xl">
                            <h3 class="text-lg font-semibold text-emerald-800 mb-4">Kontak Langsung</h3>
                            <p class="text-gray-700">Telepon: +62 000 0000 0000</p>
                            <p class="text-gray-700">Email: admin@lasvaradecor.id</p>
                        </div>
                        <div class="bg-emerald-50 p-6 rounded-2xl">
                            <h3 class="text-lg font-semibold text-emerald-800 mb-4">Jam Operasional</h3>
                            <p class="text-gray-700">Senin - Jumat: 10:00 - 19:00</p>
                            <p class="text-gray-700">Sabtu: 10:00 - 20:00</p>
                            <p class="text-gray-700">Minggu: Tutup</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(session('success'))
    <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg">
        {{ session('success') }}
    </div>
    @endif
</div>
@endsection