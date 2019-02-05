<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Interface</title>
</head>
<body>
    <div id="app" class="container-fluid mb-4 app">
            <h1>Interface</h1>
            <a href="../exercice_1/">Exercice 1</a>
            <a href="../exercice_2/">Exercice 2</a>
            <a href="../exercice_3/">Exercice 3</a>
            <a href="../exercice_4/">Exercice 4</a>
            <hr/>
        <div id="block_1" v-show="show_display1" @click="button_1">
            <button>Bouton 1</button>
            <p>Premier panneau</p>
        </div>
        <div id="block_2" v-show="show_display2" @click="button_2">
            <button>Bouton 2</button>
            <p>Deuxième panneau</p>
        </div>
    </div>
    
    <style>
    #block_1{
        border: 2px solid black;
        width: 300px;
        height: 300px;
    }
    #block_2{
        border: 2px solid black;
        width: 300px;
        height: 300px;
      
    }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
    new Vue ({
        el: '#app',
        data: {
            // true: affiche, false: masque
            show_display1: true,
            show_display2: false
        },
        methods:{
            // Fonction déclencher au click
            button_1: function(){
                this.show_display1 = false,
                this.show_display2 = true
            },
            button_2: function(){
                this.show_display1 = true,
                this.show_display2 = false
            }
        }
    });
    </script>
</body>
</html>