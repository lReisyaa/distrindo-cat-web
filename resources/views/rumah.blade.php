@extends('layouts.app')

@section('title', 'Rumah & Bangunan')

@section('content')

{{-- HERO --}}
<section class="bg-gradient-to-br from-brand-50 to-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center reveal">
        <span class="text-brand-600 font-semibold text-sm uppercase tracking-wide">Cat Untuk Rumah & Bangunan</span>
        <h1 class="mt-2 text-4xl md:text-5xl font-bold text-gray-900">Solusi Cat Lengkap untuk Rumah Anda</h1>
        <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
            Dari interior hingga eksterior, kami menyediakan semua kebutuhan cat untuk rumah & bangunan Anda.
        </p>
    </div>
</section>

{{-- KATEGORI --}}
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-16">
            @foreach (config('site.kategori_rumah') as $index => $kategori)
            <div class="grid md:grid-cols-2 gap-8 items-center {{ $index % 2 == 1 ? 'md:flex-row-reverse' : '' }}">
                {{-- Gambar --}}
                <div class="{{ $index % 2 == 1 ? 'md:order-2' : '' }} reveal-{{ $index % 2 == 0 ? 'left' : 'right' }}">
                    <div class="rounded-2xl overflow-hidden shadow-xl">
                        <img src="{{ $kategori['gambar'] }}"
                             alt="{{ $kategori['nama'] }}"
                             class="w-full h-80 object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                </div>

                {{-- Teks --}}
                <div class="{{ $index % 2 == 1 ? 'md:order-1' : '' }} reveal-{{ $index % 2 == 0 ? 'right' : 'left' }}">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">{{ $kategori['nama'] }}</h2>
                    <p class="mt-4 text-gray-600 leading-relaxed">{{ $kategori['deskripsi'] }}</p>

                    {{-- Daftar Produk --}}
                    <div class="mt-6 space-y-2">
                        @foreach ($kategori['produk'] as $produk)
                        <div class="flex items-center gap-3 p-3 rounded-lg bg-gray-50 hover:bg-brand-50 transition">
                            <div class="w-8 h-8 rounded-lg bg-brand-600 flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900 text-sm">{{ $produk['nama'] }}</p>
                                <p class="text-xs text-gray-500">{{ $produk['tagline'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {{-- Tombol WA --}}
                    <a href="https://wa.me/{{ config('site.whatsapp') }}?text={{ urlencode('Halo, saya mau tanya tentang ' . $kategori['nama']) }}"
                       target="_blank"
                       class="mt-6 inline-flex items-center gap-2 bg-wa hover:bg-green-600 text-white font-semibold px-5 py-2.5 rounded-lg transition shadow-md">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                        Tanya {{ $kategori['nama'] }}
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="pb-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-brand-600 to-brand-700 rounded-3xl p-8 md:p-16 text-center text-white relative overflow-hidden reveal-scale">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="relative">
                <h2 class="text-3xl md:text-4xl font-bold">Butuh Bantuan Memilih Cat?</h2>
                <p class="mt-4 text-lg text-white/90 max-w-2xl mx-auto">
                    Tim kami siap membantu Anda memilih cat yang tepat untuk rumah Anda.
                </p>
                <a href="https://wa.me/{{ config('site.whatsapp') }}?text={{ urlencode('Halo, saya mau konsultasi cat untuk rumah') }}"
                   target="_blank"
                   class="mt-8 inline-flex items-center gap-2 bg-wa hover:bg-green-600 text-white font-semibold px-8 py-4 rounded-lg transition shadow-lg">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                    Chat WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

@endsection