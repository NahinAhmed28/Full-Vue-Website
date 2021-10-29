<template>
  <div >
    <b-container fluid="sm" id="aboutUs" style="padding-top:150px;">
      <h2 style="text-align:center;  text-decoration: underline;"> About Us </h2>
    <b-row class="my-1" style="margine-top:20px; " >
      
      <b-col sm="7">
          <b-table striped hover :items="items"></b-table>
          <p class="text-light bg-info text-dark p-2 text-center" > collected revenue in last five years</p>
      </b-col>

      <b-col sm="3">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwYgRLRr5g_kfMUp0ePzGX-iPkL8tFThcNhDBqtHUukdRaQerNfTfKKByP4ftKxUOj960&usqp=CAU" style="width:285px;height:200px" >
      </b-col>


    </b-row>
     </b-container>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        items: [
          { year: 2018, profit: '1M', revenue: '10M' },
          { year: 2019, profit: '2M', revenue: '12M' },
          { year: 2020, profit: '1M', revenue: '13M' },
          { year: 2021, profit: '2.5M', revenue: '15.5M' }
        ]
      }
    }
  }
</script>

<style scoped>


</style>