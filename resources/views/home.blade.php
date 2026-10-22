@extends('layouts.app')

@section('title', 'Home')

@section('content')

{{-- ============ HERO ============ --}}
<section class="relative bg-gradient-to-br from-brand-50 via-white to-brand-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28">
        <div class="grid md:grid-cols-2 gap-12 items-center">

            {{-- Kiri: Teks --}}
            <div class="reveal-left">
                <span class="inline-block bg-brand-100 text-brand-700 text-xs font-semibold px-3 py-1 rounded-full mb-4">
                    🎨 Dealer Resmi Cat Jotun
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight">
                    Solusi Cat Lengkap untuk
                    <span class="text-brand-600">Rumah & Industri</span>
                </h1>
                <p class="mt-6 text-lg text-gray-600 leading-relaxed">
                    {{ config('site.deskripsi') }}
                </p>

                {{-- Tombol --}}
                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="https://wa.me/{{ config('site.whatsapp') }}?text={{ urlencode(config('site.wa_pesan_default')) }}"
                       target="_blank"
                       class="inline-flex items-center gap-2 bg-wa hover:bg-green-600 text-white font-semibold px-6 py-3 rounded-lg transition shadow-lg hover:shadow-xl">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                        Chat WhatsApp
                    </a>
                    <a href="{{ route('rumah') }}"
                       class="inline-flex items-center gap-2 bg-white hover:bg-gray-50 text-gray-800 font-semibold px-6 py-3 rounded-lg border-2 border-gray-200 transition">
                        Lihat Produk
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                {{-- Trust badges --}}
                <div class="mt-10 flex flex-wrap items-center gap-6 text-sm text-gray-500">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-brand-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Produk Original
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-brand-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Harga Bersaing
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-brand-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Pelayanan Ramah
                    </div>
                </div>
            </div>

            {{-- Kanan: Gambar --}}
            <div class="relative reveal-right">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1562259949-e8e7689d7828?w=800&q=80"
                         alt="Cat Jotun"
                         class="w-full h-[400px] md:h-[500px] object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============ 3 SEGMEN UTAMA ============ --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14 reveal">
            <span class="text-brand-600 font-semibold text-sm uppercase tracking-wide">Layanan Kami</span>
            <h2 class="mt-2 text-3xl md:text-4xl font-bold text-gray-900">Solusi Cat untuk Setiap Kebutuhan</h2>
            <p class="mt-4 text-gray-600">Dari rumah tinggal hingga proyek industri besar, kami siap melayani.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            {{-- Rumah --}}
            <a href="{{ route('rumah') }}" class="group rounded-2xl overflow-hidden border border-gray-100 hover:border-brand-200 hover:shadow-2xl transition-all reveal reveal-delay-1">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?w=800&q=80"
                         alt="Rumah & Bangunan"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <span class="text-xs font-semibold uppercase tracking-wide opacity-90">Untuk</span>
                        <h3 class="text-2xl font-bold">Rumah & Bangunan</h3>
                    </div>
                </div>
                <div class="p-5 bg-white">
                    <p class="text-sm text-gray-600">Interior, eksterior, waterproofing, atap, kayu & besi.</p>
                    <div class="mt-4 inline-flex items-center gap-1 text-sm text-brand-600 font-semibold group-hover:gap-2 transition-all">
                        Lihat Selengkapnya
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </a>

            {{-- Industri --}}
            <a href="{{ route('industri') }}" class="group rounded-2xl overflow-hidden border border-gray-100 hover:border-brand-200 hover:shadow-2xl transition-all reveal reveal-delay-2">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1581094271901-8022df4466f9?w=800&q=80"
                         alt="Industri & Infrastruktur"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <span class="text-xs font-semibold uppercase tracking-wide opacity-90">Untuk</span>
                        <h3 class="text-2xl font-bold">Industri & Infrastruktur</h3>
                    </div>
                </div>
                <div class="p-5 bg-white">
                    <p class="text-sm text-gray-600">Energy, tank coating, pertambangan, perkebunan, alat berat.</p>
                    <div class="mt-4 inline-flex items-center gap-1 text-sm text-brand-600 font-semibold group-hover:gap-2 transition-all">
                        Lihat Selengkapnya
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </a>

            {{-- Floor Coating --}}
            <a href="{{ route('floor-coating') }}" class="group rounded-2xl overflow-hidden border border-gray-100 hover:border-brand-200 hover:shadow-2xl transition-all reveal reveal-delay-3">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1553413077-190dd305871c?w=800&q=80"
                         alt="Floor Coating"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <span class="text-xs font-semibold uppercase tracking-wide opacity-90">Spesialis</span>
                        <h3 class="text-2xl font-bold">Floor Coating</h3>
                    </div>
                </div>
                <div class="p-5 bg-white">
                    <p class="text-sm text-gray-600">Car park, office, warehouse, lapangan olahraga + jasa aplikasi.</p>
                    <div class="mt-4 inline-flex items-center gap-1 text-sm text-brand-600 font-semibold group-hover:gap-2 transition-all">
                        Lihat Selengkapnya
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

