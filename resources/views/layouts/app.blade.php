<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Desa</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans">

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Banner / Slider --}}
    @include('components.slider')

    {{-- Section Jelajahi Desa --}}
    @include('components.welcome')

    {{-- Slot konten dinamis --}}
    <main class="mt-4">
        {{ $slot }}
    </main>



    @auth
        @if (auth()->user()->role === 'admin')
            <a href="/admin/dashboard">Dashboard Admin</a>
        @endif
    @endauth

</body>
</html>
