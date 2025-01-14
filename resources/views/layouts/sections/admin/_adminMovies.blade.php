@extends('layouts.adminMaster')

@section('title', 'Movies')
@section('description', 'Movies page.')
@section('keywords', 'movies, admin, dashboard')

@section('content')

<div class="container h-screen mx-auto">
    @if(session('success'))
    <div class="bg-green-500 text-white p-4 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif
    <div class="flex justify-end mb-4">
        <a href="{{ route('admin.movies.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Add Movie
        </a>
    </div>
    <div class="overflow-hidden shadow md:rounded-lg">
      <table class="min-w-full divide-y divide-gray-300">
          <thead class="bg-gray-50">
              <tr>
                  <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">Title</th>
                  <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">Description</th>
                  <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">Vote Average</th>
                  <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">YouTube Link</th>
                  <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">Image</th>
                  <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">Video</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Actions</th>
              </tr>
          </thead>
          <tbody>
              @forelse($movies as $movie)
              <tr class="odd:bg-white even:bg-slate-50">
                  <td class="whitespace-nowrap w-full sm:w-auto sm:w-none max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                      {{ $movie->title }}
                  </td>
                  <td class="whitespace-nowrap w-full sm:w-auto sm:w-none max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                      {{ $movie->description }}
                  </td>
                  <td class="whitespace-nowrap w-full sm:w-auto sm:w-none max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                      {{ $movie->vote_average }}
                  </td>
                  <td class="whitespace-nowrap w-full sm:w-auto sm:w-none max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                      <a href="{{ $movie->youtube_link }}" target="_blank" class="text-blue-600 hover:text-blue-900">{{ $movie->youtube_link }}</a>
                  </td>
                  <td class="whitespace-nowrap w-full sm:w-auto sm:w-none max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                    @if($movie->image)
                      <img src="{{ asset('storage/' . $movie->image) }}" alt="{{ $movie->title }}" class="w-16 h-16 object-cover">
                    @endif

          
                  </td>
                  <td class="whitespace-nowrap w-full sm:w-auto sm:w-none max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                    @if($movie->video)
                      <video width="320" height="240" controls>
                          <source src="{{ asset('storage/' . $movie->video) }}" type="video/mp4">
                          Your browser does not support the video tag.
                      </video>
                    @endif
                  </td>
                  <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-500 sm:pl-6">
                      <a href="{{ route('admin.movies.edit', $movie->id) }}" class="text-indigo-600 mr-2 hover:text-indigo-900">Edit</a>
                      <form action="{{ route('admin.movies.destroy', $movie->id) }}" method="POST" class="inline-block">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                      </form>
                  </td>
              </tr>
              @empty
              <tr>
                  <td colspan="7" class="py-4 pl-4 pr-3 text-sm font-medium text-gray-500 text-center">No movies found.</td>
              </tr>
              @endforelse
          </tbody>
      </table>
  </div>
</div>
@endsection