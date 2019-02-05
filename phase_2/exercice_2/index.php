<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <title>Nombre Magique</title>
    </head>
    <body>
        <div class="container-fluid mb-4 app" id="app">
            <h1>Nombre Magique - Devinez une valeur entre 0 et 100</h1>
            <a href="../exercice_1/">Exercice 1</a>
            <a href="../exercice_2/">Exercice 2</a>
            <a href="../exercice_3/">Exercice 3</a>
            <a href="../exercice_4/">Exercice 4</a>
            <hr/>
            <form method="POST" action="">
                <!-- v-model : valeur de l'input -->
                <input type="number" v-model="number">
                <!-- variable -->
                <label>{{ result }}</label>
                <button type="button" v-on:click="check">Vérifier</button>
            </form>
        </div>
    </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
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