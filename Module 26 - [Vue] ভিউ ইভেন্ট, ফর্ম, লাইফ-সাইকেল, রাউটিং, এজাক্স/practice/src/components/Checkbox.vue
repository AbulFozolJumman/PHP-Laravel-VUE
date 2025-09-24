<script setup>
  import { defineProps, ref } from 'vue';

  const props = defineProps(['modelValue']);
  const emit = defineEmits(['update:modelValue']);
</script>

<template>
  <label>Checkbox Component</label> <br>
  <input type="checkbox" :checked="modelValue" @change="$emit('update:modelValue', $event.target.checked)">
</template>

<style scoped>
</style>
