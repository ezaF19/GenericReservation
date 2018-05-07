<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('generic_reservation_model');
	}
	
	#Landing Page
	public function index(){
		$this->load->view('template/header');
		$this->load->view('admin/login');
		$this->load->view('template/footer');	

	}
	
	#READ home 	
	public function home(){
		$data['homes'] = $this->generic_reservation_model->read_home1(); 
		$data['homes_i'] = $this->generic_reservation_model->read_home1_inactive(); 
		$data['homess'] = $this->generic_reservation_model->read_home2(); 
		$data['homess_i'] = $this->generic_reservation_model->read_home2_inactive(); 
		$data['homesss'] = $this->generic_reservation_model->read_home3(); 
		$data['homesss_i'] = $this->generic_reservation_model->read_home3_inactive(); 
		$data['homessss'] = $this->generic_reservation_model->read_home4();
		$data['homessss_i'] = $this->generic_reservation_model->read_home4_inactive();
		$data['homesssss'] = $this->generic_reservation_model->read_home5();
		$data['homesssss_i'] = $this->generic_reservation_model->read_home5_inactive();
		$data['homessssss'] = $this->generic_reservation_model->read_home6();
		$data['homessssss_i'] = $this->generic_reservation_model->read_home6_inactive();
		$this->load->view('template/header');
		$this->load->view('admin/sidebarnav');
		$this->load->view('admin/home',$data);
		$this->load->view('template/footer');	
	}
	
	#LOGOUT 
	public function logout() {
		session_destroy();
		/*
		$success = "<script type='text/javascript'>alert('Logout Successful!')</script>";
		if(isset($_SESSION['message'])){
			$_SESSION['message'] = $success;
			echo $success;
		}
		*/
		$this->load->view('template/header');
		$this->load->view('admin/login');
		$this->load->view('template/footer');
	}

	#LOGIN
	public function login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$verify = $this->generic_reservation_model->login($username,$password);
		if(isset($verify)){
			$userdata = array( 
				'user_id' => $verify[0]->user_id,
				'ut_id' => $verify[0]->ut_id,
				'user_username' => $verify[0]->user_username
				);
				$this->session->set_userdata($userdata);
			
			if('1' == $verify[0]->ut_id){ #admin
				$success = "<script type='text/javascript'>alert('Login Successful!')</script>";
				if(!isset($_SESSION['message'])){
					$_SESSION['message'] = $success;
					echo $success;
				}
				$this->home();
			}
			if('2' == $verify[0]->ut_id){ #user
				$data['user_data']=$this->generic_reservation_model->login_user($username,$password);
				$data['reservation_data']=$this->generic_reservation_model->reservation_details($_SESSION['user_id']);
				$success = "<script type='text/javascript'>alert('Login Successful!')</script>";
				if(!isset($_SESSION['message'])){
					$_SESSION['message'] = $success;
					echo $success;
				}
				$this->load->view('user/header4');
				$this->load->view('user/sidebarnav4');
				$this->load->view('user/user_profile',$data);
				$this->load->view('user/footer4');
			}
			if('3' == $verify[0]->ut_id){ #client
				$verify = $this->generic_reservation_model->login_client($username,$password);
				if(isset($verify)){
					$userdata = array( 
						'user_id' => $verify[0]->user_id,
						'ut_id' => $verify[0]->ut_id,
						'user_username' => $verify[0]->user_username,
						'client_id' => $verify[0]->client_id,
						'client_name' => $verify[0]->client_name,
						
					);
				}
				$this->session->set_userdata($userdata);
				$data['home'] = $this->generic_reservation_model->home_client($_SESSION['client_id']);
				$data['home1'] = $this->generic_reservation_model->read_home_reservations($userdata['client_id']); 
				$data['home2'] = $this->generic_reservation_model->read_home_branches($_SESSION['client_id']); 
				$data['home3'] = $this->generic_reservation_model->read_home_subservices($_SESSION['client_id']);  
				$data['br'] = $this->generic_reservation_model->read_br(); 		
				$success = "<script type='text/javascript'>alert('Login Successful!')</script>";
				if(!isset($_SESSION['message'])){
					$_SESSION['message'] = $success;
					echo $success;
				}
				$this->load->view('template/header');
				$this->load->view('client/sidebarnav2');
				$this->load->view('client/home_client',$data);
				$this->load->view('template/footer');
			}
			if('4' == $verify[0]->ut_id){ #branch
				$verify = $this->generic_reservation_model->login_branch($username,$password);
				if(isset($verify)){
					$userdata = array( 
						'user_id' => $verify[0]->user_id,
						'ut_id' => $verify[0]->ut_id,
						'client_id' => $verify[0]->client_id,
						'user_username' => $verify[0]->user_username,
						'branch_id' => $verify[0]->branch_id,
						'branch_name' => $verify[0]->branch_name,
					);
				}
				$this->session->set_userdata($userdata);
				$data['home1'] = $this->generic_reservation_model->home_branch($_SESSION['branch_id']);
				$data['home'] = $this->generic_reservation_model->read_home_reservations_branch($userdata['branch_id']); 
				$data['subs'] = $this->generic_reservation_model->view_subservice2($userdata['branch_id']);
				$data['br'] = $this->generic_reservation_model->read_br(); 
				$success = "<script type='text/javascript'>alert('Login Successful!')</script>";
				if(!isset($_SESSION['message'])){
					$_SESSION['message'] = $success;
					echo $success;
				}
				$this->load->view('template/header');
				$this->load->view('branch/sidebarnav3');
				$this->load->view('branch/home_branch',$data);
				$this->load->view('template/footer');			}
		}
		else{
			$success = "<script type='text/javascript'>alert('Username and Password Mismatch!')</script>";
			if(!isset($_SESSION['message'])){
				$_SESSION['message'] = $success;
				echo $success;
			}
			$this->load->view('template/header');
			$this->load->view('admin/login');
			$this->load->view('template/footer');	
		}
	}
