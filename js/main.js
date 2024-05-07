const { createApp } = Vue;

createApp({
    data() {
        return {
            discs: [],
            activeDisc: null
        }
    },
    methods: {
        getDiscsFromApi() {
            axios.get('server.php')
                .then((response) => {
                    this.discs = response.data;
                })
        },
        openOverlay(clickedIndex) {
            const queryParams = {
                discIndex: clickedIndex
            };

            axios.get('server.php', {
                params: queryParams
            })
                .then((response) => {
                    this.activeDisc = response.data;
                })
        },
        closeOverlay() {
            this.activeDisc = null;
        },
    },
    mounted() {
        this.getDiscsFromApi();
    }
}).mount('#app');