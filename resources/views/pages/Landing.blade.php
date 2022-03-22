@extends('layouts.MainLayouts')

@section('content')
<div class="flex flex-col w-full md:max-w-7xl mt-9 mx-auto gap-y-4 md:gap-y-11">
    <h1 class="font-bold text-3xl md:text-5xl text-white text-center"><span
            class="text_effect hover:cursor-pointer text-white">LATEST</span>
        POST</h1>
    <p class="font-semibold text-lg md:text-3xl text-center text-white">GO <a href="/search"
            class="btn_effect_white">FIND</a> YOUR DESIRE POST TO READ</p>
</div>
<div
    class="flex flex-col lg:grid lg:grid-cols-2 w-full md:max-w-7xl p-2 md:p-4 lg:p-6 xl:p-6 pt-11 gap-6 mx-auto text-white">
    {{-- mobile --}}
    <div class="lg:hidden">
        @if ($post->count())
        <div class="flex flex-col w-full h-auto p-4 rounded">
            {{-- first card --}}
            @if ($post[0]->image)
            <div class="relative h-64 w-full flex items-end justify-start text-left bg-cover bg-center"
                style="background-image:url('storage/{{ $post[0]->image }}');">
                @else
                <div class="relative h-64 w-full flex items-end justify-start text-left bg-cover bg-center"
                    style="background-image:url('https://source.unsplash.com/1200x400?{{ $post[0]->category->name }}');">
                    @endif
                    <div
                        class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                    </div>
                    <div class="absolute top-0 flex items-center">
                        <a href="/posts?category={{ $post[0]->category->slug }}"
                            class="text-md bg-white text-black px-5 py-2 uppercase hover:bg-gray-200 transition ease-in-out bg-opacity-40 rounded-br-md">{{ $post[0]->category->name }}</a>
                    </div>
                    <main class="flex flex-col p-3 z-10">
                        <a href="/post"
                            class="text-2xl tracking-tight font-semibold leading-7 font-regular text-white hover:underline">{{ $post[0]->title }}</a>
                        <p class="text-md font-medium">By. <a href="/posts?user={{ $post[0]->user->username }}"
                                class="text-base font-medium hover:underline">{{ $post[0]->user->name }}</a></p>
                        <p class="text-base font-light">{{ $post[0]->created_at->diffForHumans() }}</p>
                        <a href="/post/{{ $post[0]->slug }}">READ</a>
                    </main>
                </div>
            </div>
            {{-- second card --}}
            <div class="flex flex-col md:grid md:grid-cols-2 p-4 w-full gap-4 text-black">
                <div class="flex flex-col w-full h-auto gap-y-4 bg-white">
                    <div class="relative flex w-full max-h-32">
                        @if ($post[1]->image)
                        <img src="{{ asset('storage/' . $post[1]->image) }}" class="w-full hover:scale-125"
                            alt="https://source.unsplash.com/1200x400?{{ $post[1]->category->name }}">
                        @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post[1]->category->name }}"
                            alt="https://source.unsplash.com/1200x400?{{ $post[1]->category->name }}">
                        @endif
                        <h1
                            class="absolute flex flex-row bg-white bg-opacity-40 transition-all rounded-br-md px-4 py-2">
                            <a href="/post?category={{ $post[1]->category->slug }}"></a> {{ $post[1]->category->name }}
                        </h1>
                    </div>
                    <div class="flex flex-col p-4 gap-y-4">
                        <h1 class="font-base text-lg">{{ $post[1]->created_at->diffForHumans() }}</h1>
                        <h1 class="font-bold text-xl">{{ $post[1]->title }}</h1>
                        <a href="/post/{{ $post[1]->slug }}" class="font-semibold">READ</a>
                    </div>
                </div>
                {{-- third card --}}
                <div class="flex flex-col w-full h-auto gap-y-4 bg-white">
                    <div class="relative flex w-full max-h-32">
                        @if ($post[2]->image)
                        <img src="{{ asset('storage/' . $post[2]->image) }}" class="w-full peer-hover:scale-150"
                            alt="https://source.unsplash.com/1200x400?{{ $post[2]->category->name }}">
                        @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post[2]->category->name }}"
                            alt="https://source.unsplash.com/1200x400?{{ $post[2]->category->name }}">
                        @endif
                        <h1
                            class="absolute flex flex-row bg-white bg-opacity-40 transition-all rounded-br-md px-4 py-2">
                            <a href="/post?category={{ $post[2]->category->slug }}"></a> {{ $post[2]->category->name }}
                        </h1>
                    </div>
                    <div class="flex flex-col p-4 gap-y-4">
                        <h1 class="font-base text-lg">{{ $post[2]->created_at->diffForHumans() }}</h1>
                        <h1 class="font-bold text-xl">{{ $post[2]->title }}</h1>
                        <a href="/post/{{ $post[2]->slug }}" class="font-semibold">READ</a>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <div class="lg:hidden">
            <h1 class="font-semibold text-xl p-4">TODAY'S <span class="text_effect hover:cursor-pointer">POST</span>
            </h1>
            <div class="flex flex-col md:grid md:grid-cols-2 w-full h-auto p-4 gap-4">
                @foreach ($post->skip(3) as $item)
                <div class="grid grid-cols-3 w-full h-auto gap-x-4">
                    <div class="w-full">
                        @if ($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" class="w-full h-full"
                            alt="https://source.unsplash.com/1200x400?{{ $item->category->name }}">
                        @else
                        <img src="https://source.unsplash.com/1200x400?{{ $item->category->name }}"
                            alt="https://source.unsplash.com/1200x400?{{ $item->category->name }}">
                        @endif
                    </div>
                    <div class="col-span-2">
                        <a href="/post?category={{ $item->category->slug }}">
                            <h2 class="hover:underline text-sm md:text-base">{{ $item->category->name }}</h2>
                        </a>
                        <a href="/post/{{ $item->slug }}">
                            <h1 class="hover:underline text-sm md:text-base font-semibold">{{ $item->title }}</h1>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <a href="/posts" class="p-4"><span class="text_effect text-white">SEE MORE</span></a>
        </div>

        {{-- web --}}
        <div class="hidden lg:block">
            <h1 class="font-semibold text-xl p-4">TODAY'S <span class="text_effect hover:cursor-pointer">POST</span>
            </h1>
            <div class="flex flex-col w-full h-auto p-4 gap-4">
                @foreach ($post->skip(3) as $item)
                <div class="grid grid-cols-3 w-full h-auto gap-x-4">
                    <div class="w-full">
                        @if ($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" class="w-full h-full"
                            alt="https://source.unsplash.com/1200x400?{{ $item->category->name }}">
                        @else
                        <img src="https://source.unsplash.com/1200x400?{{ $item->category->name }}"
                            alt="https://source.unsplash.com/1200x400?{{ $item->category->name }}">
                        @endif
                    </div>
                    <div class="col-span-2">
                        <a href="/post?category={{ $item->category->slug }}">
                            <h2 class="hover:underline text-sm md:text-base">{{ $item->category->name }}</h2>
                        </a>
                        <a href="/post/{{ $item->slug }}">
                            <h1 class="hover:underline text-sm md:text-base font-semibold">{{ $item->title }}</h1>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <a href="/posts" class="p-4"><span class="text_effect text-white">SEE MORE</span></a>
        </div>
        <div class="hidden lg:block">
            @if ($post->count())
            <div class="flex flex-col w-full h-auto p-4 rounded">
                {{-- first card --}}
                @if ($post[0]->image)
                <div class="relative min-h-[400px] w-full flex items-end justify-start text-left bg-cover bg-center"
                    style="background-image:url('storage/{{ $post[0]->image }}');">
                    @else
                    <div class="relative h-64 w-full flex items-end justify-start text-left bg-cover bg-center"
                        style="background-image:url('https://source.unsplash.com/1200x400?{{ $post[0]->category->name }}');">
                        @endif
                        <div
                            class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                        </div>
                        <div class="absolute top-0 flex items-center">
                            <a href="/posts?category={{ $post[0]->category->slug }}"
                                class="text-md bg-white text-black px-5 py-2 uppercase hover:bg-gray-200 transition ease-in-out bg-opacity-40 rounded-br-md">{{ $post[0]->category->name }}</a>
                        </div>
                        <main class="flex flex-col p-3 z-10">
                            <a href="/post"
                                class="text-2xl tracking-tight font-semibold leading-7 font-regular text-white hover:underline">{{ $post[0]->title }}</a>
                            <p class="text-md font-medium">By. <a href="/posts?user={{ $post[0]->user->username }}"
                                    class="text-base font-medium hover:underline">{{ $post[0]->user->name }}</a></p>
                            <p class="text-base font-light">{{ $post[0]->created_at->diffForHumans() }}</p>
                            <a href="/post/{{ $post[0]->slug }}">READ</a>
                        </main>
                    </div>
                </div>
                {{-- second card --}}
                <div class="flex flex-col md:grid md:grid-cols-2 p-4 w-full gap-4 text-black">
                    <div class="flex flex-col w-full h-auto gap-y-4 bg-white">
                        <div class="relative flex w-full max-h-32">
                            @if ($post[1]->image)
                            <img src="{{ asset('storage/' . $post[1]->image) }}" class="w-full hover:scale-125"
                                alt="https://source.unsplash.com/1200x400?{{ $post[1]->category->name }}">
                            @else
                            <img src="https://source.unsplash.com/1200x400?{{ $post[1]->category->name }}"
                                alt="https://source.unsplash.com/1200x400?{{ $post[1]->category->name }}">
                            @endif
                            <h1
                                class="absolute flex flex-row bg-white bg-opacity-40 transition-all rounded-br-md px-4 py-2">
                                <a href="/post?category={{ $post[1]->category->slug }}"></a>
                                {{ $post[1]->category->name }}
                            </h1>
                        </div>
                        <div class="flex flex-col p-4 gap-y-4">
                            <h1 class="font-base text-lg">{{ $post[1]->created_at->diffForHumans() }}</h1>
                            <h1 class="font-bold text-xl">{{ $post[1]->title }}</h1>
                            <a href="/post/{{ $post[1]->slug }}" class="font-semibold">READ</a>
                        </div>
                    </div>
                    {{-- third card --}}
                    <div class="flex flex-col w-full h-auto gap-y-4 bg-white">
                        <div class="relative flex w-full max-h-32">
                            @if ($post[2]->image)
                            <img src="{{ asset('storage/' . $post[2]->image) }}" class="w-full peer-hover:scale-150"
                                alt="https://source.unsplash.com/1200x400?{{ $post[2]->category->name }}">
                            @else
                            <img src="https://source.unsplash.com/1200x400?{{ $post[2]->category->name }}"
                                alt="https://source.unsplash.com/1200x400?{{ $post[2]->category->name }}">
                            @endif
                            <h1
                                class="absolute flex flex-row bg-white bg-opacity-40 transition-all rounded-br-md px-4 py-2">
                                <a href="/post?category={{ $post[2]->category->slug }}"></a>
                                {{ $post[2]->category->name }}
                            </h1>
                        </div>
                        <div class="flex flex-col p-4 gap-y-4">
                            <h1 class="font-base text-lg">{{ $post[2]->created_at->diffForHumans() }}</h1>
                            <h1 class="font-bold text-xl">{{ $post[2]->title }}</h1>
                            <a href="/post/{{ $post[2]->slug }}" class="font-semibold">READ</a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

{{-- carousel --}}
<div class="flex carousel relative w-full h-auto place-content-center place-items-center py-11">
    <div class="carousel-inner relative overflow-hidden w-full">
        <!--Slide 1-->
        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
            checked="checked">
        <div class="carousel-item absolute opacity-0 h-full">
            <div class="block h-full w-full">
                <div class="flex flex-col w-full h-full m-auto text-white">
                    <div>
                        <div class="w-full h-full rounded-sm opacity-0 z-0"
                            x-intersect="$el.classList.add('animate-fadeInUpCustom1','-translate-y-[50px]')">
                            <img src="https://source.unsplash.com/1200x400?sports" class="w-full h-full rounded-md"
                                alt="https://source.unsplash.com/1200x400?nature">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <label for="carousel-3"
            class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-slate-300 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-2"
            class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-slate-300 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

        <!--Slide 2-->
        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute opacity-0 h-full">
            <div class="block h-full w-full">
                <div class="flex flex-col w-full h-full m-auto text-white">
                    <div>
                        <div class="w-full h-full rounded-sm opacity-0 z-0"
                            x-intersect="$el.classList.add('animate-fadeInUpCustom1','-translate-y-[50px]')">
                            <img src="https://source.unsplash.com/1200x400?car" class="w-full h-full rounded-md"
                                alt="https://source.unsplash.com/1200x400?nature">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <label for="carousel-1"
            class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-slate-300 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-3"
            class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-slate-300 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

        <!--Slide 3-->
        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute opacity-0 h-full">
            <div class="block h-full w-full">
                <div class="flex flex-col w-full h-full m-auto text-white">
                    <div>
                        <div class="w-full h-full rounded-sm opacity-0 z-0"
                            x-intersect="$el.classList.add('animate-fadeInUpCustom1','-translate-y-[50px]')">
                            <img src="https://source.unsplash.com/1200x400?nature" class="w-full h-full rounded-md"
                                alt="https://source.unsplash.com/1200x400?nature">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <label for="carousel-2"
            class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-slate-300 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-1"
            class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-slate-300 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

        <!-- Add additional indicators for each slide-->
        <ol class="carousel-indicators">
            <li class="inline-block mr-3">
                <label for="carousel-1"
                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-2"
                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-3"
                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
        </ol>

    </div>
</div>

{{-- DESCRIPTION AND REGISTER FORM --}}
    <div class="flex flex-col text-center w-full md:max-w-7xl mx-auto md:text-left md:flex-row md:justify-between">
    @auth
    <div class="flex flex-row w-3/4 place-content-center mx-auto place-items-center justify-between gap-x-[200px]">
        <div class="flex flex-col w-auto text-white">
            <h1 class="text-5xl font-semibold text-center sm:text-left mb-3 opacity-0"
                x-intersect="$el.classList.add('animate-fadeInRight')">What You Can Explore In UniPost.</h1>
            <p class="text-2xl text-center md:text-left mb-2 opacity-0"
                x-intersect="$el.classList.add('animate-fadeInRight')">consectetur adipiscing elit ut aliquam, purus
                sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim
                praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim
                diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam viverra orci sagittis eu
                volutpat odio facilisis mauris sit.</p>
        </div>
    </div>
    @else
    <div class="flex flex-col md:flex-row w-full md:max-w-7xl mx-auto place-content-center place-items-center justify-between gap-x-[200px]">
        <div class="flex flex-col w-auto text-white">
            <h1 class="text-2xl md:text-5xl font-semibold text-center sm:text-left mb-3 opacity-0"
                x-intersect="$el.classList.add('animate-fadeInRight')">What You Can Explore In UniPost.</h1>
            <p class="text-lg md:text-2xl text-center md:text-left mb-2 opacity-0"
                x-intersect="$el.classList.add('animate-fadeInRight')">consectetur adipiscing elit ut aliquam, purus
                sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim
                praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim
                diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam viverra orci sagittis eu
                volutpat odio facilisis mauris sit.</p>
        </div>
        <div class="w-full h-auto opacity-0 p-6" x-intersect="$el.classList.add('animate-fadeInLeft')">
            <form action="/register" method="POST"
                class="w-full bg-white shadow-md rounded border px-8 pt-6 pb-8 mb-4 mx-auto">
                @csrf
                <h1 class="block text-gray-700 text-xl font-bold text-center mb-6">Register Here</h1>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2 text-left" for="name">
                        Name
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') is-invalid @enderror"
                        id="name" type="name" placeholder="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2 text-left" for="username">
                        Username
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('username') is-invalid @enderror"
                        id="username" type="username" placeholder="Username" name="username"
                        value="{{ old('username') }}">
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2 text-left" for="email">
                        Email
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') is-invalid @enderror"
                        id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2 text-left" for="password">
                        Password
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline @error('password') is-invalid @enderror"
                        id="password" name="password" type="password" placeholder="Password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="flex items-center w-full mb-3">
                    <button
                        class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Register
                    </button>
                </div>
                <div>
                    <p class="text-right text-base">Already Registered ? <a href="/login"
                            class="text-blue-500 hover:text-blue-800 text-base">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    @endauth

</div>
<style>
    .hide-scroll-bar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .hide-scroll-bar::-webkit-scrollbar {
        display: none;
    }

</style>
@endsection
