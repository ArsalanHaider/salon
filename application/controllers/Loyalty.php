<?php 

class Loyalty extends CI_Controller {
	public function index() {

		$data['main_view']  = 'admin/manage_loyalty';
		$data['page_title'] = 'Loyalty Program';
		$data['table_headings_loyaltys'] = ['Customer Id','Customer Name','Customer Email','Reward Points','Action'];
		$this->load->view('admin/index',$data);
	}

	public function settings() {
		
		
		$data['main_view']  = 'admin/loyalty_settings';
		$data['page_title'] = 'Settings';
		$this->load->view('admin/index',$data);

	}

	public function manage_points_log() {
		
		
		$data['main_view']  = 'admin/manage_points_log';
		$data['page_title'] = 'Points Log';
		$this->load->view('admin/index',$data);

	}
	public function manage_points_user_log() {
		
		
		$data['main_view']  = 'admin/manage_points_user_log';
		$data['page_title'] = 'Points Log';
		$this->load->view('admin/index',$data);

	}

	public function get_data() {

		$this->load->model('Crud_model');
		$data = array();
		$draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));
		$loyaltys = $this->Crud_model->fetch_record('loyaltys');
		$i =0;
	
		foreach ($loyaltys as $loyalty) {
  			$i++;
  				$links =  "<a  href='".base_url('loyalty/edit/'.$loyalty->id)."' class='btn btn-warning btn-xs mr5 edit-icon-style' >
                    <i class='fa fa-edit'></i>
                    </a>
                    <a   href='".base_url('loyalty/manage_points_user_log')."' class='btn btn-primary btn-xs edit-icon-style'><i class='fa fa-car' aria-hidden='true'></i></a>";
  			$data[]  = array(
  				
  				$loyalty->customer_id,
  				$loyalty->customer_name,
  				$loyalty->customer_email,
  				$loyalty->total_points,
			    $links

  			);
			
		}
	    
		$output = array(
              	 "draw" => $draw,
                 "recordsTotal" => count($loyaltys),
                 "recordsFiltered" => count($loyaltys),
                 "data" => $data
            );

	    echo json_encode($output);
	}



	public function edit($id){
		$data['page_title'] = "Update loyaltys";
		$data['main_view'] = 'admin/edit_loyalty';
		$this->load->model('Crud_model');
		$data['loyalty'] = $this->Crud_model->fetch_record_by_id('loyaltys', $id);

		$this->load->view('admin/index', $data);
	}

	public function update() {

		$data['total_points'] =  $this->input->post('total_points');
	
		$this->load->model('Crud_model');
		
		$res=$this->Crud_model->edit_record_id('loyaltys', $id, $data);
		if($res==true)
		{
			$this->session->set_flashdata('true', 'Data Updated Successfully');
		}
	  else
		  {
			$this->session->set_flashdata('err', "Error");
		  }

		redirect('loyalty');
	}

	public function delete($id) {
		$this->load->model('Crud_model');
  		$res=$this->Crud_model->delete_record('loyaltys', $id);
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