<template>
    <div class='container pt-3 mt-3'>
<b-container fluid="sm" >
    <h4 class= "text-center" style="padding-top:50px"> fetched data using axios from JSON Placeholder</h4>
            
            
            <!-- <ul>
                <li v-for="post in posts" :key="post.title"> {{post.title}} </li>
            </ul> -->


            <table  class="table table-bordered">
                <thead class="thead-dark">
                <tr >
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
            </thead>

            <tr v-for="post in posts.slice(0,8)" :key="post.id" >
                    <td>{{post.id}}</td>
                    <td>{{post.title}}</td>
                    <td>{{post.body}}</td>
                    
            </tr>

            </table>

</b-container>

    </div>
</template>

<script>

window.axios = require('axios');

export default{
     
    
    mounted: function () {
        axios.get('https://jsonplaceholder.typicode.com/posts')
        .then (response => this.posts=response.data)

       
    },
    
    
    data() {
        return {
        posts: [] 
           
        }
    }
}

</script>

<style scoped>
</style>