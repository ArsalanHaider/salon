<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$data['title']  = "Login Template";
	
		$this->load->view('admin/login', $data);
	}

	// Login/authentication
	public function authentication()
	{

		// DEFINES READ CATEROTY NAME FORM Login FORM
			$user_email = html_escape($this->input->post('user_email'));
		    $user_password = html_escape($this->input->post('user_password'));
		if (!empty($user_email) && !empty($user_password))
		{

			// DEFINES LOAD CRUDS_MODEL FORM MODELS FOLDERS
			$this->load->model('Crud_model');
			$result = $this->Crud_model->authenticate_user($user_email, $user_password);
			if ($result == NULL)
			{
				$array_msg = array(
					'msg' => '<i style="color:#fff" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Incorrect Email or Password',
					'alert' => 'danger'
				);
				$this->session->set_flashdata('status', $array_msg);
				redirect('login');
			}
			else
			{
				$userdata = array(
					'id' => $result[0]->id,
					'name' => $result[0]->user_name
				);
				$this->session->set_userdata('user_id', $userdata);
				$this->session->userdata('user_id');
				$array_msg = array(
					'msg' => '<i style="color:#fff" class="fa fa-check-circle-o" aria-hidden="true"></i> Login  Successfully',
					'alert' => 'info'
				);
				$this->session->set_flashdata('status', $array_msg);
				redirect('welcome');
			}
		}
		else
		{
			$array_msg = array(
				'msg' => '<i style="color:#fff" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Enter Email & Password',
				'alert' => 'danger'
			);
			$this->session->set_flashdata('status', $array_msg);
			redirect('login');
		}
	}
}
