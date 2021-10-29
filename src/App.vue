<template>
  <div >

    <compHeader/>
   
    <compTopDesign/>
   
     <compTable/>
   
     <compGraph/>
   
     <compForm/>
   
   <compAxios/>

<h4 class= "text-center" style="padding-top:50px">want to hear a lame joke ?</h4>
  <div class= "text-center mx-3">
      <b-button  class="btn btn-info px-3 mx-3" @click="componentToRender='compJoke'" > yes </b-button> 
      <b-button  class="btn btn-danger  px-3 mx-3r" @click="componentToRender=''" > reset </b-button>
  </div>
        
        <component :is="componentToRender"></component>

    

<compTodo/>
   <compFooter/>
  </div>
</template>

<script>
import compHeader from './components/header footer/header'
import compFooter from './components/header footer/footer'
import compTable from './components/header footer/table'
import compForm from './components/header footer/form'
import compGraph from './components/header footer/graph'
import compTopDesign from './components/header footer/topDesign'
import compAxios from './components/header footer/axios'
import compJoke from './components/header footer/joke'
import compTodo from './components/header footer/todo'


export default {
  name: 'App',
  data (){
    return {
      componentToRender:''
    }
  },
  components: {
    compHeader,
    compFooter,
    compTable,
    compForm,
    compGraph,
    compTopDesign,
    compAxios,
    compJoke,
    compTodo
  }

}
</script>

<style lang="scss">


#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

body {
  padding: 20px;
  
  }
</style>
