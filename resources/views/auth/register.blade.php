@extends('layouts.master') 
@section('title', 'Anasayfa') 
@section('description', 'test.') 
@section('keywords', 'test, test, test') 
@section('content')
<section class="relative z-10 py-20">
 <div class="bg-third absolute left-0 top-0 z-[-1] h-full w-1/4"></div>
 <div class="container mx-auto">
  <div class="bg-white">
   <div class="flex flex-wrap items-stretch">
    <div class="w-full lg:w-1/2">
     <div class="relative hidden h-full w-full overflow-hidden lg:flex">
      <div class="flex h-full items-end">
       <img src="{{asset('./images/loginBg.jpg')}}" alt="image" class="h-full w-full object-cover object-center" />
      </div>
     </div>
    </div>
    <div class="w-full lg:w-1/2">
     <div class="w-full py-14 px-8 sm:p-[70px] lg:px-14 xl:px-[90px]">
      <h2 class="text-dark mb-3 text-[32px] font-bold">
       Register a new account
      </h2>
      <p class="mb-14 text-base text-[#8F8F8F] xl:mb-20">
       We make it easy for everyone to <br class="hidden sm:block" />
       access their account
      </p>
      <form action="{{route('register')}}" method="post">
       @csrf
       <div class="mb-4">
        <input   value="{{old('name')}}" type="text" name="name" placeholder="Username" class="@error('name') !ring-red-500 @enderror focus:border-primary h-12 w-full border rounded-lg border-transparent bg-[#F6F6F6] px-5 outline-none focus-visible:shadow-none" />
        @error('name')
        <p class="error">{{$message}}</p>
        @enderror
       </div>
       {{-- Email --}}
       <div class="mb-4">
        <input
         type="email"
         name="email"
         value="{{old('email')}}"
         placeholder="Enter your email"
         class="@error('email') !ring-red-500 @enderror focus:border-primary h-12 w-full rounded-lg border border-transparent bg-[#F6F6F6] px-5 outline-none focus-visible:shadow-none"
        />
        @error('email')
        <p class="error">{{$message}}</p>
        @enderror
       </div>

       {{-- Password --}}
       <div class="mb-4">
        <input
         type="password"
         name="password"
         placeholder="Enter your Password"
         class="@error('password') !ring-red-500 @enderror focus:border-primary h-12 w-full rounded-lg border border-transparent bg-[#F6F6F6] px-5 outline-none focus-visible:shadow-none"
        />
        @error('password')
        <p class="error">{{$message}}</p>
        @enderror
       </div>

       {{-- passwordConfirmation --}}
       <div class="mb-8">
        <input
         type="password"
         name="password_confirmation"
         placeholder="Confirm Password"
         class="@error('password') !ring-red-500 @enderror focus:border-primary h-12 w-full rounded-lg border border-transparent bg-[#F6F6F6] px-5 outline-none focus-visible:shadow-none"
        />
       </div>
       {{-- Remember Checkbox --}}
       <div class="mb-8 flex flex-wrap justify-between">
        <div class="inline-flex items-center">
         <label class="flex items-center cursor-pointer relative" for="check-with-link">
          <input type="checkbox" checked class="peer h-5 w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-slate-800 checked:border-slate-800" id="check-with-link" />
          <span class="absolute text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
           <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
           </svg>
          </span>
         </label>
         <label class="cursor-pointer ml-2 text-[#adadad] text-sm" for="check-with-link">
          <p>
           I agree with the
           <a href="#" class="font-medium hover:text-slate-800 underline">
            terms and conditions
           </a>
           .
          </p>
         </label>
        </div>
       </div>
       <div class="flex flex-wrap">
        <div class="w-full">
            <form action="{{route('payment')}}" method="GET">
                @csrf
                <input type="submit" class="bg-secondary mb-3 py-4 rounded-lg w-full cursor-pointer px-5 text-white transition hover:bg-opacity-90">
          Create Account
            </input>
            </form>
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
