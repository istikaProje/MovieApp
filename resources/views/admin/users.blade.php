@extends('layouts.adminMaster')
@section('title', 'Users')
@section('description', 'test.')
@section('keywords', 'test, test, test')
@section('content')


                <div class="container mx-auto">
                  
                        <div class="h-screen">
                            @include('layouts.sections.admin._adminUsers')
                        </div>

                </div>
@endsection


