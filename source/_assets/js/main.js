import Vue from 'vue';

new Vue({
    el: '#app',

    data() {
        return {
            loading: false,
        }
    },

    methods: {
        handlePlayClicked(e) {
            e.target.style.display = 'none';
            const video = document.querySelector('video');
            const play = () => {
                video.style.opacity = 1;
                video.play();
                this.loading = false;
            };
            if(video.readyState === 4) {
                play();
            } else {
                this.loading = true;
                video.addEventListener('canplaythrough', play);
            }
        },
    },
});