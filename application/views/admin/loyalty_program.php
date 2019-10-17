<div class="container" id="main-wrapper">
  <div class="panel panel-default">
     <div class="panel-heading">Loyalty Points Program</div>     
     <div class="menu">
<ul id="yw0">
<li class="active"><a href="/kmrs/pointsprogram/index/settings"><i class="fa fa-cog"></i>&nbsp; General Settings</a></li>
<li><a href="/kmrs/pointsprogram/index/rewardpoints"><i class="fa fa-file-text-o"></i>&nbsp; User Reward Points</a></li>
<li><a href="/kmrs/pointsprogram/index/pointslogs"><i class="fa fa-file-text-o"></i>&nbsp; Points logs</a></li>
<li><a href="/kmrs/pointsprogram/index/cronjobs"><i class="fa fa-info-circle"></i>&nbsp; CronJobs</a></li>
<li><a target="_blank" href="/kmrs/pointsprogram/update"><i class="fa fa-database"></i>&nbsp; Update DB Tables</a></li>
</ul></div>  
     <div class="pad10">
     
<form class="form-horizontal" action="/kmrs/pointsprogram/index/settings" method="post">
<input type="hidden" value="8dfca9777c6a32d82649ba4d23b18e8513d12313" name="YII_CSRF_TOKEN" /> 

<div class="form-group">
  <label class="col-sm-3 control-label">Enabled Points System</label>
  <div class="col-sm-8">
  <input class="" value="1" checked="checked" type="checkbox" name="points_enabled" id="points_enabled" />  </div>
</div>

<div class="form-group">
  <label class="col-sm-3 control-label">Disabled Points in Merchant Settings</label>
  <div class="col-sm-8">
  <input class="" value="1" checked="checked" type="checkbox" name="points_disabled_merchant_settings" id="points_disabled_merchant_settings" />  </div>
</div>


<div class="form-group ">
  <label class="col-sm-3 control-label">Earn points by order status</label>
  <div class="col-sm-8">
    <select class="chosen" multiple="multiple" style="width:400px;" name="pts_earn_points_status[]" id="pts_earn_points_status">
<option value="pending">pending</option>
<option value="cancelled">cancelled</option>
<option value="delivered">delivered</option>
<option value="paid" selected="selected">paid</option>
<option value="accepted">accepted</option>
<option value="decline">decline</option>
<option value="failed">failed</option>
<option value="declined">declined</option>
<option value="acknowledged">acknowledged</option>
<option value="started">started</option>
<option value="inprogress">inprogress</option>
<option value="successful">successful</option>
</select>  </div>
</div>


<div class="form-group ">
  <label class="col-sm-3 control-label">Points label Redeem placeholder</label>
  <div class="col-sm-8">
    <input class="form-control" type="text" value="redeem karenderia points" name="pts_label_input" id="pts_label_input" />   
  </div>
</div>

<div class="form-group ">
  <label class="col-sm-3 control-label">Points label Earn</label>
  <div class="col-sm-8">
    <input class="form-control" type="text" value="This order earned {points} karenderia Points" name="pts_label_earn" id="pts_label_earn" />   
    <p>Available Tags: <span class="bg-danger">{points}</span></p>
  </div>
</div>

<div class="form-group ">
  <label class="col-sm-3 control-label">Points label Template</label>
  <div class="col-sm-8">
    <input class="form-control" type="text" value="Order this &amp; earn {points} karenderia points" name="pts_label" id="pts_label" />    <p>Available Tags: <span class="bg-danger">{points}</span></p>
  </div>
</div>

<div class="form-group">
  <label class="col-sm-3 control-label">Maximum Earning Points for customer</label>
  <div class="col-sm-8">
    <input class="numeric_only amount_value form-control" type="text" value="10000" name="pts_maximum_points" id="pts_maximum_points" />    
  </div>
</div>


<!--<div class="form-group" id="chosen-field">
  <label class="col-sm-3 control-label">Points earn apply only on the following payment option</label>
  <div class="col-sm-8">
    <select class="chosen form-control" multiple="multiple" name="pts_payment_option[]" id="pts_payment_option">
<option value="cod">Cash On delivery</option>
<option value="ocr">Offline Credit Card Payment</option>
<option value="pyp">Paypal</option>
<option value="pyr">Pay On Delivery</option>
<option value="stp">Stripe</option>
<option value="mcd">Mercadopago</option>
<option value="payu">PayUMoney</option>
<option value="atz">Authorize.net</option>
<option value="obd">Offline Bank Deposit </option>
<option value="rzr">Razorpay</option>
<option value="ipay">Ipay</option>
</select>    
  </div>
</div>-->

<hr/>

<h4>Earning Points Settings</h4>

<div class="form-group">
  <label class="col-sm-3 control-label">Based points earnings</label>
  <div class="col-sm-8">
   <select class="form-control" style="width:300px;" name="points_based_earn" id="points_based_earn">
<option value="1" selected="selected">Food item (default)</option>
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
  <label class="col-sm-3 control-label">Redeeming Point Value in &#36;</label>
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
  <label class="col-sm-3 control-label">Reward Points for restaurant review</label>
  <div class="col-sm-8">
    <input class="numeric_only amount_value form-control" type="text" value="1" name="pts_merchant_reivew" id="pts_merchant_reivew" />  </div>
</div>


<div class="form-group">
  <label class="col-sm-3 control-label">Earn review status</label>  
  <div class="col-sm-8">
  <select class="chosen" multiple="multiple" style="width:400px;" name="earn_points_review_status[]" id="earn_points_review_status">
<option value="pending">pending</option>
<option value="cancelled">cancelled</option>
<option value="delivered" selected="selected">delivered</option>
<option value="paid" selected="selected">paid</option>
<option value="accepted">accepted</option>
<option value="decline">decline</option>
<option value="failed">failed</option>
<option value="declined">declined</option>
<option value="acknowledged">acknowledged</option>
<option value="started">started</option>
<option value="inprogress">inprogress</option>
<option value="successful" selected="selected">successful</option>
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
    
   </div> <!--panel-->
</div> <!--container-->