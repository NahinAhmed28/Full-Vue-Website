<template>
<div>
  <b-container  >
    
    <b-navbar  fixed='top' toggleable="sm" class=" " type="dark" variant="dark" style="
      background-image: url('https://image.shutterstock.com/image-vector/light-blue-green-vector-polygonal-600w-1117522136.jpg'); "   >
       
          <div sm='1' class="logo-image md-3 pd-1 ">
            <img src="https://st2.depositphotos.com/45228582/44258/v/950/depositphotos_442584380-stock-illustration-professional-innovative-initial-logo-logo.jpg" class="img-rounded" style="width:70px;height: 60px;">

            
          </div>
       

      <b-navbar-brand class='ml-3' sm='1'  href="#" >Home    </b-navbar-brand>
        
        <b-navbar-brand class='ml-3' sm='1' href="#">Contact</b-navbar-brand>


      <!-- Right aligned nav items -->
      <b-navbar-toggle sm='2' target="nav-collapse" right></b-navbar-toggle>
    

      <b-collapse id="nav-collapse"  is-nav>
  
  
        

        <b-navbar-brand class='ml-3'  href="#aboutUs">
                  <b-button style="border-radius:50px" variant="success">
                  About Us <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/></svg> 
                  </b-button> 

         </b-navbar-brand>

        <b-navbar-nav  class="ml-auto p-sm-2" > 
            <b-nav-form >
              <b-input-group-append>
              <b-form-input size="sm" class="px-3" placeholder="Search keyword"></b-form-input>
              <b-button size="sm" class="ml-3 p-sm-1" variant="success" type="submit" style="border-radius: 20px;"  >Search</b-button>
              </b-input-group-append>
            </b-nav-form>
<b-input-group-append>
          <b-nav-item-dropdown  variant="primary" class='my-2 font-weight-bold px-1' style="border-radius: 20px;" text="Lang" right>
            <b-dropdown-item href="#">EN</b-dropdown-item>
            <b-dropdown-item href="#">ES</b-dropdown-item>
            <b-dropdown-item href="#">RU</b-dropdown-item>
            <b-dropdown-item href="#">FA</b-dropdown-item>
          </b-nav-item-dropdown>

            <b-nav-item-dropdown class='bg-info my-2 px-3 py-0'  style="border-radius: 20px; " right >
              <!-- Using 'button-content' slot -->
              <template #button-content>
                <em class="text-warning font-weight-bold m-0 ">USER</em>
              </template>
             
              <b-dropdown-item href="#"  >Profile</b-dropdown-item>
              <b-dropdown-item href="#"  variant="danger">Sign Out</b-dropdown-item> 
            </b-nav-item-dropdown>

            </b-input-group-append>
        </b-navbar-nav>
       
      </b-collapse>
      
      </b-navbar>
     
  </b-container>
</div>

</template>

<style scoped>

.paddingZero{
  margin-top: 15px;
  
}
</style>