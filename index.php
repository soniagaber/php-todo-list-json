<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-todo-list-json</title>
    <!--axios-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--vueJS-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="app">
        <ul>
            <li v-for="todo in todos">{{todo}}</li>
        </ul>
    </div>
    
    <script src="js/script.js"></script>
</body>
</html>