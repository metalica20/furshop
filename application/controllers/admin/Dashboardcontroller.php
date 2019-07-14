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

  if(isset($_POST['apply'])){
    //var_dump($_POST);
    $category=$this->input->post('cat');
    $data_category=$this->Dash_model->get_data("categories_tbl",$category);
    $data_item=$this->Dash_model->get_data_specific("items_tbl",$category);

  }else{

$data_category=$this->Dash_model->get_data("categories_tbl");
$data_item=$this->Dash_model->get_data("items_tbl");

  }

  $this->body['data']=$data_item;
  $this->body['data_cat']=$data_category;
  $this->load->view('admin/header');
  $this->load->view('admin/categories_view',$this->body);
  $this->load->view('admin/footer');


}

public function additem(){

  if(isset($_POST['submit'])){


    $files = $_FILES;
    $cpt = count($_FILES['photo']['name']);
    unset($_POST['submit']);

    $insert_id=$this->Dash_model->insert_data('items_tbl',$_POST);
    
    for($i=0;$i<$cpt;$i++){

      $file_name=$_FILES['photo']['name'][$i];
      if($i==0){
        echo $i;
       $name=$insert_id.'_first';

     }elseif($i==1){

       $name=$insert_id.'_second';

      }else{

        $name=$insert_id.'_third';

      }

      $this->load->library('upload');

        $_FILES['photo']['name']= $files['photo']['name'][$i];
        $_FILES['photo']['type']= $files['photo']['type'][$i];
        $_FILES['photo']['tmp_name']= $files['photo']['tmp_name'][$i];
        $_FILES['photo']['error']= $files['photo']['error'][$i];
        $_FILES['photo']['size']= $files['photo']['size'][$i];



      $config = array(
            'file_name'     => $name,
            'allowed_types' => 'jpg',
            'max_size'      => 3000,
            'overwrite'     => TRUE,
            'upload_path'=>'./uploads/'
      );

      $this->upload->initialize($config);
      if (!$this->upload->do_upload('photo')) {
                      $data_error = array('msg' => $this->upload->display_errors());
                      var_dump($data_error);
                  } else {
                      $data = $this->upload->data();


                  }

    }
    $photo_path=array(
      'photo'=>base_url().'uploads/'.$insert_id.'_first.jpg',
      'photo1'=>base_url().'uploads/'.$insert_id.'_second.jpg',
      'photo2'=>base_url().'uploads/'.$insert_id.'_third.jpg',
    );
    $update_photo_path=$this->Dash_model->update_data('items_tbl',$photo_path,$insert_id);

    $this->session->set_flashdata('msg','Items successfully Added');
    redirect('additem');




  }else{

    $data_category=$this->Dash_model->get_data("categories_tbl");
    $this->body['data']=$data_category;
    $this->load->view('admin/header');
    $this->load->view('admin/add_item',$this->body);
    $this->load->view('admin/footer');

  }


}


public function edit_items(){

$id=$this->input->get('id');


if(isset($_POST['submit'])){

  $files = $_FILES;

  $cpt = count($_FILES['photo']['name']);
  unset($_POST['submit']);

  $insert_id=$this->Dash_model->update_data('items_tbl',$_POST,$id);

  for($i=0;$i<$cpt;$i++){

    $file_name=$_FILES['photo']['name'][$i];
    if($i==0){

     $name=$id.'_first';

   }elseif($i==1){

     $name=$id.'_second';

    }else{

      $name=$id.'_third';

    }

    $this->load->library('upload');

      $_FILES['photo']['name']= $files['photo']['name'][$i];
      $_FILES['photo']['type']= $files['photo']['type'][$i];
      $_FILES['photo']['tmp_name']= $files['photo']['tmp_name'][$i];
      $_FILES['photo']['error']= $files['photo']['error'][$i];
      $_FILES['photo']['size']= $files['photo']['size'][$i];



    $config = array(
          'file_name'     => $name,
          'allowed_types' => 'jpg',
          'max_size'      => 3000,
          'overwrite'     => TRUE,
          'upload_path'=>'./uploads/'
    );

    $this->upload->initialize($config);
    if (!$this->upload->do_upload('photo')) {
                    $data_error = array('msg' => $this->upload->display_errors());
                    var_dump($data_error);
                } else {
                    $data = $this->upload->data();

                }

  }

  $this->session->set_flashdata('msg','Items successfully Added');
  redirect('dashboard');


}else{
  $data_category=$this->Dash_model->get_data('categories_tbl');
  $item_data=$this->Dash_model->get_specific_item('items_tbl',$id);
  $this->body['data']=$data_category;
  $this->body['item_data']=$item_data;
  $this->load->view('admin/header');
  $this->load->view('admin/edit_items',$this->body);
  $this->load->view('admin/footer');

}

}


}//end
