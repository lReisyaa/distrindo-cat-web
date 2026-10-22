@extends('layouts.app')

@section('title', 'Floor Coating')

@section('content')

{{-- HERO --}}
<section class="bg-gradient-to-br from-brand-50 to-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center reveal">
        <span class="text-brand-600 font-semibold text-sm uppercase tracking-wide">Spesialis Lantai</span>
        <h1 class="mt-2 text-4xl md:text-5xl font-bold text-gray-900">Floor Coating Profesional</h1>
        <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
            Solusi cat lantai tahan lama untuk parkiran, kantor, gudang, dan lapangan olahraga. Termasuk jasa aplikasi profesional.
        </p>
    </div>
</section>

{{-- KATEGORI FLOOR --}}
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12 reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Aplikasi Floor Coating</h2>
            <p class="mt-4 text-gray-600">Kami menyediakan produk & jasa aplikasi untuk berbagai jenis lantai.</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach (config('site.kategori_floor') as $index => $kategori)
            <div class="group bg-white rounded-2xl overflow-hidden border border-gray-100 hover:border-brand-200 hover:shadow-xl transition-all reveal reveal-delay-{{ ($index % 4) + 1 }}">
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ $kategori['gambar'] }}"
                         alt="{{ $kategori['nama'] }}"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-lg text-gray-900">{{ $kategori['nama'] }}</h3>
                    <p class="mt-2 text-sm text-gray-600">{{ $kategori['deskripsi'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- KEUNGGULAN --}}
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12 reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Kenapa Pilih Jasa Kami?</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="p-6 rounded-xl bg-white border border-gray-100 text-center reveal reveal-delay-1">
                <div class="w-14 h-14 mx-auto rounded-lg bg-brand-50 flex items-center justify-center">
                    <svg class="w-7 h-7 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="mt-4 font-bold text-gray-900">Tim Profesional</h3>
                <p class="mt-2 text-sm text-gray-600">Aplikator berpengalaman dengan hasil rapi & presisi.</p>
            </div>
            <div class="p-6 rounded-xl bg-white border border-gray-100 text-center reveal reveal-delay-2">
                <div class="w-14 h-14 mx-auto rounded-lg bg-brand-50 flex items-center justify-center">
                    <svg class="w-7 h-7 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="mt-4 font-bold text-gray-900">Tepat Waktu</h3>
                <p class="mt-2 text-sm text-gray-600">Pengerjaan sesuai jadwal, tidak mengganggu operasional.</p>
            </div>
            <div class="p-6 rounded-xl bg-white border border-gray-100 text-center reveal reveal-delay-3">
                <div class="w-14 h-14 mx-auto rounded-lg bg-brand-50 flex items-center justify-center">
                    <svg class="w-7 h-7 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                    </svg>
                </div>
                <h3 class="mt-4 font-bold text-gray-900">Bergaransi</h3>
                <p class="mt-2 text-sm text-gray-600">Garansi hasil aplikasi, kepuasan pelanggan prioritas.</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="pb-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-brand-600 to-brand-700 rounded-3xl p-8 md:p-16 text-center text-white relative overflow-hidden reveal-scale">
            <div class="relative">
                <h2 class="text-3xl md:text-4xl font-bold">Butuh Jasa Floor Coating?</h2>
                <p class="mt-4 text-lg text-white/90 max-w-2xl mx-auto">
                    Konsultasi gratis untuk kebutuhan floor coating Anda. Tim kami siap survei lokasi.
                </p>
                <a href="https://wa.me/{{ config('site.whatsapp') }}?text={{ urlencode('Halo, saya mau tanya tentang jasa floor coating') }}"
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