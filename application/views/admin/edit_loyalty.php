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
          <li class="breadcrumb-item active">Update Loyalty Points</li>
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
                <h3 class="card-title">Update Loyalty Points</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php   

              $formAttr = array('id'=> 'userForm', 'class'=>'');
              echo form_open_multipart('loyalty/update', $formAttr);

              ?>
                <div class="card-body">
                  <div class=" form-group row">
                    <div class="col">
                    <?php   echo form_label(' Total Points:');  ?>
                    <?php  

                    $data = array('name'=>'total_points','id'=>'total_points', 'class'=>'form-control','type'=>'text','value'=>$loyalty[0]->total_points);

                    echo form_input($data);

                    $data = array('name'=>'edit_id','type'=>'hidden','value'=>$loyalty[0]->id);

                    echo form_input($data);
                    
                    ?>
                    </div>

                  
                  </div>
                  
                <!-- /.card-body -->
                <div class="card-footer">
                  <!-- <button type="submit" class="btn btn-info">Sign in</button> -->
                  <!-- <button type="submit" class="btn btn-info float-right">Cancel</button> -->
                  <?php   
                  $data= array('class' =>'btn btn-info float-right', 'name'=>'btn_add_user' ,'value' => 'Update Points');
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
