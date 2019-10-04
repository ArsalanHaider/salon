<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
	
	public function index() {
		$data['page_title']  = 'Manage Users';
		$data['main_view'] = 'admin/view_users';
		$data['table_headings_users'] = ['#', 'Name',' Email','Role' ,'Action'];
		$this->load->view('admin/index', $data);
	}

	public function add_user_form()
	{
		$data['title']  = "Add user";
		$data['main_view'] ="admin/add_user";
		$data['roles'] = array('1' => 'Admin','2' => 'Manager','3' => 'Other');
		$this->load->view('admin/index', $data);
	}

	public function add_user() { 
		$data['name'] =  $this->input->post('name');
		$data['email'] =  $this->input->post('email');
		$data['password'] = sha1($this->input->post('password'));
		$data['role_name'] =  $this->input->post('role');
		// $data['role_name'] =  $this->input->post('description');
		$this->load->model('Crud_model');
		$img  = $this->Crud_model->do_upload_picture('phase_picture', './uploads/images/');
		$data['image']  =$img;
		$this->Crud_model->insert_data('users',$data);

		redirect('user');
	}



	public function get_data() {

		$this->load->model('Crud_model');
		$data = array();
		$draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));
		$users = $this->Crud_model->fetch_record('users');
		$i =0;
		$links =  "<a   href='' class='btn btn-warning btn-xs mr5' >
                    <i class='fa fa-edit'></i>
                    </a>
                    <a   href='' class='btn btn-danger btn-xs'><i class='fa fa-trash' aria-hidden='true'></i></a>";
		foreach ($users as $user) {
  			$i++;
  			$data[]  = array(
  				$i,
  				$user->name,
  				$user->email,
  				$user->role_name,
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
