<template>
<div  style="font-family:Georgia, serif;">
  <b-container fluid class="bv-example-row " style="margin-top:120px;"> 
    
      <!-- form -->

   
<b-col sm="6" class="mb-3">
      <h3 class="text-primary" style="padding-left:50px;" >Please Fill Up the Form to Regester
      <b-icon icon="circle-fill" animation="throb" font-scale="1"></b-icon> </h3>
    </b-col>
<b-card-group >

                                        <!-- first_name_input -->

<b-card no-body class="overflow-hidden" style="max-width: 750px; padding-left:20px;padding-top:20px;">
    <b-row class="my-1" >
     <b-col sm="3">
      <label >First Name:</label>
    </b-col>
    <b-col sm="9">
      <b-form-input  class="form-control" type="text" placeholder="Enter your f.name" v-model.trim="$v.userData.first_name.$model" :class="{'is-invalid':$v.userData.first_name.$error,'is-valid':!$v.userData.first_name.$invalid}"></b-form-input>
    <div class="valid-feedback"> Valid</div> 
    <div class="invalid-feedback"> <span v-if="!$v.userData.first_name.required"> first name is required</span> 
                                  <span v-if="!$v.userData.first_name.minLength"> first name must have at least 3 letters</span> 
                                  <span v-if="!$v.userData.first_name.maxLength"> first name can have at most 10 letters</span> 
    </div>
    </b-col>
    </b-row>
                                          <!-- last_name_input -->

    <b-row class="my-1" >
     <b-col sm="3">
      <label >Last Name:</label>
    </b-col>
    <b-col sm="9">
      <b-form-input class="form-control" type="text" placeholder="Enter your l.name"
      v-model.trim="$v.userData.last_name.$model" :class="{'is-invalid':$v.userData.last_name.$error,'is-valid':!$v.userData.last_name.$invalid}"></b-form-input>
      <div class="valid-feedback"> Valid</div> 
    <div class="invalid-feedback"> <span v-if="!$v.userData.last_name.required"> last name is required</span> 
                                  <span v-if="!$v.userData.last_name.minLength"> last name must have at least 3 letters</span>
                                  <span v-if="!$v.userData.last_name.maxLength"> last name can have at most 10 letters</span>
    </div>
    </b-col>
    </b-row>

                                          <!-- email_input -->
<b-row class="my-1" >
     <b-col sm="3">
      <label >Mail:</label>
    </b-col>
    <b-col sm="9">
      
      <b-form-input class="form-control" type="email" placeholder="Enter your mail"
      v-model.trim="$v.userData.mail.$model" :class="{'is-invalid':$v.userData.mail.$error,'is-valid':!$v.userData.mail.$invalid}"></b-form-input>
       <div class="valid-feedback"> Valid</div> 
    <div class="invalid-feedback">
                <span v-if="!$v.userData.mail.required"> Email required </span> 
                 <span v-if="!$v.userData.mail.isUnique"> Enter valid email </span>
    </div>
    </b-col>
    </b-row>
                                          <!-- password_input -->
    <b-row class="my-1" >
     <b-col sm="3">
      <label  >password:</label>
    </b-col>
    <b-col sm="9">
      <b-form-input type="password" placeholder="Enter your password" v-model="userData.password"></b-form-input>
    </b-col>
    </b-row>
                                          <!-- age_input -->
    <b-row class="my-1" >
     <b-col sm="3">
      <label>Age:</label>
    </b-col>
    <b-col sm="9">
      <b-form-input class="form-control" type="number" placeholder="Enter your Age" v-model.trim="$v.userData.age.$model" :class="{'is-invalid':$v.userData.age.$error,'is-valid':!$v.userData.age.$invalid}"></b-form-input>

    <div class="valid-feedback"> Valid</div> 
    <div class="invalid-feedback"> <span v-if="!$v.userData.age.between"> Age must be between 15-40</span>
                                  <span v-if="!$v.userData.age.required"> Age is required</span>
    </div>
    
    </b-col>
    </b-row>

                                            <!-- message_input -->
 <b-row class="my-1" >
     <b-col sm="3">
      <label  >Message for us</label>
    </b-col>
    <b-col sm="9">
      <b-form-textarea
                            id="message"
                            rows="5"
                            class="form-control"
                             v-model="userData.message">
                    </b-form-textarea>
    </b-col>
    </b-row>

                                                    <!-- gender_input -->
  <b-row class="my-1" >
    <b-col sm="9">
      <label  >Gender: </label>
    </b-col>
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 form-group">
                    <label for="male">
                        <input
                                type="radio"
                                id="male"
                                value="Male"
                                v-model="userData.gender"> Male
                    </label>
                    <label for="female">
                        <input
                                type="radio"
                                id="female"
                                value="Female"
                                 v-model="userData.gender"> Female
                    </label>
                </div>
            </b-row>


   
