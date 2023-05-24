// INTESTAZIONE VUE
const {createApp} = Vue

createApp({
    data() {
        return{
            // VARIABILI
            albumArray: 'script.php',
            album: [],
            test:"no problem"
        }
    },	

    methods: {
        // FUNZIONI
        callAlbum(){
            this.test = "call"
            axios.get(this.albumArray).then((res)=>{
                
                this.album = res.data;
            })
        }
    },

    mounted(){
        this.callAlbum();
    },
}).mount('#app')