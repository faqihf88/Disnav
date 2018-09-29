<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kelolaberita extends CI_Controller {
      function __construct(){

            parent::__construct();
            $this->load->model('m_kelolaberita');
      }

     
      public function index(){
            $x['data']=$this->m_kelolaberita->show_berita();
            $this->load->view('templates/header');
            $this->load->view('pages/berita/kelolaberita',$x);
	      $this->load->view('templates/footer');
      }

      function updateberita($berita_id){
            $x['bebas']=$this->m_kelolaberita->v_editberita($berita_id);
            // die(print_r($x));
            $this->load->view('templates/header');
            $this->load->view('pages/berita/updateberita',$x);
            $this->load->view('templates/footer');
      }

      function edit_berita(){
            $file = [
                  'upload_path' => './assets/images/Upload',
                  'allowed_types' => '*',
                  'overwrite' => TRUE,
                  'encrypt_name' => TRUE
            ];
            $this->load->library('upload', $file);
            $files= $_FILES['filefoto']['name'];
            if (!$this->upload->do_upload('filefoto')) {
                  $this->upload->display_errors();
            } else {
                  // $this->upload->do_upload('file'.$i);
                  $a = $this->upload->data();
            }
            
            $berita_id=$this->input->post('id_berita');
            $berita_judul=$this->input->post('judul');
            $berita_isi=$this->input->post('berita');
            $berita_image=$a['file_name'];
            $this->m_kelolaberita->edit_berita($berita_id,$berita_judul,$berita_isi,$berita_image);
            redirect('kelolaberita');
      }

      public function hapusberita($berita_id)
      {
            $del = $this->m_kelolaberita->hapusberita($berita_id);
            if ($del>0) {
                  $this->session->set_flashdata('success', 'true');
                  redirect('kelolaberita');
            }
      }
            
      

}