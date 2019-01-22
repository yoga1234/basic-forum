<?php

  Class M_topik extends CI_Model{

    public $table_topik = "tbl_topik";

    function ambil_data($table, $data){
      return $this->db->get_where($table, $data);
    }

    function update_topik($where){
      $data = array(
        'judul_topik' => $this->input->post('judul_topik', TRUE),
        'konten_topik' => $this->input->post('konten_topik', TRUE)
      );
      $this->db->where('id_topik', $where);
      $this->db->update($this->table_topik, $data);
    }

  }

?>
