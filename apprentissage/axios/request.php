<?php

  $db = new PDO('mysql:host=localhost;dbname=test', 'root', 'leqxd777');
  foreach($db->query('SELECT * FROM users WHERE id=' . $_POST['id']) as $row){
    echo json_encode($row);
  }
  /*$test = json_decode(file_get_contents('php://input'));
  //var_dump($test);
  header("Content-type: application/json");
  $db = new PDO('mysql:host=localhost;dbname=test', 'root', 'leqxd777');
  $row = $db->query('SELECT * FROM users WHERE id=' . $test->id)->fetch();

   echo json_encode($row);*/
 ?>
