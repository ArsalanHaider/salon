<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <!-- <h1>General Form</h1> -->
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Add User</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- form start -->
         <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php   

              $formAttr = array('id'=> 'userForm', 'class'=>'');
              echo form_open_multipart('phase/add_phase_data', $formAttr);

              ?>
                <div class="card-body">
                  <div class=" form-group row">
                    <div class="col">
                    <?php   echo form_label(' Title:');  ?>
                    <?php  

                    $data = array('name'=>'title','id'=>'title', 'class'=>'form-control','type'=>'text');

                    echo form_input($data);

                    ?>
                    </div>

                  
                  </div>
                  <div class=" form-group row">
                    <div class="col">
                    <?php  
                    echo form_label('Description');

                    $data = array('name'=>'description','id'=>'description', 'class'=>'form-control','type'=>'text');

                    echo form_input($data);

                    ?>
                    </div>

                 
                  </div>
                  <div class=" form-group row">
                    <div class="col">
                    <?php  
                    echo form_label('Start Date');

                    $data = array('name'=>'start_date','id'=>'start_date', 'class'=>'datepicker form-control','type'=>'text');

                    echo form_input($data);

                    ?>
                    </div>

                    <div class="col">
                    <?php  
                    echo form_label('End Date');

                    $data = array('name'=>'end_date','id'=>'end_date', 'class'=>'datepicker form-control','type'=>'text');

                    echo form_input($data);

                    ?>
                    </div>
                  </div>
              
                 
               




                  <!--  -->
                  <div class="form-group">
                      <label>Upload item image:</label>
                          <div class="input-group">
                              <input type="file" name="phase_picture" data-validate="required" class="form-control input-lg" data-message-required="Value Required" >
                          </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <!-- <button type="submit" class="btn btn-info">Sign in</button> -->
                  <!-- <button type="submit" class="btn btn-info float-right">Cancel</button> -->
                  <?php   
                  $data= array('class' =>'btn btn-info float-right', 'name'=>'btn_add_user' ,'value' => 'Add Phase');
                  echo form_submit($data);
                  ?>
                </div>
                <!-- /.card-footer -->
              <?php echo form_close(); ?>
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
            
            <!-- /.card -->
          </div>
    </div>
  </div>
</section>
