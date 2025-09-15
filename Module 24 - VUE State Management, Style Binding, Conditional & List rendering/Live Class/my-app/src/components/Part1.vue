<template>

  <h1>{{ number }}</h1>

  <button @click="plus">Plus</button>
  <button @click="minus">Minus</button>

</template>

<script setup>


import {ref} from "vue";
let number=ref(100);
const plus=()=>{
  number.value=number.value+1
  console.log(number.value)
}
const minus=()=>{
  number.value=number.value-1
  console.log(number.value)
}

</script>