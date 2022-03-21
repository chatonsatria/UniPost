@extends('layouts.MainLayouts')

@section('content')
<section id="header" class="max-h-screen hidden md:block">
{{-- filler --}}
<section class="mt-[64px] flex flex-col w-full">
    <div class="w-[100px] h-[2px] bg-white mt-2" x-intersect="$el.classList.add('animate-fadeInDown')"></div>
    <div class="w-[125px] h-[2px] bg-red-900 mt-2" x-intersect="$el.classList.add('animate-fadeInRight')"></div>
    <div class="w-[75px] h-[2px] bg-white mt-2" x-intersect="$el.classList.add('animate-fadeInUp')"></div>
</section>
<section class="flex flex-col w-full place-items-end">
    <div class="w-[100px] h-[2px] bg-white mt-2" x-intersect="$el.classList.add('animate-fadeInDown')"></div>
    <div class="w-[125px] h-[2px] bg-red-900 mt-2" x-intersect="$el.classList.add('animate-fadeInLeft')"></div>
    <div class="w-[150px] h-[2px] bg-white mt-2" x-intersect="$el.classList.add('animate-fadeInUp')"></div>
</section>
{{-- when screen is large --}}
<section>
    <div class="flex carousel relative w-full h-auto place-content-center place-items-center">
        <div class="carousel-inner relative overflow-hidden w-3/4">
            <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item absolute opacity-0 h-full">
                <div class="block h-full w-full">
                    <div class="flex flex-col w-full h-full m-auto text-white">
                        <div class="flex-col z-10">
                            <h1 class="text-8xl ml-6 opacity-0">####</h1>
                            <h1 class="text-9xl ml-6" x-intersect="$el.classList.add('animate-fadeInDown')">UniPost</h1>
                        </div>
                        <div>
                            <div class="w-full h-full rounded-sm opacity-0 z-0" x-intersect="$el.classList.add('animate-fadeInUpCustom1','-translate-y-[50px]')">
                                <img src="https://source.unsplash.com/1200x400?sports" class="w-full h-full rounded-md" alt="https://source.unsplash.com/1200x400?nature">
                              </div>
                        </div>
                        <div class="flex flex-row mx-11 my-3 justify-between" x-intersect="$el.classList.add('animate-fadeInUpCustom1', '-translate-y-[50px]')">
                            <h1>
                                Category
                                <br>
                                <span class="text-lg font-semibold">Lorem Ipsum</span>
                            </h1>
                            <h1>
                                Reading Time
                                <br>
                                <span class="text-lg font-semibold">20 Minutes</span>
                            </h1>
                            <h1>
                                Posted Time
                                <br>
                                <span class="text-lg font-semibold">20 Minutes Ago</span>
                            </h1>
                            <h1 class="max-w-[400px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium officia repellat magnam quos ab cupiditate dignissimos hic eligendi numquam! Quidem.</h1>
                            <h1>1000<span class="opacity-75"> people like this</span></h1>
                        </div>
                    </div>
                </div>
            </div>
            <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-slate-300 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-slate-300 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
            
            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0 h-full">
                <div class="block h-full w-full">
                    <div class="flex flex-col w-full h-full m-auto text-white">
                        <div class="flex-col z-10">
                            <h1 class="text-8xl ml-6 opacity-0">####</h1>
                            <h1 class="text-9xl ml-6" x-intersect="$el.classList.add('animate-fadeInDown')">UniPost</h1>
                        </div>
                        <div>
                            <div class="w-full h-full rounded-sm opacity-0 z-0" x-intersect="$el.classList.add('animate-fadeInUpCustom1','-translate-y-[50px]')">
                                <img src="https://source.unsplash.com/1200x400?car" class="w-full h-full rounded-md" alt="https://source.unsplash.com/1200x400?nature">
                              </div>
                        </div>
                        <div class="flex flex-row mx-11 my-3 justify-between" x-intersect="$el.classList.add('animate-fadeInUpCustom1', '-translate-y-[50px]')">
                            <h1>
                                Category
                                <br>
                                <span class="text-lg font-semibold">Lorem Ipsum</span>
                            </h1>
                            <h1>
                                Reading Time
                                <br>
                                <span class="text-lg font-semibold">20 Minutes</span>
                            </h1>
                            <h1>
                                Posted Time
                                <br>
                                <span class="text-lg font-semibold">20 Minutes Ago</span>
                            </h1>
                            <h1 class="max-w-[400px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium officia repellat magnam quos ab cupiditate dignissimos hic eligendi numquam! Quidem.</h1>
                            <h1>1000<span class="opacity-75"> people like this</span></h1>
                        </div>
                    </div>
                </div>
            </div>
            <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-slate-300 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-slate-300 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
            
            <!--Slide 3-->
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0 h-full">
                <div class="block h-full w-full">
                    <div class="flex flex-col w-full h-full m-auto text-white">
                        <div class="flex-col z-10">
                            <h1 class="text-8xl ml-6 opacity-0">####</h1>
                            <h1 class="text-9xl ml-6" x-intersect="$el.classList.add('animate-fadeInDown')">UniPost</h1>
                        </div>
                        <div>
                            <div class="w-full h-full rounded-sm opacity-0 z-0" x-intersect="$el.classList.add('animate-fadeInUpCustom1','-translate-y-[50px]')">
                                <img src="https://source.unsplash.com/1200x400?nature" class="w-full h-full rounded-md" alt="https://source.unsplash.com/1200x400?nature">
                              </div>
                        </div>
                        <div class="flex flex-row mx-11 my-3 justify-between" x-intersect="$el.classList.add('animate-fadeInUpCustom1', '-translate-y-[50px]')">
                            <h1>
                                Category
                                <br>
                                <span class="text-lg font-semibold">Lorem Ipsum</span>
                            </h1>
                            <h1>
                                Reading Time
                                <br>
                                <span class="text-lg font-semibold">20 Minutes</span>
                            </h1>
                            <h1>
                                Posted Time
                                <br>
                                <span class="text-lg font-semibold">20 Minutes Ago</span>
                            </h1>
                            <h1 class="max-w-[400px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium officia repellat magnam quos ab cupiditate dignissimos hic eligendi numquam! Quidem.</h1>
                            <h1>1000<span class="opacity-75"> people like this</span></h1>
                        </div>
                    </div>
                </div>
            </div>
            <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-slate-300 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-slate-300 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
    
            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                </li>
            </ol>
            
        </div>
    </div>
        {{-- <div class="flex flex-col w-[1600px] m-auto text-white">
            <div class="flex-col z-10">
                <h1 class="text-8xl ml-6" x-intersect="$el.classList.add('animate-fadeInDown')">We Are</h1>
                <h1 class="text-9xl ml-6" x-intersect="$el.classList.add('animate-fadeInDown')">UniPost</h1>
            </div>
            <div>
                <div class="w-full h-[600px] rounded-sm opacity-0 z-0" x-intersect="$el.classList.add('animate-fadeInUpCustom1','-translate-y-[50px]')">
                    <img src="https://source.unsplash.com/1200x400?sports" class="w-full h-full rounded-md" alt="https://source.unsplash.com/1200x400?nature">
                  </div>
            </div>
            <div class="flex flex-row mx-11 my-3 justify-between" x-intersect="$el.classList.add('animate-fadeInUpCustom1', '-translate-y-[50px]')">
                <h1>
                    Category
                    <br>
                    <span class="text-lg font-semibold">Lorem Ipsum</span>
                </h1>
                <h1>
                    Reading Time
                    <br>
                    <span class="text-lg font-semibold">20 Minutes</span>
                </h1>
                <h1>
                    Posted Time
                    <br>
                    <span class="text-lg font-semibold">20 Minutes Ago</span>
                </h1>
                <h1 class="max-w-[400px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium officia repellat magnam quos ab cupiditate dignissimos hic eligendi numquam! Quidem.</h1>
                <h1>1000<span class="opacity-75"> people like this</span></h1>
            </div>
        </div> --}}
