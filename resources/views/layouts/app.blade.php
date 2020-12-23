<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('frontend.include.head')
<body>
    @include('frontend.include.topbar')
    @include('frontend.include.header')
    <div id="app">
        @yield('content')
    </div>
    @include('frontend.include.footer')
    @include('frontend.include.scripts')
    @yield('scripts')
</body>
</html>