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
          <li class="breadcrumb-item"><a href="<?php echo base_url('loyalty'); ?>">Loyalty Reward Program</a></li>
        
          <li class="breadcrumb-item active">Settings</li>
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
                <h3 class="card-title">Loyalty Reward Program Settings</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                 
<form class="form-horizontal" action="/kmrs/pointsprogram/index/settings" method="post">
<input type="hidden" value="8dfca9777c6a32d82649ba4d23b18e8513d12313" name="YII_CSRF_TOKEN" /> 

<div class="form-group">
  <label class="col-sm-3 control-label">Enabled Points System</label>
  <div class="col-sm-8">
  <input class="" value="1" checked="checked" type="checkbox" name="points_enabled" id="points_enabled" />  </div>
</div>




<div class="form-group ">
  <label class="col-sm-3 control-label">Earn points by order status</label>
  <div class="col-sm-8">
    <select class="chosen" multiple="multiple" style="width:400px;" name="pts_earn_points_status[]" id="pts_earn_points_status">

<option value="cancelled">Cancelled</option>
<option value="paid" selected="selected">Paid</option>
<option value="rejected">Rejected</option>
</select>  </div>
</div>




<div class="form-group">
  <label class="col-sm-3 control-label">Maximum Earning Points for customer</label>
  <div class="col-sm-8">
    <input class="numeric_only amount_value form-control" type="text" value="10000" name="pts_maximum_points" id="pts_maximum_points" />    
  </div>
</div>



<hr/>

<h4>Earning Points Settings</h4>

<div class="form-group">
  <label class="col-sm-3 control-label">Based points earnings</label>
  <div class="col-sm-8">
   <select class="form-control" style="width:300px;" name="points_based_earn" id="points_based_earn">
<option value="1" selected="selected">Per item (default)</option>
<option value="2">Order Sub total</option>
</select>  </div>  
</div>


<div class="form-group ">
  <label class="col-sm-3 control-label">Earning Point</label>
  <div class="col-sm-8">
    <input class="numeric_only amount_value form-control" type="text" value="1" name="pts_earning_points" id="pts_earning_points" />  </div>
</div>

<div class="form-group ">
  <label class="col-sm-3 control-label">Earning Point Value in &#36;</label>
  <div class="col-sm-8">
    <input class="numeric_only amount_value form-control" type="text" value="1" name="pts_earning_points_value" id="pts_earning_points_value" />  </div>
</div>

<div class="form-group ">
  <label class="col-sm-3 control-label">Earn points above order</label>
  <div class="col-sm-8">
    <input class="numeric_only amount_value form-control" type="text" value="2" name="pts_earn_above_amount" id="pts_earn_above_amount" />  </div>
</div>

<hr/>

<h4>Redeeming Points Settings</h4>


<div class="form-group">
  <label class="col-sm-3 control-labe">Customer can redeeming with the following conditions</label>
  <div class="col-sm-8">
  <select class="form-control" style="width:300px;" name="pts_redeem_condition" id="pts_redeem_condition">
<option value="2">Can redeem with all points they earn in all merchant</option>
<option value="1" selected="selected">Can redeem only to merchant they earn points</option>
<option value="3">Can redeem only to merchant they earn points + global points</option>
</select>  </div>  
</div>  

<div class="form-group ">
  <label class="col-sm-3 control-label">Redeeming Point</label>
  <div class="col-sm-8">
    <input class="numeric_only amount_value form-control" type="text" value="1" name="pts_redeeming_point" id="pts_redeeming_point" />  </div>
</div>

<div class="form-group">
  <label class="col-sm-3 control-label">Redeeming Point Value in Rs</label>
  <div class="col-sm-8">
    <input class="numeric_only amount_value form-control" type="text" value="1" name="pts_redeeming_point_value" id="pts_redeeming_point_value" />  </div>
</div>


<!--<div class="form-group">
  <label class="col-sm-3 control-label">Redeem points above order</label>
  <div class="col-sm-8">
    <input class="numeric_only amount_value form-control" type="text" value="" name="pts_redeem_above_amount" id="pts_redeem_above_amount" />  </div>
