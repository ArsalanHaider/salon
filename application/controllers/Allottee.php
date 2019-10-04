<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Allottee extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title']  = "Allottees";
		$data['main_view'] ="admin/manage_allottees";
		$data['table_headings_allottees'] = [
			"#",
			'Form Number',
			'Pds Number',
			'Name',
			'Father Name',
			/*'Address',
			'City',
			'Province',
			'Phone Number',
			'NIC',
			'Plot No.',
			'Plot size',
			'Type of Industry',
			'Area in Acres',
			'Due Date First Installment',
			'Number of Installments Paid',
			'Number of Installments Due',
			'Total Amount of Plot',
			'Amount Paid',
			'Amount Due',
			'Remarks',*/
			// 'Date of Allotment',
			// 'Transfer Detail',
			// 'Date of Allotment',
			// 'Remarks',
		/*	'Date of Issuance of Notice',
			'Recovered Amount',
			'Recovery Date',
			'Remarks',*/

		];
		$this->load->view('admin/index', $data);
	}

	public function form() {
		$data['page_title'] = "Add Allottees";
		$data['main_view'] = 'admin/add_form';

		$this->load->view('admin/index', $data);

	}
	public function add_allottees_form() {

		$data['page_title'] = "Add Allottees";
		$data['main_view'] = 'admin/add_allottees';

		$this->load->view('admin/index', $data);
	}

	public function add_allottee() {


		$data['name'] = $this->input->post('name');
		$data['father_name'] = $this->input->post('father_name');
		$data['address'] = $this->input->post('address');
		$data['number'] = $this->input->post('number');
		$data['city'] = $this->input->post('city');
		$data['province'] = $this->input->post('province');
		$data['nic'] = $this->input->post('nic');
		$data['form_number'] = $this->input->post('form_number');
		$data['pds_number'] = $this->input->post('pds_number');
		$data['plot_number'] = $this->input->post('plot_size');
		$data['type_of_industry'] = $this->input->post('type_of_industry');
		$data['area_in_acres'] = $this->input->post('area_in_acres');
		$data['due_date_first_installment']  = $this->input->post('due_date_first_installment');
		$data['installments_paid'] = $this->input->post('installments_paid');
		$data['installments_due'] = $this->input->post('installments_due');
		$data['total_amount_of_plot'] = $this->input->post('total_amount_of_plot');
		$data['amount_paid']  = $this->input->post('amount_paid');
		$data['amount_due'] =  $this->input->post('amount_due');
		$data['date_of_allotment'] =  $this->input->post('date_of_allotment');
		$data['transfer_detail'] =  $this->input->post('transfer_detail');
		$data['remarks'] =  $this->input->post('remarks');
		$data['date_of_issuance_of_notice'] = $this->input->post('date_of_issuance_of_notice');
		$data['recovery_amount'] =  $this->input->post('recovery_amount');
		$data['recovery_date'] =  $this->input->post('recovery_date');
		$data['recovery_remarks'] = $this->input->post('recovery_remarks');

		$this->load->model('Crud_Model');
		$this->Crud_Model->insert_data('allottees', $data);


		redirect('allottee');


	}

	public function get_data() {
		$this->load->model('Crud_Model');
		$valExists = false;
		if (isset($_POST['data']) ) {
			$data = $_POST['data'];
			

			foreach ($data as  $value) {
				if ($value != '') {
					$valExists = true;
				}
			}
			// echo json_encode($valExists);
		}
			

		if ($valExists == True) {
			$data = $_POST['data'];
			foreach($data as $key=>$value)
			{
			    if(is_null($value) || $value == '')
			        unset($data[$key]);
			}
		
			$allottees  = $this->Crud_Model->fetch_record_by_data('allottees', $data); 
			 $i = $_POST['start'];
			if ($allottees != null) {
			  		                  		                  
		  		foreach ($allottees as $allottee) {
		  			$i++;
		  			$data[]  = array(
		  				$i,
		  				$allottee->form_number,
		  				$allottee->pds_number,
		  				$allottee->name,
		  				$allottee->father_name,
		  				// $allottee->address,
		  				// $allottee->city,
		  				// $allottee->province,
		  				// $allottee->number,
		  				// $allottee->nic,
		  				// $allottee->plot_number,
		  				// $allottee->plot_size,
		  				// $allottee->type_of_industry,
		  				// $allottee->area_in_acres,
		  				// $allottee->due_date_first_installment,
		  				// $allottee->installments_paid,
		  				// $allottee->installments_due,
		  				// $allottee->total_amount_of_plot,
		  				// $allottee->amount_paid,
		  				// $allottee->amount_due,
		  				// $allottee->remarks,
		  				// $allottee->date_of_issuance_of_notice,
		  				// $allottee->recovery_amount,
		  				// $allottee->recovery_date,
		  				// $allottee->recovery_remarks
		  			);
		      	}
		      }

			 $result = array(
	               "draw" => $_POST['draw'],
	                "recordsTotal" => 1,
	                "recordsFiltered" => 1,
	                "data" => $allottees
	            );

		if ($allottees == null) {
			echo '{
			    "sEcho": 1,
			    "iTotalRecords": "0",
			    "iTotalDisplayRecords": "0",
			    "aaData": []
			}';
		 } else { 
	    	echo json_encode($result);
	    	}     
		}else {
    	
    	$allottees  = $this->Crud_Model->fetch_record('allottees');                  
		 $i = $_POST['start'];  		                  
  		foreach ($allottees as $allottee) {
  			$i++;
  			$data[]  = array(
  				$i,
  				$allottee->form_number,
  				$allottee->pds_number,
  				$allottee->name,
  				$allottee->father_name,
  				// $allottee->address,
  				// $allottee->city,
  				// $allottee->province,
  				// $allottee->number,
  				// $allottee->nic,
  				// $allottee->plot_number,
  				// $allottee->plot_size,
  				// $allottee->type_of_industry,
  				// $allottee->area_in_acres,
  				// $allottee->due_date_first_installment,
  				// $allottee->installments_paid,
  				// $allottee->installments_due,
  				// $allottee->total_amount_of_plot,
  				// $allottee->amount_paid,
  				// $allottee->amount_due,
  				// $allottee->remarks,
  				// $allottee->date_of_issuance_of_notice,
  				// $allottee->recovery_amount,
  				// $allottee->recovery_date,
  				// $allottee->recovery_remarks
  			);
      	}


	    $result = array(
	               "draw" => $_POST['draw'],
	                "recordsTotal" => count($allottees),
	                "recordsFiltered" => count($allottees),
	                "data" => $allottees
	            );


	    echo json_encode($result);     
	    }             
  	                  
  	}

}

