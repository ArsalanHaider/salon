<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <!-- <h1>General Form</h1> -->
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="<?php echo base_url(''); ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?php echo base_url('user'); ?>">Manage User</a></li>
        
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
              echo form_open_multipart('user/add_user', $formAttr);

              ?>
                <div class="card-body">
                  <div class=" form-group row">
                    <div class="col">
                    <?php   echo form_label(' Name:');  ?>
                    <?php  

                    $data = array('name'=>'name','id'=>'name', 'class'=>'form-control','type'=>'text');

                    echo form_input($data);

                    ?>
                    </div>

                  
                  </div>
                  <div class=" form-group row">
                    <div class="col">
                    <?php  
                    echo form_label('Email');

                    $data = array('name'=>'email','id'=>'email', 'class'=>'form-control','type'=>'email');

                    echo form_input($data);

                    ?>
                    </div>

                    <div class="col">
                    <?php  
                    echo form_label('Password');

                    $data = array('name'=>'password','id'=>'password', 'class'=>'form-control','type'=>'password');

                    echo form_input($data);

                    ?>
                    </div>
                  </div>
                  <!-- radio -->
                  <div class="form-group clearfix">
                    <?php   echo form_label('Role:'); ?>
                    <label class="radio-container d-inline">
                      <input type="radio" name="role"  value="admin"> <span class="checkmark"></span>
                      Admin
                    </label>
                    <div class="d-inline">
                       <label class="radio-container d-inline">
                      <input type="radio" name="role"  value="data entry"> <span class="checkmark"></span>
                      Data Entry
                    </label>
                    </div>
                   <div class="d-inline">
                       <label class="radio-container d-inline">
                      <input type="radio" name="role"  value="accounts"> <span class="checkmark"></span>
                      Accounts
                    </label>
                    </div>
                   <div class="d-inline">
                       <label class="radio-container d-inline">
                      <input type="radio" name="role"  value="gm"> <span class="checkmark"></span>
                      GM
                    </label>
                    </div>
                  </div>
                  <!-- select -->
              
                 
               




                  <!--  -->
                  <div class="form-group">
                      <label>Upload item image:</label>
                          <div class="input-group">
                              <input type="file" name="user_picture" data-validate="required" class="form-control input-lg" data-message-required="Value Required" >
                          </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <!-- <button type="submit" class="btn btn-info">Sign in</button> -->
                  <!-- <button type="submit" class="btn btn-info float-right">Cancel</button> -->
                  <?php   
                  $data= array('class' =>'btn btn-info float-right', 'name'=>'btn_add_user' ,'value' => 'Add User');
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
