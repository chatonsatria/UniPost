@extends('dashboard.layouts.main')
@section('content')
<div class="flex flex-col w-full h-auto m-auto bg-white p-11 my-11">
    <div class="flex flex-col w-3/4 h-auto m-auto">

    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <h1 class="text-4xl">Create New Post</h1>
        {{-- title --}}
        <label for="title">Title</label>
        <input
            class="mb-4 shadow appearance-none border rounded-l-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('title') is-invalid @enderror"
            type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
        @error('title')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        {{-- slug --}}
        <label for="slug">Slug</label>
        <input
            class="mb-4 shadow appearance-none border rounded-l-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('slug') is-invalid @enderror"
            type="text" name="slug" id="slug" value="{{ old('slug', $post->slug) }}">
        @error('slug')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        {{-- category --}}
        <label for="category">Category</label>
        <select
            class="mb-4 shadow appearance-none border rounded-l-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            name="category_id">
            @foreach ( $category as $item)

            @if (old('category_id', $post->category->id) == $item->id)
            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
            @else
            <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endif

            @endforeach
        </select>
        {{-- image selector --}}
        <label for="image">Post Image</label>
        <input type="hidden" name="oldImage" id="oldImage" value="{{ $post->image }}">
        <input
            class="mb-4 shadow appearance-none border rounded-l-md w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('image') is-invalid @enderror"
            type="file" id="image" name="image" onchange="previewImage()">
        {{-- membuat preview image menggunakan javascript --}}
            @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mt-2 col-sm-4">
            @else
            {{-- membuat preview image menggunakan javascript --}}
            <img class="img-preview img-fluid mt-2 sm-col-2">
            {{-- lanjut ke ** --}}
            @endif

            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        {{-- body --}}
        <label for="body">Body</label>
        <input id="body" type="hidden" name="body" class="mb-4 @error('body') is-invalid @enderror" required value="{{ old('body', $post->body) }}">
        <trix-editor input="body"></trix-editor>
        @error('body')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror

        <button type="submit" class="w-full h-auto p-2 bg-blue-600 text-white hover:bg-blue-500 mt-6">Submit
            Post</button>
    </form>
</div>
</div>

<script>
    // slug otomatis
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function () {

        fetch("/dashboard/posts/checkSlug?title=" + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)

    });

    // preventing kinerja tools upload file dari trix editor
    document.addEventListener('trix-file-accept', function (e) {
        e.preventDefault();
    })

    // lanjutan **
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

</script>
@endsection
