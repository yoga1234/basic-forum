<?php
  Class Tambah_topik extends CI_Controller{

    function add_topik(){
      $judul = $this->input->post('judul_topik');
      $konten = $this->input->post('konten_topik');
      $pengunggah = $this->session->userdata('nama');
      $table = "tbl_topik";
      $topik_data = array(
        'judul_topik' => $judul,
        'konten_topik' => $konten,
        'pengunggah' => $pengunggah
      );
      if(isset($_POST['submit'])){
        $this->db->insert($table, $topik_data);
        redirect(site_url('home'));
      }
    }

    function index(){
      $this->load->view('tambah_topik');
    }
  }
?>
