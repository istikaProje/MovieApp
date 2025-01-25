@extends('layouts.master') @section('title', 'Anasayfa') @section('description', 'test.') @section('keywords', 'test, test, test') @section('content')
<section class="relative z-10 py-20">
 <div class="bg-third absolute left-0 top-0 z-[-1] h-full w-1/4"></div>
 <div class="container mx-auto">
  <div class="bg-white">
   <div class="flex flex-wrap items-stretch min-h-[740px]">
    <div class="w-full lg:w-1/2">
     <div class="relative hidden h-full w-full overflow-hidden lg:flex">
      <div class="flex h-full items-end">
       <img src="{{asset('./images/log.jpg')}}" alt="image"  loading="lazy" class="h-full w-full object-cover object-center" />
      </div>
     </div>
    </div>
    <div class="w-full lg:w-1/2">
     <div class="w-full py-14 px-8 sm:p-[70px] lg:px-14 xl:px-[90px]">
      <h2 class="text-dark mb-3 text-[32px] font-bold">
       Hesabını Bul
      </h2>
      <p class="mb-14 text-base text-[#8F8F8F] xl:mb-20">
       Hesabını aramak için lütfen e-posta adresini gir.
      </p>
  @error('email')
        <p class="error">{{ $message }}</p>
        @enderror

      <form action="{{route('password.request')}}" method="post">
    @csrf
    <div class="mb-4">
        <input
            type="email"
            name="email"
            value="{{ old('email') }}"
            placeholder="E-posta Adresinizi giriniz"
            class="@error('email') !ring-red-500 @enderror focus:border-primary h-12 w-full rounded-lg border border-transparent bg-[#F6F6F6] px-5 outline-none focus-visible:shadow-none"
        />
        @error('email')
        <p class="error">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex flex-wrap">
        <div class="w-full">
            <button type="submit" class="bg-primary mb-3 rounded-lg py-4 w-full cursor-pointer px-5 text-white transition hover:bg-opacity-90">
                Gönder
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
<!-- ====== Forms Section End -->

@endsection
