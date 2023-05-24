// INTESTAZIONE VUE
const {createApp} = Vue

createApp({
    data() {
        return{
            // VARIABILI
            albumArray: 'script.php',
            album: '',
        }
    },	

    methods: {
        // FUNZIONI
        callAlbum(){
            axios.get(this.albumArray).then((res)=>{
                this.album = res.album
            })
        }
    },

    mounted(){
        this.callAlbum()
    },
}).mount('#app')