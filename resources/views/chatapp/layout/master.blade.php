<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ChatApp')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css')}}">
    @stack('styles')
</head>

<body>
    @include('chatapp.layout.header')
    @yield('content')
    @stack('scripts')
</body>

</html>
