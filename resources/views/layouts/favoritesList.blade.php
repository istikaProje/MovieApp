@extends('layouts.master')
@section('title', 'favoritesListFavorilerim')
@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold text-white mb-6">Listelenenler</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($favorites as $favorite)
        <div class="relative group">
            <img src="{{ $favorite->image_url }}" alt="Movie" class="w-full h-48 object-cover rounded-lg">
            <div class="absolute top-2 right-2">
                <form action="{{ route('favorites.destroy', $favorite->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-white hover:text-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="h-6 w-6">
                            <path fill="currentColor" d="M0 48V487.7C0 501.1 10.9 512 24.3 512c5 0 9.9-1.5 14-4.4L192 400 345.7 507.6c4.1 2.9 9 4.4 14 4.4c13.4 0 24.3-10.9 24.3-24.3V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48z"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection