<!-- Content Header (Page header) -->
<section class="content-header">
<div class="col-md-6">
            <div class="pull float-left">
                 <ol class="breadcrumb float-left">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url(''); ?>"> Dashboard </a>
                    </li>
                     <li class="breadcrumb-item">
                        <a href="<?php echo base_url('allottee/manage_forms'); ?>">Manage Forms </a>
                    </li>
                    <li class="breadcrumb-item active">Add Form</li>
                </ol>
            </div>
        </div> 
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
                <h3 class="card-title">Allottee Registration Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php   

              $formAttr = array('id'=> 'userForm', 'class'=>'');
              echo form_open_multipart('allottee/register_allottee', $formAttr);

              ?>
                <div class="card-body">
                  <div class=" form-group row">
                    <div class="col-1">
                    <?php   echo form_label('Form Number:');  ?>
                    <?php  

                    $data = array('name'=>'form_number','id'=>'form_number', 'class'=>'form-control','type'=>'number');

                    echo form_input($data);

                    ?>
                    </div>

                   <!--  -->
                    <div class="col">
                    <?php   echo form_label(' Name:');  ?>
                    <?php  

                    $data = array('name'=>'name','id'=>'name', 'class'=>'form-control','type'=>'text');

                    echo form_input($data);

                    ?>
                    </div>

                    <div class="col">
                     <?php  echo form_label('Father Name:');  ?> 
                     <?php  

                     $data = array('name'=>'father_name','id'=>'father_name', 'class'=>'form-control','type'=>'text');

                     echo form_input($data);

                      ?>
                    </div>
                  </div>
                  <div class="form-group row">
                     <div class="col-12">
                      <?php   echo form_label(' Address:');  ?>
                      <?php  

                      $data = array('name'=>'address','id'=>'address', 'class'=>'form-control','type'=>'text');

                      echo form_input($data);

                      ?>
                    </div>
                  </div>
                  <div class=" form-group row">
                     <div class="col">
                     <?php  echo form_label('Number:');  ?> 
                     <?php  

                     $data = array('name'=>'number','id'=>'number', 'class'=>'form-control','type'=>'number');

                     echo form_input($data);

                      ?>
                    </div>
                   
                    <div class="col">
                     <?php  echo form_label('city:');  ?> 
                     <?php  

                     $data = array('name'=>'city','id'=>'city', 'class'=>'form-control','type'=>'text');

                     echo form_input($data);

                      ?>
                    </div>
                    <div class="col">
                     <?php  echo form_label('province:');  ?> 
                     <?php  

                     $data = array('name'=>'province','id'=>'province', 'class'=>'form-control','type'=>'text');

                     echo form_input($data);

                      ?>
                    </div>
                    <div class="col">
                     <?php  echo form_label('Nic:');  ?> 
                     <?php  

                     $data = array('name'=>'nic','id'=>'nic', 'class'=>'form-control','type'=>'number');

                     echo form_input($data);

                      ?>
                    </div>
                   
                  </div>
                <div class=" form-group row">
                    <div class="col">

                    <?php   echo form_label('Phase:');  ?>
                    <?php  
                      $data = array('class'=>'form-control','id'=>'phase');
                      $options[0] = 'Please Select a option';
                      foreach ($phases as $row) {
                        $options[$row->id]  = $row->title;
                      }

                    echo form_dropdown('phase',$options,'',$data);

                    ?>
                    </div>

                    <div class="col">

                    <?php   echo form_label('plot:');  ?>
                    <?php  
                      $data = array('class'=>'form-control','id'=>'plots');
                      $plot_options[0] = 'Please Select a option';
                      

                    echo form_dropdown('plot',$plot_options,'',$data);

                    ?>
                    </div>


                    <div class="col">
                    <?php   echo form_label('Type of Industry:');  ?>
                    <?php  

                    $data = array('name'=>'type_of_industry','id'=>'type_of_industry', 'class'=>'form-control','type'=>'text');

                    echo form_input($data);

                    ?>
                    </div>

                    <div class="col">
                     <?php  echo form_label('Area in Acres:');  ?> 
                     <?php  

                     $data = array('name'=>'area_in_acres','id'=>'area_in_acres', 'class'=>'form-control','type'=>'number');

                     echo form_input($data);

                      ?>
                    </div>
                    <div class="col">
                    <?php   echo form_label('Due Date of 1st Installment:');  ?>
                    <?php  

                    $data = array('name'=>'due_date_first_installment','id'=>'due_date_first_installment', 'class'=>'form-control datepicker','type'=>'text');

                    echo form_input($data);

                    ?>
                    </div>

                  
                </div>
                  <div class=" form-group row">
                    <div class="col">
                    <?php   echo form_label('Total Amount of plot:');  ?>
                    <?php  

                    $data = array('name'=>'total_amount_of_plot','id'=>'total_amount_of_plot', 'class'=>'form-control','type'=>'number');

                    echo form_input($data);

                    ?>
                    </div>

                    <div class="col">
                     <?php  echo form_label('Form Processing Fee:');  ?> 
                     <?php  

                     $data = array('name'=>'form_fee','id'=>'form_fee', 'class'=>'form-control','type'=>'number');

                     echo form_input($data);

                      ?>
                    </div>
                    <div class="col">
                    <?php   echo form_label('Date of Submission');  ?>
                    <?php  

                    $data = array('name'=>'form_submission_date','id'=>'form_submission_date', 'class'=>'form-control datepicker','type'=>'text');

                    echo form_input($data);

                    ?>
                    </div>

                    <div class="col">
                     <?php  echo form_label('Remarks:');  ?> 
                     <?php  

                     $data = array('name'=>'remarks','id'=>'remarks', 'class'=>'form-control','type'=>'text');

                     echo form_input($data);

                      ?>
                    </div>
                </div>
              
                 



                  <!--  -->
            
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                  <!-- <button type="submit" class="btn btn-info">Sign in</button> -->
                  <!-- <button type="submit" class="btn btn-info float-right">Cancel</button> -->
                  <?php   
                  $data= array('class' =>'btn btn-info float-right', 'name'=>'btn_add_user' ,'value' => 'Register');
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