{{-- ============ LAYANAN UNGGULAN ============ --}}
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14 reveal">
            <span class="text-brand-600 font-semibold text-sm uppercase tracking-wide">Kenapa Kami?</span>
            <h2 class="mt-2 text-3xl md:text-4xl font-bold text-gray-900">Layanan Unggulan</h2>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach (config('site.layanan') as $index => $layanan)
            <div class="p-6 rounded-xl bg-white border border-gray-100 hover:border-brand-200 hover:shadow-lg transition-all reveal reveal-delay-{{ ($index % 3) + 1 }}">
                <div class="w-12 h-12 rounded-lg bg-brand-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <h3 class="mt-4 font-bold text-lg text-gray-900">{{ $layanan['nama'] }}</h3>
                <p class="mt-2 text-sm text-gray-600">{{ $layanan['deskripsi'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============ PRODUK UNGGULAN ============ --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14 reveal">
            <span class="text-brand-600 font-semibold text-sm uppercase tracking-wide">Produk Populer</span>
            <h2 class="mt-2 text-3xl md:text-4xl font-bold text-gray-900">Produk Jotun Unggulan</h2>
            <p class="mt-4 text-gray-600">Klik produk untuk melihat detail lengkap & keunggulannya.</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $produkUnggulan = [
                    [
                        'nama' => 'Jotun Majestic',
                        'kategori' => 'Cat Interior Premium',
                        'tagline' => 'Premium',
                        'deskripsi' => 'Cat interior premium dengan hasil akhir matt yang mewah. Daya tutup tinggi, mudah diaplikasikan, dan tahan lama hingga 10 tahun.',
                        'keunggulan' => [
                            'Finish matt mewah & elegan',
                            'Daya tutup tinggi (1-2 lapis)',
                            'Tahan lama hingga 10 tahun',
                            'Minim bau, ramah lingkungan',
                            'Tersedia 1000+ pilihan warna',
                        ],
                        'gambar' => 'https://images.unsplash.com/photo-1615529182904-14819c35db37?w=600&q=80',
                    ],
                    [
                        'nama' => 'Jotun Weathershield',
                        'kategori' => 'Cat Eksterior Premium',
                        'tagline' => 'Terlaris',
                        'deskripsi' => 'Cat eksterior premium dengan perlindungan maksimal terhadap cuaca ekstrem. Tahan panas, hujan, dan tidak mudah pudar hingga 12 tahun.',
                        'keunggulan' => [
                            'Tahan cuaca ekstrem hingga 12 tahun',
                            'Anti jamur & lumut',
                            'Warna tidak mudah pudar',
                            'Permukaan mudah dibersihkan',
                            'Cocok untuk semua jenis dinding',
                        ],
                        'gambar' => 'https://images.unsplash.com/photo-1568605114967-8130f3a36994?w=600&q=80',
                    ],
                    [
                        'nama' => 'Jotun Fenomastic',
                        'kategori' => 'Cat Interior Anti Bakteri',
                        'tagline' => 'Tahan Cuci',
                        'deskripsi' => 'Cat interior dengan teknologi anti-bakteri dan tahan cuci. Cocok untuk dapur, kamar mandi, dan ruangan yang sering dibersihkan.',
                        'keunggulan' => [
                            'Tahan cuci & gosok',
                            'Anti-bakteri & anti-jamur',
                            'Cocok untuk dapur & kamar mandi',
                            'Permukaan mudah dibersihkan',
                            'Aman untuk anak-anak',
                        ],
                        'gambar' => 'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=600&q=80',
                    ],
                    [
                        'nama' => 'Floor Coating Epoxy',
                        'kategori' => 'Cat Lantai Spesialis',
                        'tagline' => 'Spesialis',
                        'deskripsi' => 'Cat lantai epoxy berkualitas tinggi untuk parkiran, gudang, kantor, dan lapangan olahraga. Tersedia jasa aplikasi profesional.',
                        'keunggulan' => [
                            'Tahan beban berat',
                            'Anti slip & mudah dibersihkan',
                            'Tahan bahan kimia',
                            'Cocok untuk area industri',
                            'Tersedia jasa aplikasi',
                        ],
                        'gambar' => 'https://images.unsplash.com/photo-1590674899484-d5640e854abe?w=600&q=80',
                    ],
                ];
            @endphp

            @foreach ($produkUnggulan as $index => $produk)
            <div class="group bg-white rounded-2xl overflow-hidden border border-gray-100 hover:border-brand-200 hover:shadow-xl transition-all cursor-pointer reveal reveal-delay-{{ $index + 1 }}"
                 onclick="openProdukModal({{ $index }})">
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ $produk['gambar'] }}"
                         alt="{{ $produk['nama'] }}"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-3 right-3 bg-white/90 backdrop-blur text-brand-600 text-xs font-bold px-2 py-1 rounded-full">
                        {{ $produk['tagline'] }}
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-lg text-gray-900">{{ $produk['nama'] }}</h3>
                    <p class="mt-1 text-xs text-gray-500">{{ $produk['kategori'] }}</p>
                    <p class="mt-2 text-sm text-gray-600 line-clamp-2">{{ $produk['deskripsi'] }}</p>
                    <div class="mt-4 inline-flex items-center gap-1 text-sm text-brand-600 font-semibold group-hover:gap-2 transition-all">
                        Lihat Detail
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============ MODAL DETAIL PRODUK ============ --}}
<div id="produkModal" class="hidden fixed inset-0 z-[100] items-center justify-center p-4 bg-black/60 backdrop-blur-sm">
    <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto shadow-2xl">
        <div class="relative">
            <img id="modalGambar" src="" alt="" class="w-full h-64 object-cover">
            <button onclick="closeProdukModal()" class="absolute top-4 right-4 bg-white/90 hover:bg-white rounded-full p-2 shadow-lg transition">
                <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <div class="p-6 md:p-8">
            <span id="modalTagline" class="inline-block bg-brand-100 text-brand-700 text-xs font-semibold px-3 py-1 rounded-full"></span>
            <h2 id="modalNama" class="mt-3 text-2xl md:text-3xl font-bold text-gray-900"></h2>
            <p id="modalKategori" class="text-sm text-gray-500 mt-1"></p>
            <p id="modalDeskripsi" class="mt-4 text-gray-600 leading-relaxed"></p>

            <h3 class="mt-6 font-bold text-gray-900">Keunggulan:</h3>
            <ul id="modalKeunggulan" class="mt-3 space-y-2"></ul>

            <a id="modalWA" href="#" target="_blank"
               class="mt-8 w-full inline-flex items-center justify-center gap-2 bg-wa hover:bg-green-600 text-white font-semibold px-6 py-3 rounded-lg transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                </svg>
                Tanya Produk Ini
            </a>
        </div>
    </div>
