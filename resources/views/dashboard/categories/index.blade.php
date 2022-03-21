@extends('dashboard.layouts.main')
@section('content')
<div class="flex flex-col w-3/4 h-auto mx-auto my-11 p-6 rounded-md bg-white opacity-0" x-intersect="$el.classList.add('animate-fadeInUp')">
    
    @if (session()->has('success'))
    <div class="container" id="alertbox">
		<div class="container bg-blue-500 flex flex-row w-full items-center text-white text-sm font-bold px-4 py-3 relative"
			role="alert">
			<svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
				<path
					d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
			</svg>
			<p>{{ session('success') }}</p>

			<span class="absolute top-0 bottom-0 right-0 px-4 py-3 closealertbutton">
				<svg class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg"
					viewBox="0 0 20 20">
					<title>Close</title>
					<path
						d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
				</svg>
			</span>
		</div>
	</div>
    @endif
    <a href="/dashboard/category/create" class="w-[200px] h-auto px-2 py-1 border rounded-full text-center bg-blue-700 text-white hover:bg-blue-600 place-self-end mb-6" x-intersect="$el.classList.add('animate-fadeInUp')">Create new Category</a>
    <table class="table-auto w-full h-full rounded-md border text-center opacity-0" x-intersect="$el.classList.add('animate-fadeInUp')">
        <thead>
          <tr>
            <th>No</th>
            <th>Category Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($categories as $item)
                
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td class="flex flex-col place-items-center place-content-center">
            <div class="flex flex-row place-self-center gap-5">
                <a href="/dashboard/category/{{ $item->slug }}/edit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="orange" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                </a>
                <form action="/dashboard/category/{{ $item->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button onclick="return confirm('delete this post?')"><svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="red">
                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                      </svg></button>
                </form>
            </div>
            </td>
          </tr>

        @endforeach
        </tbody>
    </table>

    {{-- <div class="grid grid-cols-3 text-black font-semibold text-lg gap-6 my-6">
        <div class="max-w-[50px] h-auto rounded-md bg-white text-center py-2 opacity-0"  x-intersect="$el.classList.add('animate-fadeInUp')">
            <p class="opacity-0" x-intersect="$el.classList.add('animate-fadeInDown')">No</p>
        </div>
        <div class="flex flex-col w-full h-full px-3 text-center place-items-center place-content-center bg-white rounded-md opacity-0"  x-intersect="$el.classList.add('animate-fadeInUp')">
            <p class="opacity-0" x-intersect="$el.classList.add('animate-fadeInDown')">Category Name</p>
        </div>
        <div class="flex flex-row w-full h-full px-3 text-center place-items-center place-content-center gap-x-6">
            <div class="flex flex-row w-full h-full px-3 text-center place-items-center place-content-center bg-white rounded-md opacity-0" x-intersect="$el.classList.add('animate-fadeInUp')">
                <h1 class="opacity-0" x-intersect="$el.classList.add('animate-fadeInDown')">Actions</h1>
            </div>
        </div>
    </div>
    @foreach ($categories as $item)
        <div class="grid grid-cols-3 text-black gap-6 my-6">
            <div class="flex flex-col max-w-[50px] h-auto px-3 text-center text-lg place-content-center bg-white rounded-md opacity-0" x-intersect="$el.classList.add('animate-fadeInUp')">
                <p>{{ $loop->iteration }}</p>
            </div>
            <div class="flex flex-col w-full h-full px-3 text-center text-lgd place-items-center place-content-center bg-white rounded-md opacity-0" x-intersect="$el.classList.add('animate-fadeInUp')">
                <h1>{{ $item->name }}</h1>
            </div>
            <div class="flex flex-row w-full h-full px-3 text-center place-items-center place-content-center gap-x-6">
                <div class="flex flex-row w-full h-full px-3 text-center place-items-center place-content-center bg-white rounded-md opacity-0" x-intersect="$el.classList.add('animate-fadeInUp')">
                    <a href="/dashboard/posts/{{ $item->slug }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="green">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                      </svg>
                    </a>
                </div>
                <div class="flex flex-row w-full h-full px-3 text-center place-items-center place-content-center bg-white rounded-md opacity-0" x-intersect="$el.classList.add('animate-fadeInUp')">
                    <a href="/dashboard/posts/{{ $item->slug }}/edit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="orange" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                    </a>
                </div>
                <div class="flex flex-row w-full h-full px-3 text-center place-items-center place-content-center bg-white rounded-md opacity-0" x-intersect="$el.classList.add('animate-fadeInUp')">
                    <form action="/dashboard/posts/{{ $item->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button onclick="return confirm('delete this post?')"><svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="red">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                          </svg></button>
                      </form>
                    
                </div>
            </div>
        </div>
        @endforeach --}}



</div>

<style>
    .hide-scroll-bar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .hide-scroll-bar::-webkit-scrollbar {
        display: none;
    }
</style>

<script>
    $(".closealertbutton").click(function (e) {
        // $('.alertbox')[0].hide()
        // e.preventDefault();
        pid = $(this).parent().parent().hide(500)
        console.log(pid)
        // $(".alertbox", this).hide()
    })
</script>
@endsection
