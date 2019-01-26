<?php
  Class Topik extends CI_Controller{

    function __construct(){
      parent:: __construct();
      $this->load->model('m_topik');
      $this->load->model('m_komentar');
    }

    function index(){
      $this->load->view('header');
      $this->load->view('detail_topik');
      $this->load->view('footer');
    }

    function lihat_topik($var_halaman){
      $where = array(
        'id_topik' => $this->uri->segment('3')
      );

      $table = "tbl_komentar";

      if($this->uri->segment(4) == 'home'){
        $data['content_topik'] = array(
          'data_topik' => $this->m_topik->ambil_data("tbl_topik", $where)->result_array(),
          'var_halaman' => 'home',
          'komentar' => $this->m_komentar->ambil_data($table, $where)->result_array()
        );

      } else {
        $data['content_topik'] = array(
          'data_topik' => $this->m_topik->ambil_data("tbl_topik", $where)->result_array(),
          'var_halaman' => 'profile',
          'komentar' => $this->m_komentar->ambil_data($table, $where)->result_array()
        );
      }

      $this->load->view('header');
      $this->load->view('detail_topik', $data);
      $this->load->view('footer');
    }

    function ambil_topik(){
      $where = array(
        'id_topik' => $this->uri->segment('3')
      );
      $data['data_topik'] = $this->m_topik->ambil_data("tbl_topik", $where)->result_array();

      $this->load->view('header');
      $this->load->view('edit_topik', $data);
      $this->load->view('footer');
    }

    function edit_topik(){
      $where = $this->uri->segment('3');

      if (isset($_POST['submit'])) {
        $this->m_topik->update_topik($where);
        redirect(site_url('profile'));
      } else {
        echo "data gagal di update";
      }

    }

      function tambah_komentar(){
        $id_topik = $this->uri->segment(3);
        $pengunggah = $this->session->userdata("nama");
        $isi_komentar = $this->input->post('isi_komentar');
        $table = "tbl_komentar";
        $data_komentar = array(
          'id_topik' => $id_topik,
          'pengomentar' => $pengunggah,
          'isi_komentar' => $isi_komentar
        );

        if(isset($_POST["submit"])){
          $this->db->insert($table, $data_komentar);
          redirect(site_url('topik/lihat_topik/'.$id_topik.'/'.$this->uri->segment(4)));
        }

    }
  }
?>
