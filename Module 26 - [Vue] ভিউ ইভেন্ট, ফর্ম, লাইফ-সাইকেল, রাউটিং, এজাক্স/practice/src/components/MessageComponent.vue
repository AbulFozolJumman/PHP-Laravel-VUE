<script setup>
  import { defineProps } from 'vue';

  const props = defineProps(['modelValue']);
  const emit = defineEmits(['update:modelValue']);
</script>

<template>
  <label>Message Component</label> <br>
  <input type="text" :value="modelValue" @input="emit('update:modelValue', $event.target.value)">
</template>

<style scoped>
</style>
