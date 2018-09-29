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
          // function login()
          // {
          //   $this->load->view('halaman/login');
          // }


        }


?>
