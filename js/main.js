const { createApp } = Vue;

createApp({
    data() {
        return {
            discs: [],
        }
    },
    methods: {
        getDiscsFromApi() {
            axios.get('server.php')
                .then((response) => {
                    this.discs = response.data;
                    console.log(this.discs);
                })
        }
    },
    mounted() {
        this.getDiscsFromApi();
    }
}).mount('#app');