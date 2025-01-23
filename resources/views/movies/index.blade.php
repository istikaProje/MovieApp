@extends('layouts.master')

@section('title', 'Anasayfa')
@section('description', 'test.')
@section('keywords', 'test, test, test')

@section('content')

@include('layouts.sections._heroSection', ['title' => 'Movies' , 'subtitle'=> 'Explore our extensive collection of movies' , 'backgroundImage' => asset('images/loginBg.jpg') ])


@include('layouts.sections.movies._movieList')
@push('scripts')
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script>
      function toggleFavorite(movieId, image, event) {
         $.ajax({
               url: '/favorites/toggle',
               type: 'POST',
               data: {
                  movie_id: movieId,
                  image: image,
                  _token: '{{ csrf_token() }}'
               },
               success: function(data) {
                  if (data.status === 'added' || data.status === 'removed') {
                     location.reload();
                  }
               }
         });
      }
   </script>
@endpush
@endsection
