<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jikdral Thinley Rinpoche Organization</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app.ac31adfe.css') }}">
    <script src="{{ asset('build/assets/app.35fad195.js') }}"></script> --}}
</head>

<body>
    {{-- SITE HEADER TITLE --}}
    @include('layouts.site-title')

    {{-- HOME MENU/NAVBAR --}}
    @include('layouts.home-nav')

    {{-- CONTENT --}}
    <section class="p-10">
        {{ $slot }}
    </section>
</body>

</html>
