<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @yield('head')
    <title>Bukuqu</title>
</head>

<body data-bs-theme="dark" class="bg-dark">
    @include('partials.navbar')
    <!-- Offcanvas Menu for Mobile -->

    <main class="py-5">
        @yield('content')
    </main>
    {{-- @include('partials.footer') --}}
</body>

</html>
