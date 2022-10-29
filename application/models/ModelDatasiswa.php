<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelDatasiswa extends CI_Controller{

     public function getDatasiswa()
     {
          return $this->db->get('datasiswa');
     }
     public function datasiswaWhere($where)
     {
          return $this->db->get_where('datasiswa', $where);
     }
     public function simpanDatasiswa($data = null)
     {
          $this->db->insert('datasiswa',$data);
     }
     public function hapusDatasiswa($where = null)
     {
          $this->db->delete('datasiswa', $where);
     }

}