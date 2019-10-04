<script>
function format ( d ) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
            '<td>City:</td>'+
            '<td>'+d.city+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Province:</td>'+
            '<td>'+d.province+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Nic:</td>'+
            '<td>'+d.nic+'</td>'+
        '</tr>'+
    '</table>';
}
$(document).ready(function(){
  
   var table = $('#allottees').DataTable({
        // Processing indicator
        "processing": true,
        // DataTables server-side processing mode
        "serverSide": true,
        // Initial no order.
        "order": [],

         responsive: true,
        // Load data from an Ajax source
        "ajax": {
            "url": "<?php echo base_url('allottee/get_data/'); ?>",
            "type": "POST"
        },
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "form_number" },
            { "data": "pds_number" },
            { "data": "name" },
            { "data": "father_name" }
        ],
        //Set column definition initialisation properties
        "columnDefs": [{ 
            "targets": [0],
            "orderable": false
        }]
    }); 
    table.on( 'order.dt search.dt', function () {
        table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();

        // Add event listener for opening and closing details
    $('#allottees tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    } );
});
 
$("#search").on('click', function(){
    $("#allottees").dataTable().fnDestroy();
    let form_number = $("#form_number").val();
    let pds_number = $("#pds_number").val();
    let  name  = $("#name").val(); 
    let  father_name  = $("#father_name").val();  
    let  province  = $("#province").val();  
    let  city  = $("#city").val();  
    let  nic  = $("#nic").val();  
    let  type_of_industry  = $("#type_of_industry").val();  
    let  area_in_acres  = $("#area_in_acres").val();  
    let  due_date_of_first_installment  = $("#due_date_of_first_installment").val();
    let  installments_paid  = $("#installments_paid").val();  
    let  installments_due  = $("#installments_due").val();  
    let  total_amount_of_plot  = $("#total_amount_of_plot").val();  
    let  amount_paid  = $("#amount_paid").val();  
    let  date_of_allottment  = $("#date_of_allottment").val();
    let  remarks  = $("#remarks").val();  
    let  transfer_detail  = $("#transfer_detail").val();
    let  date_of_issuance_of_notice  = $("#date_of_issuance_of_notice").val();
    let  recovery_amount  = $("#recovery_amount").val();
    let  recovery_date  = $("#recovery_date").val();

    let arr = {
        form_number: form_number,
        pds_number:pds_number,
        name: name,
        father_name:father_name,
        province:province,
        city:city,
        nic:nic,
        type_of_industry:type_of_industry,
        area_in_acres:area_in_acres,
        due_date_of_first_installment:due_date_of_first_installment,
        installments_paid:installments_paid,
        installments_due:installments_due,
        total_amount_of_plot: total_amount_of_plot,
        amount_paid: amount_paid,
        date_of_allottment: date_of_allottment,
        remarks: remarks,
        transfer_detail:transfer_detail,
        date_of_issuance_of_notice: date_of_issuance_of_notice,
        recovery_amount:recovery_amount,
        recovery_date: recovery_date

    }; 

    console.log(arr);
      var table = $('#allottees').DataTable({
         "language": {
        "emptyTable":     "No Record Found"
        },
        // Processing indicator
        "processing": true,
        // DataTables server-side processing mode
        "serverSide": true,
        // Initial no order.
        "order": [],


         responsive: true,
        // Load data from an Ajax source
        "ajax": {
            "url": "<?php echo base_url('allottee/get_data/'); ?>",
            "type": "POST",
            "data":{data:arr}
        },

        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "form_number" },
            { "data": "pds_number" },
            { "data": "name" },
            { "data": "father_name" }
        ],
        //Set column definition initialisation properties
        "columnDefs": [{ 
            "targets": [0],
            "orderable": false
        }]
    }); 


});
</script>