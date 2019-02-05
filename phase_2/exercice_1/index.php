<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <title>Additionneur</title>
    </head>
    <body>
        <div class="container-fluid mb-4 app" id="app">
            <h1>Additionneur</h1>
            <a href="../exercice_1/">Exercice 1</a>
            <a href="../exercice_2/">Exercice 2</a>
            <a href="../exercice_3/">Exercice 3</a>
            <a href="../exercice_4/">Exercice 4</a>
            <hr/>
            <form method="POST" action="">
                <!-- Valeur du champ ------ fonction avec l'evènement "change" -->
                <input type="number" v-model="number_1" v-on:change="calcul">+
                <input type="number" v-model="number_2" v-on:change="calcul"> = 
                <label v-if="parseInt(result)">{{ result }}</label>
                <label v-else>ERREUR</label>
            </form>
        </div>


    </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
new Vue({
    el: '#app',
    data:{
        // Variable qui prend la valeur saisie dans le input
        number_1: 1,
        number_2: 1,
        result: 2
    },
    methods: {
        // Méthode qui additionne deux nombres
        calcul: function(){
            this.result = parseInt(this.number_1) + parseInt(this.number_2);
        }
    }
})
</script>