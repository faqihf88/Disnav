<?php
  defined ('BASEPATH') OR exit();

  class M_sarpras extends CI_Model{

      // function ambildata($table){
      //   return $this->db->get($table);
      // }

      function ambildata()
      {
        $this->db->select('*');
        $this->db->from('data');

        return $this->db->get();
      }

      function tambahdata($data,$table)
      {
        $this->db->insert($table,$data);
      }




  } //end CI_Model

 ?>
