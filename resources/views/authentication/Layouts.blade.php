<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="trix.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Alpine Plugins -->
    <script defer src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <!-- Alpine Core -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        html {
          scroll-behavior: smooth;
        }
    </style>
    <link rel="stylesheet" href="/css/buttons.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="/images/logo.png">
<title>UniPost | {{ $title }}</title>
</head>
<body class="bg-black font-Montserrat">
        @yield('content')
</body>
</html>