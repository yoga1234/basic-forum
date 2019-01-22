<?php
  Class Home extends CI_Controller{

    function __construct(){
      parent:: __construct();
      $this->load->model('m_home');
      $this->load->helper('url');
    }

    function index(){
      $data['content'] = $this->m_home->get_content()->result();
      $this->load->view('header');
      $this->load->view('halaman_utama', $data);
      $this->load->view('footer');
    }

    function hapus_topik(){
      $id_topik = $this->uri->segment(3);

      if(!empty($id_topik)){
        $this->db->where('id_topik', $id_topik);
        $this->db->delete('tbl_topik');
        redirect('home');
      }
    }

  }
?>
