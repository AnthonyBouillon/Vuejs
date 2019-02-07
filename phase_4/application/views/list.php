<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <title>AJAX</title>
  </head>
  <body>
    <!-- Mon application vue, commence ici -->
    <div class="container" id="app" >
      <div class="jumbotron">
        <h1 class="text-center">CRUD en axios</h1>
      </div>
      <div class="row">
        <div class="col-6">
          <h2>Détail de l'utilisateur : </h2>
          <!-- Affiche le détail d'un utiliser sélectionné -->
          <div class="alert alert-success col-12 mb-5">
            <p v-if="info">
              {{ info.id + ' ' + info.name + ' ' + info.firstname + ' ' + info.email}}
            </p>
            <p v-else style="color: #D4EDDA">
              .
            </p>
          </div>
      <!-- Formulaire d'ajout -->
      <form method="post" v-on:submit.prevent="add" class="mb-5">
        <caption>Ajouter un utilisateur</caption>
        <input type="text" name="name" placeholder="Nom" v-model="name" class="form-control col-12">
        <input type="text" name="firstname" placeholder="Prénom" v-model="firstname" class="form-control col-12">
        <input type="email" name="firstname" placeholder="E-mail" v-model="email" class="form-control col-12">
        <button type="submit" name="add_submit" class="btn btn-primary btn-block col-12">Ajouter</button>
      </form>



<!-- /block col-6 -->
</div>

<div class="col-6">
  <!-- Parcour l'objet "list" qui contient les informations des utilisateurs -->
    <div v-for="msg in list">

      <h2>
        <!-- Affiche le détail d'un utilisateur | Au clique, déclenche la fonction detail, avec l'id de l'utilisateur en paramètre -->
          <button @click="detail(msg.id)" class="btn btn-info">Voir plus</button>
          |
        {{ msg.name + ' ' + msg.firstname}}
      </h2>

        <!-- Formulaire de modification -->
        <form method="post" v-on:submit.prevent="update(msg.id, msg.name, msg.firstname)">
          <input type="hidden" name="id" placeholder="Identifiant" v-model="msg.id" class="form-control">
          <input type="text" name="name" placeholder="Nom" v-model="msg.name" class="form-control">
          <input type="text" name="firstname" placeholder="Prénom" v-model="msg.firstname" class="form-control">

          <button type="submit" class="btn btn-success">Modifier</button>
          <!-- Supprime un utilisateur (nul besoin d'être dans le form)| Au clique, déclenche la fonction delete, avec l'id de l'utilisateur en paramètre  -->
          <button @click="delete2(msg.id)" class="btn btn-danger">Supprimer</button>
        </form>

      <hr/>
   </div>
</div>
<!-- /row -->
</div>

  <!-- Mon application vue, termine ici -->
  </div>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
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
        // Récupère la liste des utilisateurs en get
        axios.get('http://localhost/vuejs/phase_4/index.php/users/list').then(response => {
          this.list = response.data;
        })
        .catch(function (error) {
          console.log(error);
        })
      },
      // Variable
      data: {
        list : [],
        info : '',
        id_user : '',
        name : '',
        firstname : '',
        name_update : '',
        firstname_update : '',
        email : ''
      },
      // Fonctions
      methods : {
        // Affiche le détail d'un utilisateur
          detail: function (id){
            // En paramètre la valeur à transmettre en php
            var params = new URLSearchParams();
            params.append('id', id);
            axios.post('http://localhost/vuejs/phase_4/index.php/users/detail/', params).then(response => {
              this.info = response.data;
              // Recharge la liste
              axios.get('http://localhost/vuejs/phase_4/index.php/users/list').then(response => {
                this.list = response.data;
              })
            })
            .catch(function (error) {
              console.log(error);
            })
          },
          // Modifie un utilisateur
          update: function (id, name, firstname){
            var params = new URLSearchParams();
            params.append('id', id);
            params.append('name', name);
            params.append('firstname', firstname);
            axios.post('http://localhost/vuejs/phase_4/index.php/users/update/', params).then(response => {
              // Recharge la liste
              axios.get('http://localhost/vuejs/phase_4/index.php/users/list').then(response => {
                this.list = response.data;
              })
            })
            .catch(function (error) {
              console.log(error);
            })
          },
          // Supprime un utilisateur
          delete2: function (id){
            var params = new URLSearchParams();
            params.append('id', id);
            axios.post('http://localhost/vuejs/phase_4/index.php/users/delete/', params).then(response => {
              // Recharge la liste
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
          // Ajoute un utilisateur
          add: function (){
            var params = new URLSearchParams();
            params.append('name', this.name);
            params.append('firstname', this.firstname);
            params.append('email', this.email);
            axios.post('http://localhost/vuejs/phase_4/index.php/users/add/', params).then(response => {
              // Recharge la liste
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
// window.history.pushState(document.title,document.title, 'http://localhost/vuejs/phase_4/index.php/users/index/' + );
  </script>
  </body>

</html>
