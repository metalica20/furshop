<?php
class Dash_model extends CI_Model {

  public function get_data($tbl){
      $this->db->select('*');
      $query=$this->db->get($tbl);
      return $query->result_array();
    }

public function get_data_specific($tbl,$cat){

  $this->db->select('*');
  $this->db->where('category',$cat);
  $query=$this->db->get($tbl);
  return $query->result_array();

}

public function do_upload($filename,$name)
{

  $this->load->library('upload');

  $config = array(
        'file_name'     => $name,
        'allowed_types' => 'jpg',
        'max_size'      => 3000,
        'overwrite'     => TRUE,
        'upload_path'=>'./uploads/'
  );

  $this->upload->initialize($config);



  if ( ! $this->upload->do_upload())
  {
    $error = array('error' => $this->upload->display_errors());
    return $error;


  }
  else
  {


    $data = array('upload_data' => $this->upload->data());
      $data['status']=1;

    return $data;

  }
}

public function insert_data($table,$data){

  $this->db->insert($table, $data);
  if ($this->db->affected_rows() > 0)
  {
   return $this->db->insert_id();
  }
  else
  {
    $error = $this->db->error();
    return $error;
  }
}

public function update_data($table,$data,$id){
  $this->db->where('id',$id);
  $this->db->update($table,$data);
}


public function get_specific_item($table,$id){

  $this->db->select('*');
  $this->db->where('id',$id);
  $query=$this->db->get($table);
  return $query->row_array();
}

}//end
