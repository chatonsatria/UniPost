<nav class="flex flex-row w-3/4 h-auto mx-auto gap-x-6 place-content-end font-semibold" x-intersect="$el.classList.add('animate-fadeInLeft')">
    <div>
        <a href="/dashboard/posts" class="@if ($active === 'my-posts')
        animate-pulse
        @endif">My Posts</a>
    </div>
    <div>
        <a href="/dashboard/posts/create" class="@if ($active === 'create-new')
        animate-pulse
        @endif">Create New Posts</a>
    </div>
    <div>
        @can('admin')
            <a href="/dashboard/category" class="@if ($active === 'category')
            animate-pulse
            @endif">Categories</a>
        @endcan
    </div>
    <div>
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="flex gap-x-2"><span class="font-semibold">Logout </span> 
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="black" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
              </svg></button>
        </form>
    </div>
</nav>