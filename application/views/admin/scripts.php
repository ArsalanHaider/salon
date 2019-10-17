<?php 

if ($this->uri->segment(1) == "allottee") {
	$this->load->view('admin/allottee_functions');
} else if($this->uri->segment(1) == "user") {
	$this->load->view('admin/user_functions');

}else if($this->uri->segment(1) == "plot") {
	$this->load->view('admin/plot_functions');

}else if($this->uri->segment(1) == "phase") {
	$this->load->view('admin/phase_functions');

}else if($this->uri->segment(1) == "loyalty") {
	$this->load->view('admin/loyalty_functions');

}


 ?>