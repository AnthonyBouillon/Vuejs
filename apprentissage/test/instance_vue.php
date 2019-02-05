<html>
    <head>
        <link rel="stylesheet" href="index.css">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    </head>
    <body>
    
        <div id="app">
            <ol>
                <todo-item></todo-item>
            </ol>
        </div>
            
<script>
Vue.component('todo-item', {
  template: '<li>This is a todo</li>'
})

var app = new Vue({
  el: '#app'
})
</script>
    </body>
</html>