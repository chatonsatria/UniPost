<div class="flex flex-row w-3/4 mx-auto h-auto place-content-between place-items-end opacity-0" x-intersect="$el.classList.add('animate-fadeInDown')">
    <a href="/">
        <svg class="border border-white rounded-md" width="88" height="64" viewBox="0 0 88 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.12 15.2H13.184V44.512H25.6V52H12.416L5.12 47.648V15.2ZM49.216 15.2H41.152V44.512H28.736V52H41.984L49.216 47.648V15.2Z" fill="white"/>
            <path d="M41.4 15.2H62.136V22.432H49.72V29.984H62.136V37.472H49.72V52H41.4V15.2ZM85.752 33.12V19.616L78.264 15.2H65.016V22.432H77.432V29.984H65.016V37.472H78.264L85.752 33.12Z" fill="white"/>
            </svg>
    </a>
    <p class="text-lg text-white">{{ auth()->user()->name }} | Creator Dashboard | <a href="/">Home</a></p>
</div>