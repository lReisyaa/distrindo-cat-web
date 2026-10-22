@extends('layouts.app')

@section('title', 'Katalog Produk Jotun')

@section('content')

{{-- HERO --}}
<section class="bg-gradient-to-br from-brand-50 to-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center reveal">
        <span class="text-brand-600 font-semibold text-sm uppercase tracking-wide">Katalog Lengkap</span>
        <h1 class="mt-2 text-4xl md:text-5xl font-bold text-gray-900">Produk Jotun</h1>
        <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
            Temukan produk cat Jotun yang tepat untuk interior, eksterior, kayu & besi, hingga kebutuhan khusus Anda.
        </p>
    </div>
</section>

{{-- FILTER & PRODUK --}}
<section class="py-16 bg-white" x-data="{ filter: 'Semua' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Tombol Filter --}}
        <div class="flex flex-wrap justify-center gap-3 mb-12 reveal">
            <button @click="filter = 'Semua'" :class="{'bg-brand-600 text-white': filter === 'Semua', 'bg-gray-100 text-gray-700 hover:bg-gray-200': filter !== 'Semua'}" class="px-5 py-2 rounded-full font-semibold text-sm transition">Semua Produk</button>
            <button @click="filter = 'Interior'" :class="{'bg-brand-600 text-white': filter === 'Interior', 'bg-gray-100 text-gray-700 hover:bg-gray-200': filter !== 'Interior'}" class="px-5 py-2 rounded-full font-semibold text-sm transition">Interior</button>
            <button @click="filter = 'Eksterior'" :class="{'bg-brand-600 text-white': filter === 'Eksterior', 'bg-gray-100 text-gray-700 hover:bg-gray-200': filter !== 'Eksterior'}" class="px-5 py-2 rounded-full font-semibold text-sm transition">Eksterior</button>
            <button @click="filter = 'Kayu & Besi'" :class="{'bg-brand-600 text-white': filter === 'Kayu & Besi', 'bg-gray-100 text-gray-700 hover:bg-gray-200': filter !== 'Kayu & Besi'}" class="px-5 py-2 rounded-full font-semibold text-sm transition">Kayu & Besi</button>
            <button @click="filter = 'Speciality'" :class="{'bg-brand-600 text-white': filter === 'Speciality', 'bg-gray-100 text-gray-700 hover:bg-gray-200': filter !== 'Speciality'}" class="px-5 py-2 rounded-full font-semibold text-sm transition">Speciality</button>
        </div>

        {{-- Grid Produk --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach (config('site.produk_lengkap') as $index => $produk)
            <div x-show="filter === 'Semua' || filter === '{{ $produk['kategori'] }}'"
                 x-transition.opacity.duration.500ms
                 class="group bg-white rounded-2xl overflow-hidden border border-gray-100 hover:border-brand-200 hover:shadow-xl transition-all cursor-pointer flex flex-col h-full reveal"
                 onclick="openModal({{ $index }})">
                
                {{-- Gambar Produk --}}
                <div class="relative h-48 bg-gray-50 flex items-center justify-center overflow-hidden border-b border-gray-100">
                    @if(isset($produk['gambar']) && $produk['gambar'])
                        {{-- Deteksi otomatis: link internet (http) atau file lokal (images/...) --}}
                        <img src="{{ Str::startsWith($produk['gambar'], 'http') ? $produk['gambar'] : asset($produk['gambar']) }}" 
                             alt="{{ $produk['nama'] }}" 
                             class="w-full h-full object-contain p-2 group-hover:scale-110 transition-transform duration-500">
                    @else
                        <svg class="w-20 h-20 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10H7v-2h10v2zm0-4H7V7h10v2z"/>
                        </svg>
                    @endif
                    
                    <div class="absolute top-3 right-3 bg-white/90 backdrop-blur text-brand-600 text-xs font-bold px-2 py-1 rounded-full shadow-sm z-10">
                        {{ $produk['tagline'] }}
                    </div>
                    <div class="absolute bottom-3 left-3 bg-gray-800/80 backdrop-blur text-white text-[10px] font-semibold px-2 py-1 rounded-md uppercase tracking-wider z-10">
                        {{ $produk['kategori'] }}
                    </div>
                </div>

                <div class="p-5 flex flex-col flex-grow">
                    <h3 class="font-bold text-lg text-gray-900 leading-tight">{{ $produk['nama'] }}</h3>
                    <p class="mt-2 text-sm text-gray-600 line-clamp-3 flex-grow">{{ $produk['deskripsi'] }}</p>
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

{{-- CTA --}}
<section class="pb-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-brand-600 to-brand-700 rounded-3xl p-8 md:p-16 text-center text-white relative overflow-hidden reveal-scale">
            <div class="relative">
                <h2 class="text-3xl md:text-4xl font-bold">Bingung Memilih Produk?</h2>
                <p class="mt-4 text-lg text-white/90 max-w-2xl mx-auto">
                    Tim kami siap membantu Anda memilih cat yang tepat sesuai kebutuhan dan budget.
                </p>
                <a href="https://wa.me/{{ config('site.whatsapp') }}?text={{ urlencode('Halo, saya mau tanya tentang produk Jotun') }}" target="_blank" class="mt-8 inline-flex items-center gap-2 bg-wa hover:bg-green-600 text-white font-semibold px-8 py-4 rounded-lg transition shadow-lg">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                    Chat WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

{{-- MODAL DETAIL --}}
<div id="produkModal" class="hidden fixed inset-0 z-[100] items-center justify-center p-4 bg-black/60 backdrop-blur-sm">
    <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto shadow-2xl">
        
        {{-- Gambar Modal --}}
        <div class="relative bg-gray-50 h-64 flex items-center justify-center border-b border-gray-100">
            <img id="modalGambar" src="" alt="" class="w-full h-full object-contain p-4 hidden">
            <div id="modalGambarFallback" class="w-24 h-24 text-gray-300 hidden">
                <svg fill="currentColor" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
            </div>
            <button onclick="closeModal()" class="absolute top-4 right-4 bg-white/90 hover:bg-white rounded-full p-2 shadow-lg transition z-10">
                <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        <div class="p-6 md:p-8">
            <div class="flex gap-2 mb-3">
                <span id="modalKategori" class="inline-block bg-gray-100 text-gray-700 text-xs font-semibold px-3 py-1 rounded-full"></span>
                <span id="modalTagline" class="inline-block bg-brand-100 text-brand-700 text-xs font-semibold px-3 py-1 rounded-full"></span>
            </div>
            <h2 id="modalNama" class="text-2xl md:text-3xl font-bold text-gray-900"></h2>
            <p id="modalDeskripsi" class="mt-4 text-gray-600 leading-relaxed"></p>

            <h3 class="mt-6 font-bold text-gray-900">Fitur Utama:</h3>
            <ul id="modalKeunggulan" class="mt-3 space-y-2"></ul>

            <div id="modalPrimerBox" class="mt-6 p-4 bg-gray-50 rounded-lg border border-gray-100">
                <p class="text-sm text-gray-600"><strong class="text-gray-900">Primer / Anti-alkali:</strong> <span id="modalPrimer"></span></p>
            </div>

            <a id="modalWA" href="#" target="_blank" class="mt-8 w-full inline-flex items-center justify-center gap-2 bg-wa hover:bg-green-600 text-white font-semibold px-6 py-3 rounded-lg transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                Tanya Produk Ini
            </a>
        </div>
    </div>
</div>

{{-- SCRIPT MODAL & FILTER --}}
<script>
    // Script Alpine.js (untuk filter)
    if (typeof Alpine === 'undefined') {
        let script = document.createElement('script');
        script.src = "https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js";
        script.defer = true;
        document.head.appendChild(script);
    }

    // Script Modal
    const produkData = @json(config('site.produk_lengkap', []));

    function openModal(index) {
        const p = produkData[index];
        if (!p) return;

        // Logika Gambar Modal
        const imgModal = document.getElementById('modalGambar');
        const imgFallback = document.getElementById('modalGambarFallback');
        
        if (p.gambar) {
            // Cek apakah link internet (http) atau file lokal (images/...)
            imgModal.src = p.gambar.startsWith('http') ? p.gambar : "{{ asset('') }}" + p.gambar;
            imgModal.classList.remove('hidden');
            imgFallback.classList.add('hidden');
        } else {
            imgModal.classList.add('hidden');
            imgFallback.classList.remove('hidden');
        }

        document.getElementById('modalKategori').textContent = p.kategori;
        document.getElementById('modalTagline').textContent = p.tagline;
        document.getElementById('modalNama').textContent = p.nama;
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

        if (p.primer && p.primer !== 'Tidak disebutkan') {
            document.getElementById('modalPrimerBox').style.display = 'block';
            document.getElementById('modalPrimer').textContent = p.primer;
        } else {
            document.getElementById('modalPrimerBox').style.display = 'none';
        }

        const waUrl = 'https://wa.me/{{ config('site.whatsapp') }}?text=' + encodeURIComponent('Halo, saya mau tanya tentang produk ' + p.nama);
        document.getElementById('modalWA').href = waUrl;

        const modal = document.getElementById('produkModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        const modal = document.getElementById('produkModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = '';
    }

    document.getElementById('produkModal')?.addEventListener('click', (e) => {
        if (e.target.id === 'produkModal') closeModal();
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeModal();
    });
</script>

@endsection