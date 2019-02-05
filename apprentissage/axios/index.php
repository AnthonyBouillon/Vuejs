<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <title>AXIOS</title>
    </head>
    <body>
        <div class="container-fluid mb-4 app" id="app">
          <form method="POST" v-on:submit.prevent="onSubmit">
            <input type="text" name="id" v-model="id">
            <button type="submit">Appel axios</button>
          </form>
            <div v-if="show">
              {{ post.name + ' ' + post.firstname }}
            </div>
        </div>
    </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>

var app = new Vue({
    el: '#app',
    data: {
      post : '',
      show : false,
      // a supprimer test
      id : ''
    },
    methods: {
      // Données envoyé en post
      onSubmit: function(){
        // parcour les paires de clé/valeur (clé : id, valeur : 7) => OBLIGATOIRE
        var params = new URLSearchParams();
        params.append('id', this.id);
          axios.post('http://localhost/vuejs/apprentissage/axios/request.php', params)
          .then(response => {
            this.post = response.data;
            this.show = true;
          })


      }
    }

});

</script>
