<script setup>
import { ref } from 'vue';
import tasks from '../data/data';

const newTaskTitle = ref('');

const addTask = () => {
    if (newTaskTitle.value.trim() && newTaskTitle.value.length > 3) {
        tasks.push({ id: tasks.length + 1, title: newTaskTitle.value, isCompleted: false });
        newTaskTitle.value = '';
    }
    else {
        alert('Task title must be at least 4 characters long.');
    }
};

const removeTask = (taskId) => {
    const index = tasks.findIndex(task => task.id === taskId);
    if (index !== -1) {
        tasks.splice(index, 1);
    }
};
</script>

<template>
   <div class="task-list w-[600px] mx-auto p-5 border border-gray-300 rounded mt-10">
        <h2>Task Management</h2>
        <ul>
            <li v-show="task.title.length > 0" v-for="task in tasks" :key="task.id" :style="{ backgroundColor: task.isCompleted ? 'green' : 'gray', border: task.isCompleted ? '2px solid red' : 'none' }">
                <p>{{ task.title }} - {{ task.isCompleted ? 'Completed' : 'Pending' }}</p>
                <input type="checkbox" v-model="task.isCompleted" />
                <button @click="removeTask(task.id)" class="bg-red-500 text-white p-2 rounded">Remove</button>
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