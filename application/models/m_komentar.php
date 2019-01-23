<?php
  Class M_komentar extends CI_Model{

    public function ambil_data($table, $where){
      return $this->db->get_where($table, $where);
    }

  }
?>
