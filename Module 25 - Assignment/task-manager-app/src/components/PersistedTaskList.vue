<script setup>
import { ref, watch } from 'vue';

const tasksFromStorage = localStorage.getItem('tasks');
const tasks = ref(tasksFromStorage ? JSON.parse(tasksFromStorage) : []);
const newTaskTitle = ref('');

const addTask = () => {
    if (newTaskTitle.value.trim() && newTaskTitle.value.length > 3) {
        tasks.value.push({ id: tasks.value.length + 1, title: newTaskTitle.value, isCompleted: false });
        newTaskTitle.value = '';
    }
    else {
        alert('Task title must be at least 4 characters long.');
    }
};
watch(tasks, (newTasks) => {
    localStorage.setItem('tasks', JSON.stringify(newTasks));
}, { deep: true }); 

const removeTask = (taskId) => {
    tasks.value = tasks.value.filter(task => task.id !== taskId);
};

</script>

<template>
    <div class="task-list w-[600px] mx-auto p-5 border border-gray-300 rounded mt-10">
        <h2>Task Management</h2>
        <ul>
            <li class="flex justify-between items-center p-5 mb-2" v-show="task.title.length > 0" v-for="task in tasks" :key="task.id" :style="{ backgroundColor: task.isCompleted ? 'green' : 'gray', border: task.isCompleted ? '2px solid red' : 'none' }">
                <p>{{ task.title }} - {{ task.isCompleted ? 'Completed' : 'Pending' }}</p>
                <input type="checkbox" v-model="task.isCompleted" />
                <button @click="removeTask(task.id)" class="bg-red-500 text-white p-2 rounded">Remove</button>
            </li>
            <li v-if="tasks.length === 0">No tasks available.</li>  
        </ul>

        <div>
            <input type="text" name="newTask" id="newTask" placeholder="New Task Title" v-model="newTaskTitle" class="p-4 border border-gray-300 rounded" />
            <button @click="addTask" class="bg-blue-500 text-white p-2 rounded">
                Add Task
            </button>
        </div>
</div>
</template>

<style scoped>
</style>