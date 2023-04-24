const { createApp } = Vue;

createApp({
  data() {
    return {
      todos: [],
      newTodo: '',
    }
  },
  methods: {
    getTodos() {
      axios.get('./server.php').then(res => {
        console.log(res);
        this.todos = res.data;
      });
    },
    addTodo() {
      let data = {
        newTodo: '',
      }

      console.log(this.newTodo);

      data.newTodo = this.newTodo;

      axios.post('./server.php', data, { headers: { 'Content-Type': 'multipart/form-data' } }).then(response => {
        console.log("chiamata post effettuata!");
        console.log(response);
        this.todos = response.data;
      });

      this.newTodo = "";
    },
  },
  mounted() {
    this.getTodos();
  },
}).mount('#app')