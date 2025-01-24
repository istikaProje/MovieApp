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

@push('scripts')
    @vite('resources/js/toggleFavorite.js')
@endpush