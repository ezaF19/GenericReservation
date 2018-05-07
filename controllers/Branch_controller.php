<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('generic_reservation_model');
	}
	
	#HOME
	public function home_branch(){
		$data['home1'] = $this->generic_reservation_model->home_branch($_SESSION['branch_id']);
		$data['home'] = $this->generic_reservation_model->read_home_reservations_branch($_SESSION['branch_id']); 
		$data['subs'] = $this->generic_reservation_model->view_subservice2($_SESSION['client_id']);
		$data['br'] = $this->generic_reservation_model->read_br(); 
		$this->load->view('template/header');
		$this->load->view('branch/sidebarnav3');
		$this->load->view('branch/home_branch',$data);
		$this->load->view('template/footer');
	}

	#READ client info to UPDATE
	public function read_update_bra($data){
		$val['branches'] = $this->generic_reservation_model->read_branch_info($data);
		$val['br'] = $this->generic_reservation_model->read_br(); 
		$this->load->view('template/header');
		$this->load->view('branch/sidebarnav3');		
		$this->load->view('branch/update_home',$val);
		$this->load->view('template/footer');

	}
	
	#UPDATE subservice
	public function update_bra($data){
		$result=$this->generic_reservation_model->update_branch_client($data);
		if($result){
			echo "<script type='text/javascript'>alert('Successfully Updated!')</script>";
			$this->home_branch();
		}
		else{
			$this->home_branch();
		}
	}
#=================================================================================RESERVATION==========================================================================================
	
	#READ reservation
	public function read_res(){
		$data['resers'] = $this->generic_reservation_model->read_reservation_branch($_SESSION['branch_id']);	
		$data['resers_inactive'] = $this->generic_reservation_model->read_reservation_branch_inactive($_SESSION['branch_id']);			
		$this->load->view('template/header');
		$this->load->view('branch/sidebarnav3');
		$this->load->view('branch/read_reservations',$data);
		$this->load->view('template/footer');

	}
	
	#SEARCH reservation
	public function search_res(){
		$data['searches'] = $this->generic_reservation_model->search_reservation_branch($_POST['search'],$_SESSION['branch_id']); 
		$this->load->view('template/header');
		$this->load->view('branch/sidebarnav3');
		$this->load->view('branch/search_reservations',$data);
		$this->load->view('template/footer');
	}
	
	#VIEW_BTN reservation
	public function view_res($data){
		$val['resers'] = $this->generic_reservation_model->view_reservation($data); 
		$val['resers_sers'] = $this->generic_reservation_model->view_reservation_services($data); 
		//$this->load->view('template/header');
		//$this->load->view('branch/sidebarnav3');
		$this->load->view('branch/viewbtn_reservations',$val);
		//$this->load->view('template/footer');

	}

#=================================================================================SERVICES==========================================================================================	
	#READ service
	public function read_ser(){
		$data['branches'] = $this->generic_reservation_model->read_service_branch($_SESSION['branch_id']);		
		$this->load->view('template/header');
		$this->load->view('branch/sidebarnav3');
		$this->load->view('branch/read_services',$data);
		$this->load->view('template/footer');

	}
	
	#SEARCH service
	public function search_ser(){
		$data['searches'] = $this->generic_reservation_model->search_service_branch($_POST['search'],$_SESSION['branch_id']); 
		$this->load->view('template/header');
		$this->load->view('branch/sidebarnav3');
		$this->load->view('branch/search_services',$data);
		$this->load->view('template/footer');

	}
	
	#DELETE service
	public function delete_ser($data){
		$this->generic_reservation_model->delete_service_branch($data);
		echo "<script type='text/javascript'>alert('Successfully Dactivated!')</script>";
		$this->read_ser($data);
	}	
	
	#ACTIVATE service
	public function activate_ser($data){
		$this->generic_reservation_model->activate_service_branch($data);
		echo "<script type='text/javascript'>alert('Successfully Activated!')</script>";
		$this->read_ser($data);
	}
		
	#READ which service to UPDATE
	public function read_update_sub($data){
		#$current = $this->db->get_where('bs_connection',array('branch_subservice_id' => $data))->row();
		$val['subs'] = $this->generic_reservation_model->read_specific_service_branch($data);	
		$this->load->view('template/header');
		$this->load->view('branch/sidebarnav3');
		$this->load->view('branch/update_subservices',$val);
		$this->load->view('template/footer');

	}
	
	#UPDATE service
	public function update_sub($data){
		$this->generic_reservation_model->update_subservice_branch($data);
		echo "<script type='text/javascript'>alert('Successfully Updated!')</script>";
		$this->read_ser();
	}
	
}
?>
