@extends('authentication.Layouts')
@section('content')
<div class="flex flex-col w-full min-h-screen">
    <div class="flex flex-col w-full md:max-w-7xl m-auto p-6 md:p-20">
        <form class="flex flex-col w-full h-auto rounded-md p-11 shadow-md gap-y-4 bg-white" action="/register"
            method="POST">
            @csrf
            <div class="flex flex-row mx-auto w-1/4 md:w-1/6 mb-11">
                <img src="/images/logo.svg" class="w-full mx-auto" alt="">
            </div>
            <h1 class="block text-gray-700 text-xl font-bold text-center mb-6">Register Here</h1>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') is-invalid @enderror"
                    id="name" type="name" placeholder="name" name="name" value="{{ old('name') }}" required autofocus>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Username
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('username') is-invalid @enderror"
                    id="username" type="username" placeholder="Username" name="username" value="{{ old('username') }}">
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
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
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
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
            <div class="flex flex-col md:flex-row items-center justify-between w-full gap-y-6 mb-6">
                <button
                    class="w-full md:w-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-8 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Register
                </button>
                <p class="text-right text-base">Already Registered ? <a href="/login"
                        class="text-blue-500 hover:text-blue-800 text-base">Login</a></p>
            </div>
        </form>
    </div>
</div>
<section class="flex flex-col w-full h-screen place-items-center place-content-center">
    <div class="w-3/4 h-auto opacity-0" x-intersect="$el.classList.add('animate-fadeInLeft')">
        <form action="/register" method="POST"
            class="w-2/4 bg-white shadow-md rounded border px-8 pt-6 pb-8 mb-4 mx-auto">
            @csrf
            <h1 class="block text-gray-700 text-xl font-bold text-center mb-6">Register Here</h1>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') is-invalid @enderror"
                    id="name" type="name" placeholder="name" name="name" value="{{ old('name') }}" required autofocus>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Username
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('username') is-invalid @enderror"
                    id="username" type="username" placeholder="Username" name="username" value="{{ old('username') }}">
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
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
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
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
</section>
@endsection
