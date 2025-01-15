@extends('layouts.adminMaster')

@section('title', 'Edit Movie')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Edit Movie</h1>
    <form action="{{ route('admin.movies.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
            <select name="type" id="type" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
                <option value="movie" {{ old('type', $movie->type) == 'movie' ? 'selected' : '' }}>Movie</option>
                <option value="series" {{ old('type', $movie->type) == 'series' ? 'selected' : '' }}>Series</option>
            </select>
            @error('type')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $movie->title) }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            @error('title')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" id="description" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">{{ old('description', $movie->description) }}</textarea>
            @error('description')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="vote_average" class="block text-sm font-medium text-gray-700">Vote Average</label>
            <input type="number" name="vote_average" id="vote_average" value="{{ old('vote_average', $movie->vote_average) }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            @error('vote_average')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="youtube_link" class="block text-sm font-medium text-gray-700">YouTube Link</label>
            <input type="url" name="youtube_link" id="youtube_link" value="{{ old('youtube_link', $movie->youtube_link) }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            @error('youtube_link')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" name="image" id="image" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" onchange="previewImage(event, 'image-preview')">
            @if($movie->image)
                <img src="{{ asset('storage/uploads/images/' . $movie->image) }}" alt="Current Image" class="mt-2 max-w-xs" id="image-preview">
            @endif
            @error('image')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="video" class="block text-sm font-medium text-gray-700">Video</label>
            <input type="file" name="video" id="video" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" onchange="previewVideo(event, 'video-preview')">
            @if($movie->video)
                <video width="320" height="240" controls class="mt-2" id="video-preview">
                    <source src="{{ asset('storage/' . $movie->video) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            @endif
            @error('video')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="categories" class="block text-sm font-medium text-gray-700">Categories</label>
            <select name="categories[]" id="categories" multiple class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ in_array($category->id, $movie->categories->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
            @error('categories')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Update Movie
            </button>
        </div>
    </form>
</div>
<script>
    function previewImage(event, previewId) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById(previewId);
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }

    function previewVideo(event, previewId) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById(previewId);
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection
