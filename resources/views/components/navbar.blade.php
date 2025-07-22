<header class="bg-red-700 text-white shadow">
    <div class="w-full max-w-screen-xl mx-auto flex flex-wrap items-center justify-between px-8 py-3">
        <!-- Logo & Nama Desa -->
        <div class="flex items-center space-x-3">
            <img src="{{ asset('logo_desa.png') }}" alt="Logo Desa" class="h-12 w-12 rounded-full">
            <div>
                <div class="font-bold text-lg">Desa Mulyasari</div>
                <div class="text-sm">Kecamatan Mande Kabupaten Cianjur</div>
            </div>
        </div>

        <!-- Menu Navigasi -->
        <nav>
            <ul class="flex flex-wrap items-center gap-6 text-sm font-semibold">
                <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                <li><a href="{{ route('profil') }}" class="hover:underline">Profil Desa</a></li>
                <li><a href="{{ route('infografis') }}" class="hover:underline">Infografis</a></li>
                <li><a href="{{ route('listing') }}" class="hover:underline">Listing</a></li>
                <li><a href="{{ route('idm') }}" class="hover:underline">IDM</a></li>
                <li><a href="{{ route('berita') }}" class="hover:underline">Berita</a></li>
                <li><a href="{{ route('belanja') }}" class="hover:underline">Belanja</a></li>
                <li><a href="{{ route('ppid') }}" class="hover:underline">PPID</a></li>
            </ul>
        </nav>
    </div>
</header>
