<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.header')

<body class="font-lemonada">
    @include('layouts.menu')

    @yield('content')

    @include('layouts.footer')
</body>

</html>