</section>
</section>
{{-- filler --}}
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

{{-- RECOMENDED POST --}}
<section class="flex flex-col w-full h-auto place-items-end my-11" x-intersect="$el.classList.add('animate-fadeInLeft')">
    <div class="flex flex-col w-[88%] h-auto py-[80px] pl-11 bg-white rounded-md">
        <h1 class="place-self-start text-5xl pb-6" x-intersect="$el.classList.add('animate-fadeInDown')">Recomended From UniPost</h1>
        <div cla ss="flex flex-row p-auto">
            <div class="box-scroll flex overflow-x-scroll hide-scroll-bar">
                <div class="flex flex-nowrap">
                    @foreach ($post as $item)
                    <div class="inline-block pr-3 flex-row fade-in mb-6">
                        <div
                            class="w-[400px] h-[450px] overflow-hidden border-[0.5px] rounded-md shadow-md hover:shadow-xl transition-shadow duration-300 ease-in-out flex-col opacity-0" x-intersect="$el.classList.add('animate-fadeInUp')">
                            <div class="w-auto bg-slate-200 p-2 text-base">
                                <a href="/post/{{ $item->slug }}">{{ $item->category->name }}</a>
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
            </div>
        </div>
    </div>
</section>

{{-- DESCRIPTION AND REGISTER FORM --}}
<section class="flex flex-row w-full h-screen place-items-center place-content-center">
    @auth
    <div class="flex flex-row w-3/4 place-content-center place-items-center justify-between gap-x-[200px]">
        <div class="flex flex-col w-auto text-white">
            <h1 class="text-5xl font-semibold text-center sm:text-left mb-3 opacity-0" x-intersect="$el.classList.add('animate-fadeInRight')">What You Can Explore In UniPost.</h1>
            <p class="text-2xl text-center md:text-left mb-2 opacity-0" x-intersect="$el.classList.add('animate-fadeInRight')">consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam viverra orci sagittis eu volutpat odio facilisis mauris sit.</p>
        </div>
    </div>
    @else
    <div class="flex flex-row w-3/4 place-content-center place-items-center justify-between gap-x-[200px]">
        <div class="flex flex-col w-auto text-white">
            <h1 class="text-5xl font-semibold text-center sm:text-left mb-3 opacity-0" x-intersect="$el.classList.add('animate-fadeInRight')">What You Can Explore In UniPost.</h1>
            <p class="text-2xl text-center md:text-left mb-2 opacity-0" x-intersect="$el.classList.add('animate-fadeInRight')">consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam viverra orci sagittis eu volutpat odio facilisis mauris sit.</p>
        </div>
        <div class="w-full h-auto opacity-0" x-intersect="$el.classList.add('animate-fadeInLeft')">
            <form action="/register" method="POST" class="w-full bg-white shadow-md rounded border px-8 pt-6 pb-8 mb-4 mx-auto">
                @csrf
                <h1 class="block text-gray-700 text-xl font-bold text-center mb-6">Register Here</h1>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
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
                  <p class="text-right text-base">Already Registered ? <a href="/login" class="text-blue-500 hover:text-blue-800 text-base">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    @endauth
    
</section>
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
