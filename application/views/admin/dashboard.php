
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <h4 class="company-name"> GIEDA | Dashboard </h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('');?>">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <?php 
 
                  $this->db->count_all_results('allottees');
                  $this->db->like('allottees.id');
                  $this->db->from('allottees');
                  $count_allottees=$this->db->count_all_results();

                  $this->db->count_all_results('plots');
                  $this->db->like('plots.id');
                  $this->db->from('plots');
                  $count_plots=$this->db->count_all_results();

                  $this->db->count_all_results('users');
                  $this->db->like('users.id');
                  $this->db->from('users');
                  $count_users=$this->db->count_all_results();

                  $this->db->count_all_results('phases');
                  $this->db->like('id');
                  $this->db->from('phases');
                  $count_phases=$this->db->count_all_results();
 ?>   
<?php
 
$dataPoints = array( 
  array("label"=>"Total Forms", "y"=>3),
  array("label"=>"Total Allottees", "y"=>$count_allottees),
  array("label"=>"Total Plots Transfered", "y"=>3),
  array("label"=>"Total Plots", "y"=>$count_plots),
  array("label"=>"Total Users", "y"=>$count_users),
  array("label"=>"Total Phases", "y"=>$count_phases)
)
 
?>
<script>
window.onload = function() {
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  title: {
    text: "Chart View"
  },
  
  data: [{
    type: "pie",
    yValueFormatString: "#,##0\"\"",
    indexLabel: "{label} ({y})",
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();

var charts = new CanvasJS.Chart("chartContainer1", {
  animationEnabled: true,
  title: {
    text: "Bar View"
  },
  
  data: [{
    type: "bar",
    yValueFormatString: "#,##0\"\"",
    indexLabel: "{label} ({y})",
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
charts.render();
 
}
</script>




    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>3</h3>

                <p>Total Forms</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url('');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
            <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                  <?php 
                 
                  echo $count_allottees;


                  ?>

                </h3>

                <p>Total Allottees</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url('allottee');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>  <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>3</h3>

                <p>Total Plots Transfered</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url('');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>  
                     <?php echo $count_plots;?></h3>

                <p>Total Plots</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo base_url('plot');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>  
                     <?php echo $count_users;?></h3>

                <p>Total Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo base_url('user');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>  <?php 
                  echo $count_phases

                  ?></h3>

                <p>Total Phases</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?php echo base_url('phase');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>


<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->

        <div class="container-fluid">
 <br/>
        <!-- Small boxes (Stat box) -->
    <div class="row">
     
      <div class="col-lg-6 col-12">
        <div id="chartContainer" style="height: 370px; width: 100%;">
        </div>
      </div>
       <div class="col-lg-6 col-12" style="float: right">
        <div id="chartContainer1" style="height: 370px; width: 100%;">
        </div>
      </div>
    </div>



    </section>