<!-- button is added here -->

<div class="btn-group" style="display: inline-block;">
 <button class="btn btn-primary rounded-pill mr-2" style="width:90px " @click.prevent="submitted" >Submit <!--{{submitStatus}}--> </button>
 <button class="btn btn-danger rounded-pill mr-2" style="width:90px " @click.prevent="reseted" @click="$v.$reset" >Reset</button>

                                  <!--  input succecss/uncesses message--> 

</div>
 <div class="p-3 m-3 text-success" v-if="submitStatus === 'FAILED'"> Please fill the form correctly. </div>
 <div class="p-3 m-3 text-danger" v-if="submitStatus === 'SUCCESS'"> form has been filled up successfully </div>
</b-card>
 
 

<b-card no-body class="overflow-hidden" style="max-width: 350px; padding-left:20px;padding-top:20px;">

<!-- submit info here -->
<!-- info displayed -->


<div class="row" v-if="userData.isSubmitted">
 <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <div class="panel panel-default">


<div class="panel-heading">
                        <h4 class='text-primary' style="margin-top:50px;" >Your Info: </h4>
                    </div>
                    <div class="panel-body">
                      <p>Full name: {{userData.first_name}} {{userData.last_name}}</p>
                        <p>Mail: {{userData.mail}}</p>
                        <p>Password: {{userData.password}}</p>
                        <p>Age: {{userData.age}}</p>
                        <p>Gender: {{userData.gender}}</p>
                        <p style="white-space:pre-line;">Message:  {{userData.message}} </p>
                    </div>
</div>
              </div>
</div>

</b-card>

</b-card-group >




  </b-container>

  </div>
</template>

<script>

import { required, minLength,maxLength, between, email } from 'vuelidate/lib/validators'

  export default {
  
    data() {
      return {
        userData :{
                first_name:'',
                last_name:'',
                mail:'',
                password:'',
                age:0,
                gender:'Male',
      message:'',
      isSubmitted:false
                
      },
      submitStatus:'' 
      
    }
  },
      
  validations : 
  {userData:
    {
   
      first_name: { required,
                      minLength:minLength(3),
                      maxLength:maxLength(10) 
                      }, // Matches this.firstName
      last_name: { required,
                      minLength:minLength(3),
                      maxLength:maxLength(10) }, // Matches this.lastName
      
      age: {required,
        between: between(15,40) 
        },
      
      mail: {
        required,email,
        isUnique (value) {
          if (value ==='') return true

                    // eslint-disable-next-line 
            var email_regex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          

          return new Promise((resolve)=> {
            setTimeout(() => {
              resolve(email_regex.test(value))
            },350 +Math.random()*300)
          } )
        }

      }
        
      
      
    }
  },

 
    

  methods:{
        submitted(){
       
        // alert('Form successfully submitted');
        
        this.$v.$touch()
        if(this.$v.$invalid){
          this.submitStatus  = 'FAILED'
        }
        else {
           this.submitStatus  = 'SUCCESS'
           //show data
            this.userData.isSubmitted=true;
        }
        },
        
        reseted(){
        this.userData.isSubmitted=false;
        this.userData.first_name='', 
        this.userData.last_name='',
        this.userData.mail='',
        this.userData.password='',
        this.userData.age=0,
        this.userData.message=''
        this.submitStatus  = ''
        }
  }
}
</script>
