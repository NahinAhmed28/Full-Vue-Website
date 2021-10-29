<template>
<div style="margin-top:100px;font-family:Georgia, serif;">

   <b-container fluid="sm" >
      <b-row class="my-1">
            <b-col sm="4">
               <pie-chart :data="{'Apps Development': 30, 'Machine Learning': 23,'Web Development': 23,'Business Data Analysis': 23 }"></pie-chart>
               
            </b-col>

            <b-col sm="5">
               <TrendChart
               :datasets="[
                  {
                     data: [5,3,1,4,2],
                     smooth: true,
                     fill: true,
                     
                  }
               ]"
               :grid="{
                  verticalLines: true,
                  horizontalLines: true
               }"
               :labels="{
                  xLabels: [2017,2018,2019,2020,2021],
                  yLabels: 5,
                     
               }"
                 
               :min="0">
               </TrendChart>


            </b-col>

            <b-col sm="3">
            <trend
                  :data="[0, 2, 5, 9, 5, 10, 3, 5, 0, 0, 1, 8, 2, 9, 0]"
                  :gradient="['blue', 'red', 'green']"
                   :labels="{
                  xLabels: [2017,2018,2019,2020,2021],
                  yLabels: 5,   
               }"

                   
                  auto-draw
                  smooth>

            </trend>
            </b-col>
      </b-row>





<h5 class="text-light bg-success p-2 mr-3 text-center" > our work distribution chart for last five years</h5>
   </b-container>

</div>
</template>

<script>

export default{
    
    data(){
        return{
            
        }},
        
        
}
</script>


<style  lang="scss" scoped>

.curve.fill{
    background-color: blue;
    }


</style>