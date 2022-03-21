@extends('layouts.MainLayouts')

@section('content')
    <section class="text-white">
        <div class="flex flex-col min-h-screen w-3/4 gap-9 mx-auto place-items-center place-content-center">
            <div class="flex flex-col w-full">
                <h1 class="text-8xl opacity-0" x-intersect="$el.classList.add('animate-fadeInDown')">We are</h1>
                <h1 class="text-8xl opacity-0" x-intersect="$el.classList.add('animate-fadeInUp')">UniPost.</h1>
            </div>
            <div class="flex flex-row pl-[340px]">
                <p class="text-3xl opacity-0" x-intersect="$el.classList.add('animate-fadeInLeft')">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit voluptatum expedita a assumenda quo non? Consequatur quam cumque eveniet molestias accusamus a accusantium ex sapiente itaque amet asperiores fuga, maxime, sequi ipsum alias doloribus dolores, velit ut temporibus repellat voluptate delectus. Suscipit eaque culpa asperiores.</p>
            </div>
        </div>
    </section>

    {{-- spacer --}}
    <div class="w-full h-[44px]"></div>

    <section>
        <div class="grid grid-cols-3 px-[300px] bg-white gap-4 justify-between p-9 mt-[100px] mb-[100px]">
            <div class="rounded-md w-auto h-[250px] place-self-end opacity-0 shadow-slate-500 shadow-lg" x-intersect="$el.classList.add('animate-fadeInDown')"><img src="https://source.unsplash.com/1980x800?sports" class="w-full h-full rounded-md overflow-hidden" alt="https://source.unsplash.com/1980x800?sports"></div>
            <div class="rounded-md w-full h-[300px] opacity-0 shadow-slate-500 shadow-lg" x-intersect="$el.classList.add('animate-fadeInDown')"><img src="https://source.unsplash.com/1980x800?forest" class="w-full h-full rounded-md" alt="https://source.unsplash.com/1980x800?forest"></div>
            <div class="rounded-md w-[250px] h-[250px] opacity-0 shadow-slate-500 shadow-lg" x-intersect="$el.classList.add('animate-fadeInDown')"><img src="https://source.unsplash.com/1980x800?city" class="w-full h-full rounded-md" alt="https://source.unsplash.com/1980x800?city"></div>
            <div class="rounded-md w-[250px] h-[250px] place-self-end opacity-0 shadow-slate-500 shadow-lg" x-intersect="$el.classList.add('animate-fadeInUpCustom1' , '-translate-y-[50px]')"><img src="https://source.unsplash.com/1980x800?people" class="w-full h-full rounded-md" alt="https://source.unsplash.com/1980x800?people"></div>
            <div class="rounded-md w-full h-[300px] opacity-0 shadow-slate-500 shadow-lg" x-intersect="$el.classList.add('animate-fadeInUp')"><img src="https://source.unsplash.com/1980x800?nature" class="w-full h-full rounded-md" alt="https://source.unsplash.com/1980x800?nature"></div>
            <div class="rounded-md w-full h-[300px] place-items opacity-0 shadow-slate-500 shadow-lg" x-intersect="$el.classList.add('animate-fadeInUpCustom1', '-translate-y-[50px]')"><img src="https://source.unsplash.com/1980x800?car" class="w-full h-full rounded-md" alt="https://source.unsplash.com/1980x800?car"></div>
        </div>
    </section>

    {{-- spacer --}}
    <div class="w-full h-[44px]"></div>

    <section>
        <div class="flex flex-row w-full text-white text-center px-[300px] py-9 mt-[100px] mb-[100px]" x-intersect="$el.classList.add('animate-fadeInUp')">
            <h1 class="text-3xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam harum doloremque, tempore consequuntur et dicta pariatur nostrum reiciendis voluptate laboriosam dolor dignissimos suscipit quisquam ducimus unde? Nemo reiciendis veritatis porro. Tenetur aut autem eius quos molestiae eligendi ab, dolores odio voluptates dolorum aliquam illo tempora dolore.</h1>
        </div>
    </section>
@endsection