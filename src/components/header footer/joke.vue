<template>
    <div class='container pt-3 mt-3 col-md-12 text-center'>
<b-container fluid="sm" >
            <b-button style="border-radius: 20px;" variant="primary" @click="showJoke()">click for random  lame joke</b-button>
            <br>
            <div v-if="joke" class="mt-3" >
                <p class="text-center">{{joke}}  </p> <br> <strong> click again for more</strong>  
            </div>
</b-container>

    </div>
</template>

<script>
// import axios from 'axios'
window.axios = require('axios');

export default{
     

    data() {
        return {
       joke: ''
            }
    },
    methods: {
    async  showJoke(){

            let config = {
                headers: {
                    'Accept': 'application/json'
                }
            }

                const joke = await axios.get('https://icanhazdadjoke.com/',config);
                this.joke = joke.data.joke
        }
    }


}

</script>

<style scoped>
</style>