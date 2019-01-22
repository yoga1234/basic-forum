<?php
  Class Profile extends CI_Controller{

    function __construct(){
      parent:: __construct();
      $this->load->model('m_profile');
    }

    function index(){
      $pengunggah = array(
        'pengunggah' => $this->session->userdata("nama")
      );
      $data['content'] = $this->m_profile->ambil_data("tbl_topik", $pengunggah)->result();
      $this->load->view('header');
      $this->load->view('halaman_profile', $data);
      $this->load->view('footer');
    }

    function hapus_topik(){
      $id_topik = $this->uri->segment(3);

      if(!empty($id_topik)){
        $this->db->where('id_topik', $id_topik);
        $this->db->delete('tbl_topik');
        redirect('profile');
      }
    }

  }
?>
