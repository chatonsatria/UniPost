@section('content')

<section class="flex flex-col w-full h-screen" x-intersect="$el.classList.add('animate-fadeInUp')">
    @if (session()->has('status'))
    <div class="alert alert-success alert-dismissible fade show text-white" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show text-white" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="flex w-full place-content-center m-auto">
        <form class="bg-white shadow-md w-1/4 rounded px-8 pt-6 pb-8 mb-4" action="/login" method="POST">
            @csrf
            <div>
                <h1 class="font-bold text-5xl text-center mb-3">Login</h1>
            </div>
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
            <div class="flex items-center justify-between mb-6">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Sign In
                </button>
                <p>belum memiliki akun ? <a
                        class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                        href="/register">
                        Register
                    </a></p>
            </div>
        </form>
    </div>
</section>
@endsection
