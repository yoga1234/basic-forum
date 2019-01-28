<?php
  Class Profile extends CI_Controller{

    function __construct(){
      parent:: __construct();
      $this->load->model('m_profile');
      $this->load->model('m_user');
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

    function lihat_topik(){
      $where = array(
        'id_topik' => $this->uri->segment('3')
      );

      $data['data_topik'] = $this->m_topik->ambil_data("tbl_topik", $where)->result_array();

      $this->load->view('header');
      $this->load->view('detail_topik', $data);
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

    function daftar_user(){
      $data['user'] = $this->m_user->lihat_user()->result();
      $this->load->view('header');
      $this->load->view('daftar_user', $data);
      $this->load->view('footer');
    }

  }
?>
