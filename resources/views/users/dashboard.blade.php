@extends('layouts.master')
@section('title', 'Anasayfa')
@section('description', 'test.')
@section('keywords', 'test, test, test')

@section('content')
@push('styles')
<style>


    .vjs-big-play-button {
        display: none !important; /* Varsayılan Video.js başlatma butonunu gizler */
    }

    .custom-control {
        position: absolute;
        display: flex;
        gap: 10px;
        z-index: 20px;
        bottom: 0;
        top: 0;
        width: 100%;
        height: 100%;
        justify-content: center;
    }

    .control-button {
        background: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        cursor: pointer;
    }

    .control-button:hover {
        background: rgba(255, 255, 255, 0.7);
        color: black;
    }

    .control-button svg {
        width: 24px;
        height: 24px;
    }

</style>
@endpush

<section class="container h-lvh">
  
<div class="video-container">

    <div class="relative">
        <video
        id="my-video"
        class="video-js   vjs-default-skin"
        controls
        preload="auto"
        
        data-setup='{}'>
        <source src="{{ asset('videos/BreakingBad.webm') }}" />
        <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a
            web browser that
            <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
        </p>

  
    </video>

    
              <!-- Custom Controls -->
              <div class="custom-control">
                <!-- Rewind Button -->
                <button class="control-button" onclick="rewindVideo()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm1 15-6-4 6-4z" />
                    </svg>
                </button>
        
                <!-- Play/Pause Button -->
                <button id="play-pause-button" class="control-button" onclick="togglePlay()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="67" height="67" fill="none" viewBox="0 0 67 67"><path fill="#fff" d="M20.28 9.65c-2.205-1.268-4.026-.228-4.026 2.307v43.805c0 2.535 1.82 3.574 4.027 2.307l38.471-21.903a2.556 2.556 0 0 0 1.094-.935 2.514 2.514 0 0 0 0-2.743 2.556 2.556 0 0 0-1.093-.936L20.28 9.65z"/></svg>
                    <svg id="pause-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="display:none;">
                        <path d="M6 19h4V5H6zm8-14v14h4V5z" />
                    </svg>
                </button>
        
                <!-- Forward Button -->
                <button class="control-button" onclick="forwardVideo()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm-1 15 6-4-6-4z" />
                    </svg>
                </button>
            </div>




    


</div>
@push('scripts')
<script>
    // Global player değişkeni
    let player;

    // DOM yüklendiğinde Video.js player'ı başlat
    document.addEventListener('DOMContentLoaded', () => {
        player = videojs('my-video', {
            controls: true,
            autoplay: false,
            preload: 'auto',
        });

        // Play/Pause ikonlarının durumunu güncelle
        player.on('play', () => {
            document.getElementById('play-icon').style.display = 'none';
            document.getElementById('pause-icon').style.display = 'inline';
        });

        player.on('pause', () => {
            document.getElementById('play-icon').style.display = 'inline';
            document.getElementById('pause-icon').style.display = 'none';
        });
    });

    // Videoyu 10 saniye geri sar
    function rewindVideo() {
        if (player) {
            player.currentTime(player.currentTime() - 10);
        } else {
            console.error('Player henüz başlatılmadı!');
        }
    }

    // Videoyu 10 saniye ileri sar
    function forwardVideo() {
        if (player) {
            player.currentTime(player.currentTime() + 10);
        } else {
            console.error('Player henüz başlatılmadı!');
        }
    }

    // Videoyu oynat/durdur
    function togglePlay() {
        const playIcon = document.getElementById('play-icon');
        const pauseIcon = document.getElementById('pause-icon');

        if (player) {
            if (player.paused()) {
                player.play();
                playIcon.style.display = 'none';
                pauseIcon.style.display = 'inline';
            } else {
                player.pause();
                playIcon.style.display = 'inline';
                pauseIcon.style.display = 'none';
            }
        } else {
            console.error('Player henüz başlatılmadı!');
        }
    }
</script>
@endpush


</section>
@endsection
