{{-- watch and enjoy --}}

    <div class="relative flex flex-col">
       <div class="min-h-28">
          <div class="mx-auto py-4">
             <h2 class="font-black text-center text-7xl text-white uppercase">
                Watch and Enjoy
             </h2>
             <div class="gap-6 mt-8 mx-4 md:flex">
                <div class="md:w-1/2">
                   <div class="wrap-video" x-data="videoHandler" @mouseenter="playVideo" @mouseleave="pauseVideo">
                      <video x-ref="video" class="object-contain h-96 w-full"
                         src="{{ asset('videos/BreakingBad.webm') }}"></video>
                   </div>
                </div>
                <div class="md:w-1/2">
                   <div class="wrap-video" x-data="videoHandler" @mouseenter="playVideo" @mouseleave="pauseVideo">
                      <video x-ref="video" class="object-contain h-96 w-full"
                         src="{{ asset('videos/TheFastandtheFurious.webm') }}"></video>
                   </div>
                </div>
             </div>
          </div>

          <div class="gap-6 mt-8 mx-4 md:flex">
             <div class="md:w-1/2">
                <div class="wrap-video" x-data="videoHandler" @mouseenter="playVideo" @mouseleave="pauseVideo">
                   <video x-ref="video" class="object-contain h-96 w-full"
                      src="{{ asset('videos/Nobody.webm') }}"></video>
                </div>
             </div>
             <div class="md:w-1/2">
                <div class="wrap-video" x-data="videoHandler" @mouseenter="playVideo" @mouseleave="pauseVideo">
                   <video x-ref="video" class="object-contain h-96 w-full"
                      src="{{ asset('videos/johnwick.webm') }}"></video>
                </div>
             </div>
          </div>
       </div>
    </div>
