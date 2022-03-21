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
    <style>
			.carousel-open:checked + .carousel-item {
				position: static;
				opacity: 100;
			}
			.carousel-item {
				-webkit-transition: opacity 0.6s ease-out;
				transition: opacity 0.6s ease-out;
			}
			#carousel-1:checked ~ .control-1,
			#carousel-2:checked ~ .control-2,
			#carousel-3:checked ~ .control-3 {
				display: block;
			}
			.carousel-indicators {
				list-style: none;
				margin: 0;
				padding: 0;
				position: absolute;
				bottom: 2%;
				left: 0;
				right: 0;
				text-align: center;
				z-index: 10;
			}
			#carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
			#carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
			#carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
				color: #2b6cb0;  /*Set to match the Tailwind colour you want the active one to be */
			}
		</style>
    <link rel="stylesheet" href="/css/buttons.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="/images/logo.png">
<title>UniPost | {{ $title }}</title>
</head>
<body x-data="{scrolledFromTop: false, dropdownMenu: false}"
      x-init="window.pageYOffset > 60 ? scrolledFromTop = true : scrolledFromTop : false"
      @scroll.window="window.pageYOffset > 60 ? scrolledFromTop = true : scrolledFromTop : false"
      class="bg-black font-Montserrat">
      
      {{-- link portfolio --}}
      <div class="fixed flex flex-col w-[100px] min-h-screen place-content-center place-items-left z-10">
        <a href="#"><span class="bg-purple-600 fixed p-2 w-auto h-auto rounded-full text-white border border-purple-600 hover:text-white hover:bg-purple-500 transition duration-200">< Portfolio</span></a> 
      </div>

      <section>
        {{-- header --}}
        @include('parts.Navigation')
      </section>

      <section>
        {{-- body --}}
        @yield('content')
      </section>

      <section class="mt-[250px]">
        {{-- footer --}}
        @include('layouts.footer')
      </section>

      <script src="/js/script.js"></script>
</body>
</html>