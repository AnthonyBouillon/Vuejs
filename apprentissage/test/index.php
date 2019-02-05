<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <title>Exemple Vue.js</title>
</head>
<body>
    <div id="app">
        {{ message }}
         <ol>
        <!-- Crée une instance du composant todo-list -->
        <todo-item></todo-item>
    </ol>
    </div>
    <div id="app-2">
        <span v-bind:title="message2">
            Passez votre souris sur moi pendant quelques secondes
            pour voir mon titre lié dynamiquement !
        </span>
    </div>
    <div id="app-3">
        <p v-if="seen">Maintenant vous me voyez</p>
    </div>
    <div id="app-4">
        <ol>
            <li v-for="todo in todos">
            {{ todo.text }}
            </li>
        </ol>
    </div>
   
</body>
<script>
var app = new Vue({
    el: '#app',
    data:{
        message : 'Hello Vue !'
    }
});
var app2 = new Vue({
    el:'#app-2',
    data:{
        message2: new Date()
    }
});
var app3 = new Vue({
  el: '#app-3',
  data: {
    seen: true
  }
})
var app4 = new Vue({
  el: '#app-4',
  data: {
    todos: [
      { text: 'Apprendre JavaScript' },
      { text: 'Apprendre Vue' },
      { text: 'Créer quelque chose de génial' }
    ]
  }
})
// Doit se trouver avant la nouvelle instance de Vue
Vue.component('todo-item', {
  template: '<li>This is a todo</li>'
})

var app = new Vue({
  el: '#app'
})
</script>
</html>