@extends('layouts.app')

@section('content')
<div class="bg-white">
    <!-- Hero Section - Enhanced with parallax effect -->
    <div class="relative bg-gray-900 overflow-hidden h-screen max-h-[80vh]">
        <div class="absolute inset-0 overflow-hidden">
                    <img src="https://images.pexels.com/photos/12495610/pexels-photo-12495610.jpeg" 
                 alt="Dekorasi papan MDF Lasvara Decor"  
                         class="w-full h-full object-cover object-center">
                    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                </div>
        <div class="relative max-w-7xl mx-auto h-full flex flex-col justify-center px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl transform transition duration-700 ease-out translate-y-10 opacity-0 animate-fade-in-up">
                Cerita Lasvara Decor
            </h1>
            <p class="mt-6 text-xl text-emerald-100 max-w-3xl mx-auto transform transition duration-700 ease-out translate-y-10 opacity-0 animate-fade-in-up delay-100">
                Menghadirkan dekorasi papan MDF unik dan berkualitas untuk mempercantik toko, rumah, dan ruangan Anda sejak 2025.
            </p>
            <div class="mt-12 transform transition duration-700 ease-out translate-y-10 opacity-0 animate-fade-in-up delay-200">
                <svg class="h-12 w-12 mx-auto text-emerald-300 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
            <!-- Text Content - Enhanced typography -->
            <div class="prose prose-emerald prose-lg text-gray-600 lg:max-w-none">
                <h2 class="text-4xl font-bold text-gray-900 mb-8 font-serif tracking-tight">Lasvara Decor ID</h2>
                
                <p class="text-lg leading-relaxed">
                    Didirikan pada tahun 2025 di Bogor, <span class="text-emerald-600 font-medium">Lasvara Decor ID</span> 
                    adalah usaha kreatif yang berfokus pada pembuatan dekorasi papan MDF berkualitas tinggi. 
                    Kami menggabungkan kreativitas desain dengan pengerjaan yang teliti untuk menghasilkan dekorasi yang unik dan menarik.
                </p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-12 mb-6 border-l-4 border-emerald-500 pl-4">Filosofi Kami</h3>
                <p class="leading-relaxed">
                    Setiap dekorasi Lasvara dibuat dengan penuh ketelitian dan kreativitas oleh para pengrajin kami. 
                    Kami menggunakan bahan MDF berkualitas untuk menciptakan dekorasi yang tidak hanya indah, tetapi juga tahan lama dan bernilai estetika tinggi.
                </p>
                
                <div class="mt-10 bg-emerald-50 p-6 rounded-lg border border-emerald-100">
                    <blockquote class="italic text-gray-700">
                        "Setiap dekorasi memiliki cerita, dan kami ingin membantu Anda menampilkan cerita tersebut di setiap ruangan."
                        <footer class="mt-2 text-emerald-600 font-medium">— Dede Wijaya, Pengrajin Utama</footer>
                    </blockquote>
                </div>
            </div>
            
            <!-- Image Gallery - Enhanced with hover effect -->
            
        </div>
        
        <!-- Team Section - Enhanced cards -->
        <div class="mt-32">
            <div class="text-center">
                <span class="text-emerald-600 font-semibold tracking-wider">TIM KAMI</span>
                <h2 class="text-4xl font-bold text-gray-900 mt-3 font-serif">Para Pengrajin Lasvara</h2>
                <p class="mt-4 text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Tim kreatif yang bekerja dengan penuh dedikasi untuk menciptakan dekorasi MDF terbaik bagi ruangan Anda.
                </p>
            </div>
            
            <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Member 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                    <div class="h-64 overflow-hidden relative">
                        <img class="w-full h-full object-cover object-top group-hover:scale-105 transition duration-500" 
                             src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                             alt="Dede Wijaya">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 via-transparent to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <h3 class="text-xl font-semibold text-white">Dede Wijaya</h3>
                            <p class="text-emerald-300 mt-1">Pengrajin Utama</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600">
                            Pengrajin berpengalaman dalam pembuatan dekorasi papan MDF dengan detail yang rapi dan presisi tinggi.
                        </p>
                    </div>
                </div>
                
                <!-- Member 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                    <div class="h-64 overflow-hidden relative">
                        <img class="w-full h-full object-cover object-top group-hover:scale-105 transition duration-500" 
                             src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                             alt="Budi Santoso">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 via-transparent to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <h3 class="text-xl font-semibold text-white">Budi Santoso</h3>
                            <p class="text-emerald-300 mt-1">Produksi & Finishing</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600">
                            Bertanggung jawab dalam proses produksi dan finishing agar setiap dekorasi memiliki kualitas terbaik.
                        </p>
                    </div>
                </div>
                
                <!-- Member 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                    <div class="h-64 overflow-hidden relative">
                        <img class="w-full h-full object-cover object-top group-hover:scale-105 transition duration-500" 
                             src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                             alt="Siti Rahma">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 via-transparent to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <h3 class="text-xl font-semibold text-white">Siti Rahma</h3>
                            <p class="text-emerald-300 mt-1">Desainer</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600">
                            Desainer kreatif yang merancang konsep dekorasi modern dan unik untuk berbagai kebutuhan ruangan.
                        </p>
                    </div>
                </div>
                
                <!-- Member 4 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                    <div class="h-64 overflow-hidden relative">
                        <img class="w-full h-full object-cover object-top group-hover:scale-105 transition duration-500" 
                             src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                             alt="Dika Saputra">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 via-transparent to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <h3 class="text-xl font-semibold text-white">Dika Saputra</h3>
                            <p class="text-emerald-300 mt-1">Quality Control</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600">
                            Memastikan setiap produk dekorasi MDF memiliki kualitas terbaik sebelum sampai ke pelanggan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Values Section -->
        <div class="mt-32">
            <div class="text-center">
                <span class="text-emerald-600 font-semibold tracking-wider">NILAI-NILAI KAMI</span>
                <h2 class="text-4xl font-bold text-gray-900 mt-3 font-serif">Keunggulan Lasvara</h2>
                <p class="mt-4 text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Prinsip yang menjadi dasar setiap dekorasi yang kami ciptakan.
                </p>
            </div>
            
            <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-3">
                
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 group">
                    <div class="p-8">
                        <h3 class="mt-6 text-xl font-bold text-gray-900 group-hover:text-emerald-600 transition-colors duration-300">Kualitas</h3>
                        <p class="mt-4 text-gray-600 leading-relaxed">
                            Kami menggunakan bahan MDF berkualitas tinggi agar setiap dekorasi tahan lama dan memiliki tampilan yang elegan.
                        </p>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 group">
                    <div class="p-8">
                        <h3 class="mt-6 text-xl font-bold text-gray-900 group-hover:text-emerald-600 transition-colors duration-300">Kreativitas</h3>
                        <p class="mt-4 text-gray-600 leading-relaxed">
                            Setiap desain dibuat dengan ide kreatif agar menghasilkan dekorasi yang unik dan berbeda.
                        </p>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 group">
                    <div class="p-8">
                        <h3 class="mt-6 text-xl font-bold text-gray-900 group-hover:text-emerald-600 transition-colors duration-300">Kepercayaan</h3>
                        <p class="mt-4 text-gray-600 leading-relaxed">
                            Kami berkomitmen memberikan pelayanan terbaik dan menjaga kepercayaan pelanggan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- CTA Section -->
    <div class="bg-emerald-700 relative overflow-hidden">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8 lg:flex lg:items-center lg:justify-between relative">
            <div class="lg:w-1/2">
                <h2 class="text-4xl font-bold tracking-tight text-white sm:text-5xl font-serif">
                    <span class="block">Siap mempercantik ruangan Anda?</span>
                    <span class="block text-emerald-200">Temukan dekorasi terbaik dari Lasvara</span>
                </h2>
                <p class="mt-4 text-lg text-emerald-100 max-w-xl">
                    Jelajahi koleksi dekorasi papan MDF kami dan temukan desain yang cocok untuk toko, rumah, atau ruangan Anda.
                </p>
            </div>
            <div class="mt-8 flex flex-col sm:flex-row lg:mt-0 lg:flex-shrink-0 space-y-4 sm:space-y-0 sm:space-x-4">
                <div class="inline-flex rounded-md shadow">
                    <a href="{{ route('shop') }}" class="inline-flex items-center justify-center px-8 py-4 border border-transparent text-lg font-medium rounded-md text-emerald-700 bg-white hover:bg-emerald-50 transition-colors duration-300">
                        Lihat Produk
                    </a>
                </div>
                <div class="inline-flex rounded-md shadow">
                    <a href="/contactez-nous" class="inline-flex items-center justify-center px-8 py-4 border border-transparent text-lg font-medium rounded-md text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection