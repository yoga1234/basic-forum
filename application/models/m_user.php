<?php
  Class M_user extends CI_Model{

    public $table_user = "tbl_user";

    function update_password($password_baru){

      $id =  $this->session->userdata("nama");

      $data = array(
        'password' => $password_baru
      );

      $this->db->where('username', $id);
      $this->db->update($this->table_user, $data);
    }

    function lihat_user(){
      return $this->db->get('tbl_user');
    }

  }
?>