</div>

{{-- ============ SCRIPT MODAL PRODUK ============ --}}
<script>
    const produkData = @json(config('site.produk_unggulan', []));

    function openProdukModal(index) {
        const p = produkData[index];
        if (!p) return;

        document.getElementById('modalGambar').src = p.gambar;
        document.getElementById('modalGambar').alt = p.nama;
        document.getElementById('modalTagline').textContent = p.tagline;
        document.getElementById('modalNama').textContent = p.nama;
        document.getElementById('modalKategori').textContent = p.kategori || '';
        document.getElementById('modalDeskripsi').textContent = p.deskripsi;

        const ul = document.getElementById('modalKeunggulan');
        ul.innerHTML = '';
        p.keunggulan.forEach(item => {
            const li = document.createElement('li');
            li.className = 'flex items-start gap-2 text-sm text-gray-700';
            li.innerHTML = `
                <svg class="w-5 h-5 text-brand-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <span>${item}</span>
            `;
            ul.appendChild(li);
        });

        const waUrl = 'https://wa.me/{{ config('site.whatsapp') }}?text=' + encodeURIComponent('Halo, saya mau tanya tentang ' + p.nama);
        document.getElementById('modalWA').href = waUrl;

        const modal = document.getElementById('produkModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeProdukModal() {
        const modal = document.getElementById('produkModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = '';
    }

    document.getElementById('produkModal')?.addEventListener('click', (e) => {
        if (e.target.id === 'produkModal') closeProdukModal();
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeProdukModal();
    });
</script>

@endsection