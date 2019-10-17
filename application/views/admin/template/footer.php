
 

<footer class="main-footer">
    <strong>Copyright &copy; <script>document.write( new Date().getUTCFullYear() );</script> <a href="<?php echo base_url('');?>">Salon</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0-beta.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js'); ?> "></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui.min.js'); ?> "></script>
<!-- stellar nav -->
<script src="<?php echo base_url('assets/dist/stellarnav/js/stellarnav.min.js'); ?> "></script>

<!-- For All Plug-in Activation & Others -->
<script type="text/javascript">
  jQuery(document).ready(function($) {
      jQuery('.stellarnav').stellarNav({
        theme: 'light',
        breakpoint: 960,
        position: 'left'
      });
    });
</script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?> "></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap4.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/plugins/fastclick/fastclick.js');?>"></script><!-- ChartJS -->
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
<script src="<?php echo base_url('assets/plugins/datepicker/js/bootstrap-datepicker.js'); ?> "></script>
<script>
  
  $('.datepicker').datepicker();

</script>
 <script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

</section>
<script type="text/javascript">
$(".filter-btn").on('click', function(){
   let inVal = $('.filter-btn').attr('filter-slide');
   if(inVal == "false") {
        $('.filter-list').removeClass('hide-filter-list');
        $('.wrapper').removeClass('push-wrapper-back');
        $('.filter-btn').attr('filter-slide','true');
        $('.filter-list').addClass('show-filter-list');
        $('.wrapper').addClass('push-wrapper');
    } else {
        $('.filter-btn').attr('filter-slide','false');
         $('.filter-list').removeClass('show-filter-list')
         $('.wrapper').removeClass('push-wrapper')
        $('.filter-list').addClass('hide-filter-list');
        $('.wrapper').addClass('push-wrapper-back');
    }
    let val = $('.filter-btn').attr('filter-slide');
     console.log( val  );  
  });

</script>
<script>
//
$(".filter-list input").on('click', function(){
if($(this).prop('checked') == true) {
  let val = $(this).val();
  let divId =val + "1" ;
  let label = val.replace(/_/g," ");
  label = label.toLowerCase()
    .split(' ')
    .map((s) => s.charAt(0).toUpperCase() + s.substring(1))
    .join(' ');
  let inp  ="<div class='col-md-3' id="+divId+">";
  inp +="<div class='form-group'>";
  inp +="<div class='col-sm-11'>";
  inp +="<input type='text' id='"+val+"' name='"+val+"' name='"+divId+"' class='form-control' placeholder='"+label+"'>";
  inp +="</div>";
  inp +="</div>";
  inp +="</div>";

  $("#filterInputs").append(inp);
} else {
  let divId = "#" + $(this).val() + "1";
  console.log(divId);
  $(divId).remove();
}
});
</script>
</body>
</html> 