<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row">
        <div class="col-md-6">
            <div class="pull float-left">
                 <ol class="breadcrumb float-left">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url('homepage'); ?>"> Dashboard </a>
                    </li>
                     <li class="breadcrumb-item">
                        <a href="<?php echo base_url('allottee'); ?>">allottees </a>
                    </li>
                    <li class="breadcrumb-item active">Add Allottee</li>
                </ol>
            </div>
        </div> 
        <div class="col-md-6">
            <div class="pull float-right">
                <a href="<?php echo base_url('allottee/add_allottees_form'); ?>" class="btn btn-info btn-flat"><i class="fa fa-plus-square" aria-hidden="true"></i>
                    <?php echo "Add Allottee  "; ?>
                </a>
                <button onclick="printDiv('print-section')" class="btn btn-default btn-flat pull-right "><i class="fa fa-print pull-left"></i> Print / Pdf</button>
            </div>
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
                <h3 class="card-title">Edit Allottees</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php   

              $formAttr = array('id'=> 'userForm', 'class'=>'');
              echo form_open_multipart('allottee/update_allottee', $formAttr);

              ?>
                <div class="card-body">
                  <div class=" form-group row">
                    <div class="col-1">
                    <?php   echo form_label('Form Number:');  ?>
                    <?php  

                    $data = array('name'=>'form_number','id'=>'form_number', 'class'=>'form-control','type'=>'number', 'value'=>$allottee[0]->form_number);

                    echo form_input($data);
                    $data = array('name'=>'edit_id','type'=>'hidden', 'value'=>$allottee[0]->id);

                    echo form_input($data);
                    ?>
                    </div>

                    <div class="col-2">
                     <?php  echo form_label('Pds Number:');  ?> 
                     <?php  

                     $data = array('name'=>'pds_number','id'=>'pds_number', 'class'=>'form-control','type'=>'number','value'=>$allottee[0]->pds_number);

                     echo form_input($data);

                      ?>
                    </div>
                    <div class="col">
                    <?php   echo form_label(' Name:');  ?>
                    <?php  

                    $data = array('name'=>'name','id'=>'name', 'class'=>'form-control','type'=>'text','value'=>$allottee[0]->name);

                    echo form_input($data);

                    ?>
                    </div>

                    <div class="col">
                     <?php  echo form_label('Father Name:');  ?> 
                     <?php  

                     $data = array('name'=>'father_name','id'=>'father_name', 'class'=>'form-control','type'=>'text','value'=>$allottee[0]->father_name);

                     echo form_input($data);

                      ?>
                    </div>
                  </div>
                  <div class=" form-group row">
                    <div class="col-6">
                    <?php   echo form_label(' Address:');  ?>
                    <?php  

                    $data = array('name'=>'address','id'=>'address', 'class'=>'form-control','type'=>'text','value'=>$allottee[0]->address);

                    echo form_input($data);

                    ?>
                    </div>
                    <div class="col">
                     <?php  echo form_label('city:');  ?> 
                     <?php  

                     $data = array('name'=>'city','id'=>'city', 'class'=>'form-control','type'=>'text','value'=>$allottee[0]->city);

                     echo form_input($data);

                      ?>
                    </div>
                    <div class="col">
                     <?php  echo form_label('province:');  ?> 
                     <?php  

                     $data = array('name'=>'province','id'=>'province', 'class'=>'form-control','type'=>'text','value'=>$allottee[0]->province);

                     echo form_input($data);

                      ?>
                    </div>
                    <div class="col">
                     <?php  echo form_label('Nic:');  ?> 
                     <?php  

                     $data = array('name'=>'nic','id'=>'nic', 'class'=>'form-control','type'=>'number','value'=>$allottee[0]->number);

                     echo form_input($data);

                      ?>
                    </div>
                   
                  </div>
                <div class=" form-group row">
                    <div class="col">
                    <?php   echo form_label('Type of Industry:');  ?>
                    <?php  

                    $data = array('name'=>'type_of_industry','id'=>'type_of_industry', 'class'=>'form-control','type'=>'text','value'=>$allottee[0]->type_of_industry);

                    echo form_input($data);

                    ?>
                    </div>

                    <div class="col">
                     <?php  echo form_label('Area in Acres:');  ?> 
                     <?php  

                     $data = array('name'=>'area_in_acres','id'=>'area_in_acres', 'class'=>'form-control','type'=>'number','value'=>$allottee[0]->area_in_acres);

                     echo form_input($data);

                      ?>
                    </div>
                    <div class="col">
                    <?php   echo form_label('Due Date of 1st Installment:');  ?>
                    <?php  

                    $data = array('name'=>'due_date_first_installment','id'=>'due_date_first_installment', 'class'=>'form-control datepicker','type'=>'text','value'=>$allottee[0]->due_date_first_installment);

                    echo form_input($data);

                    ?>
                    </div>

                    <div class="col">
                     <?php  echo form_label('Number of Installments paid:');  ?> 
                     <?php  

                     $data = array('name'=>'installments_paid','id'=>'installments_paid', 'class'=>'form-control','type'=>'number','value'=>$allottee[0]->installments_paid);

                     echo form_input($data);

                      ?>
                    </div>
                </div>
                  <div class=" form-group row">
                    <div class="col">
                    <?php   echo form_label('Total Amount of plot:');  ?>
                    <?php  

                    $data = array('name'=>'total_amount_of_plot','id'=>'total_amount_of_plot', 'class'=>'form-control','type'=>'number','value'=>$allottee[0]->total_amount_of_plot);

                    echo form_input($data);

                    ?>
                    </div>

                    <div class="col">
                     <?php  echo form_label('Amount Paid:');  ?> 
                     <?php  

                     $data = array('name'=>'amount_paid','id'=>'amount_paid', 'class'=>'form-control','type'=>'number','value'=>$allottee[0]->amount_paid);

                     echo form_input($data);

                      ?>
                    </div>
                    <div class="col">
                    <?php   echo form_label('Amount Due:');  ?>
                    <?php  

                    $data = array('name'=>'amount_due','id'=>'amount_due', 'class'=>'form-control datepicker','type'=>'number','value'=>$allottee[0]->amount_due);

                    echo form_input($data);

                    ?>
                    </div>

                    <div class="col">
                     <?php  echo form_label('Remarks:');  ?> 
                     <?php  

                     $data = array('name'=>'remarks','id'=>'remarks', 'class'=>'form-control','type'=>'text','value'=>$allottee[0]->remarks);

                     echo form_input($data);

                      ?>
                    </div>
                </div>
                  <div class=" form-group row">
                    <div class="col">
                    <?php   echo form_label('Date of Issuance of Notice:');  ?>
                    <?php  

                    $data = array('name'=>'date_of_issuance_of_notice','id'=>'date_of_issuance_of_notice', 'class'=>'form-control datepicker','type'=>'text','value'=>$allottee[0]->date_of_issuance_of_notice);

                    echo form_input($data);

                    ?>
                    </div>

                    <div class="col">
                     <?php  echo form_label('Recovery Amount:');  ?> 
                     <?php  

                     $data = array('name'=>'recovery_amount','id'=>'recovery_amount', 'class'=>'form-control','type'=>'number','value'=>$allottee[0]->recovery_amount);

                     echo form_input($data);

                      ?>
                    </div>
                    <div class="col">
                    <?php   echo form_label('Recovery Date:');  ?>
                    <?php  

                    $data = array('name'=>'recovery_date','id'=>'recovery_date', 'class'=>'form-control datepicker','type'=>'text','value'=>$allottee[0]->recovery_date);

                    echo form_input($data);

                    ?>
                    </div>

                    <div class="col">
                     <?php  echo form_label('Remarks:');  ?> 
                     <?php  

                     $data = array('name'=>'recovery_remarks','id'=>'recovery_remarks', 'class'=>'form-control','type'=>'text','value'=>$allottee[0]->recovery_remarks);

                     echo form_input($data);

                      ?>
                    </div>
                </div>
                 



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
                  $data= array('class' =>'btn btn-info float-right', 'name'=>'btn_add_user' ,'value' => 'Update Allottee');
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