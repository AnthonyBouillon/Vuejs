<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Users_model extends CI_Model {

  public function read_list(){
    $result = $this->db->get('users')->result();
    if($result){
      return $result;
    }else{
      return false;
    }
  }

  public function read_detail($id){
    $this->db->select('*')
    ->from('users')
    ->where('id', $id);
    $result = $this->db->get()->row();
    if($result){
      return $result;
    }else{
      return false;
    }
  }

  public function delete_user($id){
    $this->db->delete('users', array('id' => $id));
  }

  public function add_user($data){
    $this->db->insert('users', $data);
  }

  public function update_user($data, $id){
    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update('users');
  }
}
