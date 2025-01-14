

@extends('layouts.adminMaster')
@section('title', 'Anasayfa')
@section('description', 'test.')
@section('keywords', 'test, test, test')
@section('content')

    <div class="flex w-full bg-gray-900">
        <div class="md:w-64"> <!-- Sidebar genişliği -->
            @include('layouts.sections.admin._adminSidebar')
        </div>
        <div class="container flex-grow justify-center">
            @include('layouts.sections.admin._adminCategories')
        </div>
    </div>
@endsection
