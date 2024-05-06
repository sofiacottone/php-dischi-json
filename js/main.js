const { createApp } = Vue;

createApp({
    data() {
        return {
            discs: [],
            isOverlayOpen: false
        }
    },
    methods: {
        getDiscsFromApi() {
            axios.get('server.php')
                .then((response) => {
                    this.discs = response.data;
                    console.log(this.discs);
                })
        },
        openOverlay() {
            this.isOverlayOpen = true;
        },
        closeOverlay() {
            this.isOverlayOpen = false;
        },
    },
    mounted() {
        this.getDiscsFromApi();
    }
}).mount('#app');