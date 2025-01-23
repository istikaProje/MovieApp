@extends('layouts.master')

@section('content')
 

@include('layouts.sections.movies._movieShowVideo')


<div class=" px-4  mt-10">

   <div class="flex">
      @include('layouts.sections.movies._movieComments')
      @include('layouts.sections.movies._recommends')

      </div>

</div>
@endsection

<script>
    function toggleFavorite(movieId, image, event) {
        if (event) {
            event.preventDefault();
        }
        
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
