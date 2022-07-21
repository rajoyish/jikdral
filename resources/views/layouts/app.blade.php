<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {!! SEOMeta::generate() !!}
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @vite(['resources/js/app.js'])
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
