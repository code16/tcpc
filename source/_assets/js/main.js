import Vue from 'vue';

function isIOS() {
    return /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
}


new Vue({
    el: '#app',

    data() {
        return {
            loading: false,
        }
    },

    methods: {
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
    },
});