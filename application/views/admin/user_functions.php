<script>

$(document).ready(function() {
    $('#users').DataTable( {
        // Processing indicator
        "processing": true,
        // DataTables server-side processing mode
        "serverSide": true,
        // Initial no order.

         responsive: true,
         "pageLength" : 10,
         "order": [[0, "asc" ]],
         "ajax":{
              url :  '<?php echo base_url('user/get_data'); ?>',
              type : 'POST'
            },
  }); // End of DataTable

} );
 

</script>