#==============================================================================CLIENTS==============================================================================================
	#READ client
	public function read_cli(){
		$data['clients'] = $this->generic_reservation_model->read_client();
		$data['clients_inactive'] = $this->generic_reservation_model->read_client_inactive();
		$this->load->view('template/header');
		$this->load->view('admin/sidebarnav');
		$this->load->view('admin/client',$data);
		$this->load->view('template/footer');	
	}
	
	#DELETE client
	public function delete_cli($data){
		$this->generic_reservation_model->delete_client($data);
		echo "<script type='text/javascript'>alert('Successfully Deleted!')</script>";
		$this->read_cli();
	}	
	
	#ACTIVATE client
	public function activate_cli($data){
		$this->generic_reservation_model->activate_client($data);
		echo "<script type='text/javascript'>alert('Successfully Activated!')</script>";
		$this->read_cli();
	}
	
	#VIEW_BTN specific client
	public function view_cli($data){
		$val['clients'] = $this->generic_reservation_model->view_client($data);	
		$val['subs'] = $this->generic_reservation_model->view_subservice($data);
		$val['branches'] = $this->generic_reservation_model->read_branch($data);
		$val['client_status'] = $this->generic_reservation_model->check_client_status($data);
		$val['branches_inactive'] = $this->generic_reservation_model->read_branch_inactive($data);
		$this->load->view('template/header');
		$this->load->view('admin/sidebarnav');
		$this->load->view('admin/viewbtn_clients',$val);
		$this->load->view('template/footer');	

	}
	
#==============================================================================BRANCHES==============================================================================================
	#READ branch
	public function read_bra(){
		$data['branches'] = $this->generic_reservation_model->read_branch();
		$data['branches_inactive'] = $this->generic_reservation_model->read_branch_inactive();
		$this->load->view('template/header');
		$this->load->view('admin/sidebarnav');
		$this->load->view('admin/viewbtn_clients',$data);
		$this->load->view('template/footer');	
	}
	
	#DELETE branch
	public function delete_bra($data){
		$this->generic_reservation_model->delete_branch($data);
		$val = $this->generic_reservation_model->get_client_id($data);
		echo "<script type='text/javascript'>alert('Successfully Deleted!')</script>";
		$this->view_cli($val[0]->client_id);
	}

	#ACTIVATE branch
	public function activate_bra($data){
		$this->generic_reservation_model->activate_branch($data);
		$val = $this->generic_reservation_model->get_client_id($data);
		echo "<script type='text/javascript'>alert('Successfully Activated!')</script>";
		$this->view_cli($val[0]->client_id);
	}	
	
	#VIEW_BTN specific branch
	public function view_bra($data){
		$val['branches'] = $this->generic_reservation_model->view_branch($data);	
		$val['subs'] = $this->generic_reservation_model->view_subservice2($data);
		$this->load->view('template/header');
		$this->load->view('admin/viewbtn_branches',$val);
		$this->load->view('template/footer');	
	}
	
	#READ branch
	public function read_bra_all(){
		$data['branches'] = $this->generic_reservation_model->read_branch_all();
		$data['branches_inactive'] = $this->generic_reservation_model->read_branch_all_inactive();
		$this->load->view('template/header');
		$this->load->view('admin/sidebarnav');
		$this->load->view('admin/read_branches',$data);
		$this->load->view('template/footer');	
	}
	
	#DELETE branch
	public function delete_bra_all($data){
		$this->generic_reservation_model->delete_branch($data);
		echo "<script type='text/javascript'>alert('Successfully Deleted!')</script>";
		$this->read_bra_all();
	}

	#ACTIVATE branch
	public function activate_bra_all($data){
		$this->generic_reservation_model->activate_branch($data);
		echo "<script type='text/javascript'>alert('Successfully Activated!')</script>";
		$this->read_bra_all();
	}	
	
	
