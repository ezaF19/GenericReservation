<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('generic_reservation_model');
	}
	
	#HOME
	public function home_client(){
		$data['home'] = $this->generic_reservation_model->home_client($_SESSION['client_id']);
		$data['home1'] = $this->generic_reservation_model->read_home_reservations($_SESSION['client_id']); 
		$data['home2'] = $this->generic_reservation_model->read_home_branches($_SESSION['client_id']); 
		$data['home3'] = $this->generic_reservation_model->read_home_subservices($_SESSION['client_id']);  
		$data['br'] = $this->generic_reservation_model->read_br(); 		
		$this->load->view('template/header');
		$this->load->view('client/sidebarnav2',$data['home']);
		$this->load->view('client/home_client',$data);
		$this->load->view('template/footer');
	}
	public function read_update_hom($data){
		$val['clients'] = $this->generic_reservation_model->read_home_info($data);
		$val['br'] = $this->generic_reservation_model->read_br(); 	
		$this->load->view('template/header');
		$this->load->view('client/sidebarnav2',$data);	
		$this->load->view('client/update_home',$val);
		$this->load->view('template/footer');
	}
	public function update_hom($data){
		$this->generic_reservation_model->update_home_client($data);
		echo "<script type='text/javascript'>alert('Successfully Updated!')</script>";
		$this->home_client();
	}
	
#=================================================================================RESERVATION==========================================================================================
	
	#READ reservation
	public function read_res(){
		$data['resers'] = $this->generic_reservation_model->read_reservation($_SESSION['client_id']);		
		$data['resers_inactive'] = $this->generic_reservation_model->read_reservation_inactive($_SESSION['client_id']);			
		$this->load->view('template/header');
		$this->load->view('client/sidebarnav2');
		$this->load->view('client/read_reservations',$data);
		$this->load->view('template/footer');

	}

	#VIEW_BTN reservation
	public function view_res($data){
		$val['resers'] = $this->generic_reservation_model->view_reservation($data); 
		$val['resers_sers'] = $this->generic_reservation_model->view_reservation_services($data); 
		$this->load->view('template/header');
		$this->load->view('client/sidebarnav2');
		$this->load->view('client/viewbtn_reservations',$val);
		$this->load->view('template/footer');

	}
	
