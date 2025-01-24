@extends('layouts.adminMaster')
@section('title', 'Create Category')
@section('description', 'Create a new category.')
@section('keywords', 'create, category')
@section('content')

<div class="container mx-auto h-screen">
    <h1 class="text-2xl text-white font-bold mt-4 mb-4">Yeni Kategori Oluştur</h1>

    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-white">Kategori Adı</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md">Kategori Oluştur</button>
    </form>
</div>
@endsection
