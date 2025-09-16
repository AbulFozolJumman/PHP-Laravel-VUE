<script setup>
import { ref } from 'vue';
import tasks from '../data/data';

const props = defineProps({
    tasks: {
        type: Array,
        required: true
    }
});

const newTaskTitle = ref('');

const addTask = () => {
    if (newTaskTitle.value.trim() && newTaskTitle.value.length > 3) {
        props.tasks.push({ id: props.tasks.length + 1, title: newTaskTitle.value, isCompleted: false });
        newTaskTitle.value = '';
    }
    else {
        alert('Task title must be at least 4 characters long.');
    }
};
</script>

<template>
    <div class="task-list">
        <h2>Task Management</h2>
        <ul>
            <li v-show="task.title.length > 0" v-for="task in tasks" :key="task.id" :style="{ backgroundColor: task.isCompleted ? 'green' : 'red', border: task.isCompleted ? '2px solid red' : 'none' }">
                <p>{{ task.title }} - {{ task.isCompleted ? 'Completed' : 'Pending' }}</p>
                <input type="checkbox" v-model="task.isCompleted" />
            </li>
            <li v-if="tasks.length === 0">No tasks available.</li>
        </ul>
    <div>
        <input class="p-4 border border-gray-300 rounded" type="text" placeholder="New Task Title" v-model="newTaskTitle" />
        <button @click="addTask" class="bg-blue-500 text-white p-2 rounded">
            Add Task
        </button>
    </div>
</div>
</template>

<style scoped>
.task-list {
    padding: 1rem;
}
.task-list ul {
    list-style: none;
    padding: 0;
}
.task-list li {
    margin-bottom: 0.5rem;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
</style>