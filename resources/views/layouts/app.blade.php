<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Lasvara Decor ID') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        @if(session('success') || session('error'))
            <div x-data="{ open: true }" x-show="open" x-init="setTimeout(() => open = false, 5000)" class="fixed right-4 top-24 z-50 w-full max-w-sm">
                @if(session('success'))
                    <div class="rounded-lg bg-emerald-50 border border-emerald-200 text-emerald-900 px-4 py-3 shadow-lg flex items-start gap-3">
                        <div class="mt-1">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold">Berhasil</p>
                            <p class="text-sm">{{ session('success') }}</p>
                        </div>
                    </div>
                @endif
                @if(session('error'))
                    <div class="rounded-lg bg-red-50 border border-red-200 text-red-900 px-4 py-3 shadow-lg flex items-start gap-3">
                        <div class="mt-1">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold">Gagal</p>
                            <p class="text-sm">{{ session('error') }}</p>
                        </div>
                    </div>
                @endif
            </div>
        @endif

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            @yield('content')  <!-- Changed from $slot to -->
        </main>
        @include('layouts.footer')
    </div>

</body>
</html>