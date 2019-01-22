<?php

  Class M_topik extends CI_Model{
    function ambil_data($table, $data){
      return $this->db->get_where($table, $data);
    }
  }

?>
