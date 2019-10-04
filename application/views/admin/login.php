<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GIEDA</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css');?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css');?>">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css');?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css');?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/jqvmap/jqvmap.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css');?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css');?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.css');?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/summernote/summernote-bs4.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/style.css');?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <div>
        <img src="<?php echo base_url('assets/images/logo.png');?>" height="200">
      </div>
      <a href="../../index2.html"><b>Gwader Industrial State Development Authority GIEDA</b></a>
    </div>

      <?php 
          $formAttributes = array('id' =>'login_form' , 'method'=> 'post' , 'class' => 'form-horizontal');
   
        ?>
      <?php echo form_open('login/authentication', $formAttributes); ?>
    <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="../../index3.html" method="post">
              <div class="input-group mb-3">
                <!-- <input type="email" class="form-control" placeholder="Email"> -->
                    <?php
                        $data = array('class'=>'form-control input-lg','id'=>'user_email','type'=>'email','name'=>'user_email','value'=>'','placeholder'=>'e.g demo@admin.com','reqiured'=>'','AUTOCOMPLETE'=>'OFF');
                        echo form_input($data);
                    ?> 
                <div class="input-group-append input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
              </div>
              <div class="input-group mb-3">
                 <?php
                      $data = array('class'=>'form-control input-lg','id'=>'user_password','type'=>'password','name'=>'user_password','value'=>'','placeholder'=>'e.g SW434DZSWA$','reqiured'=>'','AUTOCOMPLETE'=>'OFF');
                      echo form_input($data);
                    ?>
                <div class="input-group-append input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                   
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                   <?php
                      $data = array('class'=>'btn btn-primary btn-block btn-flat btn-lg','name'=>'btn_submit_signin','value'=>'Sign In ', 'style'=>'background:#008455 !important; border-color:#008455 !important;');

                      echo form_submit($data);
                   ?>
                </div>
                <!-- /.col -->
              </div>
            </form>
 
            <!-- /.social-auth-links -->

            <p class="mb-1">
              <!-- <a href="#">I forgot my password</a> -->
            </p>
            <p class="mb-0">
              <!-- <a href="register.html" class="text-center">Register a new membership</a> -->
            </p>
          </div>
          <!-- /.login-card-body -->
        </div>
      <?php echo form_close(); ?>  
  </div>

<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js'); ?> "></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui.min.js'); ?> "></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?> "></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/plugins/chart.js/Chart.min.js'); ?> "></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/plugins/sparklines/sparkline.js'); ?> "></script>
<!-- JQVMap -->
<script src="<?php echo base_url('assets/plugins/jqvmap/jquery.vmap.min.js'); ?> "></script>
<script src="<?php echo base_url('assets/plugins/jqvmap/maps/jquery.vmap.world.js'); ?> "></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/plugins/jquery-knob/jquery.knob.min.js'); ?> "></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/plugins/moment/moment.min.js'); ?> "></script>
<script src="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.js'); ?> "></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?> "></script>
<!-- Summernote -->
<script src="<?php echo base_url('assets/plugins/summernote/summernote-bs4.min.js'); ?> "></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?> "></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/plugins/fastclick/fastclick.js'); ?> "></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.js'); ?> "></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/dist/js/pages/dashboard.js'); ?> "></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/dist/js/demo.js'); ?> "></script>
</body>
</html> 