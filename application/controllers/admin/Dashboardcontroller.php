<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboardcontroller extends CI_Controller
 {
   function __construct()
    {
      parent::__construct();

      $this->load->library('form_validation');
  		$this->load->helper('url');
  		$this->load->model('Dash_model');
    }


public function index(){


  // var_dump($data_category);
  // die;

  if(isset($_POST['submit'])){


  }else{

$data_category=$this->Dash_model->get_data("categories_tbl");

  }

  $this->body['data']=$data_category;
  $this->load->view('admin/header');
  $this->load->view('admin/categories_view',$this->body);
  $this->load->view('admin/footer');


}





}//end
