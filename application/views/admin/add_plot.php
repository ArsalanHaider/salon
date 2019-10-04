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
          <li class="breadcrumb-item active">Add Plot</li>
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
                <h3 class="card-title">Add Plot</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php   

              $formAttr = array('id'=> 'userForm', 'class'=>'');
              echo form_open_multipart('plot/add_plot', $formAttr);

              ?>
                <div class="card-body">
                  <div class=" form-group row">
                    <div class="col">

                    <?php   echo form_label('Phase:');  ?>
                    <?php  
                      $data = array('class'=>'form-control');
                      $options[0] = 'Please Select a option';
                      foreach ($phases as $row) {
                        $options[$row->id]  = $row->title;
                      }

                    echo form_dropdown('phase',$options,'',$data);

                    ?>
                    </div>

                  
                  </div>
                  <div class=" form-group row">
                    <div class="col-sm-8">
                    <?php  
                    echo form_label('Title');

                    $data = array('name'=>'title','id'=>'title', 'class'=>'form-control','type'=>'text');

                    echo form_input($data);

                    ?>
                    </div>
                    <div class="col-sm-2">
                    <?php  
                    echo form_label('Plot Type');

                    $data = array('name'=>'plot_type','id'=>'plot_type', 'class'=>'form-control','type'=>'text');

                    echo form_input($data);

                    ?>
                    </div>
                    <div class="col-sm-2">
                    <?php  
                    echo form_label('Size');

                    $data = array('name'=>'size','id'=>'size', 'class'=>'form-control','type'=>'text');

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
                    echo form_label('Total Price');

                    $data = array('name'=>'total_price','id'=>'total_price', 'class'=>'form-control','type'=>'number');

                    echo form_input($data);

                    ?>
                    </div>

                    <div class="col">
                    <?php  
                    echo form_label('Total Installments');

                    $data = array('name'=>'total_installments','id'=>'total_installments', 'class'=>'form-control','type'=>'number');

                    echo form_input($data);

                    ?>
                    </div>
                    <div class="col">
                    <?php  
                    echo form_label('Installment Amount');

                    $data = array('name'=>'per_installment','id'=>'per_installment', 'class'=>'form-control','type'=>'number');

                    echo form_input($data);

                    ?>
                    </div>
                    <div class="col">
                    <?php  
                    echo form_label('Down Payment');

                    $data = array('name'=>'down_payment','id'=>'end_date', 'class'=>'form-control','type'=>'number');

                    echo form_input($data);

                    ?>
                    </div>
                  </div>
              
                 
               




            
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <!-- <button type="submit" class="btn btn-info">Sign in</button> -->
                  <!-- <button type="submit" class="btn btn-info float-right">Cancel</button> -->
                  <?php   
                  $data= array('class' =>'btn btn-info float-right', 'name'=>'btn_add_user' ,'value' => 'Add Plot');
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
