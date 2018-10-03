<?php

if (! defined('BASEPATH') ) exit('No direct script access allowed');

class kelolahelpdesk extends CI_Controller
{
		public function __construct()
        {
            parent::__construct();
            $this->load->model('m_helpdesk');
        }

        function index()
        {
            $x['data']=$this->m_helpdesk->show_laporan();
        	$this->load->view('Templates/header');
        	$this->load->view('pages/sarpras/kelolahelpdesk',$x);
        	$this->load->view('Templates/footer');
        }

        function hapuslaporan($laporan_id)
        {
            $del = $this->m_helpdesk->hapuslaporan($laporan_id);
            if ($del>0) {
                  $this->session->set_flashdata('success', 'true');
                  redirect('kelolahelpdesk');
            }
      }
}