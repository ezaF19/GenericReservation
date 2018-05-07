<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('generic_reservation_model');
	}
	public function index(){
		$this->load->view('admin/login');
	}

	#LOGOUT 
	public function logout() {
		session_destroy();
		echo "<script type='text/javascript'>alert('Logout Successful!')
		window.location='../';
		</script>";
		
		//redirect(base_url('../GenericReservation'));
	}
	#Deactivate
	public function deactivate($user_id){
		$this->db->query('
				UPDATE users set user_status ="I"
				WHERE user_id='.$user_id.';

			');
		$this->db->query('
				UPDATE reservations set reservation_status="I"
				WHERE customer_id='.$user_id.';
				');
		$this->logout();
	}

	#Activate
	public function activate($user_id){
		$this->db->query('
				UPDATE users set user_status ="A"
				WHERE user_id='.$user_id.';

			');
		$this->redirect_user();
		
	}

	#EDIT
	public function edit($user_id){
		$data['user_data']=$this->generic_reservation_model->getUserData($user_id);
		$this->load->view('user/header4');
				$this->load->view('user/sidebarnav4');
		$this->load->view('user/edit_user',$data);
								$this->load->view('user/footer4');

	}

	#UPDATE
	public function update_user(){

		$result=$this->generic_reservation_model->update_user();
		$data['user_data']=$this->generic_reservation_model->user_profile($_SESSION['user_id']);
		$data['reservation_data']=$this->generic_reservation_model->reservation_details($_SESSION['user_id']);
		$this->load->view('user/header4');
				$this->load->view('user/sidebarnav4');
		$this->load->view('user/user_profile',$data);
						$this->load->view('user/footer4');

	}

	#Redirect_USER
	public function redirect_user(){
		$data['user_data']=$this->generic_reservation_model->user_profile($_SESSION['user_id']);
		$data['reservation_data']=$this->generic_reservation_model->reservation_details($_SESSION['user_id']);
		$this->load->view('user/header4');
				$this->load->view('user/sidebarnav4');
		$this->load->view('user/user_profile',$data);
						$this->load->view('user/footer4');

	}

	#UserProfile
	public function user_profile(){
		
		$data['user_data']=$this->generic_reservation_model->user_profile($_SESSION['user_id']);
		$data['reservation_data']=$this->generic_reservation_model->reservation_details($_SESSION['user_id']);
		$this->load->view('user/header4');
				$this->load->view('user/sidebarnav4');
		$this->load->view('user/user_profile',$data);
						$this->load->view('user/footer4');


	}
	public function register(){
		$this->load->view('user/register');
	}

	public function client_register(){
		$this->load->view('user/client_register');
	}

	public function submit(){
		$result=$this->generic_reservation_model->submit();
		if($result){
			$this->session->set_flashdata('success_msg', 'You have successfully registered');
		}
		else{
			$this->session->set_flashdata('error_msg', 'Error, please try again');
		}
		redirect(base_url('../GenericReservation'));
	}
	public function submit_client(){
		$result=$this->generic_reservation_model->submit_client();
		if($result){
			$this->session->set_flashdata('success_msg', 'You have successfully registered');
		}
		else{
			$this->session->set_flashdata('error_msg', 'Error, please try again');
		}
		redirect(base_url('../GenericReservation'));
	}

	public function make_reservation(){

		$data['client_data']=  $this->generic_reservation_model->client_data();
		$this->load->view('user/header4');
				$this->load->view('user/sidebarnav4');
		$this->load->view('user/reservations',$data);
						$this->load->view('user/footer4');

	}
	public function submit_reservation(){
		$data['client_data']=  $this->generic_reservation_model->display_client();
		$this->load->view('user/header4');
				$this->load->view('user/sidebarnav4');
		$this->load->view('user/reservations',$data);
						$this->load->view('user/footer4');


	}
	public function view_client_data($client_id){
		$data['branch_data']= $this->generic_reservation_model->view_client_data($client_id);
		$data['client_data']=  $this->generic_reservation_model->view_client_main($client_id);
		$this->load->view('user/header4');
				$this->load->view('user/sidebarnav4');
				$this->load->view('user/view_client',$data);
								$this->load->view('user/footer4');

	}
	public function reserve($branch_id){

		$data['sub_service']=$this->generic_reservation_model->view_sub_data($branch_id);
		$data['branch_data']=$this->generic_reservation_model->view_branch_data($branch_id);
		$this->load->view('user/header4');
				$this->load->view('user/sidebarnav4');
		$this->load->view('user/reserve',$data);
						$this->load->view('user/footer4');

	}
	public function final_reservation(){
		$this->generic_reservation_model->final_reservation();
		redirect('../GenericReservation/User_controller/user_profile','refresh');
		
	}
	public function cancel_reservation($reservation_id){
		$this->db->query('
				UPDATE reservations set reservation_id ="I"
				WHERE reservation_id='.$reservation_id.';

			');
		$this->redirect_user();
	}
}
?>
