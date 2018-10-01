<?php

if (! defined('BASEPATH') ) exit('No direct script access allowed');

        class Helpdesk extends CI_Controller {
          public function __construct()
          {
            parent::__construct();

          }
          function Index()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/helpdesk');
            $this->load->view('templates/footer');
          }

          function simpan()
          {
            $id = $this->input->post('laporan_id');
            $nama = $this->input->post('laporan_nama');
            $instansi = $this->input->post('laporan_instansi');
            $gridRadios = $this->input->post('laporan_inti');
            $keterangan = $this->input->post('laporan_keterangan');
            $data = array(
              'laporan_nama' => $nama,
              'laporan_instansi' => $instansi,
              'laporan_inti' => $gridRadios,
              'laporan_keterangan' => $keterangan
              );
            $this->m_helpdesk->input_data($data,'user');
            redirect('crud/index');
          }

        }


?>
