@extends('dashboard.layouts.main')

@section('content')
<div class="flex flex-col w-3/4 h-auto text-center m-auto gap-6 text-white">
    <p class="font-semibold text-5xl opacity-0" x-intersect="$el.classList.add('animate-fadeInUp')">Welcome, {{ auth()->user()->name }}</p>
    <p class="font-base text-4xl opacity-0" x-intersect="$el.classList.add('animate-fadeInUp')">Happy Writing</p>
</div>
@endsection