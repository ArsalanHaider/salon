<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plot extends CI_Controller {

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
		$data['page_title']  = 'manage_plots';
		$data['main_view'] = 'admin/manage_plots';
		$data['table_headings_plots'] = ['#', 'Title','Size','Total Price' ,'Total Installments',' Installment', 'Action'];
		$this->load->view('admin/index', $data);
	}

	public function add_plot() { 
		
		$data['phase_id'] = $this->input->post('phase');
		$data['title']  = $this->input->post('title');
		$data['size']  = $this->input->post('size');
		$data['total_price']  = $this->input->post('total_price');
		$data['total_installments']  = $this->input->post('total_installments');
		$data['per_installment']  = $this->input->post('per_installment');
		$data['plot_type']  = $this->input->post('plot_type');
		$data['description']  = $this->input->post('description');
		$data['down_payment']  = $this->input->post('down_payment');

		// $data['role_name'] =  $this->input->post('description');
		$this->load->model('Crud_model');
		// $img  = $this->Crud_model->do_upload_picture('user_picture', './uploads/images/');
		// $data['image']  =$img;
		$res = $this->Crud_model->insert_data('plots',$data);
		if($res==true)
		  {
  			$this->session->set_flashdata('true', 'Data Added Successfully');
		  }
		else
			{
 			 $this->session->set_flashdata('err', "Error");
			}
	redirect('plot');
	}


	public function add_plots_form() {

		$this->load->model('Crud_model');

		$data['phases'] = $this->Crud_model->fetch_record('phases');
		$data['title']  = "Add Plot";
		$data['main_view'] ="admin/add_plot";
		
		$this->load->view('admin/index', $data);
	}

	public function get_data() {

		$this->load->model('Crud_model');
		$data = array();
		$draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));
		$plots = $this->Crud_model->fetch_record('plots');
		$i =0;
	
		foreach ($plots as $plot) {
			$links =  "<a   href='".base_url('plot/edit/'.$plot->id)."' class='btn btn-warning btn-xs mr5 edit-icon-style' >
                    <i class='fa fa-edit'></i>
                    </a>
                    <a   href='".base_url('plot/delete/'.$plot->id)."' class='btn btn-danger btn-xs edit-icon-style'><i class='fa fa-trash' aria-hidden='true'></i></a>";
  			$i++;
  			$data[]  = array(
  				$i,
  				$plot->title,
  				$plot->size,
  				$plot->total_price,
  				$plot->total_installments,
  				$plot->per_installment,
  				$links

  			);
			
		}
	    
		$output = array(
              	 "draw" => $draw,
                 "recordsTotal" => count($plots),
                 "recordsFiltered" => count($plots),
                 "data" => $data
            );

	    echo json_encode($output);
	}


	public function edit($id){
		$data['page_title'] = "Update Plots";
		$data['main_view'] = 'admin/edit_plots';
		$this->load->model('Crud_model');
		$data['plot'] = $this->Crud_model->fetch_record_by_id('plots', $id);
		$data['phases'] = $this->Crud_model->fetch_record('phases');

		$this->load->view('admin/index', $data);
	}

	public function update_plot() {
		
		$id  = $this->input->post('edit_id');
		$data['phase_id'] = $this->input->post('phase');
		$data['title']  = $this->input->post('title');
		$data['description']  = $this->input->post('description');
		$data['size']  = $this->input->post('size');
		$data['total_price']  = $this->input->post('total_price');
		$data['total_installments']  = $this->input->post('total_installments');
		$data['per_installment']  = $this->input->post('per_installment');
		$data['plot_type']  = $this->input->post('plot_type');
		$data['down_payment']  = $this->input->post('down_payment');
		// $data['role_name'] =  $this->input->post('description');
		$this->load->model('Crud_model');
		$res=$this->Crud_model->edit_record_id('plots', $id, $data);
		if($res==true)
		{
			$this->session->set_flashdata('true', 'Data Updated Successfully');
		}
	  else
		  {
			$this->session->set_flashdata('err', "Error");
		  }
		redirect('plot');
	}

	public function delete($id) {
		$this->load->model('Crud_model');
  		$res=$this->Crud_model->delete_record('plots', $id);
		  if($res==true)
		  {
  			$this->session->set_flashdata('true', 'Data Deleted Successfully');
		  }
		else
			{
 			 $this->session->set_flashdata('err', "Error");
			}
  		redirect('plot');
	}
}
