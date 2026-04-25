<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.partials.head')
<body>

    @include('layouts.partials.nav')

    @yield('hero')

    @yield('content') 
        
    @include('layouts.partials.footer')
    @include('layouts.partials.footer-scripts')
    @yield('js-scripts')
</body>
</html>
