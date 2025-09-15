<template>

  <h1>{{ number.num2 }}</h1>
  <h1>{{ number.num1 }}</h1>

  <button @click="plus">Click1</button>
  <button @click="minus">Click2</button>

</template>

<script setup>
import {ref} from "vue";

let number=ref({
  num1:100,
  num2:500
});

const plus=()=>{
  number.value.num1=number.value.num1+1
  number.value.num2=number.value.num2-1

  console.log(number.value.num2)
  console.log(number.value.num1)

}


const minus=()=>{
  number.value.num1=number.value.num1-1
  number.value.num2=number.value.num2+1

  console.log(number.value.num2)
  console.log(number.value.num1)

}

</script>