<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />  


  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GIEDA | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  

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
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-white p-3">
         <div class="nav navbar-nav" style="text-align: center;">
               <h4> <a href="<?php echo base_url('allottee');?>" class="nav-item nav-link active">Allotees</a>
                <a href="<?php echo base_url('plot');?>" class="nav-item nav-link">Plots</a>
                <a href="<?php echo base_url('phase');?>" class="nav-item nav-link">Phases</a>
                <a href="<?php echo base_url('user');?>" class="nav-item nav-link">Users</a>
                <a href="<?php echo base_url('welcome/sign_out'); ?>" class="nav-item nav-link">Logout</a></h4>
            </div>
             </div>
    </div>
  </div>



    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-success">
        <a href="<?php echo base_url('');?>" class="navbar-brand">GIEDA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse"
      data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
            <br/>
            <div class="nav navbar-nav">
                <a href="<?php echo base_url('allottee/manage_forms');?>" class="nav-item nav-link active">Forms</a>
                <a href="<?php echo base_url('allottee');?>" class="nav-item nav-link active">Allotees</a>
                <a href="<?php echo base_url('plot');?>" class="nav-item nav-link">Plots</a>
                <a href="<?php echo base_url('phase');?>" class="nav-item nav-link">Phases</a>
                <a href="<?php echo base_url('user');?>" class="nav-item nav-link">Users</a>

            </div>
            <form class="form-inline ml-auto">
                <a href="<?php echo base_url('welcome/sign_out'); ?>" class="nav-item nav-link">Logout</a>
               
            </form>
        </div>
    </nav>
   

    
  
    </div>
  <!-- /.navbar -->
