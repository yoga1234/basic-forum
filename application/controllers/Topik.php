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
  }
?>
