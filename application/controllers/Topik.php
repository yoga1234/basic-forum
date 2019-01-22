<?php
  Class Topik extends CI_Controller{

    function __construct(){
      parent:: __construct();
      $this->load->model('m_topik');
    }

    function index(){
      $this->load->view('header');
      $this->load->view('detail_topik');
      $this->load->view('footer');
    }

    function lihat_topik(){
      $where = array(
        'id_topik' => $this->uri->segment('3')
      );

      $data['data_topik'] = $this->m_topik->ambil_data("tbl_topik", $where)->result_array();

      $this->load->view('header');
      $this->load->view('detail_topik', $data);
      $this->load->view('footer');
    }
  }
?>
