@extends('layouts.master')
@section('title', 'Anasayfa')
@section('description', 'test.')
@section('keywords', 'test, test, test')


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
    background: none;
    border: 0;
    line-height: 1;
    color: white;
    text-align: center;
    outline: 0;
    padding: 0;
    cursor: pointer;
    max-width: 50px;
  }
  .controls__slider {
    width: 10px;
    height: 30px;
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
    /* background: rgba(0,0,0,0.5); */
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
    width: 100%;
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

  .video-player:hover > .controls{
    visibility: visible;
  }

    .time
    {
    margin-top: 5px;
    flex: 0 0 20px;
    }

    .time2
    {
    margin-top: 5px;
    flex: 0 0 20px;

    }

    .toggleButton{
        position: absolute;
    top: 43%;
    left: 46%;
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

</style>

    <section class="relative z-10 py-20">

        <div class="container mx-auto">
          <div class="flex flex-wrap items-stretch">

            <div class="video-player" style=" display: block; margin-left: auto; margin-right: auto;" oncontextmenu="return false;">
                <video class="video" id="myVideo">
                  <source
                    src="{{asset('videos/videom2.mp4')}}"
                    type="video/mp4"
                  />
                  <p>Your browser doesn't support HTML5 video.</p>
                </video>
                <div class="controls">
                  <div class="progress">
                    <div class="progress__filled"></div>
                  </div>

                  <button class="controls__button toggleButton" title="Toggle Play"> ► </button>

                  <label class="time" style="color: white;" width="10px">0:00</label>

                  <input
                    type="range"
                    name="volume"
                    class="controls__slider"
                    min="0"
                    max="1"
                    step="0.05"
                    value="1"
                  />
                  <input
                    type="range"
                    name="playbackRate"
                    class="controls__slider"
                    min="0.5"
                    max="2"
                    step="0.1"
                    value="1"
                  />

                  <label class="time2" style="color: white;">0:00</label>

                  <button class="controls__button" data-skip="-10">« 10s</button>
                  <button class="controls__button" data-skip="25">10s »</button>

                  <img src="{{asset('images/Fullscreen.png')}}" onclick="openFullscreen();" style="max-width: 30px; cursor: pointer;" />

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


            function togglePlay() {
            if (video.paused || video.ended) {
                video.play();
            } else {
                video.pause();
            }
            }

            // Blob URL
            let xhr = new XMLHttpRequest();
            xhr.open("GET", "{{asset('videos/videom2.mp4')}}");
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


            function updateToggleButton() {
            toggleButton.innerHTML = video.paused ? "►" : "❚ ❚";
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

            function openFullscreen() {
            if (video_player.requestFullscreen) {
                video_player.requestFullscreen();
            } else if (video_player.webkitRequestFullscreen) { /* Safari */
                video_player.webkitRequestFullscreen();
            } else if (video_player.msRequestFullscreen) { /* IE11 */
                video_player.msRequestFullscreen();
            }
            }


        </script>

@endsection
