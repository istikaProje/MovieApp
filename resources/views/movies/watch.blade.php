@extends('layouts.master')

@section('content')
    @push('styles')
        @vite(['resources/css/video.css'])
    @endpush


    @include('layouts.sections.movies._movieWatch')
@endsection

@push('scripts')
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

        const movieId = {{ $movie->id }};

        let isPaused = true;
        let isMouseOver = false;
        let hideControlsTimeout;

        let lastCall = 0;






        function showControls() {
            clearTimeout(hideControlsTimeout);

            document.querySelector(".controls").style.visibility = "visible";
            document.querySelector(".toggleButton").style.visibility = "visible";
            document.querySelector(".time_skipL").style.visibility = "visible";
            document.querySelector(".time_skipR").style.visibility = "visible";
        }

        function hideControls() {
            if (!isPaused && !isMouseOver) {
                document.querySelector(".controls").style.visibility = "hidden";
                document.querySelector(".toggleButton").style.visibility = "hidden";
                document.querySelector(".time_skipL").style.visibility = "hidden";
                document.querySelector(".time_skipR").style.visibility = "hidden";
            }
        }

        function togglePlay() {
            if (video.paused || video.ended) {
                video.play();
                isPaused = false;
                hideControls();
            } else {
                video.pause();
                isPaused = true;
                showControls();
            }
        }

        function saveProgress() {
            const progress = Math.floor(video.currentTime); // İzlenilen süre (saniye)

            fetch('/watch-progress', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        movie_id: movieId,
                        progress
                    })
                }).then(response => response.json())
                .then(data => console.log('Progress saved:', data))
                .catch(error => console.error('Error saving progress:', error));
        }

        function throttleSaveProgress() {
            const now = Date.now();
            if (now - lastCall > 5000) { // 5 saniyede bir API çağrısı yap
                saveProgress();
                lastCall = now;
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
        xhr.onload = (e) => {
            let blop = new Blob([xhr.response]);
            let url = URL.createObjectURL(blop);
            video.src = url;
        }
        xhr.send();

        //zaman update'i
        function timeUpdate() {
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
        function updateToggleButton() {
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
        video.addEventListener("pause", saveProgress); // Durdurulduğunda kaydet
        video.addEventListener("timeupdate", throttleSaveProgress); // İzlerken periyodik kaydet
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
        function openFullscreen() {
            if (video_player.requestFullscreen) {
                if (document.fullscreenElement) {
                    document.exitFullscreen();
                    fullscreenButton.classList.remove('icon-compress');
                    fullscreenButton.classList.add('icon-expand');
                } else {
                    video_player.requestFullscreen();
                    fullscreenButton.classList.remove('icon-expand');
                    fullscreenButton.classList.add('icon-compress');
                }
            } else if (video_player.webkitRequestFullscreen) {
                /* Safari için*/
                if (document.webkitFullscreenElement) {
                    document.webkitExitFullscreen();
                    fullscreenButton.classList.remove('icon-compress');
                    fullscreenButton.classList.add('icon-expand');
                } else {
                    video_player.webkitRequestFullscreen();
                    fullscreenButton.classList.remove('icon-expand');
                    fullscreenButton.classList.add('icon-compress');
                }
            } else if (video_player.msRequestFullscreen) {
                /* IE11 için*/
                if (document.msFullscreenElement) {
                    document.msExitFullscreen();
                    fullscreenButton.classList.remove('icon-compress');
                    fullscreenButton.classList.add('icon-expand');
                } else {
                    video_player.msRequestFullscreen();
                    fullscreenButton.classList.remove('icon-expand');
                    fullscreenButton.classList.add('icon-compress');
                }
            } else if (videoElement.mozRequestFullScreen) { // Firefox
                if (document.mozRequestFullScreenElement) {
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

                function toggleDropdown() {
                    const dropdown = document.querySelector(".dropdown");
                    dropdown.classList.toggle("open");
                }

        function toggleDropdown() {
            const dropdown = document.querySelector('.dropdown');
            dropdown.classList.toggle('open');
        }

        function setSpeed(speed) {
            const items = document.querySelectorAll('.dropdown-item');
            const video = document.querySelector('video');

            if (!isNaN(speed)) {
                video.playbackRate = speed;
            } else {
                console.error("Invalid speed value:", speed);
            }

            // seçilmiş seçeneği güncelle
            items.forEach(item => item.classList.remove('selected'));
            const targetItem = Array.from(items).find(item => parseFloat(item.getAttribute('data-speed')) === speed);
            if (targetItem) {
                targetItem.classList.add('selected');
            }

            const dropdown = document.querySelector('.dropdown');
            dropdown.classList.remove('open');
        }

        function toggleSubtitles() {
          const video = document.getElementById('myVideo');
          const track = video.textTracks[0];

          if (track.mode === 'showing') {
              track.mode = 'hidden';
          } else {
              track.mode = 'showing';
          }
  }
   </script>
@endpush
