@php
$segment1 = Request::segment(1);
$pages = ['objectives', 'projects'];
@endphp
<a href="{{ route('home') }}"
    class="block py-5 px-3 transition-all duration-300 hover:bg-prime-dark hover:text-accent {{ Route::currentRouteNamed('home') ? 'bg-gradient-to-b from-primary to-accent' : '' }}">Home</a>

<span x-data="{ openSubmenu: false }" href="#"
    class="relative transition-all duration-300 hover:bg-ace-gold hover:text-accent">
    <span x-on:click="openSubmenu = ! openSubmenu"
        class="flex items-center  py-5 px-3 cursor-pointer @if (in_array($segment1, $pages)) bg-gradient-to-b from-primary to-accent @endif">
        <span>About us</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd" />
        </svg>
    </span>
    <nav x-show="openSubmenu" @click.away="openSubmenu = false" :class=" openSubmenu ? '' : 'hidden'"
        class="absolute md:w-96 w-full transition-all duration-300 z-10">

        <a href="{{ route('objectives') }}"
            class="block py-5 transition-all pl-6 duration-300 bg-primary hover:bg-prime-dark hover:text-accent {{ Route::currentRouteNamed('objectives') ? 'bg-gradient-to-b from-primary to-accent' : '' }}">
            Objectives
        </a>
        <a href="{{ route('projects') }}"
            class="block py-5 transition-all pl-6 duration-300 bg-primary hover:bg-prime-dark hover:text-accent {{ Route::currentRouteNamed('projects') ? 'bg-gradient-to-b from-primary to-accent' : '' }}">
            Projects
        </a>

    </nav>
</span>

<a href="{{ route('committee') }}"
    class="block py-5 px-3 transition-all duration-300 hover:bg-prime-dark hover:text-accent {{ Route::currentRouteNamed('committee') ? 'bg-gradient-to-b from-primary to-accent' : '' }}">Committee</a>
<a href="{{ route('gallery') }}"
    class="block py-5 px-3 transition-all duration-300 hover:bg-prime-dark hover:text-accent {{ Route::currentRouteNamed('gallery') ? 'bg-gradient-to-b from-primary to-accent' : '' }}">Gallery</a>
<a href="{{ route('donation') }}"
    class="block py-5 px-3 transition-all duration-300 hover:bg-prime-dark hover:text-accent {{ Route::currentRouteNamed('donation') ? 'bg-gradient-to-b from-primary to-accent' : '' }}">Donation</a>