#=================================================================================SUBSERVICE==========================================================================================	
	
	#READ subservice 
	public function read_sub(){
		$data['subs'] = $this->generic_reservation_model->read_subservice($_SESSION['client_id']);	
		$data['subs_inactive'] = $this->generic_reservation_model->read_subservice_inactive($_SESSION['client_id']);			
		$this->load->view('template/header');
		$this->load->view('client/sidebarnav2');
		$this->load->view('client/read_subservices',$data);
		$this->load->view('template/footer');		
	}
	
	#CREATE subservice
	public function create_sub(){
		$subname=$_POST['subservice_name'];
		$check=$this->db->get_where('subservices', array('subservice_name'=>$subname));
		$clientid = $this->session->userdata['client_id'];


		if($check->num_rows()> 0){
				echo "<script type='text/javascript'>alert('Service already exist!')
			</script>";
				$this->read_sub();

			}
			else{
				$data = array(
				'client_id' => $_SESSION['client_id'],
				'subservice_name' => $_POST['subservice_name'],
				'subservice_etc' => $_POST['subservice_etc'],
				'subservice_price' => $_POST['subservice_price'],
				);
				$this->generic_reservation_model->create_subservice($data);
			
				$query = $this->db->query("SELECT * 
											FROM subservices
											ORDER BY subservice_id DESC");
				$query2 = $this->db->query("SELECT * 
											FROM clients as cl
											INNER JOIN branches as br ON cl.client_id = br.client_id
											WHERE cl.client_id = '$clientid'
											");
			foreach($query2->result() as $subs){	
			$data2 = array(
				'branch_id' => $subs->branch_id,
				'subservice_id' => $query->result()[0]->subservice_id
				);
			$this->generic_reservation_model->create_bs_connection($data2);
			}
			echo "<script type='text/javascript'>alert('Successfully Added!')
			window.location='../GenericReservation/services_client';
			</script>";
			}
		
	}		
		
	
	#READ which subservice to UPDATE
	public function read_update_sub($data){
		$current = $this->db->get_where('subservices',array('subservice_id' => $data))->row();
		$this->load->view('template/header');
		$this->load->view('client/sidebarnav2');
		$this->load->view('client/update_subservices',array('subservices' => $current));
		$this->load->view('template/footer');
	}
	
	#UPDATE subservice
	public function update_sub($data){

		$return=$this->generic_reservation_model->update_subservice($data);
		if($return){
			echo "<script type='text/javascript'>alert('Successfully Updated!')</script>";
			$this->read_sub();
		}
		else{
			$this->read_sub();
		}
	}
	
	#DELETE subservice
	public function delete_sub($data){
		$this->generic_reservation_model->delete_subservice($data);
		echo "<script type='text/javascript'>alert('Successfully Deleted!')</script>";
		$this->read_sub();
	}

	#ACTIVATE subservice
	public function activate_sub($data){
		$this->generic_reservation_model->activate_subservice($data);
		echo "<script type='text/javascript'>alert('Successfully Activated!')</script>";
		$this->read_sub($data);
	}	
	
#=================================================================================BRANCHES==========================================================================================	
	
	#READ branches
	public function read_bra(){
		$data['branches'] = $this->generic_reservation_model->read_branch_client($_SESSION['client_id']);	
		$data['branches_inactive'] = $this->generic_reservation_model->read_branch_client_inactive($_SESSION['client_id']);	
		$data['br'] = $this->generic_reservation_model->read_br(); 		
		$data['subservices'] = $this->generic_reservation_model->read_subservice($_SESSION['client_id']); 		
		$this->load->view('template/header');
		$this->load->view('client/sidebarnav2');
		$this->load->view('client/read_branches',$data);
		$this->load->view('template/footer');
	}
	
	#CREATE branches
	public function create_bra(){
		$data['home'] = $this->generic_reservation_model->home_client($_SESSION['client_id']);
		$client = $data['home'][0]->client_name;
		$clientid = $this->session->userdata['client_id'];
		
		$username=$_POST['user_username'];
		$check=$this->db->get_where('users', array('user_username'=>$username));


		if($check->num_rows()> 0){
				echo "<script type='text/javascript'>alert('Username Already Used!')</script>";
				$this->read_bra();
		}
		else{
			$data = array(
				'user_username' => $_POST['user_username'],			#)
				'user_password' => $_POST['user_password'],			#)create users for newly added branch
				'ut_id' => '4'										#)
				);
			

			$branch_n=$client.' - '.$_POST['branch_name'];
			$check_branch=$this->db->get_where('branches', array('branch_name'=>$branch_n));

			if($check_branch->num_rows()> 0){
					echo "<script type='text/javascript'>alert('Branch Name Already Used!')</script>";
					$this->read_bra();

					}
			else{
					$query = $this->db->query("SELECT * 
					FROM users
					ORDER BY user_id DESC");
					$data2 = array(
						'client_id' => $_SESSION['client_id'],				  #)
						'location_id' => $_POST['location_id'],				  #)
						'branch_name' => $client.' - '.$_POST['branch_name'], #)create branch in branches 
						'branch_street' => $_POST['branch_street'],			  #)
						'branch_contact' => $_POST['branch_contact'],		  #)
						'user_id' => $query->result()[0]->user_id,
					);
					$this->generic_reservation_model->create_branch($data2);
					$this->generic_reservation_model->create_branch_user($data);
					$query2 = $this->db->query("SELECT * 
						FROM branches
						ORDER BY branch_id DESC
						");	
					$query3 = $this->db->query("SELECT * 
						FROM subservices
						WHERE client_id = '$clientid';
						");
					foreach($query3->result() as $subs){
					$data3 = array(
						'branch_id' => $query2->result()[0]->branch_id,
						'subservice_id' => $subs->subservice_id
						);
					$this->generic_reservation_model->create_bs_connection($data3);
					}
					echo "<script type='text/javascript'>alert('Successfully Added!')</script>";
					$this->read_bra();
			
					}

			}
	}
	
	#VIEW_BTN specific branch
	public function view_bra($data){
		$val['branches'] = $this->generic_reservation_model->view_branch($data);	
		$val['subs'] = $this->generic_reservation_model->view_subservice2($data);
		$this->load->view('template/header');
		$this->load->view('client/viewbtn_branches',$val);
		$this->load->view('template/footer');
	}
	
	#DELETE branch
	public function delete_bra($data){
		$this->generic_reservation_model->delete_branch($data);
		$res = $this->generic_reservation_model->get_branch_reservation($data);
		foreach($res as $keyy){
			$this->generic_reservation_model->delete_branch_reservation($keyy->reservation_id);
		}
		echo "<script type='text/javascript'>alert('Successfully Dactivated!')</script>";
		$this->read_bra($data);
	}	
	
	#ACTIVATE branch
	public function activate_bra($data){
		$this->generic_reservation_model->activate_branch($data);
		echo "<script type='text/javascript'>alert('Successfully Activated!')</script>";
		$this->read_bra($data);
	}	
	
}
?>