<?php

if (! defined('BASEPATH') ) exit('No direct script access allowed');

        class Telkompel extends CI_Controller {
          public function __construct()
          {
            parent::__construct();
            $this->load->model('m_telkompel');
            $this->load->library('upload');

          }
          function Index()
          {
            $this->load->view('templates/header');
            $this->load->view('sarpras/telkompel');
            $this->load->view('templates/footer');
          }

        //   function simpan()
        //   {
        //           $nama = $this->input->post('nama');
        //           $instansi = $this->input->post('instansi');
        //           $inti = $this->input->post('gridRadios');
        //           $kordinat = $this->input->post('koordinat');
        //           $keterangan = $this->input->post('keterangan');

        //           $this->m_helpdesk->simpan_helpdesk($nama,$instansi,$inti,$kordinat,$keterangan);
        //           redirect('Helpdesk/index');
        //   }

        }


?>
