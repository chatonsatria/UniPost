@extends('layouts.MainLayouts')

@section('content')
<section class="flex flex-col w-full place-items-end">
    <div class="w-[175px] h-[2px] bg-white my-2" x-intersect="$el.classList.add('animate-fadeInDown')"></div>
    <div class="w-[125px] h-[2px] bg-red-900 my-2" x-intersect="$el.classList.add('animate-fadeInLeft')"></div>
    <div class="w-[150px] h-[2px] bg-white my-2" x-intersect="$el.classList.add('animate-fadeInUp')"></div>
</section>
<section class="flex flex-col w-full">
    <div class="w-[180px] h-[2px] bg-white my-2" x-intersect="$el.classList.add('animate-fadeInDown')"></div>
    <div class="w-[100px] h-[2px] bg-red-900 my-2" x-intersect="$el.classList.add('animate-fadeInRight')"></div>
    <div class="w-[125px] h-[2px] bg-white my-2" x-intersect="$el.classList.add('animate-fadeInUp')"></div>
</section>
<section class="flex flex-col w-full h-auto rounded-md mb-6">
<div class="flex flex-row place-content-between place-items-center w-3/4 mx-auto mb-6">
    <h3 style="text-align: start" class="text-white text-5xl">{{ $title }}</h3>
    {{-- searching --}}
    <form action="/posts">
        @if (request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('user'))
        <input type="hidden" name="user" value="{{ request('user') }}">
        @endif
        <div class="flex flex-row">
            <input type="text" class="shadow appearance-none border rounded-l-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Search.." name="search"
                value="{{ request('search') }}">
            <button class="text-white bg-blue-600 rounded-r-md px-3 hover:bg-blue-500 active:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-400 focus:bg-blue-500 transition duration-200 text-center text-lg" type="submit">Search</button>
        </div>
    </form>
</div>
@if ($posts->count())
    {{-- hero posts --}}
        <div class="flex flex-col w-3/4 mx-auto rounded-md">

            <div class="flex w-full h-full m-auto rounded-l-md">
                @if ($posts[0]->image)
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" class="w-full h-full rounded-t-md"
                    alt="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}">
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="w-full h-full rounded-t-md"
                    alt="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}">
                @endif
                <h1 class="absolute h-auto w-auto p-3 bg-black bg-opacity-50 text-white text-lg rounded-tl-md"><a href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a></h1>
            </div>
            <div class="flex flex-row w-full p-6 justify-between bg-white rounded-b-md">
                <h1 x-intersect="$el.classList.add('animate-fadeInUp')">
                    Category
                    <br>
                    <span class="text-lg font-semibold">{{ $posts[0]->category->name }}</span>
                </h1>
                <h1 x-intersect="$el.classList.add('animate-fadeInUp')">
                    Author
                    <br>
                    <span class="text-lg font-semibold">{{ $posts[0]->user->name }}</span>
                </h1>
                <h1 x-intersect="$el.classList.add('animate-fadeInUp')">
                    Posted Time
                    <br>
                    <span class="text-lg font-semibold">{{ $posts[0]->created_at->diffForHumans() }}</span>
                </h1>
                <h1 x-intersect="$el.classList.add('animate-fadeInUp')" class="max-w-[400px]"><span class="text-lg font-semibold">{{ $posts[0]->title }}</span>
                <br>
                {!! $posts[0]->excerpt !!}
                </h1>
                <h1 x-intersect="$el.classList.add('animate-fadeInUp')" class="flex flex-col place-content-between"><span class="opacity-75">1000 people like this</span>
                    <br>
                    <a href="/post/{{ $posts[0]->slug }}"
                        class="h-auto text-white bg-blue-600 rounded-md py-[2px] px-[24px] hover:bg-blue-500 active:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-400 focus:bg-blue-500 transition duration-200 text-center text-lg">Read</a>
                </h1>
            </div>

        </div>
    </section>
    {{-- child posts --}}
    <section class="flex w-full h-auto">
        <div class="grid grid-cols-3 w-3/4 mx-auto gap-5">
            
                @foreach ($posts->skip(1) as $item)
                <div class="flex flex-row w-full">
                    <div
                        class="w-full h-auto overflow-hidden rounded-md shadow-md hover:shadow-xl transition-shadow duration-300 ease-in-out flex-col opacity-0 bg-white" x-intersect="$el.classList.add('animate-fadeInUp')">
                        <div class="w-auto bg-slate-200 p-2 text-base">
                            <a href="/posts?category={{ $item->category->slug }}">{{ $item->category->name }}</a>
                        </div>
                        <div>
                            @if ($item->image)
                            <div style="max-height: 110px; overflow:hidden;">
                                <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top"
                                    alt="https://source.unsplash.com/1200x400?{{ $item->category->name }}">
                            </div>
                            @else
                            <div style="max-height: 350px; overflow:hidden;">
                                <img src="https://source.unsplash.com/1200x400?{{ $item->category->name }}"
                                    class="card-img-top"
                                    alt="https://source.unsplash.com/1200x400?{{ $item->category->name }}">
                            </div>
                            @endif
                        </div>
                        <div class="px-[12px] w-full h-[200px] overflow-hidden py-2">
                            <div class="w-full h-[60px] text-lg font-semibold">
                                <h5><a href='/post/{{ $item->slug }}'>{{ $item->title }}</a></h5>
                            </div>
                            <div class="flex flex-row w-full place-content-between justify-between mb-2">
                                <p class="text-lg">By. <a href="/posts?user={{ $item->user->username }}" class="font-semibold">{{ $item->user->name }}</a></p>
                                <p class="text-base">{{ $item->created_at->diffForHumans() }}</span></p>
                            </div>
                            <div>
                                <article class="text-md">{!! $item->excerpt !!}</article>
                            </div>
                        </div>
                        <div class="flex flex-col px-[12px] py-4">
                            <a href="/post/{{ $item->slug }}"
                                class="h-auto text-white bg-blue-600 rounded-md py-[2px] px-[24px] hover:bg-blue-500 active:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-400 focus:bg-blue-500 transition duration-200 text-center text-lg">Read</a>
                        </div>
                    </div>
                </div>
                @endforeach
            
        </div>
    </section>
@else
    <div class="flex w-full h-screen">
        <h1 class="text-white m-auto text-5xl">Post Not Found</h1>
    </div>
@endif
<div class="flex flex-row w-full mt-6">
    <div class="flex flex-row w-3/4 m-auto place-content-end place-items-end">
        <div>
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection