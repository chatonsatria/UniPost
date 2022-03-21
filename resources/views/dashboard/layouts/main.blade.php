<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Alpine Plugins -->
    <script defer src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <!-- Alpine Core -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- trix editor --}}
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
    <title>Dashboard | {{ auth()->user()->username }}</title>
</head>
<body class="font-sans bg-black" x-data>
    <section class="flex w-full h-auto py-6">
        @include('dashboard.layouts.header')
    </section>
    <section class="flex w-full h-auto bg-white py-6 opacity-0" x-intersect="$el.classList.add('animate-fadeIn')">
        @include('dashboard.layouts.navbar')
    </section>
    <section class="flex flex-col w-full min-h-screen">
        @yield('content')
    </section>
    <section class="flex flex-col w-full h-auto mt-32 bg-white">
        @include('dashboard.layouts.footer')
    </section>
</body>
</html>