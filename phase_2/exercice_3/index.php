<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Calculette</title>
</head>
<body>
    <div id="app">
    <div class="container-fluid mb-4 app" id="app">
            <h1>Calculette</h1>
            <a href="../exercice_1/">Exercice 1</a>
            <a href="../exercice_2/">Exercice 2</a>
            <a href="../exercice_3/">Exercice 3</a>
            <a href="../exercice_4/">Exercice 4</a>
            <hr/>
        <label for="" id="label"></label><br/>
        <input type="button" value="1" v-on:click="key('1')">
        <input type="button" value="2" v-on:click="key('2')">
        <input type="button" value="3" v-on:click="key('3')"><br/>
        <input type="button" value="4" v-on:click="key('4')">
        <input type="button" value="5" v-on:click="key('5')">
        <input type="button" value="6" v-on:click="key('6')"><br/>
        <input type="button" value="7" v-on:click="key('7')">
        <input type="button" value="8" v-on:click="key('8')">
        <input type="button" value="9" v-on:click="key('9')"><br/>
        <input type="button" value="+" v-on:click="key('+')">
        <input type="button" value="-" v-on:click="key('-')">
        <input type="button" value="=" v-on:click="equal()">
        <input type="button" value="C" v-on:click="clear()">
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js"></script>
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
                    return this.total = eval(this.total);                  
                }    
            }
        });
    });
    </script>
</body>
</html>