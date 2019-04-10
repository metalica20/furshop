<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    <!-- page start-->

    <div class="row">
        <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <?php echo $this->lang->line('featured_datasets'); ?>
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                          <h5><i class="fa fa-info-circle"></i> Note: Select a Layer File to Upload to Table</h5><br>
                            <form role="form" method="POST" action="" enctype="multipart/form-data">

                              <?php
                                $error=	$this->session->flashdata('msg');
                                 if($error){ ?>
                                   <div class="alert alert-info alert-dismissible">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Message!!!!</strong> <?php echo $error ; ?>
                                        </div>
                                 <?php
                                 }
                                  ?>

                                  <div class="form-group">
                                      <label for="exampleInputFile">Data Table</label>
                                    <select name="category">
                                         <?php foreach($data as $d){ ?>
                                      <option value="<?php echo $d['name'] ?>"><?php echo $d['name']?></option>

                                    <?php } ?>
                                    </select>
                                      </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Item Name</label>
                                    <input type="text" name="item_name" class="form-control" value="<?php echo $item_data['item_name'] ?>" id="exampleInputEmail1"  required>
                                    <!-- <input type="hidden" name="default" value="1" class="form-control" id="exampleInputEmail1"> -->
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Item Price</label>
                                    <input type="text" name="item_price" value="<?php echo $item_data['item_price'] ?>" class="form-control" id="exampleInputEmail1"  required>
                                    <!-- <input type="hidden" name="default" value="1" class="form-control" id="exampleInputEmail1"> -->
                                  </div>



                                  <div class="form-group">
                                    <label class="col-sm-3 control-label col-sm-2">Item Summary</label>
                                    <div class="col-sm-10">
                                      <textarea class="form-control" name="item_summary" rows="5" required><?php echo $item_data['item_summary'] ?></textarea>
                                    </div>
                                  </div>

                                  <div class="form-group ">
                                    <label class="control-label col-md-3">First Picture</label>
                                    <div class="col-md-9">
                                      <br>
                                      <div class="col-md-6">

                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                          <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="<?php echo $item_data['photo'] ?>" alt="" />
                                          </div>
                                          <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                          <div>
                                            <span class="btn btn-white btn-file">
                                              <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select</span>
                                              <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                              <input type="file" name="photo[]" class="default" />
                                            </span>


                                          </div>
                                        </div>
                                      </div>
                                      </div>
                                      </div>

                                      <div class="form-group ">
                                        <label class="control-label col-md-3">Second Picture</label>
                                        <div class="col-md-9">
                                          <br>
                                          <div class="col-md-6">

                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                              <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="<?php echo $item_data['photo1'] ?>" alt="" />
                                              </div>
                                              <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                              <div>
                                                <span class="btn btn-white btn-file">
                                                  <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select</span>
                                                  <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                  <input type="file" name="photo[]" class="default" />
                                                </span>


                                              </div>
                                            </div>
                                          </div>
                                          </div>
                                          </div>

                                          <div class="form-group ">
                                            <label class="control-label col-md-3">Third Picture</label>
                                            <div class="col-md-9">
                                              <br>
                                              <div class="col-md-6">

                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img src="<?php echo $item_data['photo2'] ?>" alt="" />
                                                  </div>
                                                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                  <div>
                                                    <span class="btn btn-white btn-file">
                                                      <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select</span>
                                                      <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                      <input type="file" name="photo[]" class="default" />
                                                    </span>


                                                  </div>
                                                </div>
                                              </div>
                                              </div>
                                              </div>





                            <button type="submit" name="submit" class="btn btn-info">Upload</button>
                        </form>
                        </div>

                    </div>
                </section>

        </div>

        </div>

    <!-- page end-->
    </section>
</section>
<!--main content end-->
