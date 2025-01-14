@extends('layouts.adminMaster')
@section('title', 'Add User')
@section('content')
<div class="container mx-auto">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-4">Add User</h2>
        <form action="{{ route('admin.users.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" name="name" id="name" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>
            @error('name')
            <p class="error">{{$message}}</p>
            @enderror
       
            <div class="mb-4">
                <label for="email" class="  block text-gray-700  ">Email</label>
                <input type="email" name="email" id="email" class=" w-full p-2 border border-gray-300  rounded-lg">
            </div>
            @error('email')
            <p class="error">{{$message}}</p>
            @enderror
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>
            @error('password')
            <p class="error">{{$message}}</p>
            @enderror
            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="role" class="block text-gray-700">Role</label>
                <select name="role" id="role" class="w-full p-2 border border-gray-300 rounded-lg">
                    <option value="customer">customer</option>
                    <option value="admin">Admin</option>
                </select>

                @error('role')
                <p class="error">{{$message}}</p>
                @enderror
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Add User</button>
        </form>
    </div>
</div>
@endsection