@extends('_layouts.app')

@section('title')
    Venezia
@endsection

@section('body')
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div x-data="video()" class="position-relative">
            <video width="100%" preload="auto" style="opacity: 0" x-cloak>
                <source src="https://80ans.s3.eu-west-3.amazonaws.com/TCPC/saluta-3.mp4" type="video/mp4">
            </video>
            <div class="loading" x-show="loading">
                chargement...
            </div>
            <div class="play" role="button" tabindex="0" @click="handlePlayClicked" x-cloak></div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        function isIOS() {
            return /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
        }
        function video() {
            return {
                loading: false,
                handlePlayClicked(e) {
                    const video = document.querySelector('video');
                    const play = () => {
                        video.style.opacity = 1;
                        video.play();
                        this.loading = false;
                    };

                    e.target.style.display = 'none';

                    if(video.readyState === 4 || isIOS()) {
                        play();
                    } else {
                        this.loading = true;
                        video.addEventListener('canplaythrough', play);
                    }
                },
            }
        }
        Alpine.data('video', video);
    </script>
@endpush
