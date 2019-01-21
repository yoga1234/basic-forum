<?php

  class M_signup extends CI_Model{
    function cek_data($table, $data){
      return $this->db->get_where($table, $data);
    }
  }

  function index(){
    $this->load->view('sign_up');
  }

?>
