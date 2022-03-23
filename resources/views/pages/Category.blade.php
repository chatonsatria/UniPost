@extends('layouts.MainLayouts')

@section('content')
    <section>
        <div class="flex w-full h-auto py-20 bg-white my-11">
            <div class="grid grid-cols-3 w-3/4 h-auto mx-auto gap-6">
                @foreach ($categories as $item)
                <a href="/posts?category={{ $item->slug }}">
                <div class="flex flex-col w-full h-full bg-blue rounded-md" x-intersect="$el.classList.add('animate-fadeInUp')">
                    
                        <img src="https://source.unsplash.com/500x400?{{ $item->name }}" alt="" class="w-full h-full rounded-md">

                        <h1 class="absolute flex w-full h-full my-auto text-3xl rounded-tl-md"><span class="text-white p-4 bg-black bg-opacity-50 m-auto w-full text-center">{{ $item->name }}</span></h1>
                    
                </div>  
                </a>  
                @endforeach
            </div>
        </div>
    </section>
    <section>
        <div class="flex flex-row w-full text-white text-center px-[300px] py-9 mt-[100px] mb-[100px]" x-intersect="$el.classList.add('animate-fadeInUp')">
            <h1 class="text-3xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam harum doloremque, tempore consequuntur et dicta pariatur nostrum reiciendis voluptate laboriosam dolor dignissimos suscipit quisquam ducimus unde? Nemo reiciendis veritatis porro. Tenetur aut autem eius quos molestiae eligendi ab, dolores odio voluptates dolorum aliquam illo tempora dolore.</h1>
        </div>
    </section>
@endsection
