<nav class=" flex flex-col w-full p-2 md:py-4 xl:py-6 bg-white">
    <div class="flex flex-row justify-between items-center w-full md:max-w-7xl h-auto mx-auto">
        <div class="w-1/4 md:w-1/12 z-10">
            <a href="/">
                <img src="/images/logo.svg" class="w-full" alt="">
            </a>
        </div>
        <div>
            <div class="hidden md:block">
                <a href="/login" class="text-xl font-bold">LOGIN</a>
            </div>
            {{-- dropmenu button --}}
            <div class="md:hidden z-10">
                <div class="flex flex-row items-center gap-x-6">
                    <a href="/login" class="text-lg font-bold">LOGIN</a>
                    <button @click="dropdownMenu = ! dropdownMenu" class="p-2 border border-black rounded-lg z-10">
                        <div class="w-8 h-1 bg-black rounded-full mb-[4px] m-auto transition-all"
                            :class="{'' : !dropdownMenu, 'rotate-[45deg] translate-y-[8px]' : dropdownMenu}"></div>
                        <div class="w-8 h-1 bg-black rounded-full mb-[4px] m-auto transition-all"
                            :class="{'' : !dropdownMenu, 'opacity-0' : dropdownMenu}"></div>
                        <div class="w-8 h-1 bg-black rounded-full          m-auto transition-all"
                            :class="{'' : !dropdownMenu, '-rotate-[45deg] -translate-y-[8px]' : dropdownMenu}"></div>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div x-show="dropdownMenu" x-transition:enter="-translate-x-[300px]"
        x-transition:enter-start="-translate-x-[300px]" x-transition:enter-end="translate-x-0"
        x-transition:leave="translate-x-[0px]"
        x-transition:leave-start="translate-x-[0px]"
        x-transition:leave-end="-translate-x-[300px]" id="buttonsm_open"
        class="md:hidden flex flex-col w-full min-h-full gap-y-6 translate-y-5 p-4 z-0">
        <div class="flex flex-col gap-y-2">
            <h1 class="text-lg font-bold">CATEGORIES</h1><div class="w-20 h-1 bg-gray-400 mb-2"></div>
            <div class="flex flex-col gap-4">
                @foreach ($categories as $item)
                <a href="/posts?category={{ $item->slug }}" class="w-full h-auto px-4 py-2 rounded-md bg-gray-800 text-gray-300 hover:text-white hover:bg-gray-700 font-bold">{{ $item->name }}</a>
                @endforeach
            </div>
        </div>
        <div class="flex flex-col gap-y-2 mb-6">
            <h1 class="text-lg font-bold">MENUS</h1><div class="w-20 h-1 bg-gray-400 mb-2"></div>
            <div class="flex flex-col gap-4">
                <a href="/" class="w-full h-auto px-4 py-2 rounded-md bg-[#FFCD01] text-gray-800 hover:text-black hover:bg-[#ffde58] font-bold">HOME</a>
                <a href="/about" class="w-full h-auto px-4 py-2 rounded-md bg-[#FFCD01] text-gray-800 hover:text-black hover:bg-[#ffde58] font-bold">ABOUT</a>
                <a href="/posts" class="w-full h-auto px-4 py-2 rounded-md bg-[#FFCD01] text-gray-800 hover:text-black hover:bg-[#ffde58] font-bold">POST</a>
                <a href="/categories" class="w-full h-auto px-4 py-2 rounded-md bg-[#FFCD01] text-gray-800 hover:text-black hover:bg-[#ffde58] font-bold">CATEGORIES</a>
            </div>
        </div>
    </div>
</nav>
