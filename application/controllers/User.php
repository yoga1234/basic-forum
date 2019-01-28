<?php
  Class User extends CI_Controller{

    function __construct(){
      parent:: __construct();
      $this->load->model('m_user');
    }

    function index(){
      $this->load->view('header');
      $this->load->view('ganti_password');
      $this->load->view('footer');
    }

    function change_password(){
      $password_baru = $this->input->post('password-baru');

      if(isset($_POST['submit'])){
        $this->m_user->update_password($password_baru);
        redirect('profile');
      }
    }

    function hapus_user(){
      $id_user = $this->uri->segment(3);

      if(!empty($id_user)){
        $this->db->where('id_user', $id_user);
        $this->db->delete('tbl_user');

        redirect('profile/daftar_user');
      }
    }

  }
?>
