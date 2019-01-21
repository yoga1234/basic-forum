<?php
  Class Signup extends CI_Controller{

    function __construct(){
      parent:: __construct();
      $this->load->model('m_signup');
    }

    public function signup_action(){
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $table = "tbl_user";
      $data_user = array(
        'username' => $username,
        'password' => $password
      );
      $data = array(
        'username' => $username
      );
      $cek_data = $this->m_signup->cek_data($table, $data)->num_rows();
      if($cek_data > 0){
        echo '
          <script>
            alert("Username sudah digunakan");
          </script>
        ';
        $this->load->view('signup');
      } else {
        $this->db->insert($table, $data_user);
        echo '
          <script>
            alert("Anda berhasil daftar");
          </script>
        ';
        $this->load->view('login');
      }
    }
  }
?>
