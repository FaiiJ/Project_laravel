<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/util.css">

</head>

<body class="background-auth" style="background-image: url(images/bg-auth.jpg);">
    <main>
        @yield('content')
    </main>
</body>

</html>