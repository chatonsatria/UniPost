@extends('dashboard.layouts.main')
@section('content')
<div class="flex flex-row w-3/4 h-auto mx-auto py-11">

<div class="flex flex-col w-auto h-auto">
    <div class="grid grid-cols-4 text-black font-semibold text-lg gap-6 my-6">
        <div class="w-full h-full rounded-md bg-white text-center py-2 opacity-0"  x-intersect="$el.classList.add('animate-fadeInUp')">
            <p class="opacity-0" x-intersect="$el.classList.add('animate-fadeInDown')">images</p>
        </div>
        <div class="flex flex-col w-full h-full px-3 text-center place-items-center place-content-center bg-white rounded-md opacity-0"  x-intersect="$el.classList.add('animate-fadeInUp')">
            <p class="opacity-0" x-intersect="$el.classList.add('animate-fadeInDown')">Title</p>
        </div>
        <div class="flex flex-col w-full h-full px-3 text-center place-items-center place-content-center bg-white rounded-md opacity-0"  x-intersect="$el.classList.add('animate-fadeInUp')">
            <h1 class="opacity-0" x-intersect="$el.classList.add('animate-fadeInDown')">Category</h1>
        </div>
        <div class="flex flex-row w-full h-full px-3 text-center place-items-center place-content-center gap-x-6">
            <div class="flex flex-row w-full h-full px-3 text-center place-items-center place-content-center bg-white rounded-md opacity-0" x-intersect="$el.classList.add('animate-fadeInUp')">
                <h1 class="opacity-0" x-intersect="$el.classList.add('animate-fadeInDown')">Actions</h1>
            </div>
        </div>
    </div>
    @foreach ($posts as $item)
        <div class="grid grid-cols-4 text-black gap-6 my-6">
            <div class="w-full h-[100px] rounded-md overflow-y-scroll hide-scroll-bar">
                @if ($item->image)
                <div>
                    <img src="{{ asset('storage/' . $item->image) }}" class="w-full h-full rounded-md opacity-0" x-intersect="$el.classList.add('animate-fadeInUp')"
                        alt="https://source.unsplash.com/1200x400?{{ $item->category->name }}">
                </div>
                @else
                <div>
                    <img src="https://source.unsplash.com/1200x400?{{ $item->category->name }}" class="w-full h-[100px] rounded-md opacity-0" x-intersect="$el.classList.add('animate-fadeInUp')"
                        alt="https://source.unsplash.com/1200x400?{{ $item->category->name }}">
                </div>
                @endif
            </div>
            <div class="flex flex-col w-full h-full px-3 text-center text-lg place-items-center place-content-center bg-white rounded-md opacity-0" x-intersect="$el.classList.add('animate-fadeInUp')">
                <p>{{ $item->title }}</p>
            </div>
            <div class="flex flex-col w-full h-full px-3 text-center text-lgd place-items-center place-content-center bg-white rounded-md opacity-0" x-intersect="$el.classList.add('animate-fadeInUp')">
                <h1>{{ $item->category->name }}</h1>
            </div>
            <div class="flex flex-row w-full h-full px-3 text-center place-items-center place-content-center gap-x-6">
                <div class="flex flex-row w-full h-full px-3 text-center place-items-center place-content-center bg-white rounded-md opacity-0" x-intersect="$el.classList.add('animate-fadeInUp')">
                    <a href="/dashboard/posts/{{ $item->slug }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="green">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                      </svg>
                    </a>
                </div>
                <div class="flex flex-row w-full h-full px-3 text-center place-items-center place-content-center bg-white rounded-md opacity-0" x-intersect="$el.classList.add('animate-fadeInUp')">
                    <a href="/dashboard/posts/{{ $item->slug }}/edit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="orange" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                    </a>
                </div>
                <div class="flex flex-row w-full h-full px-3 text-center place-items-center place-content-center bg-white rounded-md opacity-0" x-intersect="$el.classList.add('animate-fadeInUp')">
                    <form action="/dashboard/posts/{{ $item->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button onclick="return confirm('delete this post?')"><svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="red">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                          </svg></button>
                      </form>
                    
                </div>
            </div>
        </div>
        @endforeach
</div>

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
