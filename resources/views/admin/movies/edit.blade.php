@extends('layouts.adminMaster')

@section('title', 'Edit Movie')

@section('content')
@include('layouts.sections.admin._adminMovieEdit')
@endsection

@push('scripts')
@vite('resources/js/previewImage.js')
@endpush