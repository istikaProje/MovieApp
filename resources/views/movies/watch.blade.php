@extends('layouts.master')

@section('content')
   <div class="flex items-center justify-center min-h-screen bg-black">
      <video
         id="my-video"
         controls
         preload="auto"
         width="100%"
         height="100%"
         poster="{{ asset('storage/' . $movie->poster) }}"
      >
         <source src="{{ asset('storage/' . $movie->video) }}" />
      </video>
      
   </div>
@endsection

@section('scripts')
   <script>
      document.addEventListener('DOMContentLoaded', function() {
         var videoElement = document.getElementById('my-video');

         videoElement.addEventListener('canplay', function() {
            if (videoElement.requestFullscreen) {
               videoElement.requestFullscreen();
            } else if (videoElement.mozRequestFullScreen) { // Firefox
               videoElement.mozRequestFullScreen();
            } else if (videoElement.webkitRequestFullscreen) { // Chrome, Safari and Opera
               videoElement.webkitRequestFullscreen();
            } else if (videoElement.msRequestFullscreen) { // IE/Edge
               videoElement.msRequestFullscreen();
            }
            videoElement.play();
         });

         videoElement.addEventListener('error', function() {
            alert('Video yüklenirken bir hata oluştu.');
         });
      });
   </script>
@endsection
