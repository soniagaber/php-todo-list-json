<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-todo-list-json</title>
    <!--axios-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!--vueJS-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="app">
        <ul>
            <li v-for="todo in todos">{{todo}}</li>
        </ul>
        <hr>
        <div>
            <input type="text" v-model="newTodo" placeholder="Inserisci un nuovo elemento nella todo list" @keyup.enter="addTodo()">
            <button @click="addTodo()">Aggiungi</button>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>