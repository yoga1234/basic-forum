<?php
  Class M_profile extends CI_Model{
    function ambil_data($table, $pengunggah){
      return $this->db->get_where($table, $pengunggah);
    }
  }
?>
