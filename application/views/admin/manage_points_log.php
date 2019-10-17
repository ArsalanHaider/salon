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
          <li class="breadcrumb-item"><a href="<?php echo base_url('loyalty'); ?>">Loyalty Program</a></li>
        
          <li class="breadcrumb-item active">Points Log</li>
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
                <h3 class="card-title">Points Log</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form id="frm_table" method="POST" class="form-inline" >
<input type="hidden" value="pointsViewLogs" name="action" id="action" />
<table id="table_list" class="table table-hover">
<thead>
  <tr>    
    <th width="10%">Date</th>   
    <th width="13%">Customer Name</th>
    <th width="13%">Transaction</th>
    <th width="10%">Total Points</th>        
    <th width="10%">Redeemed Points</th>    
  </tr>
</thead>
<tbody> 
<tr>    
    <td width="10%">12-Oct-2019</td>   
    <td width="13%">Ghuffran Rehman</td>
    <td width="13%">Points gained by buying item Order ID: 3050</td>
    <td width="10%">500</td>        
    <td width="10%">300</td>    
  </tr>
  <tr>    
    <td width="10%">13-Oct-2019</td>   
    <td width="13%">Ghuffran Rehman</td>
    <td width="13%">Points gained by signing up</td>
    <td width="10%">600</td>        
    <td width="10%">100</td>    
  </tr>
</tbody>
</table>

</form>
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
            
            <!-- /.card -->
          </div>
    </div>
  </div>
</section>
