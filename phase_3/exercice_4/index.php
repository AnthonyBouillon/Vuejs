<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Interface</title>
    <!-- BOOTSTRAP-VUE -->
    <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap/dist/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css"/>
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
    </head>
<body>
    <div id="app">
    <b-jumbotron>
                <h1>Interface</h1>
                <b-link href="../exercice_1">Exercice_1</b-link>
                <b-link href="../exercice_2">Exercice_2</b-link>
                <b-link href="../exercice_3">Exercice_3</b-link>
                <b-link href="../exercice_4">Exercice_4</b-link>
      </b-jumbotron>
      <b-container>
        <b-card v-show="show_display1" @click="button_1">
            <b-button>Bouton 1</b-button>
            <small>Premier panneau</small>
        </b-card>
        <b-card v-show="show_display2" @click="button_2">
            <b-button>Bouton 2</b-button>
            <small>Deuxième panneau</small>
        </b-card>
        <b-container>
    </div>
<script>
// Quand le DOM est entièrement chargé
document.addEventListener('DOMContentLoaded', function(event) {
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
});
</script>
</body>
</html>
<!-- BOOTSTRAP-VUE -->
<script src="https://unpkg.com/vue/dist/vue.min.js"></script>
<script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js"></script>
<script src="https://unpkg.com/babel-polyfill@latest/dist/polyfill.min.js"></script>