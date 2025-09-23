<script setup>
  import { ref } from 'vue';
import Firstcomponent from './components/Firstcomponent.vue';

  const message = ref('Welcome to Your Vue.js App');
</script>

<template>
  <label>Main Component</label> <br>
  <input type="text" v-model="message"> <br><br>
  <Firstcomponent  v-model="message"/>
</template>