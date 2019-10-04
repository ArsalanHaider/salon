<?php
  if($this->session->userdata('user_id') == "") 
  {  
    redirect('login');
  }
  else
  {
     $user_id = $this->session->userdata('user_id');
    //TO AVOID USER TO ACCESS THE UNASSIGNED LINKS
    // if(Authenticate_Url($user_id['id'],$this->uri->segment(1)) != NULL)
    // {
    // }
    // else
    // {
    //   redirect('profile');
    // }

   



?>

<?php 

include 'template/header.php';
?>
 
<div class="content-wrapper">
	<?php $this->load->view($main_view); ?>
</div>
 <?php

include 'template/footer.php';

$this->load->view('admin/scripts')
?>


<?php  }?>