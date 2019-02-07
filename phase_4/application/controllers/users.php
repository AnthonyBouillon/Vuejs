<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Users extends CI_Controller {

  public function index($id = !null){
      $this->load->view('list');
  }

  public function list(){
      $data['list'] = $this->users_model->read_list();
      if($data['list'] == true){
        echo json_encode($data['list']);
      }
  }

  public function detail(){
      $id = $_POST['id'];
      $data['detail'] = $this->users_model->read_detail($id);
      if($data['detail'] == true){
        echo json_encode($data['detail']);
      }
  }

  public function delete(){
    $this->users_model->delete_user($_POST['id']);
  }

  public function add(){
    $data = array(
      'name' => $_POST['name'],
      'firstname' => $_POST['firstname'],
      'email' => $_POST['email']
    );
    $this->users_model->add_user($data);
  }

  public function update(){
    $data = array (
      'name' => $_POST['name'],
      'firstname' => $_POST['firstname']

    );
    $this->users_model->update_user($data, $_POST['id']);
  }
}
