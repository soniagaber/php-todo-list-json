const { createApp } = Vue

  createApp({
    data() {
      return {
        todos: [],
      }
    },
    methods:{
        getTodos(){
            axios.get('./server.php').then(res=>{
                console.log(res);
                this.todos = res.data;
            });
        },
    },
    mounted(){
        this.getTodos();
    },
  }).mount('#app')