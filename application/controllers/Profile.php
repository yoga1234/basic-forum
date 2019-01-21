<?php
  Class Profile extends CI_Controller{

    function index(){
      $this->load->view('header');
      $this->load->view('halaman_profile');
      $this->load->view('footer');
    }

  }
?>
