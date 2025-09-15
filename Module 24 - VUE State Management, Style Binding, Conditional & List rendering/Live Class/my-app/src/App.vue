<template>
   <div class="container">
     <div class="row">
       <div class="col-12 text-center">

         <div v-if="isLoading">
           <div class="spinner-border mt-5" role="status"></div>
         </div>
         <div v-else>
           <table class="table table-striped">
             <thead>
             <tr>
               <th>title</th>
               <th>category</th>
               <th>price</th>
             </tr>
             </thead>

             <tbody>
             <tr v-for="item in products">
               <td>{{item['title']}}</td>
               <td>{{item['category']}}</td>
               <td>{{item['price']}}</td>
             </tr>
             </tbody>

           </table>
         </div>


       </div>
     </div>
   </div>
</template>

<script setup>


  import {ref} from "vue";

  const products=ref([])
  const isLoading=ref(false)


  CallAPI();
  async function CallAPI(){
      // Start
      isLoading.value=true;
      const response = await fetch("https://dummyjson.com/products");
      const data = await response.json();
      console.log(data)
      products.value=data['products'];
      isLoading.value=false;
      // End

  }


</script>