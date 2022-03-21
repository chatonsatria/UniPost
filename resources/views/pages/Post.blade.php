@extends('layouts.MainLayouts')
@section('content')
    <div class="flex flex-row w-full h-auto p-11 bg-white my-11">
        <div class="flex flex-col w-3/4 h-auto m-auto p-11">
            @if ($post->image)
                    <div>
                        <img src="{{ asset('storage/' . $post->image) }}" class="w-full h-auto rounded-md opacity-0" x-intersect="$el.classList.add('animate-scale')"
                            alt="https://source.unsplash.com/1200x400?{{ $post->category->name }}">
                    </div>
                    @else
                    <div>
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="w-full h-full rounded-md opacity-0" x-intersect="$el.classList.add('animate-scale')"
                            alt="https://source.unsplash.com/1200x400?{{ $post->category->name }}">
                    </div>
                    @endif
            <div class="flex flex-col w-full h-auto">
                <h1 class="my-4 flex w-full h-auto"><span class="font-semibold text-4xl opacity-0" x-intersect="$el.classList.add('animate-fadeInUp')" class="opacity-0">{{ $post->title }}</span></h1>
                <p class="flex w-full h-auto place-items-end place-content-between font-medium text-lg"><span x-intersect="$el.classList.add('animate-fadeInUp')" class="opacity-0">By. {{ $post->user->name }}</span><span x-intersect="$el.classList.add('animate-fadeInUp')" class="opacity-0">Posted on {{ $post->created_at->diffForHumans() }}</span></p>
                <article style="text-align: justify" class="my-3 opacity-0" x-intersect="$el.classList.add('animate-fadeInUp')">
                    
                    {{-- menampilkan echo blade tanpa exception atau code program tetep dibaca tanpa di ubah ke html --}}
                                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection