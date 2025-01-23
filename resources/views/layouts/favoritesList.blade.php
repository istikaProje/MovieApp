@extends('layouts.master')
@section('title', 'favoritesListFavorilerim')
@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold text-white mb-6">Listelenenler</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @php
            $favorites = $favorites ?? [];
        @endphp
        @foreach($favorites as $favorite)
            @if($favorite->movie)
            <div class="relative group overflow-hidden rounded-md cursor-pointer">
                <a href="{{ route('movies.show', $favorite->movie->id) }}">
                    <img src="{{ asset('storage/' . $favorite->movie->image) }}" alt="poster" class="w-full h-full transition-transform duration-500 group-hover:scale-105" />
                    <div class="absolute bottom-0 bg-gradient-to-t from-secondary via-secondary/75 opacity-0 left-0 group-hover:opacity-100 to-transparent transition-opacity duration-500 p-5">
                        <h1 class="text-xl font-bold text-white">{{ $favorite->movie->title }}</h1>
                        <h3 class="text-sm font-semibold text-white mt-1"><i class="fa-solid fa-star"></i> {{ $favorite->movie->vote_average }}/10</h3>
                        <p class="text-sm mt-2 text-white">{{ $favorite->movie->description }}</p>
                    </div>
                </a>
                <div class="absolute top-2 right-2 opacity-100">
                    <form action="{{ route('favorites.destroy', $favorite->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-white hover:text-secondary transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="h-6 w-6">
                                <path fill="currentColor" d="M0 48V487.7C0 501.1 10.9 512 24.3 512c5 0 9.9-1.5 14-4.4L192 400 345.7 507.6c4.1 2.9 9 4.4 14 4.4c13.4 0 24.3-10.9 24.3-24.3V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48z"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</div>
<script>
    function toggleFavorite(movieId, image) {
        fetch(`/favorites/toggle`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ movie_id: movieId, image: image })
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'added') {
                alert('Added to favorites');
            } else if (data.status === 'removed') {
                alert('Removed from favorites');
            }
        });
    }
</script>
@endsection