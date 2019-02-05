<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nombre Magique</title>
    <!-- BOOTSTRAP-VUE -->
    <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap/dist/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css"/>
    </head>
    <body>
    <div id='app'>
   
            <b-jumbotron>
                <h1>Nombre Magique - Devinez une valeur entre 0 et 100</h1>
                <b-link href="../exercice_1">Exercice_1</b-link>
                <b-link href="../exercice_2">Exercice_2</b-link>
                <b-link href="../exercice_3">Exercice_3</b-link>
                <b-link href="../exercice_4">Exercice_4</b-link>
            </b-jumbotron>

            <b-container>
            <hr/>
            <form method="POST" action="">
                <!-- v-model : valeur de l'input -->
                <b-form-input v-model="number" type="number" class="col-lg-3"></b-form-input>
                <b-button v-on:click="check">Vérifier</b-button>
                <!-- variable -->
                <label>{{ result }}</label>
            </form>
        </b-container>
    </div>
    </body>
</html>
<!-- BOOTSTRAP-VUE -->
<script src="https://unpkg.com/vue/dist/vue.min.js"></script>
<script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js"></script>
<script src="https://unpkg.com/babel-polyfill@latest/dist/polyfill.min.js"></script>
<script>
new Vue({
    el: '#app',
    data: {
        number: 0,
        // Génère un nombre aléatoire
        number_ia: Math.floor(Math.random() * 10),
        result: ''
    },
    methods: {
        // Fonction qui se déclenche au clique
        check: function () {
            if (this.number_ia > this.number) {
                this.result = 'Trop petit';
            } else if (this.number_ia < this.number) {
                this.result = 'Trop grand';
            } else {
                this.result = 'Bravo tu as gagné';
            }
        }
    }
})
</script>