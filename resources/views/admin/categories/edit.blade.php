@extends('layouts.adminMaster')
@section('title', 'Edit Category')
@section('description', 'Edit an existing category.')
@section('keywords', 'edit, category')
@section('content')

<div class="container mx-auto h-screen">
    <h2 class="text-2xl font-bold mb-4 mt-4 text-white">Edit Category</h2>
    
    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-white">Category Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md">Update Category</button>
    </form>
</div>
@endsection