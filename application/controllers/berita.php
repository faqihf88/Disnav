<?php

if (! defined('BASEPATH') ) exit('No direct script access allowed');

        class berita extends CI_Controller {
          public function __construct()
          {
            parent::__construct();
            $this->load->model('m_berita');
            $this->load->library('upload');
          }
          function Index()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/berita/berita');
            $this->load->view('templates/footer');
          }

          function simpan_berita()
          {
              $config['upload_path'] = './assets/images/Upload/'; //path folder
              $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
              $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

              $this->upload->initialize($config);
              if(!empty($_FILES['filefoto']['name'])){
                if ($this->upload->do_upload('filefoto')){
                  $gbr = $this->upload->data();
                  //Compress Image
                  $config['image_library']='gd2';
                  $config['source_image']='./assets/image/Upload/'.$gbr['file_name'];
                  $config['create_thumb']= FALSE;
                  $config['maintain_ratio']= FALSE;
                  $config['quality']= '60%';
                  $config['width']= 710;
                  $config['height']= 420;
                  $config['new_image']= './assets/image/Upload/'.$gbr['file_name'];
                  $this->load->library('image_lib', $config);
                  $this->image_lib->resize();

                  $gambar=$gbr['file_name'];
                  $jdl=$this->input->post('judul');
                  $berita=$this->input->post('berita');

                  $this->m_berita->simpan_berita($jdl,$berita,$gambar);
                  redirect('berita/daftarberita');
                }else{
                   redirect('berita');
                     }
                }else{
                   redirect('berita');
                }
          }
          function edit_berita(){
            $beritaId=$this->input->post('beritaId');
            $beritaJudul=$this->input->post('beritaJudul');
            $beritaIsi=$this->input->post('beritaIsi');
            $beritaGambar=$this->input->post('beritaGambar');
            $beritaTanggal=$this->input->post('beritaTanggal');
            $this->m_berita->edit_berita($beritaId,$beritaJudul,$beritaIsi,$beritaGambar,$beritaTanggal);
            redirect('berita');
          }

          function daftarberita(){
            $x['data']=$this->m_berita->get_all_berita();
            $this->load->view('templates/header');
            $this->load->view('pages/berita/list',$x);
            $this->load->view('templates/footer');
          }

          function tampilanberita(){
            $kode=$this->uri->segment(3);
            $x['data']=$this->m_berita->get_berita_by_kode($kode);
            $this->load->view('templates/header');
            $this->load->view('pages/berita/tampilanberita',$x);
            $this->load->view('templates/footer');
          }
          function cari() {
            $data2['cari'] = $this->m_berita->cari();
            $this->load->view('Templates/header');
            $this->load->view('pages/berita/search', $data2);
            $this->load->view('Templates/footer');

            }
}


?>