#==============================================================================SERVICES==============================================================================================
	#READ service
	public function read_ser(){
		$data['services'] = $this->generic_reservation_model->read_service();
		$data['services_inactive'] = $this->generic_reservation_model->read_service_inactive();
		$this->load->view('template/header');
		$this->load->view('admin/sidebarnav');
		$this->load->view('admin/services',$data);
		$this->load->view('template/footer');	

	}
	
	#CREATE service
	public function create_ser(){
		$service=$_POST['service_name'];
		$check=$this->db->get_where('services', array('service_name'=>$service));

		if($check->num_rows()> 0){
				echo "<script type='text/javascript'>alert('Service already exist!')</script>";
				$this->read_ser();
			}
			else{
				$data = array(
				'created_by' => $this->session->userdata['user_username'],
				'service_name' => $_POST['service_name']
				);
			$this->generic_reservation_model->create_service($data);
			echo "<script type='text/javascript'>alert('Successfully Added!')</script>";
			$this->read_ser();
				
			}
			
	}
	
	#DELETE service
	public function delete_ser($data){
		$this->generic_reservation_model->delete_service($data);
		echo "<script type='text/javascript'>alert('Successfully Deactivated!')</script>";
		$this->read_ser();
	}
	
	#ACTIVATE service
	public function activate_ser($data){
		$this->generic_reservation_model->activate_service($data);
		echo "<script type='text/javascript'>alert('Successfully Activated!')</script>";
		$this->read_ser();
	}
	
	#READ which service to UPDATE
	public function read_update_ser($data){
		$current = $this->db->get_where('services',array('service_id' => $data))->row();
		$this->load->view('template/header');
		$this->load->view('admin/sidebarnav');
		$this->load->view('admin/update_services',array('services' => $current));
		$this->load->view('template/footer');	
	}
	
	#UPDATE service
	public function update_ser($data){

		$result=$this->generic_reservation_model->update_service($data);
		if($result){
			echo "<script type='text/javascript'>alert('Successfully Updated!')</script>";
			$this->read_ser();
		}
		else{
			$this->read_ser();
		}

	}	
	
#===================================================================LOCATIONS==========================================================
	#READ location
	public function read_loc(){
		$data['locations'] = $this->generic_reservation_model->read_location();
		$data['locations_inactive'] = $this->generic_reservation_model->read_location_inactive();
		$this->load->view('template/header');
		$this->load->view('admin/sidebarnav');
		$this->load->view('admin/locations',$data);
		$this->load->view('template/footer');	

	}
	
	#CREATE location
	public function create_loc(){
		$location=$_POST['location_name'];
		$check=$this->db->get_where('locations', array('location_name'=>$location));

		if($check->num_rows()> 0){
				echo "<script type='text/javascript'>alert('Location already exist!')</script>";
				$this->read_loc();

			}
			else{
				$data = array(
				'created_by' => $this->session->userdata['user_username'],
				'location_name' => $_POST['location_name']
			);
			$this->generic_reservation_model->create_location($data);
			echo "<script type='text/javascript'>alert('Successfully Added!')</script>";
			$this->read_loc();
			}

	}
	
	#DELETE location
	public function delete_loc($data){
		$this->generic_reservation_model->delete_location($data);
		echo "<script type='text/javascript'>alert('Successfully Deactivated!')</script>";
		$this->read_loc();
	}
	
	#ACTIVATE location
	public function activate_loc($data){
		$this->generic_reservation_model->activate_location($data);
		echo "<script type='text/javascript'>alert('Successfully Activated!')</script>";
		$this->read_loc();
	}
	
	#READ which location to UPDATE
	public function read_update_loc($data){
		$current = $this->db->get_where('locations',array('location_id' => $data))->row();
		$this->load->view('template/header');
		$this->load->view('admin/sidebarnav');
		$this->load->view('admin/update_locations',array('locations' => $current));
		$this->load->view('template/footer');	

	}
	
	#UPDATE location
	public function update_loc($data){
		$result=$this->generic_reservation_model->update_location($data);

		if($result){
			echo "<script type='text/javascript'>alert('Successfully Updated!')</script>";
			$this->read_loc();
		}
		else{
			$this->read_loc();	
		}
	}

#===================================================RESERVATIONS========================================================================================
	#READ reservation
	public function read_res(){
		$data['resers'] = $this->generic_reservation_model->read_reservation_admin();		
		$data['resers_inactive'] = $this->generic_reservation_model->read_reservation_inactive_admin();			
		$this->load->view('template/header');
		$this->load->view('admin/sidebarnav');
		$this->load->view('admin/read_reservations',$data);
		$this->load->view('template/footer');	

	}
	
	#VIEW_BTN reservation
	public function view_res($data){
		$val['resers'] = $this->generic_reservation_model->view_reservation($data); 
		$val['resers_sers'] = $this->generic_reservation_model->view_reservation_services($data); 
		$this->load->view('admin/viewbtn_reservations',$val);
	}
}
?>
