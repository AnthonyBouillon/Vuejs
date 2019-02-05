<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculatrice</title>
    <!-- BOOTSTRAP-VUE -->
    <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap/dist/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css"/>
    </head>
<body>
    <div id="app">
      <b-jumbotron>
                <h1>Calculatrice</h1>
                <b-link href="../exercice_1">Exercice_1</b-link>
                <b-link href="../exercice_2">Exercice_2</b-link>
                <b-link href="../exercice_3">Exercice_3</b-link>
                <b-link href="../exercice_4">Exercice_4</b-link>
      </b-jumbotron>
        <b-container>    
            <label for="" id="label"></label><br/>
            <br/>
            <b-button type="button" @click="key('1')" variant="primary" class="m-1">1</b-button>
            <b-button type="button" @click="key('2')" variant="primary" class="m-1">2</b-button>
            <b-button type="button" @click="key('3')" variant="primary" class="m-1">3</b-button><br/>
            <b-button type="button" @click="key('4')" variant="primary" class="m-1">4</b-button>
            <b-button type="button" @click="key('5')" variant="primary" class="m-1">5</b-button>
            <b-button type="button" @click="key('6')" variant="primary" class="m-1">6</b-button><br/>
            <b-button type="button" @click="key('7')" variant="primary" class="m-1">7</b-button>
            <b-button type="button" @click="key('8')" variant="primary" class="m-1">8</b-button>
            <b-button type="button" @click="key('9')" variant="primary" class="m-1">9</b-button><br/>
            <b-button type="button" @click="key('+')" variant="primary" class="m-1">+</b-button>
            <b-button type="button" @click="key('-')" variant="primary" class="m-1">-</b-button>
            <b-button type="button" @click="equal()" variant="primary" class="m-1">=</b-button><br/>
            <b-button type="button" @click="clear()" variant="warning" class="m-1">c</b-button>
        </b-container>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function(event) {
        // Affiche la variable de vuejs quand tout le DOM est chargé
        document.getElementById("label").innerHTML = '{{ total }}';
        new Vue({
            el: '#app',
            data:{
                total: 0,
            },
            methods:{
                /*
                 * Ajoute la valeur correspondant au bouton cliqué dans une variable
                 */
                key: function(btn_value) {
                    if(this.total === 0){
                        this.total = '';
                    }
                    return this.total = this.total + btn_value;    
                },
                /*
                 * Efface les données affiché de la calculatrice
                 */
                clear: function() {
                    return this.total = 0;
                },
                /**
                 * Retourne le résultat mathématique
                 * Fonction eval() : évalue une chaine de caractère et en sort le résultat mathématique
                 * string = '2 + 2', eval(string) retourne 4;
                 *
                 * Dans la variable, j'assigne le résultat mathématique de la chaîne
                 */ 
                equal: function() {
                    return this.total = this.total + '=' + eval(this.total);                  
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