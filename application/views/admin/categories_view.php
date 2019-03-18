<style>
.category{
  margin-bottom: 45px;
}
</style>
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <!-- page start-->
    <div class="row">

      <!-- nxtbody -->
      <!-- nxtbody -->

      <div class="col-sm-12">
        <section class="panel">
          <section class="panel">
            <header class="panel-heading">
              <b>Choose</b>
              <span class="tools pull-right">
                <!-- <a href="<?php echo base_url(FOLDER_ADMIN)?>/csvtable/upload_csv_emerg?tbl=volunteer_contact"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1fb5ad;border-color: #1fb5ad;margin-top: -7px;"><i class="fa fa-plus"></i> <?php echo $this->lang->line('upload_csv'); ?></button></a> -->
              </span>
            </header>
            <div class="panel-body">

              <!-- chosse category -->
              <div class="form-group category">
                <label  class="col-lg-3" >Selects Category</label>
                <div class="col-lg-6">
                  <form method=POST action="">

                  <select class="form-control m-bot15" name="sub_cat_contact" id="sub_cat">
                    <option>Select Category</option>
                    <?php foreach ($data as $list){ ?>

                      <option value="<?php echo $list['name']?>"><?php echo $list['name']?></option>


                    <?php } ?>
                  </select>

                </div>
                <!-- <input type="hidden" value="<?php echo $type ?>" name="type" > -->
                <span class="tools pull-right">
                  <button type="submit" name="apply" class="btn btn-danger" style="background-color: #1fb5ad;border-color: #1fb5ad;margin-top: -7px;"><i class="fa fa-check"></i> Apply</button>
                </form>
                </span>

              </div>

              <!-- chosse category -->
            </div>
          </section>

        </section>
      </div>
      <!-- nxtbody -->


      <!-- nxtbody -->


      <div class="col-sm-12">
        <section class="panel">
          <section class="panel">
            <header class="panel-heading">
              <b>asdadasd </b>
              <span class="tools pull-right">
                <a href=""><button class="btn btn-danger" style="background-color: #1fb5ad;border-color: #1fb5ad;margin-top: -7px;"><i class="fa fa-plus"></i> upload</button></a>
              </span>
            </header>
            <div class="panel-body">



              <?php
              $error=	$this->session->flashdata('msg');
              if($error){ ?>
                <div class="alert alert-info alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Message!!!!</strong>  <?php echo $error ; ?>
                </div>
                <?php
              }
              ?>
              <?php  if($data == NULL){   ?>

                <h4>No Categories</h4>

              <?php }else{ ?>
                <table class="table table-hover" id='tb1'>
                  <thead>





                    <tr>

                      <?php foreach($data[0] as $key => $value){

                        if($key=='category'){}else{

                          ?>
                          <td>

                            <?php

                            $cleanname = explode("_", $key);
                            foreach ($cleanname as $r) {
                              echo ucfirst($r)." ";
                            }?>

                          </td>
                        <?php  } }?>
                        <td>
                          Operations
                        </td>
                      </tr>


                    </thead>
                    <tbody>
                      <?php foreach($data as $v ){ ?>
                        <tr>

                          <?php foreach($v as $key => $value) {

                            if($key=='photo'){


                              echo '<td><button type="button" class="btn btn-round btn-danger" data-toggle="modal" data-target="#myModal'.$v['id'].'"> change  Photo</button></td>';
                              ?>
                            <?php   }elseif($key=='category'){}else{ ?>

                              <td><?php echo $value;?></td>
                            <?php }}  ?>
                            <td>
                              <a href="">Edit</a> /
                              <a onclick="return confirm('Are you sure you want to delete?')" href="">Delete</a></td>





                            </tr>
                            <!-- modal start -->



                            <!-- modal end -->

                          <?php  }?>
                        </tbody>
                      </table>
                    <?php }?>
                  </div>
                </section>

              </section>
            </div>






          </div>

        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
