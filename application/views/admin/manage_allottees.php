<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row">
        <div class="col-md-6">
            <div class="pull float-left">
                 <ol class="breadcrumb float-left">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url(''); ?>"><i class="fa fa-dashboard"></i> Dashboard </a>
                    </li>
                    <li class="breadcrumb-item active">Allottees</li>
                </ol>
            </div>
        </div> 
        <div class="col-md-6">
            <div class="pull float-right">
                <a href="<?php echo base_url('allottee/add_allottees_form'); ?>" class="btn btn-info btn-flat"><i class="fa fa-plus-square" aria-hidden="true"></i>
                    <?php echo "Add Allottee  "; ?>
                </a>
                    <a class="btn  btn-success filter-btn" filter-slide="false">
                        More Filters<i class="fas fa-filter"></i>
                        </a>
                <button onclick="printDiv('print-section')" class="btn btn-default btn-flat pull-right "><i class="fa fa-print pull-left"></i> Print Report</button>
            </div>
        </div>
    </div>
</section>
   <!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">
       <div class="card">
            <div class="card-header">
              <h3 class="card-title">Allottees</h3>
        

            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <?php
                    //$attributes = array('id'=>'Sales_form','method'=>'post','class'=>'');
                ?>
                <?php //echo form_open('expense/',$attributes); ?>
                <div class="row no-print">
                
                    <div id="filterInputs" class="col-sm-12">
                      <div class="col-md-3 ">
                          <div class="form-group">
                          
                              <div class="col-sm-11">
                                  <?php 
                                      $data = array('class'=>'form-control','id'=>'form_number','type'=>'number','name'=>'form_number','placeholder' => 'Form Number');
                                      echo form_input($data); 
                                  ?>
                              </div>   
                          </div>
                      </div> 
                      <div class="col-md-3">
                          <div class="form-group">
                             
                              <div class="col-sm-11">
                                  <?php 
                                       $data1 = array('class'=>'form-control','type'=>'number','name'=>'pds_number', 'id'=>'pds_number','placeholder' => 'Pds Number');
                                      echo form_input($data1);
                                  ?>
                              </div>   
                          </div>
                      </div>

                      <div class="col-md-3">
                          <div class="form-group">
                             
                              <div class="col-sm-11">
                                  <?php 
                                       $data1 = array('class'=>'form-control','type'=>'text','name'=>'name' ,'id'=>'name','placeholder' => 'Name');
                                      echo form_input($data1);
                                  ?>
                              </div>   
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="form-group">
                             
                              <div class="col-sm-11">
                                  <?php 
                                       $data1 = array('class'=>'form-control','type'=>'text','name'=>'father_name','id'=>'father_name','placeholder' => 'Father Number');
                                      echo form_input($data1);
                                  ?>
                              </div>   
                          </div>
                      </div>
    
                    </div>
                    <div class="col-md-3">

                        <div class="form-group">
                            <?php
                                // $data = array('class'=>'btn btn-info','type' => 'submit','name'=>'btnSubmit','value'=>'true', 'content' => '<i class="fa fa-search" aria-hidden="true"></i> Search expense');
                                // echo form_button($data);
                        
                              
                            ?>
                        
                          <button class="btn btn-success btn-lg" id="search">Search</button>
                        </div>
                    </div>
                   
                </div>
             <?php //echo form_close(); ?> 

              <table id="allottees" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
              
                <thead>
                    <tr>
                      <!-- <th></th> -->
                      <?php 
                       foreach ($table_headings_allottees as $heading) {
                        echo "<th>".$heading."</th>";
                        } 
                      ?>
                    </tr>
                </thead>
              </table>

            </div>
            <?php 
   if($this->session->flashdata('true')){
 ?>
   <div class="alert alert-success alert-dismissible fade show"> 
     <?php  echo $this->session->flashdata('true'); ?>
     <button type="button" class="close" data-dismiss="alert">&times;</button>
<?php    
} else if($this->session->flashdata('err')){
?>
 <div class = "alert alert-danger alert-dismissible fade show">
   <?php echo $this->session->flashdata('err'); ?>
   <button type="button" class="close" data-dismiss="alert">&times;</button>
 </div>
<?php } ?>
            <!-- /.card-body -->
          </div>
    </div>
  </div>

