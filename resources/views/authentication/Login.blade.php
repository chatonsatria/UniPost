@extends('authentication.Layouts')
@section('content')

<div class="flex flex-col w-full min-h-screen">
    <div class="flex flex-col w-full md:max-w-7xl m-auto p-6 md:p-20">
        {{-- login status --}}
        @if (session()->has('status'))
        <div class="bg-blue-200 border-l-4 border-blue-600 p-4 translate-y-8" role="alert">
            <p class="font-bold">Success!</p>
            <p>{{ session('status') }}</p>
        </div>
        @endif
        @if (session()->has('loginError'))
        <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 translate-y-8" role="alert">
            <p class="font-bold">Warning!</p>
            <p>{{ session('loginError') }}</p>
        </div>
        @endif

        <form class="flex flex-col w-full h-auto rounded-md p-11 shadow-md gap-y-4 bg-white" action="/login" method="POST">
            @csrf
            <div class="flex flex-row mx-auto w-1/4 md:w-1/6 mb-11">
                <img src="/images/logo.svg" class="w-full mx-auto" alt="">
            </div>
            <h1 class="font-bold text-xl md:text-3xl text-center mb-3">Login</h1>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-semibold mb-2" for="email">
                    Email
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') is-invalid @enderror"
                    id="email" type="text" placeholder="Your Email" name="email" autofocus required
                    value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback"></div>
                {{ $message }}
                @enderror
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-semibold mb-2" required for="password">
                    Password
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    name="password" id="password" type="password" placeholder="Your Password">
            </div>
            <div class="flex flex-col md:flex-row items-center gap-y-6 justify-between mb-6">
                <button
                    class="w-full md:w-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    LOGIN
                </button>
                <p>not registered ? <a
                        class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                        href="/register">
                        Register for free
                    </a></p>
            </div>
        </form>
    </div>
</div>
@endsection
