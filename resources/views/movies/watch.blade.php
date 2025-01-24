@extends('layouts.master')

@section('content')

<style>

    *, *:before, *:after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      .video-player {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .progress {
        flex: 1;
        display: flex;
        align-items: center;
        cursor: pointer;
        margin: 0 10px;
    }

    .progress__filled {
        height: 5px;
    }

      .controls__slider {
        width: 10px ;
        height: 30px;
      }

      .sounds{
        max-width: 120px;
      }

      .controls {
        display: flex;
        position: absolute;
        bottom: 0;
        width: 100%;
        flex-wrap: wrap;
        background: rgba(0,0,0,0.5);
        transform: translateY(0);
        padding-left: 10px;
        padding-right: 10px;
      }

      .controls > * {
        flex: 1;
      }
      .progress {
        flex: 10;
        position: relative;
        display: flex;
        flex-basis: 100%;
        height: 5px;
        background: rgba(255,255,255,0.5);
        cursor: pointer;
        height: 15px;
      }
      .progress__filled {
        width: 50%;
        background: red;
        flex: 0;
        flex-basis: 0%;
      }

        input[type=range] {
        -webkit-appearance: none;
        background: transparent;
        width: auto;
        margin: 0 5px;
      }

      input[type=range]:focus {
        outline: none;
      }

      input[type=range]::-webkit-slider-runnable-track {
        width: 100%;
        height: 8.4px;
        cursor: pointer;
        background: rgba(255,255,255,0.8);
        border-radius: 4px;
      }

      input[type=range]::-webkit-slider-thumb {
        height: 0.9rem;
        width: 0.9rem;
        border-radius: 50px;
        background: red;
        cursor: pointer;
        -webkit-appearance: none;
        margin-top: -3.5px;
      }

      input[type=range]::-moz-range-track {
        width: 100%;
        height: 8.4px;
        cursor: pointer;
        background: rgba(255,255,255,0.8);
        border-radius: 4px;
      }

      input[type=range]::-moz-range-thumb {
        height: 0.9rem;
        width: 0.9rem;
        border-radius: 50px;
        background: red;
        cursor: pointer;
        -webkit-appearance: none;
        margin-top: -3.5px;
      }

        .time
        {
        margin-top: 3px;
        flex: 0 0 20px;
        }

        .time2
        {
        margin-top: 3px;
        flex: 0 0 20px;

        }

        .toggleButton{
        position: absolute;
        top: 43%;
        left: 48%;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        padding: 1em;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #ffffff;
        font-size: 1em;
        font-weight: 400;
        width: 3em;
        height: 3em;
        white-space: nowrap;
        line-height: 0;
        }

        .time_skipL{
        position: absolute;
        top: 43%;
        left: 15%;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        padding: 1em;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #ffffff;
        font-size: 1em;
        font-weight: 400;
        width: 3em;
        height: 3em;
        white-space: nowrap;
        line-height: 0;
        }

        .time_skipR{
        position: absolute;
        top: 43%;
        right: 15%;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        padding: 1em;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #ffffff;
        font-size: 1em;
        font-weight: 400;
        width: 3em;
        height: 3em;
        white-space: nowrap;
        line-height: 0;
        }

      .playbackRate{
        max-width: 100px;
      }

      select.playbackRate {
        color: rgb(172, 16, 16);
      }
      select.playbackRate option {
        color: rgb(172, 16, 16);
      }

        .dropdown-menu {
        position: absolute;
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100px;
        display: none;
        bottom: 100%;
        margin-bottom: 8px;
        z-index: 10;
        }

        .dropdown-item {
        padding: 8px;
        cursor: pointer;
        font-size: 14px;
        }

        .dropdown-item:hover {
        background-color: #f0f0f0;
        }

        .selected {
        font-weight: bold;
        color: #1D4ED8;
        }

        .dropdown.open .dropdown-menu {
        display: block;
        }

    </style>

    <link rel="stylesheet" href="{{ asset('Icons/style.css') }}">

    <div class="video-player flex items-center justify-center min-h-screen bg-black" oncontextmenu="return false;">
             <!-- Video Player -->
                 <!-- div video player için div oncontextmenu="return false;" sağ tık'ı kapatıyor  -->
                    <video class="video" id="myVideo" ondblclick="openFullscreen()" width="100%" height="100%" poster="{{ asset('storage/' . $movie->poster) }}"">
                      <source
                        src="{{ asset('storage/' . $movie->video) }}"
                        type="video/mp4"
                      />
                      <track src="{{ asset('subtitle/sample.vtt') }}" kind="subtitles" srclang="en" label="English">
                      <p>İnternet tarayıcınız HTML5 video oynatıcısını desteklemiyor.</p>
                    </video>
                    <button class="controls__button toggleButton" title="Toggle Play"> <i class="icon-Play"></i> </button>
                    <i class="icon-rotate_left controls__button time_skipL" data-skip="-10"></i>
                    <i class="icon-rotate_right controls__button time_skipR" data-skip="10"></i>
                    <div class="controls">
                      <div class="progress">
                        <div class="progress__filled"></div>
                      </div>

                      <label class="time mx-2" style="color: white; margin-top: 8px" width="10px">0:00</label>

                      <i class="icon-volume_high text-xl  mx-2" style="max-width: 25px; margin-top: 10px; margin-left: 15px;"> </i>
                      <input
                        type="range"
                        name="volume"
                        class="controls__slider sounds"
                        min="0"
                        max="1"
                        step="0.05"
                        value="1"
                        width="10px"
                        style="margin-top: 5px"
                      />
                      <div class="flex items-center justify-end space-x-2 ml-auto" style="margin-left: auto;">

                        <i class="icon-subtitle text-white text-xl cursor-pointer hover:text-gray-400" id="subtitleToggle" onclick="toggleSubtitles()"> </i>

                        <div class="dropdown relative">
                          <button onclick="toggleDropdown()" class="dropdown-toggle cursor-pointer bg-transparent-200 p-2 rounded">
                              <img src="{{ asset('images/Speed.png') }}" alt="Dropdown Icon" class="w-6 h-6" />
                          </button>
                          <div class="dropdown-menu">
                              <div class="dropdown-item" data-speed="2">2x</div>
                              <div class="dropdown-item" data-speed="1.5">1.5x</div>
                              <div class="dropdown-item selected" data-speed="1">1x</div>
                              <div class="dropdown-item" data-speed="0.5">0.5x</div>
                              <div class="dropdown-item" data-speed="0.25">0.25x</div>
                          </div>
                      </div>

                      <label class="time2 " style="color: white; margin-top:0; margin-left 10px">0:00</label>

                      <i id="fullscreen" class="icon-expand text-xl px-2" onclick="openFullscreen();" title="Fullscreen"> </i>

                     </div>

                    </div>


              </div>

            <script>
                const video = document.querySelector(".video");
                const toggleButton = document.querySelector(".toggleButton");
                const progress = document.querySelector(".progress");
                const progressBar = document.querySelector(".progress__filled");
                const sliders = document.querySelectorAll(".controls__slider");
                const skipBtns = document.querySelectorAll("[data-skip]");
                const time = document.querySelector(".time");
                const time2 = document.querySelector(".time2");
                const video_player = document.querySelector(".video-player");
                const speedDropdown = document.getElementById("speedDropdown");
                const dropdownItems = document.querySelectorAll(".dropdown-item");
                const fullscreenButton = document.getElementById("fullscreen");

                let isPaused = true;
                let isMouseOver = false;
                let hideControlsTimeout;

                function showControls()
                {
                    clearTimeout(hideControlsTimeout);

                    document.querySelector(".controls").style.visibility = "visible";
                    document.querySelector(".toggleButton").style.visibility = "visible";
                    document.querySelector(".time_skipL").style.visibility = "visible";
                    document.querySelector(".time_skipR").style.visibility = "visible";
                }
                function hideControls()
                {
                    if (!isPaused && !isMouseOver) {
                    document.querySelector(".controls").style.visibility = "hidden";
                    document.querySelector(".toggleButton").style.visibility = "hidden";
                    document.querySelector(".time_skipL").style.visibility = "hidden";
                    document.querySelector(".time_skipR").style.visibility = "hidden";
                    }
                }

                function togglePlay()
                {
                    if (video.paused || video.ended)
                    {
                        video.play();
                        isPaused = false;
                        hideControls();
                    }
                    else
                    {
                        video.pause();
                        isPaused = true;
                        showControls();
                    }
                }

                video.addEventListener("play", () => {
                isPaused = false;
                hideControls();
                });

                video.addEventListener("pause", () => {
                isPaused = true;
                showControls();
                });

                video_player.addEventListener("mouseover", () => {
                isMouseOver = true;
                showControls();
                });

                video_player.addEventListener("mouseout", () => {
                isMouseOver = false;
                hideControls();
                });

                // Blob URL
                let xhr = new XMLHttpRequest();
                xhr.open("GET", "{{ asset('storage/' . $movie->video) }}");
                xhr.responseType = "arraybuffer";
                xhr.onload = (e)=>{
                  let blop = new Blob([xhr.response]);
                  let url = URL.createObjectURL(blop);
                  video.src = url;
                }
                xhr.send();

                //zaman update'i
                function timeUpdate()
                {
                    const minutes = Math.floor(video.currentTime / 60);
                    const seconds = Math.floor(video.currentTime % 60);
                    time.innerHTML = `${minutes}:${seconds.toString().padStart(2, '0')}`;

                    const remainingTime = video.duration - video.currentTime;
                    const remainingMinutes = Math.floor(remainingTime / 60);
                    const remainingSeconds = Math.floor(remainingTime % 60);
                    time2.innerHTML = `${remainingMinutes}:${remainingSeconds.toString().padStart(2, '0')}`;
                }
                video.addEventListener("timeupdate", timeUpdate);

                //Başlatma ve durdurma butonu
                function updateToggleButton()
                {
                toggleButton.innerHTML = video.paused ? '<i class="icon-Play"></i>' : '<i class="icon-Pause"></i>';
                }

                function handleProgress() {
                const progressPercentage = (video.currentTime / video.duration) * 100;
                progressBar.style.flexBasis = `${progressPercentage}%`;
                }

                function scrub(e) {
                const scrubTime = (e.offsetX / progress.offsetWidth) * video.duration;
                video.currentTime = scrubTime;
                }

                function handleSliderUpdate() {
                video[this.name] = this.value;
                }

                function handleSkip() {
                video.currentTime += +this.dataset.skip;
                }

                toggleButton.addEventListener("click", togglePlay);
                video.addEventListener("click", togglePlay);
                video.addEventListener("play", updateToggleButton);
                video.addEventListener("pause", updateToggleButton);
                video.addEventListener("timeupdate", handleProgress);
                progress.addEventListener("click", scrub);

                sliders.forEach((slider) => {
                slider.addEventListener("change", handleSliderUpdate);
                });

                skipBtns.forEach((btn) => {
                btn.addEventListener("click", handleSkip);
                });

                let mousedown = false;

                sliders.forEach((slider) => {
                slider.addEventListener("change", handleSliderUpdate);
                });

                document.addEventListener("keydown", (e) => {
                if (e.code === "Space") togglePlay();
                });


                // Tam Ekran
                function openFullscreen()
                {
                    if (video_player.requestFullscreen)
                    {
                        if (document.fullscreenElement) {
                        document.exitFullscreen();
                        fullscreenButton.classList.remove('icon-compress');
                        fullscreenButton.classList.add('icon-expand');
                        } else {
                        video_player.requestFullscreen();
                        fullscreenButton.classList.remove('icon-expand');
                        fullscreenButton.classList.add('icon-compress');
                        }
                    }

                    else if (video_player.webkitRequestFullscreen)
                    { /* Safari için*/
                        if (document.webkitFullscreenElement) {
                        document.webkitExitFullscreen();
                        fullscreenButton.classList.remove('icon-compress');
                        fullscreenButton.classList.add('icon-expand');
                        } else {
                        video_player.webkitRequestFullscreen();
                        fullscreenButton.classList.remove('icon-expand');
                        fullscreenButton.classList.add('icon-compress');
                        }
                    }

                    else if (video_player.msRequestFullscreen)
                    { /* IE11 için*/
                        if (document.msFullscreenElement) {
                        document.msExitFullscreen();
                        fullscreenButton.classList.remove('icon-compress');
                        fullscreenButton.classList.add('icon-expand');
                        } else {
                        video_player.msRequestFullscreen();
                        fullscreenButton.classList.remove('icon-expand');
                        fullscreenButton.classList.add('icon-compress');
                        }
                    }

                    else if (videoElement.mozRequestFullScreen)
                    { // Firefox
                        if(document.mozRequestFullScreenElement) {
                        document.mozCancelFullScreen();
                        fullscreenButton.classList.remove('icon-compress');
                        fullscreenButton.classList.add('icon-expand');
                        } else {
                        videoElement.mozRequestFullScreen();
                        fullscreenButton.classList.remove('icon-expand');
                        fullscreenButton.classList.add('icon-compress');
                        };
                    }
                }

             // Hız ayarı seçme
              dropdownItems.forEach(item => {
              item.addEventListener('click', (e) => {
              const newSpeed = e.target.textContent.replace('x', '');
              const speedValue = parseFloat(newSpeed);

              if (!isNaN(speedValue)) {
                  video.playbackRate = speedValue;
              } else {
                  console.error("Invalid speed value:", newSpeed);
              }

              // Dropdown'u seçtikten sonra kapat
              const dropdown = document.querySelector('.dropdown');
              dropdown.classList.remove('open');

              // Seçili seçeneği parlak yap
              dropdownItems.forEach(i => i.classList.remove('selected'));
              e.target.classList.add('selected');
          });
        });


        function toggleDropdown()
        {
            const dropdown = document.querySelector('.dropdown');
            dropdown.classList.toggle('open');
        }

        function setSpeed(speed)
        {
        const items = document.querySelectorAll('.dropdown-item');
        const video = document.querySelector('video');

        if (!isNaN(speed))
        {
            video.playbackRate = speed;
        }
        else
        {
            console.error("Invalid speed value:", speed);
        }

        // seçilmiş seçeneği güncelle
        items.forEach(item => item.classList.remove('selected'));
        const targetItem = Array.from(items).find(item => parseFloat(item.getAttribute('data-speed')) === speed);
        if (targetItem)
        {
            targetItem.classList.add('selected');
        }

        const dropdown = document.querySelector('.dropdown');
        dropdown.classList.remove('open');
        }


        // Altyazı açma ve kapatma
        function toggleSubtitles() {
        const video = document.getElementById('myVideo');
        const track = video.textTracks[0];

        if (track.mode === 'showing') {
            track.mode = 'hidden'; // alt yazı gizleme
        } else {
            track.mode = 'showing'; // alt yazı göster
        }
}

        </script>


@endsection

@section('scripts')

@endsection
