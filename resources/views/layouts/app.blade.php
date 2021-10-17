<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.header')
        @livewireStyles
    </head>
    <body class="font-lemonada">
        @include('layouts.menu')

        @yield('content')

        @include('layouts.footer')
    </body>
    @livewireScripts
    <script>
        window.addEventListener('closeModal', event => {
            $('.monster-modal').modal('hide');
        })
    </script>
</html>
