<template>
  <h1>Vue JS Form</h1>
  <input v-model="firstName" type="text" placeholder="First Name"/>
  {{firstName}}
</template>


<script setup>
import {ref} from "vue";
const firstName=ref("")
</script>