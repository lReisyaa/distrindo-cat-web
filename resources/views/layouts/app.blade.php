<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ config('site.deskripsi') }}">
    <title>@yield('title', 'Home') | {{ config('site.nama') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-800 bg-white antialiased">

    {{-- ============ HEADER ============ --}}
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">

                {{-- Logo --}}
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                <img src="{{ asset('images/logo-distrindo.png') }}" alt="Logo Distrindo" class="h-9 w-auto">
                <span class="font-bold text-lg text-gray-900">{{ config('site.nama_pendek') }}</span>
            </a>

                {{-- Menu Desktop --}}
                <nav class="hidden md:flex items-center gap-8">
                   <nav class="hidden md:flex items-center gap-8">
                    <a href="{{ route('home') }}" class="text-sm font-medium hover:text-brand-600 transition">Home</a>
                    <a href="{{ route('produk') }}" class="text-sm font-medium hover:text-brand-600 transition">Produk</a>
                    <a href="{{ route('rumah') }}" class="text-sm font-medium hover:text-brand-600 transition">Rumah</a>
                    <a href="{{ route('industri') }}" class="text-sm font-medium hover:text-brand-600 transition">Industri</a>
                    <a href="{{ route('floor-coating') }}" class="text-sm font-medium hover:text-brand-600 transition">Floor Coating</a>
                    <a href="{{ route('kontak') }}" class="text-sm font-medium hover:text-brand-600 transition">Kontak</a>
                </nav>
                </nav>

                {{-- Tombol WA Desktop --}}
                <a href="https://wa.me/{{ config('site.whatsapp') }}?text={{ urlencode(config('site.wa_pesan_default')) }}"
                   target="_blank"
                   class="hidden md:inline-flex items-center gap-2 bg-wa hover:bg-green-600 text-white text-sm font-semibold px-4 py-2 rounded-lg transition">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                    Chat WA
                </a>

                {{-- Hamburger Mobile --}}
                <button id="mobileMenuBtn" class="md:hidden p-2 text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Menu Mobile --}}
        <div id="mobileMenu" class="hidden md:hidden border-t border-gray-100 bg-white">
            <nav class="px-4 py-3 space-y-1">
                <nav class="hidden md:flex items-center gap-8">
                <a href="{{ route('home') }}" class="text-sm font-medium hover:text-brand-600 transition">Home</a>
                <a href="{{ route('produk') }}" class="text-sm font-medium hover:text-brand-600 transition">Produk</a>
                <a href="{{ route('rumah') }}" class="text-sm font-medium hover:text-brand-600 transition">Rumah</a>
                <a href="{{ route('industri') }}" class="text-sm font-medium hover:text-brand-600 transition">Industri</a>
                <a href="{{ route('floor-coating') }}" class="text-sm font-medium hover:text-brand-600 transition">Floor Coating</a>
                <a href="{{ route('kontak') }}" class="text-sm font-medium hover:text-brand-600 transition">Kontak</a>
            </nav>
                <a href="https://wa.me/{{ config('site.whatsapp') }}?text={{ urlencode(config('site.wa_pesan_default')) }}"
                   target="_blank"
                   class="block mt-2 text-center bg-wa text-white text-sm font-semibold px-4 py-2 rounded-lg">
                    Chat WhatsApp
                </a>
            </nav>
        </div>
    </header>

    {{-- ============ KONTEN UTAMA ============ --}}
    <main>
        @yield('content')
    </main>

    {{-- ============ FOOTER ============ --}}
    <footer class="bg-gray-900 text-gray-300 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center gap-2 mb-3">
                    <img src="{{ asset('images/logo-distrindo.png') }}" alt="Logo Distrindo" class="h-8 w-auto">
                    <h3 class="text-white font-bold text-lg">{{ config('site.nama') }}</h3>
                </div>
                    <p class="text-sm leading-relaxed">{{ config('site.deskripsi') }}</p>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-3">Navigasi</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-white">Home</a></li>
                        <li><a href="{{ route('rumah') }}" class="hover:text-white">Rumah & Bangunan</a></li>
                        <li><a href="{{ route('industri') }}" class="hover:text-white">Industri & Infrastruktur</a></li>
                        <li><a href="{{ route('floor-coating') }}" class="hover:text-white">Floor Coating</a></li>
                        <li><a href="{{ route('kontak') }}" class="hover:text-white">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-3">Kontak</h4>
                    <p class="text-sm">
                        📱 WhatsApp:
                        <a href="https://wa.me/{{ config('site.whatsapp') }}" target="_blank" class="hover:text-white">
                            {{ config('site.whatsapp') }}
                        </a>
                    </p>
                    <p class="text-sm mt-1">
                        📍
                        <a href="{{ config('site.maps_link') }}" target="_blank" class="hover:text-white underline-offset-2 hover:underline">
                            {{ config('site.alamat') }}
                        </a>
                    </p>
                    <p class="text-sm mt-1">🕐 {{ config('site.jam_buka') }}</p>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-6 text-center text-xs text-gray-500">
                &copy; {{ date('Y') }} {{ config('site.nama') }}. All rights reserved.
            </div>
        </div>
    </footer>

    {{-- ============ TOMBOL WA FLOATING ============ --}}
    <a href="https://wa.me/{{ config('site.whatsapp') }}?text={{ urlencode(config('site.wa_pesan_default')) }}"
       target="_blank"
       class="fixed bottom-6 right-6 z-50 bg-wa hover:bg-green-600 text-white rounded-full p-4 shadow-lg hover:shadow-xl transition-all hover:scale-110"
       aria-label="Chat WhatsApp">
        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
        </svg>
    </a>

    {{-- ============ SCRIPT ============ --}}
    <script>
        // ============ HAMBURGER MENU ============
        document.getElementById('mobileMenuBtn')?.addEventListener('click', () => {
            document.getElementById('mobileMenu')?.classList.toggle('hidden');
        });

        // ============ PAGE TRANSITION ============
        // Fade out sebelum pindah halaman
        document.querySelectorAll('a[href]:not([target="_blank"]):not([href^="#"])').forEach(link => {
            link.addEventListener('click', (e) => {
                const href = link.getAttribute('href');
                if (!href || href.startsWith('#') || href.startsWith('http') || href.startsWith('mailto') || href.startsWith('tel')) return;
                if (href === window.location.pathname) return;

                e.preventDefault();
                document.body.style.opacity = '0';
                document.body.style.transition = 'opacity 0.25s ease';

                setTimeout(() => {
                    window.location.href = href;
                }, 250);
            });
        });

        // Fade in saat halaman dibuka
        window.addEventListener('pageshow', () => {
            document.body.style.opacity = '1';
        });

        // ============ SCROLL REVEAL ============
        const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');

        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        revealElements.forEach(el => revealObserver.observe(el));
    </script>
</body>
</html>