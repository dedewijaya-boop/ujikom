@extends('layouts.app')

@section('content')
<div class="bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-white relative overflow-hidden">
        
            <!-- Decorative elements -->
            <div class="absolute inset-0 opacity-10">
                <svg class="absolute left-0 top-0 h-full w-32 text-indigo-200" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="0,0 100,0 0,100" />
                </svg>
                <svg class="absolute right-0 bottom-0 h-full w-32 text-indigo-200" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="100,0 100,100 0,100" />
                </svg>
            </div>
        
            <!-- Make hero section  -->
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 relative min-h-[50vh] flex items-center">
                <div class="absolute inset-0 overflow-hidden">

    <!-- Grid background images -->
    <div class="grid grid-cols-3 h-full w-full">
        <img src="{{ asset('images/poster vintage.jpeg') }}" class="w-full h-full object-cover">
        <img src="{{ asset('images/poster dinding.png') }}" class="w-full h-full object-cover">
        <img src="{{ asset('images/oasis.png') }}" class="w-full h-full object-cover">
    </div>

    <!-- Dark overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>

</div>
        
                <!-- Content container -->
                <div class="relative w-full">
                    <div class="text-left">
                        <h1 class="text-4xl md:text-5xl font-bold text-yellow-300 tracking-tight">
                            Selamat Datang Di <span class="text-emerald-300">Lasvara Decor ID</span>
                        </h1>
                        <p class="mt-4 text-lg text-gray-200 max-w-lg">
                            Temukan koleksi dekorasi papan MDF unik untuk mempercantik toko dan ruangan Anda.
                        </p>
                    </div>
        
                    <!-- Call-to-action button moved to bottom-right -->
                    <div class="absolute bottom right-8">
                        <a href="{{ route('shop') }}" class="px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-emerald-600 hover:bg-emerald-700 transition duration-300">
                            Lihat kreasi kami
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
 

    <!-- Categories Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Belanja berdasarkan kategori</h2>
        
        @if($categories->count() > 0)
        <div class="relative">
            <!-- Scrollable categories container -->
            <div class="flex space-x-6 pb-6 overflow-x-auto scrollbar-hide">
                @foreach($categories as $category)
               <a href="{{ route('shop', ['category' => $category->id]) }}" class="flex-shrink-0 relative group w-48 h-64 rounded-2xl overflow-hidden shadow-lg transform transition-all duration-300 hover:scale-105">
                    <!-- Category Image -->
                    @if($category->image)
                    <img src="{{ image_url($category->image) }}" 
                         alt="{{ $category->nom }}" 
                         class="w-full h-full object-cover">
                    @else
                    <div class="w-full h-full bg-gray-100 flex items-center justify-center">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    @endif
                    
                    <!-- Overlay with category name -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-4 w-full">
                        <h3 class="text-xl font-bold text-white">{{ $category->nom }}</h3>
                        <div class="h-1 w-8 bg-emerald-300 mt-2 transform group-hover:w-16 transition-all duration-300"></div>
                    </div>
                
                    
                </a>
                @endforeach
            </div>
            
            <!-- Gradient fade effect on sides -->
            <div class="absolute left-0 top-0 bottom-0 w-16 bg-gradient-to-r from-gray-50 to-transparent pointer-events-none"></div>
            <div class="absolute right-0 top-0 bottom-0 w-16 bg-gradient-to-l from-gray-50 to-transparent pointer-events-none"></div>
        </div>
        
        <!-- View all button -->
        <div class="text-center mt-8">
            <a href="{{ route('admin.categories.index') }}" class="inline-block px-6 py-3 border border-emerald-600 text-emerald-600 font-medium rounded-full hover:bg-emerald-600 hover:text-white transition duration-300">
                Lihat semua kategori →
            </a>
        </div>
        @else
        <div class="text-center py-12">
            <p class="text-gray-500">Tidak ada kategori yang tersedia saat ini.</p>
        </div>
        @endif
    </div>
    <!-- Best Sellers Section -->
   <!-- Best Sellers Section -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-900">Produk Terlaris Kami</h2>
        <p class="mt-4 max-w-2xl text-xl text-gray-600 mx-auto">
            Temukan perhiasan kami yang paling populer.
        </p>
    </div>

    @if($bestSellers->count() > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($bestSellers as $product)
            <div class="group relative bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300">
                <!-- Sale Badge -->
                @if($product->on_sale)
                <span class="absolute top-2 left-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full z-10">
                    PROMO -{{ $product->discount_percent }}%
                </span>
                @endif
                
                <!-- Best Seller Badge -->
                <span class="absolute top-2 right-2 bg-yellow-500 text-white text-xs font-bold px-2 py-1 rounded-full z-10">
                    Best Seller
                </span>

                <!-- Product Image -->
                <a href="{{ route('products.show', $product) }}" class="block">
                    <div class="relative pb-[100%] overflow-hidden">
                        @if($product->image)
                            <img src="{{ image_url($product->image) }}" 
                                 alt="{{ $product->name }}" 
                                 class="absolute h-full w-full object-cover group-hover:scale-105 transition-transform duration-500">
                        @else
                            <div class="absolute inset-0 bg-gray-100 flex items-center justify-center">
                                <svg class="w-1/2 h-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        @endif
                    </div>
                </a>
                
                <!-- Product Details -->
                <div class="p-4">
                    <a href="{{ route('products.show', $product) }}" class="hover:text-emerald-600 transition-colors">
                        <h3 class="text-lg font-semibold text-gray-900">
                            {{ $product->nom }}
                        </h3>
                    </a>
                    
                    @if($product->category)
                        <p class="text-gray-500 mt-1">
                            {{ $product->category->nom }}
                        </p>
                    @endif
                    
                    <!-- Rating Stars -->
                    <div class="flex items-center mt-2">
                         <!-- function calculate average -->
                        @php
                    
    $sum = 0;
    $count = $product->reviews->count(); // Count total reviews
@endphp

@foreach($product->reviews as $review)
    @php
        $sum += $review->note;
    @endphp
@endforeach

@php
    $average = $count > 0 ? $sum / $count : 0;
@endphp


<p>{{ number_format($average, 1) }} / 5</p>

{{-- Render stars based on average --}}
@for($i = 1; $i <= 5; $i++)
    <svg class="w-5 h-5 {{ $i <= round($average) ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
    </svg>
@endfor

                        
                        <span class="text-xs text-gray-500 ml-1">({{ $product->reviews_count }})</span>
                    </div>
                    
                    <!-- Price & Add to Cart -->
                    <div class="mt-3 flex items-center justify-between">
                        <div>
                            @if($product->on_sale)
                                <span class="text-lg font-bold text-gray-900">
                                    {{ rupiah($product->prix) }}
                                </span>
                                <span class="text-sm text-gray-500 line-through ml-2">
                                    {{ rupiah($product->prix) }}
                                </span>
                            @else
                                <span class="text-lg font-bold text-gray-900">
                                    {{ rupiah($product->prix) }}
                                </span>
                            @endif
                        </div>
                        <form action="{{ route('cart.add', $product->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="text-white bg-emerald-600 hover:bg-emerald-700 px-3 py-1 rounded-full text-sm transition-colors duration-300" title="Ajouter au panier">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-12">
            <p class="text-gray-500">Tidak ada buku terlaris yang tersedia saat ini.</p>
        </div>
    @endif

    <div class="mt-12 text-center">
        <a href="{{ route('shop') }}" class="inline-flex items-center px-6 py-3 border border-emerald-600 text-emerald-600 font-medium rounded-full hover:bg-emerald-600 hover:text-white transition duration-300">
            Lihat semua produk
            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
        </a>
    </div>
</div>
<!-- Nouveaux Produits Section -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-900">Produk Baru Kami</h2>
        <p class="mt-4 max-w-2xl text-xl text-gray-600 mx-auto">
            Temukan kreasi eksklusif terbaru kami
        </p>
    </div>

    @if($newProducts->count() > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($newProducts as $product)
            <div class="group relative bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border border-gray-100">
                <!-- New Product Badge -->
                <span class="absolute top-2 left-2 bg-emerald-500 text-white text-xs font-bold px-2 py-1 rounded-full z-10">
                    Nouveau
                </span>
                
                <!-- Product Image -->
                <a href="{{route('products.show', $product)}}" class="block">
                    <div class="relative pb-[100%] overflow-hidden">
                        @if($product->image)
                            <img src="{{ image_url($product->image) }}" 
                                 alt="{{ $product->nom }}" 
                                 class="absolute h-full w-full object-cover group-hover:scale-105 transition-transform duration-500">
                        @else
                            <div class="absolute inset-0 bg-gray-100 flex items-center justify-center">
                                <svg class="w-1/2 h-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        @endif
                    </div>
                </a>
                
                <!-- Product Details -->
                <div class="p-4">
                    <a href="" class="hover:text-emerald-600 transition-colors">
                        <h3 class="text-lg font-semibold text-gray-900 line-clamp-2">
                            {{ $product->nom }}
                        </h3>
                    </a>
                    
                    @if($product->category)
                        <p class="text-gray-500 mt-1">
                            {{ $product->category->nom }}
                        </p>
                    @endif
                    
                    <!-- Price -->
                    <div class="mt-3 flex items-center justify-between">
                        <span class="text-lg font-bold text-gray-900">
                            {{ rupiah($product->prix) }}
                        </span>
                        <form action="{{ route('cart.add', $product->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="text-white bg-amber-500 hover:bg-amber-600 px-3 py-1 rounded-full text-sm transition-colors duration-300" title="Ajouter au panier">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="mt-12 text-center">
            <a href="{{ route('shop') }}" class="inline-flex items-center px-6 py-3 border border-emerald-600 text-emerald-600 font-medium rounded-full hover:bg-emerald-600 hover:text-white transition duration-300">
                Lihat seluruh koleksi
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>
    @else
        <div class="text-center py-12">
            <p class="text-gray-500">Tidak ada produk baru yang tersedia saat ini.</p>
        </div>
    @endif
</div>
</div>
@endsection