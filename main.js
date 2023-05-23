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

    created(){
        this.callAlbum()
    },	

    methods: {
        // FUNZIONI
        callAlbum(){
            axios.get(this.albumArray).then((res)=>{
                this.album = res.album
            })
        }
    }
}).mount('#app')