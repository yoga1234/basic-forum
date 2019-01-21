<?php
  Class Login extends CI_Controller{

    function __construct(){
      parent:: __construct();
      $this->load->model('m_login');
    }

    function index(){
      $this->load->view('login');
    }

    function signup(){
      $this->load->view('signup');
    }

    function aksi_login(){
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $where = array(
        'username' => $username
      );
      $cek = $this->m_login->cek_login("tbl_user", $where)->num_rows();
      if($cek > 0){
        $cek = $this->m_login->cek_login("tbl_user", $where)->result_array();
        foreach ($cek as $key) {
          if($key['password'] == $password){
            $data_session = array(
              'nama' => $username,
              'password' => $password,
              'status' => "login"
            );
            $this->session->set_userdata($data_session);

            redirect(site_url("home"));
          } else {
            echo '
              <script>
                alert("Data yang Anda masukan salah");
              </script>
            ';
            $this->load->view('login');
          }
        }
      } else {
        echo "Data tidak ada";
      }
    }

    function logout(){
      $this->session->sess_destroy();
      redirect(site_url('login'));
    }

  }
?>
