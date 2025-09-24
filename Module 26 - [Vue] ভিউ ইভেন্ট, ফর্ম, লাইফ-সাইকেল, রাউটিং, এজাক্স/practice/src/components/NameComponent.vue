<script setup>
  import { defineProps, ref } from 'vue';

  const props = defineProps(['modelValue']);

  const nameParts = props.modelValue.split(' ');
  const firstName = ref(nameParts[0]);
  const lastName = ref(nameParts[1]);
  const emit = defineEmits(['update:modelValue']);
  const updateName = () => {
    emit('update:modelValue', `${firstName.value} ${lastName.value}`);
  };
</script>

<template>
  <label>Name Component</label> <br>
  <label >First name</label> <br>
  <input type="text" v-model="firstName" @input="updateName()"> <br> <br>
  <label >Last name</label> <br>
  <input type="text" v-model="lastName" @input="updateName()">
</template>

<style scoped>
</style>
