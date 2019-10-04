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
		$this->Crud_model->insert_data('phases',$data);

		redirect('phase/manage_phases');
	}

		public function get_user_data() {

		$this->load->model('Crud_model');
		$data = array();
		$draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));
		$users = $this->Crud_model->fetch_record('phases');
		$i =0;
		$links =  "<a   href='' class='btn btn-warning btn-xs mr5' >
                    <i class='fa fa-edit'></i>
                    </a>
                    <a   href='' class='btn btn-danger btn-xs'><i class='fa fa-trash' aria-hidden='true'></i></a>";
		foreach ($users as $user) {
  			$i++;
  			$data[]  = array(
  				$i,
  				$user->title,
  				$user->description,
  				$user->start_date,
  				$links

  			);
			
		}
	    
		$output = array(
              	 "draw" => $draw,
                 "recordsTotal" => count($users),
                 "recordsFiltered" => count($users),
                 "data" => $data
            );

	    echo json_encode($output);
	}

}