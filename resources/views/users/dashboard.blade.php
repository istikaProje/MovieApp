@extends('layouts.master')
@section('title', 'Anasayfa')
@section('description', 'test.')
@section('keywords', 'test, test, test')




@section('content')

<section class="relative flex min-h-screen w-full items-start bg-teal-700">

    <div class="p-[30px]">

        <div
            class="flex flex-wrap items-end justify-between sm:flex-nowrap sm:space-x-4 md:mb-6">
            <div class="mb-6">
                <h2 class="mb-2 text-2xl font-semibold text-black">
                    Settings Page
                </h2>
            </div>


            @if (session('success'))
            <div style="color: white; padding: 10px; border: 1px solid green; margin-bottom: 10px;">
                {{ session('success') }}
            </div>
            @endif

        </div>

        <div class=" flex flex-wrap">
            <div class="w-full px-4 lg:w-7/12 2xl:w-2/3">
                <div
                    class="mb-8 rounded-lg border border-stroke bg-white lg:mb-0">
                    <h3
                        class="border-b border-stroke py-4 px-7 text-base font-medium text-black">
                        Personal Information
                    </h3>
                    <div class="p-7">

                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif


                        <form action="{{ route('dashboard.update') }}" method="POST">
                            @csrf
                            <div class="flex flex-wrap">

                                <div class="w-full px-3">
                                    <div class="mb-[30px]">
                                        <label
                                            for="full_name"
                                            class="mb-[10px] block text-base font-medium text-black">
                                            Full Name
                                        </label>
                                        <div class="relative">
                                            <input
                                                type="text"
                                                id="name"
                                                name="name"
                                                placeholder="Full Name"
                                                value="{{ old('name', auth()->user()->name) }}"
                                                class="h-[46px] w-full rounded-md border border-[#E0E0E0] pl-12 pr-5 text-base text-black outline-none focus:border-primary" required />
                                            @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <span
                                                class="absolute left-[18px] top-1/2 -translate-y-1/2">
                                                <svg
                                                    width="20"
                                                    height="20"
                                                    viewBox="0 0 20 20"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="0.8">
                                                        <path
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M3.72039 12.8864C4.50179 12.105 5.5616 11.666 6.66667 11.666H13.3333C14.4384 11.666 15.4982 12.105 16.2796 12.8864C17.061 13.6678 17.5 14.7276 17.5 15.8327V17.4993C17.5 17.9596 17.1269 18.3327 16.6667 18.3327C16.2064 18.3327 15.8333 17.9596 15.8333 17.4993V15.8327C15.8333 15.1696 15.5699 14.5338 15.1011 14.0649C14.6323 13.5961 13.9964 13.3327 13.3333 13.3327H6.66667C6.00363 13.3327 5.36774 13.5961 4.8989 14.0649C4.43006 14.5338 4.16667 15.1696 4.16667 15.8327V17.4993C4.16667 17.9596 3.79357 18.3327 3.33333 18.3327C2.8731 18.3327 2.5 17.9596 2.5 17.4993V15.8327C2.5 14.7276 2.93899 13.6678 3.72039 12.8864Z"
                                                            fill="#637381" />
                                                        <path
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M9.9987 3.33268C8.61799 3.33268 7.4987 4.45197 7.4987 5.83268C7.4987 7.21339 8.61799 8.33268 9.9987 8.33268C11.3794 8.33268 12.4987 7.21339 12.4987 5.83268C12.4987 4.45197 11.3794 3.33268 9.9987 3.33268ZM5.83203 5.83268C5.83203 3.5315 7.69751 1.66602 9.9987 1.66602C12.2999 1.66602 14.1654 3.5315 14.1654 5.83268C14.1654 8.13387 12.2999 9.99935 9.9987 9.99935C7.69751 9.99935 5.83203 8.13387 5.83203 5.83268Z"
                                                            fill="#637381" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>



                                <div class="w-full px-3">
                                    <div class="mb-[30px]">
                                        <label
                                            for="email"
                                            class="mb-[10px] block text-base font-medium text-black">
                                            Email Address
                                        </label>
                                        <div class="relative">
                                            <input
                                                type="email"
                                                id="email"
                                                name="email"
                                                placeholder="Email Address"
                                                value="{{ old('email', auth()->user()->email) }}"
                                                class="h-[46px] w-full rounded-md border border-[#E0E0E0] pl-12 pr-5 text-base text-black outline-none focus:border-primary" required />
                                            @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <span
                                                class="absolute left-[18px] top-1/2 -translate-y-1/2">
                                                <svg
                                                    width="20"
                                                    height="20"
                                                    viewBox="0 0 20 20"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="0.8">
                                                        <path
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M3.33203 4.16667C2.8756 4.16667 2.4987 4.54357 2.4987 5V15C2.4987 15.4564 2.8756 15.8333 3.33203 15.8333H16.6654C17.1218 15.8333 17.4987 15.4564 17.4987 15V5C17.4987 4.54357 17.1218 4.16667 16.6654 4.16667H3.33203ZM0.832031 5C0.832031 3.6231 1.95513 2.5 3.33203 2.5H16.6654C18.0423 2.5 19.1654 3.6231 19.1654 5V15C19.1654 16.3769 18.0423 17.5 16.6654 17.5H3.33203C1.95513 17.5 0.832031 16.3769 0.832031 15V5Z"
                                                            fill="#637381" />
                                                        <path
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M0.982743 4.52154C1.24667 4.14449 1.76628 4.0528 2.14332 4.31673L9.99877 9.81554L17.8542 4.31673C18.2313 4.0528 18.7509 4.14449 19.0148 4.52154C19.2787 4.89858 19.187 5.41818 18.81 5.68211L10.4767 11.5154C10.1897 11.7163 9.80782 11.7163 9.52088 11.5154L1.18755 5.68211C0.81051 5.41818 0.718814 4.89858 0.982743 4.52154Z"
                                                            fill="#637381" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full px-3">
                                    <div class="mb-[30px]">
                                        <label
                                            for="current_password"
                                            class="mb-[10px] block text-base font-medium text-black">
                                            Current Password
                                        </label>
                                        <div class="relative">
                                            <input
                                                type="password"
                                                id="current_password"
                                                name="current_password"
                                                placeholder="Current Password"
                                                class="h-[46px] w-full rounded-md border border-[#E0E0E0] px-5 text-base text-black outline-none focus:border-primary" required />
                                            @error('current_password')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full px-3">
                                    <div class="mb-[30px]">
                                        <label
                                            for="password"
                                            class="mb-[10px] block text-base font-medium text-black">
                                            New Password
                                        </label>
                                        <div class="relative">
                                            <input
                                                type="password"
                                                id="password"
                                                name="password"
                                                placeholder="Enter your new password"
                                                class="h-[46px] w-full rounded-md border border-[#E0E0E0] px-5 text-base text-black outline-none focus:border-primary" />
                                            @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full px-3">
                                    <div class="mb-[30px]">
                                        <label
                                            for="password_confirmation"
                                            class="mb-[10px] block text-base font-medium text-black">
                                            Re-type New Password
                                        </label>
                                        <div class="relative">
                                            <input
                                                type="password"
                                                id="password_confirmation"
                                                name="password_confirmation"
                                                placeholder="Re-type your new password"
                                                class="h-[46px] w-full rounded-md border border-[#E0E0E0] px-5 text-base text-black outline-none focus:border-primary" />
                                        </div>
                                    </div>
                                </div>


                                <div class="w-full px-3 flex justify-center items-center">
                                    <button type="submit"
                                        class="flex h-11 items-center justify-center rounded border border-transparent bg-primary px-6 text-base font-medium text-white hover:bg-opacity-90">
                                        Save changes
                                    </button>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Photo ve Account delete bölümleri için kapsayıcı start-->
            <div class="w-full px-4 lg:w-5/12 2xl:w-1/3 space-y-6">


                <!-- Photo start -->
                <div class="w-full rounded-lg border border-stroke bg-white lg:w-auto">
                    <h3 class="border-b border-stroke py-4 px-7 text-base font-medium text-black">
                        Your Photo
                    </h3>
                    <div class="p-7 grid place-items-center">
                        <div class="mb-4 flex flex-col items-center gap-6">
                            <div class="h-[55px] w-[55px]">
                                @if(Auth::user()->profile_photo)
                                <img
                                    src="{{ asset('avatars/' . Auth::user()->profile_photo) }}"
                                    id="profileImage"
                                    alt="photo"
                                    class="h-full w-full rounded-full object-cover object-center" />
                                @else
                                <img
                                    src="https://via.placeholder.com/150"
                                    id="profileImage"
                                    alt="photo"
                                    class="h-full w-full rounded-full object-cover object-center" />
                                @endif
                            </div>

                            <!-- Fotoğraf güncelleme formu -->
                            <form action="{{ route('photo.update') }}" method="POST" enctype="multipart/form-data" class="flex flex-col items-center gap-4">
                                @csrf
                                <label for="profile_photo" class="cursor-pointer text-sm text-primary">
                                    Edit your photo
                                    <input type="file" class="sr-only" name="profile_photo" id="profile_photo" accept="image/*" onchange="previewImage(event)" />
                                </label>
                                <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                    Photo update
                                </button>
                            </form>

                            <!-- Fotoğraf silme formu -->
                            <form action="{{ route('photo.delete') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                    Photo delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Photo end -->


                <!-- Account delete start -->
                <div class="w-full rounded-lg border border-stroke bg-white lg:w-auto">
                    <h3 class="border-b border-stroke py-4 px-7 text-base font-medium text-black text-center">
                        Account delete
                    </h3>

                    <div class="p-7 place-items-center">
                        <div class="mb-4 flex items-center">
                            <div class="mr-3 h-[55px] w-full max-w-[90px]">
                                <form action="{{ route('dashboard.delete') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-6 py-2 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-1">
                                        Account Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Account delete end -->

            </div>
            <!-- Photo ve Account delete bölümleri için kapsayıcı end-->

        </div>
    </div>





</section>

<script>
    // Profil resmi önizleme
    function previewImage(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('profileImage').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    }
</script>



@endsection