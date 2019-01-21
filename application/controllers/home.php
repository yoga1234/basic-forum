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

  }
?>
