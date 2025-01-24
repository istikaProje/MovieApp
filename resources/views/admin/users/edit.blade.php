@extends('layouts.adminMaster')
@section('title', 'Edit User')
@section('content')
<div class="container mx-auto">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-4">Kullanıcıyı Güncelle</h2>
        <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Ad</label>
                <input type="text" name="name" id="name" value="{{ $user->name }}" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">E-posta</label>
                <input type="email" name="email" id="email" value="{{ $user->email }}" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Şifre</label>
                <input type="password" name="password" id="password" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>


            <div class="mb-4">
                <label for="password" class="block text-gray-700">Şifre Doğrulama</label>
                <input type="password" name="password_confirmation"
                placeholder="Şifre Doğrulama" id="password" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="role" class="block text-gray-700">Rol</label>
                <select name="role" id="role" class="w-full p-2 border border-gray-300 rounded-lg">
                    <option value="customer" {{ $user->role == 'customer' ? 'selected' : '' }}>Customer</option>
                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                </select>
            </div>


            <div class="mb-4">
                <label for="status" class="block text-gray-700">Durum</label>
                <input type="text" name="status" id="status" value="{{ $user->status }}" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Kullanıcıyı Güncelle</button>
        </form>
    </div>
</div>
@endsection
