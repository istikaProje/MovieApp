    {{-- Hero Section --}}

    <div class="w-full p-8">
       <div x-data="videoHandler" @mouseenter="playVideo" @mouseleave="pauseVideo">
          <video x-ref="video"
             class="shadow-[-13px_14px_6px_-5px_#ff5758] inline w-full h-full object-center object-cover rounded-2xl"
             preload="metadata" data-src="{{ asset('videos/PeakyBlinders.webm') }}"
             src="{{ asset('videos/PeakyBlinders.webm') }}"></video>
       </div>
    </div>
