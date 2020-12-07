<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('frontend.include.head')
<body>
    @include('frontend.include.topbar')
    <div id="app">
        @include('frontend.include.header')
        <main class="body">
            @yield('content')
        </main>
    </div>
    @include('frontend.include.footer')
    @include('frontend.include.scripts')
    @yield('scripts')
</body>
</html>
