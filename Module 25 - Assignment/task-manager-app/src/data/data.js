import { reactive } from "vue";

const tasks = reactive([
  {
    id: 1,
    title: 'Task 1',
    isCompleted: false
  },
  {
    id: 2,
    title: 'Task 2',
    isCompleted: true
  },
  {
    id: 3,
    title: 'Task 3',
    isCompleted: false
  }
]);

export default tasks;
