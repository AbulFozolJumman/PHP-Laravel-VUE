<template>

  <h1>{{ number.num2 }}</h1>
  <h1>{{ number.num1 }}</h1>

  <button @click="plus">Click1</button>
  <button @click="minus">Click2</button>

</template>

<script setup>


import {reactive} from "vue";

let number=reactive({
  num1:100,
  num2:500
});

const plus=()=>{
  number.num1=number.num1+1
  number.num2=number.num2-1

  console.log(number.num2)
  console.log(number.num1)

}


const minus=()=>{
  number.num1=number.num1-1
  number.num2=number.num2+1

  console.log(number.num2)
  console.log(number.num1)

}

</script>