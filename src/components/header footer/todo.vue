<template>
   <div id="app" class='container'>
    <h1>Todos:</h1>  <h3> Using localhost node.js </h3>
    

      <table  class="table table-bordered">
                <thead class="thead-dark">
                <tr >
                    <th>ToDo</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <!-- loop for showing api data-->
             <tr v-for="todo of todos" :key="todo.id" >
                  
                    <td>{{todo.name}} </td>
                   <td> 
                     <b-button style="border-radius: 20px;" variant="danger" 
                        @click="delTodo(todo.id)" >delete </b-button>
                   </td>
                    
            </tr>
            <tr>
              <input type="text" placeholder="add todo" v-model="todoName" @keyup.enter="addTodo">
            </tr>
      </table>
      
     
     <br>
   <br>
   <br>
    
   </div>
</template>




<script>
import axios from 'axios';

const baseURL = "http://localhost:3000/todos"

export default {
  name: 'app',
  data() {
    return {
      todos: [],
      todoName: ''
      
    }
  },
  async created() {
      try {
      const res = await axios.get(baseURL)

      this.todos = res.data;

      
    } catch(e) {
      console.error(e)
    }
  },
  
  methods: {
    async refresh(){
      
      axios.get(baseURL).then((res) => {
         
          this.todos = res.data;
            
       })
   

    },
    async addTodo() {
      const res = await axios.post(baseURL, { name: this.todoName })

      this.todos = [...this.todos, res.data]

      this.todoName = ''
    },


      delTodo(id){
      
      
      axios.delete('http://localhost:3000/todos/'+id, {
        
        }).then((res) => {
         
          this.refresh();
            
       })
   
        }

    

  }
}
</script>



<style scoped>
  li{
     list-style: none;
     }
     

</style>