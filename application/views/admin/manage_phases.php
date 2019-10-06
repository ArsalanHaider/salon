<section class="content-header">
    <div class="row">
        <div class="col-md-6">
            <div class="pull float-left">
                 <ol class="breadcrumb float-left">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url(''); ?>"><i class="fa fa-dashboard"></i> Dashboard </a>
                    </li>
                    <li class="breadcrumb-item active">Phases</li>
                </ol>
            </div>
        </div> 
        <div class="col-md-6">
            <div class="pull float-right">
                <a href="<?php echo base_url('phase/add_phase'); ?>" class="btn btn-info btn-flat"><i class="fa fa-plus-square" aria-hidden="true"></i>
                    <?php echo "Add Phases  "; ?>
                </a>
                <button onclick="printDiv('print-section')" class="btn btn-default btn-flat pull-right "><i class="fa fa-print pull-left"></i> Print / Pdf</button>

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
              <h3 class="card-title">Phase</h3>
        

            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <?php
                    //$attributes = array('id'=>'Sales_form','method'=>'post','class'=>'');
                ?>
                <?php //echo form_open('expense/',$attributes); ?>
              
             <?php //echo form_close(); ?> 

              <table id="users" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
              
                <thead>
                    <tr>
                      <!-- <th></th> -->
                      <?php 
                       foreach ($table_headings_phases as $heading) {
                        echo "<th>".$heading."</th>";
                        } 
                      ?>
                    </tr>
                </thead>
              </table>
            </div>
            <!-- /.card-body -->
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
          </div>
    </div>
  </div>

