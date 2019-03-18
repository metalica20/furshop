<?php
class Dash_model extends CI_Model {

  public function get_data($tbl){
      $this->db->select('*');
      $query=$this->db->get($tbl);
      return $query->result_array();
    }
}
