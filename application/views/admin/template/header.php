<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GIEDA | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css');?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css');?>">
  <!-- Tempusdominus Bbootstrap 4 -->  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap4.css');?>">
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
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/style.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datepicker/css/datepicker.css');?>">
   <!-- stellar nav -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/stellarnav/css/stellarnav.min.css');?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php
 if($this->uri->segment(1) == "allottee") {

      $this->load->view('admin/allottee_filter_list');
    }
?>  
<div class="wrapper">

  <!-- Navbar -->
   <header class="main-header ">
    <div class="stellarnav light left desktop">

      <ul style="display: block;">

        <li>
           <a class="navbar-brand" href="#"">
            <img src="<?php echo base_url('assets/images/logo.png');?>" alt="GIEDA" height="40">
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('allottee/form');?>">
            <i class="fa fa-cog icon-settings" aria-hidden="true">
              </i>
           <span class="text-center link-settting"> 
              Forms  </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('allottee');?>">
            <i class="fa fa-cog icon-settings" aria-hidden="true">
              </i>
           <span class="text-center link-settting"> 
               Allottees       </span>
          </a>
        </li>
       <li>
          <a href="<?php echo base_url('plot');?>">
            <i class="fa fa-cog icon-settings" aria-hidden="true">
              </i>
           <span class="text-center link-settting"> 
                Plots    </span>
           </a>
        </li>
        <li class="">
          <a href="<?php echo base_url('phase');?>">
            <i class="fa fa-cog icon-settings" aria-hidden="true">
              </i>
           <span class="text-center link-settting"> 
                Phases            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('user');?>">
            <i class="fa fa-cog icon-settings" aria-hidden="true">
              </i>
           <span class="text-center link-settting"> 
              Users      </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('welcome/sign_out'); ?>">
            <i class="fa fa-cog icon-settings" aria-hidden="true">
              </i>
           <span class="text-center link-settting"> 
              Logout    </span>
          </a>
        </li>
      </ul>

    
  
    </div>
  <!-- /.navbar -->
