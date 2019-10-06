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
			'Action'
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
		$data['page_title'] = "Plot Registeration Form";
		$data['main_view'] = 'admin/add_form';
		$this->load->model('Crud_model');
		$data['phases'] = $this->Crud_model->fetch_record('phases');


		$this->load->view('admin/index', $data);

	}

	public function register_allottee() {

		$data['name'] = $this->input->post('name');
		$data['father_name'] = $this->input->post('father_name');
		$data['address'] = $this->input->post('address');
		$data['number'] = $this->input->post('number');
		$data['city'] = $this->input->post('city');
		$data['province'] = $this->input->post('province');
		$data['nic'] = $this->input->post('nic');
		$data['form_number'] = $this->input->post('form_number');
		$data['type_of_industry'] = $this->input->post('type_of_industry');
		$data['area_in_acres'] = $this->input->post('area_in_acres');
		$data['due_date_first_installment']  = $this->input->post('due_date_first_installment');
		$data['installments_paid'] = $this->input->post('installments_paid');
		$data['installments_due'] = $this->input->post('installments_due');
		$data['total_amount_of_plot'] = $this->input->post('total_amount_of_plot');
		$data['plot_id']  = $this->input->post('plot');
		$data['phase_id']  = $this->input->post('phase');
		$data['form_fee'] = $this->input->post('form_fee');
		$data['form_submission_date']  =$this->input->post('form_submission_date');
		$this->load->model('Crud_Model');
		$res=$this->Crud_Model->insert_data('allottees', $data);

		if($res==true)
		{
			$this->session->set_flashdata('true', 'Data Added Successfully');
		}
	  else
		  {
			$this->session->set_flashdata('err', "Error");
		  }
		redirect('allottee');


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
		$res=$this->Crud_Model->insert_data('allottees', $data);
		if($res==true)
		{
			$this->session->set_flashdata('true', 'Data Added Successfully');
		}
	  else
		  {
			$this->session->set_flashdata('err', "Error");
		  }

		redirect('allottee/manage_forms');


	}


	public function edit($id) {

		$data['page_title'] = "Update Allottee";
		$data['main_view'] = 'admin/edit_allottee';
		$this->load->model('Crud_model');
		$data['allottee'] = $this->Crud_model->fetch_record_by_id('allottees', $id);
		$this->load->view('admin/index', $data);

	}

	public function update_allottee() {

		$id = $this->input->post('edit_id');
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

		$this->load->model('Crud_model');
		$res=$this->Crud_model->edit_record_id('allottees', $id, $data);
		if($res==true)
		{
			$this->session->set_flashdata('true', 'Data Added Successfully');
		}
	  else
		  {
			$this->session->set_flashdata('err', "Error");
		  }
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
			$links =  "<a   href='".base_url('allottee/edit/'.$allottee->id)."' class='btn btn-warning btn-xs mr5' >
                    <i class='fa fa-edit'></i>
                    </a>
                    <a   href='".base_url('allottee/delete/'.$allottee->id)."' class='btn btn-danger btn-xs'><i class='fa fa-trash' aria-hidden='true'></i></a>";
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
		  				$links
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
  		foreach ($allottees as $index=>$allottee) {
  			$i++;
  			$links =  "<a   href='".base_url('allottee/edit/'.$allottee->id)."' class='btn btn-warning btn-xs mr5' >
                    <i class='fa fa-edit edit-icon-style'></i>
                    </a>
                    <a   href='".base_url('allottee/delete/'.$allottee->id)."' class='btn btn-danger btn-xs edit-icon-style'><i class='fa fa-trash' aria-hidden='true'></i></a>";
  			$allottees[$index]->links = $links;
			
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


  	public function get_form_data() {
		$this->load->model('Crud_Model');
		$allottees  = $this->Crud_Model->fetch_record_by_data('allottees', ['status' => 0]);             
		 $i = $_POST['start'];  		                  
			foreach ($allottees as $index=>$allottee) {
				$i++;
				$links =  "<a   href='".base_url('allottee/edit_form/'.$allottee->id)."' class='btn btn-warning btn-xs mr5 edit-icon-style' >
                    <i class='fa fa-edit'></i>
                    </a>
                    <a   href='".base_url('allottee/form_delete/'.$allottee->id)."' class='btn btn-danger btn-xs edit-icon-style'><i class='fa fa-trash' aria-hidden='true'></i></a>";
				$allottees[$index]->links = $links;
			
				$data[]  = array(
					$i,
					$allottee->form_number,
					$allottee->name,
					$allottee->father_name,
					$allottee->address,
					$allottee->city,
					$allottee->province,
					$allottee->number,
					$links
				);
	  	}


	    $result = array(
	               "draw" => $_POST['draw'],
	                "recordsTotal" => count($allottees),
	                "recordsFiltered" => count($allottees),
	                "data" => $data
	            );


	    echo json_encode($result);     
	                
  	                  
  	}

  	public function manage_forms() {

  		$data['title']  = "Allottees";
		$data['main_view'] ="admin/manage_forms";
		$data['table_headings_allottees'] = [
			"#",
			'Form Number',
			'Name',
			'Father Name',
			'Address',
			'City',
			'Province',
			'Phone Number',
			'Action'
	
		];
		$this->load->view('admin/index', $data);
  	}


  	public function delete_allottee($id) {

  		$this->load->model('Crud_model');
  		$res$this->Crud_model->delete_record('allottees', $id);
		  if($res==true)
		  {
  			$this->session->set_flashdata('true', 'Data Deleted Successfully');
		  }
		else
			{
 			 $this->session->set_flashdata('err', "Error");
			}
  		redirect('allottee/manage_allottees');
  	}

  	public function edit_form($id) {

		$data['page_title'] = "Update Allottee";
		$data['main_view'] = 'admin/edit_form';
		$this->load->model('Crud_model');
		$data['allottee'] = $this->Crud_model->fetch_record_by_id('allottees', $id);
		$data['phases'] = $this->Crud_model->fetch_record('phases');

		$this->load->view('admin/index', $data);

	}

	public function delete_form($id) {

		$this->load->model('Crud_model');
  		$res=$this->Crud_model->delete_record('allottees', $id);
		  if($res==true)
		  {
  			$this->session->set_flashdata('true', 'Data Deleted Successfully');
		  }
		else
			{
 			 $this->session->set_flashdata('err', "Error");
			}
  		redirect('allottee/manage_allottees');

	}

	public function update_form() {

		$id = $this->input->post('edit_id');	
		$data['name'] = $this->input->post('name');
		$data['father_name'] = $this->input->post('father_name');
		$data['address'] = $this->input->post('address');
		$data['number'] = $this->input->post('number');
		$data['city'] = $this->input->post('city');
		$data['province'] = $this->input->post('province');
		$data['nic'] = $this->input->post('nic');
		$data['form_number'] = $this->input->post('form_number');
		$data['type_of_industry'] = $this->input->post('type_of_industry');
		$data['area_in_acres'] = $this->input->post('area_in_acres');
		$data['due_date_first_installment']  = $this->input->post('due_date_first_installment');
		$data['installments_paid'] = $this->input->post('installments_paid');
		$data['installments_due'] = $this->input->post('installments_due');
		$data['total_amount_of_plot'] = $this->input->post('total_amount_of_plot');
		$data['plot_id']  = $this->input->post('plot');
		$data['phase_id']  = $this->input->post('phase');
		$data['form_fee'] = $this->input->post('form_fee');
		$data['form_submission_date']  =$this->input->post('form_submission_date');
		$this->load->model('Crud_model');
		$res=$this->Crud_model->edit_record_id('allottees', $id, $data);
		
		if($res==true)
		{
			$this->session->set_flashdata('true', 'Data Updated Successfully');
		}
	  else
		  {
			$this->session->set_flashdata('err', "Error");
		  }
		redirect('allottee');


	}
}

