<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP-VUE -->
    <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap/dist/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css"/>

    <title>Additionneur</title>
</head>
<body>

<div id='app'>
  <b-jumbotron>
    <h1>Additionneur</h1>
    <b-link href="../exercice_1">Exercice_1</b-link>
    <b-link href="../exercice_2">Exercice_2</b-link>
    <b-link href="../exercice_3">Exercice_3</b-link>
    <b-link href="../exercice_4">Exercice_4</b-link>
  </b-jumbotron>
  <b-container>
    <h2><b-badge>Test ce programme </b-badge><b-img src="https://s1.qwant.com/thumbr/0x380/1/8/4ff6e8ec0d1fb54ce37e6059f109b7dbe726194e7372becd19f0dd094f0ef0/aiga-down-arrow1.png?u=http%3A%2F%2Fwww.xn--icne-wqa.com%2Fimages%2Ficones%2F1%2F6%2Faiga-down-arrow1.png&q=0&b=1&p=0&a=1" alt="Image" fluid width="45px"></h2>
      <form method="POST" action="">
        <!-- Valeur du champ ------ fonction avec l'evènement "change" -->
        <b-form-input type="number" v-model="number_1" v-on:change="calcul" class="col-md-3"></b-form-input>+
        <b-form-input type="number" v-model="number_2" v-on:change="calcul" class="col-md-3"></b-form-input>
        <b-alert variant="success" class="col-md-3 mt-4" show v-if="parseInt(result)">= {{ result }}</b-alert>
        <label v-else>ERREUR</label>
      </form>
      </b-container>
</div>
<!-- BOOTSTRAP-VUE -->
<script src="https://unpkg.com/vue/dist/vue.min.js"></script>
<script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js"></script>
<script src="https://unpkg.com/babel-polyfill@latest/dist/polyfill.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function(event) {

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

});
</script>

</body>
</html>