</div>-->
    
    <div class="form-group ">
  <label class="col-sm-3 control-label">Redeem points above order</label>
  <div class="col-sm-8">
  <input class="numeric_only amount_value form-control" type="text" value="10" name="points_apply_order_amt" id="points_apply_order_amt" />  </div>
</div>

<div class="form-group ">
  <label class="col-sm-3 control-label">Minimum points can be used</label>
  <div class="col-sm-8">
  <input class="numeric_only amount_value form-control" type="text" value="2" name="points_minimum" id="points_minimum" />  </div>
</div>

<div class="form-group ">
  <label class="col-sm-3 control-label">Maximum points can be used</label>
  <div class="col-sm-8">
  <input class="numeric_only amount_value form-control" type="text" value="100" name="points_max" id="points_max" />  </div>
</div>

<div class="form-group">
  <label class="col-sm-3 control-label">Disabled Redeeming</label>
  <div class="col-sm-8">
  <input class="" value="1" type="checkbox" name="pts_disabled_redeem" id="pts_disabled_redeem" />  </div>
</div>

<div class="form-group">
  <label class="col-sm-3 control-label">Don't show redeem if points balance is zero</label>
  <div class="col-sm-8">
  <input class="" value="1" type="checkbox" name="pts_redeem_balance_zero" id="pts_redeem_balance_zero" />  </div>
</div>

<div class="form-group">
  <label class="col-sm-3 control-label">Enabled customer can apply voucher even they have point discount</label>
  <div class="col-sm-8">
  <input class="" value="1" checked="checked" type="checkbox" name="pts_enabled_add_voucher" id="pts_enabled_add_voucher" />  </div>
</div>


<div class="form-group">
  <label class="col-sm-3 control-label">Customer can have offers+points discount</label>
  <div class="col-sm-8">
  <input class="" value="1" type="checkbox" name="pts_enabled_offers_discount" id="pts_enabled_offers_discount" />  </div>
</div>

<hr/>

<h4>Global Points</h4>

<div class="form-group">
  <label class="col-sm-3 control-label">Reward Points for Account Signup</label>
  <div class="col-sm-8">
    <input class="numeric_only amount_value form-control" type="text" value="200" name="pts_account_signup" id="pts_account_signup" />  </div>
</div>

<div class="form-group">
  <label class="col-sm-3 control-label">Reward Points for Salon review</label>
  <div class="col-sm-8">
    <input class="numeric_only amount_value form-control" type="text" value="1" name="pts_merchant_reivew" id="pts_merchant_reivew" />  </div>
</div>


<div class="form-group">
  <label class="col-sm-3 control-label">Earn review status</label>  
  <div class="col-sm-8">
  <select class="chosen" multiple="multiple" style="width:400px;" name="earn_points_review_status[]" id="earn_points_review_status">
<option value="pending">Reviewed</option>
<option value="cancelled">Not Reviewed</option>
<option value="delivered" selected="selected">Approved</option>

</select>  
  <p>
    customer will earn points based on this status  </p>
  </div>
</div>

<div class="form-group">
  <label class="col-sm-3 control-label">Reward Points for first order</label>
  <div class="col-sm-8">
    <input class="numeric_only amount_value form-control" type="text" value="5" name="pts_first_order" id="pts_first_order" />  </div>
</div>

<div class="form-group">
  <label class="col-sm-3 control-label">Reward Points for Booking Table</label>
  <div class="col-sm-8">
    <input class="numeric_only amount_value form-control" type="text" value="1" name="pts_book_table" id="pts_book_table" />  </div>
</div>

<hr/>

<div class="form-group ">
  <label class="col-sm-3 control-label">Points Expiry</label>
  <div class="col-sm-8">
  <select class="form-control" style="width:300px;" name="pts_expiry" id="pts_expiry">
<option value="1" selected="selected">points expire at the end of the next year after you earned them</option>
<option value="3">points never expire</option>
</select>  </div>
</div>


<div class="clear"></div>

 <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
  <input class="btn btn-primary" id="save-settings" type="submit" name="yt0" value="Save Settings" />    </div>
  </div>


</form>  
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
            
            <!-- /.card -->
          </div>
    </div>
  </div>
</section>
