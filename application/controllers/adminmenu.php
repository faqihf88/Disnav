<?php

if (! defined('BASEPATH') ) exit('No direct script access allowed');

        class adminmenu extends CI_Controller {
          public function __construct()
          {
            parent::__construct();
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
                  redirect('adminmenu/kelolaberita');
                }else{
                   redirect('adminmenu/kelolaberita');
                     }
                }else{
                   redirect('adminmenu/kelolaberita');
                }
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
          function helpdesk()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/helpdesk');
            $this->load->view('templates/footer');
          }

          function simpan()
          {
                  $nama = $this->input->post('nama');
                  $instansi = $this->input->post('instansi');
                  $inti = $this->input->post('gridRadios');
                  $kordinat = $this->input->post('koordinat');
                  $keterangan = $this->input->post('keterangan');

                  $this->m_helpdesk->simpan_helpdesk($nama,$instansi,$inti,$kordinat,$keterangan);
                  $this->session->set_flashdata('success', 'true');
                  redirect('adminmenu/helpdesk');
          }
           function kelolahelpdesk()
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
                  redirect('adminmenu/kelolahelpdesk');
            }
      }
        function kelolaberita(){
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

      function hapusberita($berita_id)
      {
            $del = $this->m_kelolaberita->hapusberita($berita_id);
            if ($del>0) {
                  $this->session->set_flashdata('success', 'true');
                  redirect('kelolaberita');
            }
      }
}




?>
