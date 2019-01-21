<?php
  Class m_home extends CI_Model{

    function get_content(){
      return $this->db->get('tbl_topik');
    }

  }
?>
