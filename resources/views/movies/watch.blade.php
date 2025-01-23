@extends('layouts.master')

@section('content')

<style>

    *, *:before, *:after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      .video-player {
        width: 95%;
        max-width: 850px;
        position: relative;
        overflow: hidden;
      }

      .video {
        width: 100%;
      }

      .controls__button {
        line-height: 1;
        color: white;
        text-align: center;
        outline: 0;
        padding: 0;
        cursor: pointer;
        max-width: 50px;
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
        background: rgba(0,0,0,0.1);
        transform: translateY(0);
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

      .controls{
        visibility: hidden;
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
        visibility: hidden;
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
        visibility: hidden;
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
        visibility: hidden;
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

        /* Dropdown Menu */
        .hidden {
        display: none;
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

        <section class="relative z-10 py-20">

            <div class="container mx-auto">
                <div class="flex flex-wrap items-stretch">
             <!-- Video Player -->
                <div class="video-player" style=" display: block; margin-left: auto; margin-right: auto;" oncontextmenu="return false;"> <!-- div video player için div oncontextmenu="return false;" sağ tık'ı kapatıyor  -->
                    <video class="video" id="myVideo" ondblclick="openFullscreen()" poster="{{ asset('storage/' . $movie->poster) }}">
                        <source src="{{ asset('storage/' . $movie->video) }}" type="video/mp4">
                      <p>İnternet tarayıcınız HTML5 video oynatıcısını desteklemiyor.</p>
                    </video>
                    <button class="controls__button toggleButton" onclick="togglePlay()" title="Toggle Play"> <i class="icon-Play"></i> </button>
                    <button class="controls__button time_skipL" data-skip="-10">« 10s</button>
                    <button class="controls__button time_skipR" data-skip="10">10s »</button>
                    <div class="controls">
                      <div class="progress">
                        <div class="progress__filled"></div>
                      </div>

                      <label class="time" style="color: white; margin-top: 8px" width="10px">0:00</label>

                      <img src="{{asset('images/Sound.png')}}"  style="max-width: 25px; max-height: 20px; margin-top: 10px; margin-left: 5px; cursor: pointer;" />
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

                        <div class="dropdown relative">
                            <button onclick="toggleDropdown()" class="dropdown-toggle cursor-pointer bg-transparent-200 p-2 rounded">
                                <img src="{{ asset('images/Speed.png') }}" alt="Dropdown Icon" class="w-6 h-6" />
                            </button>
                            <div class="dropdown-menu">
                                <div class="dropdown-item" onclick="setSpeed(2)">2x</div>
                                <div class="dropdown-item" onclick="setSpeed(1.5)">1.5x</div>
                                <div class="dropdown-item selected" onclick="setSpeed(1)">1x</div>
                                <div class="dropdown-item" onclick="setSpeed(0.5)">0.5x</div>
                                <div class="dropdown-item" onclick="setSpeed(0.25)">0.25x</div>
                            </div>
                        </div>

                      <label class="time2" style="color: white;">0:00</label>

                      <img src="{{asset('images/Fullscreen.png')}}" onclick="openFullscreen();" style="max-width: 30px; cursor: pointer;" />

                     </div>

                    </div>
                  </div>

              </div>
            </div>

        </section>

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

                function openFullscreen()
                {
                    if (video_player.requestFullscreen)
                    {
                        if (document.fullscreenElement) {
                        document.exitFullscreen();
                        } else {
                        video_player.requestFullscreen();
                        }
                    }

                    else if (video_player.webkitRequestFullscreen)
                    { /* Safari için*/
                        if (document.webkitFullscreenElement) {
                        document.webkitExitFullscreen();
                        } else {
                        video_player.webkitRequestFullscreen();
                        }
                    }

                    else if (video_player.msRequestFullscreen)
                    { /* IE11 için*/
                        if (document.msFullscreenElement) {
                        document.msExitFullscreen();
                        } else {
                        video_player.msRequestFullscreen();
                        }
                    }

                    else if (videoElement.mozRequestFullScreen)
                    { // Firefox
                        if(document.mozRequestFullScreenElement) {
                        document.mozCancelFullScreen();
                        } else {
                        videoElement.mozRequestFullScreen();
                        };
                    }
                }

             // Handle Speed Selection
            dropdownItems.forEach(item =>
            {
            item.addEventListener('click', (e) =>
            {
            const newSpeed = e.target.getAttribute('data-speed');
            video.playbackRate = parseFloat(newSpeed);
            // Hide the dropdown after selection
            speedDropdown.classList.add('hidden');

            // Highlight the selected option
            dropdownItems.forEach(i => i.classList.remove('selected'));
            e.target.classList.add('selected');
            });
            });

            // Close dropdown if clicking outside of it (çalışmıyor silinebilir)


            function toggleDropdown() {
                const dropdown = document.querySelector('.dropdown');
                dropdown.classList.toggle('open');
            }

            function setSpeed(speed) {
                const video = document.querySelector('video'); //gereksiz bir kod daha
                video.playbackRate = speed;
                // Update the selected item
                const items = document.querySelectorAll('.dropdown-item');
                items.forEach(item => item.classList.remove('selected'));
                event.target.classList.add('selected');
                const dropdown = document.querySelector('.dropdown');
                dropdown.classList.remove('open');

            }


            </script>

@endsection

@section('scripts')

@endsection
