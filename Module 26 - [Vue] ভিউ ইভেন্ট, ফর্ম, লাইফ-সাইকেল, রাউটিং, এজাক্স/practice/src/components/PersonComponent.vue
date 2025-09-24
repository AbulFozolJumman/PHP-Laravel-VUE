<script setup>
    import { defineProps } from 'vue';
import Input from './Input.vue';
    
    const props = defineProps(['person']);
</script>
<template>
  <div class="mt-3">
  <label>Person Component</label> <br>
    <label>Name</label> <br>
    <Input type="text" v-model="person.name" /> <br> <br>
    <label>Age</label> <br>
    <Input type="number" v-model="person.age" /> <br> <br>
    <label>Email</label> <br>
    <Input type="email" v-model="person.email" />
  </div>
</template>