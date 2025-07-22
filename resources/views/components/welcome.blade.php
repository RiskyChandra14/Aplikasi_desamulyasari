@extends('layouts.app')

    {{-- Section Jelajahi Desa --}}
    <section class="px-6 py-12 bg-white">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row gap-12 items-start">
            <div class="md:w-1/2">
                <h2 class="text-3xl md:text-4xl font-extrabold text-red-600 mb-4">JELAJAHI DESA</h2>
                <p class="text-gray-800 text-base leading-relaxed text-justify">
                    Melalui website ini Anda dapat menjelajahi segala hal yang terkait dengan desa.
                    Aspek pemerintahan, penduduk, demografi, potensi desa, dan juga berita tentang desa.
                </p>
            </div>
            <div class="md:w-1/2 grid grid-cols-2 gap-6">
                <a href="{{ route('profil') }}" class="bg-white shadow-md p-6 rounded-lg text-center hover:shadow-lg transition">
                    <img src="{{ asset('images/icon-profil.png') }}" alt="Profil Desa" class="mx-auto h-16 mb-3">
                    <div class="font-semibold text-gray-700">PROFIL DESA</div>
                </a>
                <a href="{{ route('infografis') }}" class="bg-white shadow-md p-6 rounded-lg text-center hover:shadow-lg transition">
                    <img src="{{ asset('images/icon-infografis.png') }}" alt="Infografis" class="mx-auto h-16 mb-3">
                    <div class="font-semibold text-gray-700">INFOGRAFIS</div>
                </a>
                <a href="{{ route('idm') }}" class="bg-white shadow-md p-6 rounded-lg text-center hover:shadow-lg transition">
                    <img src="{{ asset('images/icon-idm.png') }}" alt="IDM" class="mx-auto h-16 mb-3">
                    <div class="font-semibold text-gray-700">IDM</div>
                </a>
                <a href="{{ route('ppid') }}" class="bg-white shadow-md p-6 rounded-lg text-center hover:shadow-lg transition">
                    <img src="{{ asset('images/icon-ppid.png') }}" alt="PPID" class="mx-auto h-16 mb-3">
                    <div class="font-semibold text-gray-700">PPID</div>
                </a>
            </div>
        </div>
    </section>
