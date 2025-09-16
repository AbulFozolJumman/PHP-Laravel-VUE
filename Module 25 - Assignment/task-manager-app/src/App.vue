<script setup>
import PersistedTaskList from './components/PersistedTaskList.vue';
import TaskList from './components/TaskList.vue';
import tasks from './data/data';
</script>

<template>
  <TaskList :tasks="tasks" />
  <PersistedTaskList />
</template>

<style scoped>
</style>
