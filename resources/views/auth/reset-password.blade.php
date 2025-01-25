@extends('layouts.master')
@section('title', 'Anasayfa')
@section('description', 'test.')
@section('keywords', 'test, test, test')
@section('content')
<section class="relative z-10 py-10">
 <div class="bg-third absolute left-0 top-0 z-[-1] h-full w-1/4"></div>
 <div class="container mx-auto">
  <div class="bg-white">
   <div class="flex flex-wrap items-stretch">
    <div class="w-full lg:w-1/2">
     <div class="relative hidden h-full w-full overflow-hidden lg:flex">
      <div class="flex h-full items-end">
       <img src="{{asset('./images/registers.jpg')}}" alt="image"  loading="lazy" class="h-full w-full object-cover object-center" />
      </div>
     </div>
    </div>
    <div class="w-full lg:w-1/2">
     <div class="w-full py-14 px-8 sm:p-[70px] lg:px-14 xl:px-[90px]">
      <h2 class="text-dark mb-3 text-[32px] font-bold">
       Şifrenizi Yenileyebilirsiniz...
      </h2>
      <p class="mb-14 text-base text-[#8F8F8F] xl:mb-20">
        Herkesin hesabına erişmesini <br class="hidden sm:block" />
        kolaylaştırıyoruz
      </p>
      <form action="{{route('password.update')}}" method="post">
       @csrf

            <input type="hidden" name="token" value="{{ $token }}">

       <div class="mb-4">
        <input type="email" name="email" value="{{old('email')}}" placeholder="E-mail Adresini giriniz" class="@error('email') !ring-red-500 @enderror focus:border-primary h-12 w-full rounded-lg border border-transparent bg-[#F6F6F6] px-5 outline-none focus-visible:shadow-none" />
        @error('email')
        <p class="error">{{$message}}</p>
        @enderror
       </div>
       <div class="mb-4">
        <input type="password" name="password" placeholder="Şifrenizi giriniz" class="@error('password') !ring-red-500 @enderror focus:border-primary h-12 w-full rounded-lg border border-transparent bg-[#F6F6F6] px-5 outline-none focus-visible:shadow-none" />
        @error('password')
        <p class="error">{{$message}}</p>
        @enderror
       </div>
       <div class="mb-8">
        <input type="password" name="password_confirmation" placeholder="Şifreyi Onayla" class="@error('password') !ring-red-500 @enderror focus:border-primary h-12 w-full rounded-lg border border-transparent bg-[#F6F6F6] px-5 outline-none focus-visible:shadow-none" />
       </div>


       <div class="flex flex-wrap">
        <div class="w-full">
         <button id="submit-button" class="bg-secondary mb-3 py-4 rounded-lg w-full cursor-pointer px-5 text-white transition hover:bg-opacity-90">
          Şifreyi Sıfırla
         </button>
        </div>
       </div>
      </form>
     </div>
    </div>
   </div>
  </div>
 </div>
</section>




@endsection



@push('scripts')
@vite('resources/js/register.js')
@endpush
