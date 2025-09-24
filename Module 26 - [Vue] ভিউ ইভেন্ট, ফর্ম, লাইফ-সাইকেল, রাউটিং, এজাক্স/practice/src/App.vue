<script setup>
  import { reactive, ref } from 'vue';
  import MessageComponent from './components/MessageComponent.vue';
  import PersonComponent from './components/PersonComponent.vue';
  import Input from './components/Input.vue';
import NameComponent from './components/NameComponent.vue';
import Checkbox from './components/Checkbox.vue';

  const message = ref('Welcome to Your Vue.js App');
  const person = reactive({ name: 'John Doe', age: 30, email: 'john@example.com' });
  const taskDone = ref(false);
</script>

<template>
  <div  class="p-3 mx-auto" style="max-width: 600px;">
  <label>Main Component</label> <br>
  <Input type="text" v-model="message" /> <br><br>
  <MessageComponent  v-model="message"/>
  <div class="mt-3">
  <label>Main Component</label> <br>
    <label>Name</label> <br>
    <Input type="text" v-model="person.name" /> <br> <br>
    <label>Age</label> <br>
    <Input type="number" v-model="person.age" /> <br> <br>
    <label>Email</label> <br>
    <Input type="email" v-model="person.email" /> <br> <br>
  </div>
  <PersonComponent :person="person" /> <br>
  <label>Main Component</label> <br>
  <label>{{ person.name }}</label> <br>
    <Input type="text" v-model="person.name" /> <br> <br>
  <NameComponent v-model="person.name"/><br> <br>
  <label>Main Component</label> <br>
  <label>Task is {{ taskDone ? 'Done' : 'Not Done' }}</label> <br> <br>
  <Checkbox v-model="taskDone" />
  </div>
</template>