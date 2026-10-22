@extends('layouts.app')

@section('title', 'Kontak')

@section('content')

{{-- ============ HEADER ============ --}}
<section class="bg-gradient-to-br from-brand-50 to-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center reveal">
        <span class="text-brand-600 font-semibold text-sm uppercase tracking-wide">Hubungi Kami</span>
        <h1 class="mt-2 text-4xl md:text-5xl font-bold text-gray-900">Kontak & Lokasi</h1>
        <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
            Kunjungi toko kami atau hubungi kami via WhatsApp untuk konsultasi gratis.
        </p>
    </div>
</section>

{{-- ============ INFO KONTAK ============ --}}
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-6">

            {{-- Card Alamat --}}
            <div class="p-6 rounded-2xl border border-gray-100 hover:border-brand-200 hover:shadow-lg transition reveal reveal-delay-1">
                <div class="w-12 h-12 rounded-lg bg-brand-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="mt-4 font-bold text-lg text-gray-900">Alamat</h3>
                <p class="mt-2 text-sm text-gray-600 leading-relaxed">{{ config('site.alamat') }}</p>
                <a href="{{ config('site.maps_link') }}" target="_blank"
                   class="mt-3 inline-flex items-center gap-1 text-sm text-brand-600 font-semibold hover:gap-2 transition-all">
                    Buka di Google Maps
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            {{-- Card WhatsApp --}}
            <div class="p-6 rounded-2xl border border-gray-100 hover:border-brand-200 hover:shadow-lg transition reveal reveal-delay-2">
                <div class="w-12 h-12 rounded-lg bg-wa/10 flex items-center justify-center">
                    <svg class="w-6 h-6 text-wa" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                </div>
                <h3 class="mt-4 font-bold text-lg text-gray-900">WhatsApp</h3>
                <p class="mt-2 text-sm text-gray-600">{{ config('site.whatsapp') }}</p>
                <a href="https://wa.me/{{ config('site.whatsapp') }}?text={{ urlencode(config('site.wa_pesan_default')) }}"
                   target="_blank"
                   class="mt-3 inline-flex items-center gap-1 text-sm text-wa font-semibold hover:gap-2 transition-all">
                    Chat Sekarang
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            {{-- Card Jam Buka --}}
            <div class="p-6 rounded-2xl border border-gray-100 hover:border-brand-200 hover:shadow-lg transition reveal reveal-delay-3">
                <div class="w-12 h-12 rounded-lg bg-brand-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="mt-4 font-bold text-lg text-gray-900">Jam Buka</h3>
                <p class="mt-2 text-sm text-gray-600">{{ config('site.jam_buka') }}</p>
                <p class="mt-3 text-xs text-green-600 font-semibold flex items-center gap-1">
                    <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                    Buka Sekarang
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ============ PETA GOOGLE MAPS ============ --}}
<section class="pb-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-2xl overflow-hidden shadow-xl border border-gray-100 reveal-scale">
            <iframe
                src="{{ config('site.maps_embed') }}"
                width="100%"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="mt-4 text-center reveal">
            <a href="{{ config('site.maps_link') }}" target="_blank"
               class="inline-flex items-center gap-2 bg-brand-600 hover:bg-brand-700 text-white font-semibold px-6 py-3 rounded-lg transition shadow-lg hover:shadow-xl">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                Buka di Google Maps
            </a>
        </div>
    </div>
</section>

{{-- ============ CTA WHATSAPP ============ --}}
<section class="pb-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-brand-600 to-brand-700 rounded-3xl p-8 md:p-16 text-center text-white relative overflow-hidden reveal-scale">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>

            <div class="relative">
                <h2 class="text-3xl md:text-4xl font-bold">Ada Pertanyaan?</h2>
                <p class="mt-4 text-lg text-white/90 max-w-2xl mx-auto">
                    Tim kami siap membantu Anda. Konsultasi gratis, tanpa biaya!
                </p>
                <a href="https://wa.me/{{ config('site.whatsapp') }}?text={{ urlencode('Halo, saya mau tanya tentang cat Jotun') }}"
                   target="_blank"
                   class="mt-8 inline-flex items-center gap-2 bg-wa hover:bg-green-600 text-white font-semibold px-8 py-4 rounded-lg transition shadow-lg hover:shadow-xl">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                    Chat WhatsApp Sekarang
                </a>
            </div>
        </div>
    </div>
</section>

@endsection