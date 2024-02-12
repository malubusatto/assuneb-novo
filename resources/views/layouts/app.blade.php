<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<head>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <!-- Outras seções para meta tags, estilos, scripts, etc. -->
</head>
</head>
<body>

    @include('header')

    <div class="container">
        @yield('content')
    </div>

    @include('footer')

</body>
</html>
