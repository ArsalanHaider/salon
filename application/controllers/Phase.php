<?php 

class Phase extends CI_Controller {
	public function index() {

		$data['main_view']  = 'admin/manage_phases';
		$data['page_title'] = 'Add Phase';
		$data['table_headings_phases'] = ['#', 'Title','Description','Start Date' ,'Action'];
		$this->load->view('admin/index',$data);
	}

	public function add_phase() {
		
		
		$data['main_view']  = 'admin/add_phase';
		$data['page_title'] = 'Add Phase';
		$this->load->view('admin/index',$data);

	}
	public function add_phase_data() {

		$data['title'] =  $this->input->post('title');
		$data['start_date']  = $this->input->post('start_date');
		$data['completion_date'] = $this->input->post('end_date');
		$data['description'] = $this->input->post('description');
		$this->load->model('Crud_model');
		$img  = $this->Crud_model->do_upload_picture('user_picture', './uploads/images/');
		$data['logo']  =$img;
		$res=$this->Crud_model->insert_data('phases',$data);
		if($res==true)
		{
			$this->session->set_flashdata('true', 'Data Added Successfully');
		}
	  else
		  {
			$this->session->set_flashdata('err', "Error");
		  }
		redirect('phase');
	}

	public function get_data() {

		$this->load->model('Crud_model');
		$data = array();
		$draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));
		$phases = $this->Crud_model->fetch_record('phases');
		$i =0;
	
		foreach ($phases as $phase) {
  			$i++;
  				$links =  "<a  href='".base_url('phase/edit/'.$phase->id)."' class='btn btn-warning btn-xs mr5 edit-icon-style' >
                    <i class='fa fa-edit'></i>
                    </a>
                    <a   href='".base_url('phase/delete/'.$phase->id)."' class='btn btn-danger btn-xs edit-icon-style'><i class='fa fa-trash' aria-hidden='true'></i></a>";
  			$data[]  = array(
  				$i,
  				$phase->title,
  				$phase->description,
  				$phase->start_date,
  				$links

  			);
			
		}
	    
		$output = array(
              	 "draw" => $draw,
                 "recordsTotal" => count($phases),
                 "recordsFiltered" => count($phases),
                 "data" => $data
            );

	    echo json_encode($output);
	}

	public function get_plots($phase_id) {

		$this->load->model('Crud_model');
		$data['id']  = $phase_id;
		$plots = $this->Crud_model->fetch_record_by_data('plots', ['phase_id' =>$phase_id]);
	
		echo json_encode($plots);
	}

	public function edit($id){
		$data['page_title'] = "Update Phases";
		$data['main_view'] = 'admin/edit_phases';
		$this->load->model('Crud_model');
		$data['phase'] = $this->Crud_model->fetch_record_by_id('phases', $id);

		$this->load->view('admin/index', $data);
	}

	public function update() {

		$data['title'] =  $this->input->post('title');
		$data['start_date']  = $this->input->post('start_date');
		$data['completion_date'] = $this->input->post('end_date');
		$data['description'] = $this->input->post('description');
		$this->load->model('Crud_model');
		$img  = $this->Crud_model->do_upload_picture('user_picture', './uploads/images/');
		$data['logo']  =$img;
		$res=$this->Crud_model->edit_record_id('phases', $id, $data);
		if($res==true)
		{
			$this->session->set_flashdata('true', 'Data Updated Successfully');
		}
	  else
		  {
			$this->session->set_flashdata('err', "Error");
		  }

		redirect('phase');
	}

	public function delete($id) {
		$this->load->model('Crud_model');
  		$res=$this->Crud_model->delete_record('phases', $id);
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