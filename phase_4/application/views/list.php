<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title></title>
  </head>
  <body>
    <!-- Mon application vue, commence ici -->
    <div class="container-fluid" id="app" >
      <!-- Formulaire d'ajout -->
      <form method="post" v-on:submit.prevent="add">
        <input type="text" name="name" placeholder="Nom" v-model="name">
        <input type="text" name="firstname" placeholder="Prénom" v-model="firstname">
        <button type="submit" name="add_submit">Ajouter</button>
      </form>
      <!-- Affiche le détail d'un utiliser sélectionné -->
      <div v-if="show" class="alert alert-success">
        {{ info.id + ' ' + info.name + ' ' + info.firstname}}
      </div>
      <hr/>
      <!-- Parcour l'objet "list" qui contient les informations des utilisateurs -->
        <div v-for="msg in list">
          <h2>
            {{ msg.name + ' ' + msg.firstname}}
            <!-- Affiche le détail d'un utilisateur | Au clique, déclenche la fonction detail, avec l'id de l'utilisateur en paramètre -->
              <button @click="detail(msg.id)" class="btn btn-info">Voir plus</button>
          </h2>

            <!-- Formulaire de modification -->
            <form method="post" v-on:submit.prevent="update(msg.id)">
              <input type="text" name="id" placeholder="Identifiant" v-model="msg.id">
              <input type="text" name="name" placeholder="Nom" v-model="name">
              <input type="text" name="firstname" placeholder="Prénom" v-model="firstname">
              <button type="submit" class="btn btn-success">Modifier</button>
              <!-- Supprime un utilisateur (nul besoin d'être dans le form)| Au clique, déclenche la fonction delete, avec l'id de l'utilisateur en paramètre  -->
              <button @click="delete2(msg.id)" class="btn btn-danger">Supprimer</button>
            </form>

          <hr/>
       </div>


  <!-- Mon application vue, termine ici -->
  </div>
  <!-- Vuejs -->
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <!-- Ajax -->
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script>
  document.addEventListener('DOMContentLoaded', function(event) {
    var app = new Vue ({
      el: '#app',
      // Fonction exécuté au démarrage
      created: function(){
        axios.get('http://localhost/vuejs/phase_4/index.php/users/list').then(response => {
          this.list = response.data;
        })
        .catch(function (error) {
          console.log(error);
        })
      },
      data: {
        list : [],
        info : '',
        id_user : '',
        show : false,
        name : '',
        firstname : ''
      },
      methods : {


        detail: function (id){
          var params = new URLSearchParams();
          params.append('id', id);
          axios.post('http://localhost/vuejs/phase_4/index.php/users/detail/', params).then(response => {
            this.show = true;
            this.info = response.data;
          })
          .catch(function (error) {
            console.log(error);
          })
        },
        update: function (id){
          var params = new URLSearchParams();
          params.append('id', id);
          params.append('name', this.name);
          params.append('firstname', this.firstname);
          axios.post('http://localhost/vuejs/phase_4/index.php/users/update/', params).then(response => {
            axios.get('http://localhost/vuejs/phase_4/index.php/users/list').then(response => {
              this.list = response.data;
            })
          })
          .catch(function (error) {
            console.log(error);
          })
        },
        delete2: function (id){
          var params = new URLSearchParams();
          params.append('id', id);
          axios.post('http://localhost/vuejs/phase_4/index.php/users/delete/', params).then(response => {
            axios.get('http://localhost/vuejs/phase_4/index.php/users/list').then(response => {
              this.list = response.data;
            })
            .catch(function (error) {
              console.log(error);
            })
          })
          .catch(function (error) {
            console.log(error);
          })
        },
        add: function (){
          var params = new URLSearchParams();
          params.append('name', this.name);
          params.append('firstname', this.firstname);
          axios.post('http://localhost/vuejs/phase_4/index.php/users/add/', params).then(response => {
            axios.get('http://localhost/vuejs/phase_4/index.php/users/list').then(response => {
              this.list = response.data;
            })
          })
          .catch(function (error) {
            console.log(error);
          })
        },

        },
});
});
/*var list = [];
axios.get('http://localhost/vuejs/phase_4/index.php/users/list').then(response => {
  list = response.data;
  list.forEach(function(element){
    document.getElementById('app').append(element.name + ' ' + element.firstname + ' ');
  })
})
.catch(function (error) {
  console.log(error);
})*/
// window.history.pushState(document.title,document.title, 'http://localhost/vuejs/phase_4/index.php/users/index/' + );
  </script>
  </body>

</html>
