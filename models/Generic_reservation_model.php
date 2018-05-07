<?php

class Generic_reservation_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();		
	}
	
	#READ home - client count
	public function read_home1(){
		$query = $this->db->query(
			'SELECT COUNT(user_id) as client_count
			FROM users
			WHERE user_status = "A" AND ut_id = 3;'
			);
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#READ home - client count
	public function read_home1_inactive(){
		$query = $this->db->query(
			'SELECT COUNT(user_id) as client_count
			FROM users
			WHERE user_status = "I" AND ut_id = 3;'
			);
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}

	#READ home - location count
	public function read_home2(){
		$query = $this->db->query(
			'SELECT COUNT(location_id) as location_count
			FROM locations
			WHERE location_status = "A";'
			);
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#READ home - location count
	public function read_home2_inactive(){
		$query = $this->db->query(
			'SELECT COUNT(location_id) as location_count
			FROM locations
			WHERE location_status = "I";'
			);
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#READ home - client count
	public function read_home3(){
		$query = $this->db->query(
			'SELECT COUNT(user_id) as user_count
			FROM users
			WHERE user_status = "A" AND ut_id = 2;'
			);
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#READ home - client count
	public function read_home3_inactive(){
		$query = $this->db->query(
			'SELECT COUNT(user_id) as user_count
			FROM users
			WHERE user_status = "I" AND ut_id = 2;'
			);
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#READ home - branch count
	public function read_home4(){
		$query = $this->db->query(
			'SELECT COUNT(user_id) as branch_count
			FROM users
			WHERE user_status = "A" AND ut_id = 4;'
			);
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#READ home - branch count
	public function read_home4_inactive(){
		$query = $this->db->query(
			'SELECT COUNT(user_id) as branch_count
			FROM users
			WHERE user_status = "I" AND ut_id = 4;'
			);
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#READ home - service count
	public function read_home5(){
		$query = $this->db->query(
			'SELECT COUNT(service_id) as service_count
			FROM services
			WHERE service_status = "A";'
			);
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#READ home - service count
	public function read_home5_inactive(){
		$query = $this->db->query(
			'SELECT COUNT(service_id) as service_count
			FROM services
			WHERE service_status = "I";'
			);
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
		
	#READ home - reservation count
	public function read_home6(){
		$query = $this->db->query(
			'SELECT COUNT(reservation_id) as reservation_count
			FROM reservations
			WHERE reservation_status = "A";'
			);
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#READ home - reservation count
	public function read_home6_inactive(){
		$query = $this->db->query(
			'SELECT COUNT(reservation_id) as reservation_count
			FROM reservations
			WHERE reservation_status = "I";'
			);
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}

	#LOGIN admin
	public function login($username,$password) {
		$username = str_replace("'","`",$username);
		$password = str_replace("'","`",$password);
		$query = $this->db->query(
		"SELECT *
		FROM users as us 
		WHERE user_username = '$username' AND user_password = '$password' AND user_status = 'A';"
		);
		if($query->num_rows() > 0){		
				return $query->result();
		}
		else{ 
			return NULL;
		}
	}
	
	#LOGIN client
	public function login_client($username,$password) {
		$username = str_replace("'","`",$username);
		$password = str_replace("'","`",$password);
		$query = $this->db->query(
		"SELECT *
		FROM users as us 
		LEFT JOIN clients as cl ON us.user_id = cl.user_id
		WHERE user_username = '$username' AND user_password = '$password' AND user_status = 'A';"
		);
		if($query->num_rows() > 0){		
				return $query->result();
		}
		else{ 
			return NULL;
		}
	}
	
	#LOGIN branch
	public function login_branch($username,$password) {
		$username = str_replace("'","`",$username);
		$password = str_replace("'","`",$password);
		$query = $this->db->query(
		"SELECT *
		FROM users as us 
		LEFT JOIN branches as br ON us.user_id = br.user_id
		LEFT JOIN locations as lo ON br.location_id = lo.location_id
		LEFT JOIN clients as cl ON br.client_id = cl.client_id
		WHERE user_username = '$username' AND user_password = '$password' AND user_status = 'A';"
		);
		if($query->num_rows() > 0){		
				return $query->result();
		}
		else{ 
			return NULL;
		}
	}
	
		
#==============================================================================ADMIN_CLIENTS==============================================================================================	
	#READ client
	public function read_client(){
		$query = $this->db->query(
			'SELECT *, se.service_name, lo.location_name
			FROM clients as cl
			INNER JOIN services as se ON cl.service_id = se.service_id
			INNER JOIN locations as lo ON cl.location_id = lo.location_id
			INNER JOIN users as us ON cl.user_id = us.user_id
			WHERE us.user_status = "A"
			ORDER BY cl.client_id;'
			);
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#READ client
	public function read_client_inactive(){
		$query = $this->db->query(
			'SELECT *, se.service_name, lo.location_name
			FROM clients as cl
			INNER JOIN services as se ON cl.service_id = se.service_id
			INNER JOIN locations as lo ON cl.location_id = lo.location_id
			INNER JOIN users as us ON cl.user_id = us.user_id
			WHERE us.user_status = "I"
			ORDER BY cl.client_id;'
			);
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#DELETE client
	public function delete_client($data){
		$query = $this->db->query(
			'UPDATE clients as cl
			INNER JOIN branches as br ON cl.client_id = br.client_id
			INNER JOIN users as us ON cl.user_id = us.user_id OR br.user_id = us.user_id
			SET us.user_status = "I"
			WHERE cl.client_id = '.$data.';
			');
		return $query;
	}
	
	#ACTIVATE client
	public function activate_client($data){
		$query = $this->db->query(
			'UPDATE clients as cl
			INNER JOIN users as us ON cl.user_id = us.user_id
			SET us.user_status = "A"
			WHERE client_id = '.$data.';
			');
		return $query;
	}
	
	#VIEW_BTN client
	public function view_client($data){
		$query = $this->db->query(
			"SELECT *
			FROM clients as cl
			LEFT JOIN services as se ON cl.service_id = se.service_id
			LEFT JOIN locations as lo ON cl.location_id = lo.location_id
			WHERE cl.client_id = '$data';
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}		
	
	#VIEW subservices for VIEW_BTN
	public function view_subservice($data){
		$query = $this->db->query(
			"SELECT *, su.*
			FROM clients as cl
			LEFT JOIN subservices as su ON cl.client_id = su.client_id
			WHERE cl.client_id = '$data' AND su.subservice_status = 'A';
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}

#==============================================================================ADMIN_SERVICES==============================================================================================	
	
	#READ service
	public function read_service(){
		$query = $this->db->query(
			'SELECT *
			FROM services as se
			WHERE service_status = "A"
			ORDER BY service_id;'
			);
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}	
	
	#READ service
	public function read_service_inactive(){
		$query = $this->db->query(
			'SELECT *
			FROM services as se
			WHERE service_status = "I"
			ORDER BY service_id;'
			);
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#CREATE service
	public function create_service($data){
		$this->db->insert("services",$data);
	}
	
		
	#DELETE service
	public function delete_service($data){
		$query = $this->db->query(
			'UPDATE services as se
			LEFT JOIN clients as cl ON cl.service_id = se.service_id
			LEFT JOIN users as us ON cl.user_id = us.user_id
			LEFT JOIN branches as br ON cl.client_id = br.client_id
			SET se.service_status = "I", us.user_status = "I"
			WHERE se.service_id = '.$data.';
			');
		return $query;
	}
	
	#ACTIVATE service
	public function activate_service($data){
		$query = $this->db->query(
			'UPDATE services as se
			SET se.service_status = "A"
			WHERE se.service_id = '.$data.';
			');
		return $query;
	}

	#UPDATE service
	public function update_service($data){
		$ser_name=$this->input->post('service_name');
		$check=$this->db->get_where('services', array('service_name'=>$ser_name));
		date_default_timezone_set('Asia/Kuala_Lumpur');

		if($check->num_rows()> 0){
				echo "<script type='text/javascript'>alert('Service already exist!')
			</script>";
			return false;
			}
		else{
			$field = array(
			'service_name' => $this->input->post('service_name'),
			'updated_by' => $this->session->userdata['user_username'],
			'updated_date' => date('Y-m-d H:i:s T', time())
			);
			if($data == 0){
				return $this->db->insert('services',$field);
			}
			else{
				$this->db->where('service_id', $data);
				return $this->db->update('services', $field);
				return true;
			}
		
		}

	}

#==============================================================================ADMIN_LOCATIONS==============================================================================================	
	#READ location
	public function read_location(){
		$query = $this->db->query(
			'SELECT *
			FROM locations as lo
			WHERE location_status = "A"
			ORDER BY location_id;'
			);
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}	
	
	#READ location
	public function read_location_inactive(){
		$query = $this->db->query(
			'SELECT *
			FROM locations as lo
			WHERE location_status = "I"
			ORDER BY location_id;'
			);
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#CREATE location
	public function create_location($data){
		$this->db->insert("locations",$data);
	}
	
		
	#DELETE location
	public function delete_location($data){
		$query = $this->db->query(
			'UPDATE locations as lo
			LEFT JOIN clients as cl ON cl.location_id = lo.location_id
			LEFT JOIN users as us ON cl.user_id = us.user_id
			SET lo.location_status = "I", us.user_status = "I"
			WHERE lo.location_id = '.$data.';
			');
		return $query;
	}
	
	#ACTIVATE location
	public function activate_location($data){
		$query = $this->db->query(
			'UPDATE locations as lo
			SET lo.location_status = "A"
			WHERE lo.location_id = '.$data.';
			');
		return $query;
	}

	#UPDATE location
	public function update_location($data){
		$location= $this->input->post('location_name');
		$check=$this->db->get_where('locations', array('location_name'=>$location));

		if($check->num_rows()> 0){
				echo "<script type='text/javascript'>alert('Location already exist!')
					</script>";
				return false;

			}
			else{
				date_default_timezone_set('Asia/Kuala_Lumpur');
				$field = array(
				'location_name' => $this->input->post('location_name'),
				'updated_by' => $this->session->userdata['user_username'],
				'updated_date' => date('Y-m-d H:i:s T', time())
				);
			if($data == 0){
				return $this->db->insert('locations',$field);
			}
			else{
				$this->db->where('location_id', $data);
				return $this->db->update('locations', $field);
				}	
			return true;
			}






		
	}

#==============================================================================ADMIN_BRANCHES==============================================================================================	
	
	#READ branch
	public function read_branch($data){
		$query = $this->db->query(
			"SELECT * 
			FROM clients as cl
			LEFT JOIN branches as br ON cl.client_id = br.client_id
			LEFT JOIN users as us ON br.user_id = us.user_id
			LEFT JOIN locations as lo ON br.location_id = lo.location_id
			WHERE cl.client_id = '$data' AND user_status = 'A'
			ORDER BY br.branch_id;
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#READ branch
	public function read_branch_inactive($data){
		$query = $this->db->query(
			"SELECT * 
			FROM clients as cl
			LEFT JOIN branches as br ON cl.client_id = br.client_id
			LEFT JOIN users as us ON br.user_id = us.user_id
			LEFT JOIN locations as lo ON br.location_id = lo.location_id
			WHERE cl.client_id = '$data' AND user_status = 'I'
			ORDER BY br.branch_id;
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
		
	#READ branch
	public function read_branch_all(){
		$query = $this->db->query(
			"SELECT * 
			FROM clients as cl
			LEFT JOIN branches as br ON cl.client_id = br.client_id
			LEFT JOIN users as us ON br.user_id = us.user_id
			LEFT JOIN locations as lo ON br.location_id = lo.location_id
			LEFT JOIN services as se ON cl.service_id = se.service_id
			WHERE user_status = 'A'
			ORDER BY br.branch_id;
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#READ branch
	public function read_branch_all_inactive(){
		$query = $this->db->query(
			"SELECT * 
			FROM clients as cl
			LEFT JOIN branches as br ON cl.client_id = br.client_id
			LEFT JOIN users as us ON br.user_id = us.user_id
			LEFT JOIN locations as lo ON br.location_id = lo.location_id
			LEFT JOIN services as se ON cl.service_id = se.service_id
			WHERE user_status = 'I'
			ORDER BY br.branch_id;
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#GET client_id for delete_bra in admin_controller
	public function get_client_id($data){
		$query = $this->db->query(
			"SELECT * 
			FROM branches as br
			LEFT JOIN clients as cl ON br.client_id = cl.client_id
			WHERE br.branch_id = '$data';
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#CHECK if client status is Inactive
	public function check_client_status($data){
		$query = $this->db->query(
			"SELECT * 
			FROM clients as cl
			LEFT JOIN users as us ON cl.user_id = us.user_id
			WHERE cl.client_id = '$data';
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#VIEW_BTN branch
	public function view_branch($data){
		$query = $this->db->query(
			"SELECT *
			FROM branches as br
			LEFT JOIN clients as cl ON br.client_id = cl.client_id
			LEFT JOIN locations as lo ON br.location_id = lo.location_id
			WHERE br.branch_id = '$data';
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}		
	
	#VIEW subservices for VIEW_BTN
	public function view_subservice2($data){
		$query = $this->db->query(
			"SELECT *
			FROM subservices as su
			LEFT JOIN bs_connection bs ON su.subservice_id = bs.subservice_id
			LEFT JOIN branches as br ON bs.branch_id = br.branch_id
			WHERE br.branch_id = '$data' AND bs.status = 'A';
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
#==============================================================================ADMIN_RESERVATIONS==============================================================================================	
	
	#READ reservation
	public function read_reservation_admin(){
		$query = $this->db->query(
			"SELECT *
			FROM reservations as re
			LEFT JOIN customers as cu ON re.customer_id = cu.customer_id
			LEFT JOIN users as us ON cu.user_id = us.user_id
			LEFT JOIN branches as br ON re.branch_id = br.branch_id
			LEFT JOIN clients as cl ON br.client_id = cl.client_id
			WHERE re.reservation_status = 'A' AND us.user_status = 'A'
			ORDER BY reservation_id;
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}	
	
	#READ reservation
	public function read_reservation_inactive_admin(){
		$query = $this->db->query(
			"SELECT *
			FROM reservations as re
			LEFT JOIN customers as cu ON re.customer_id = cu.customer_id
			LEFT JOIN users as us ON cu.user_id = us.user_id
			LEFT JOIN branches as br ON re.branch_id = br.branch_id
			LEFT JOIN clients as cl ON br.client_id = cl.client_id
			WHERE re.reservation_status = 'I'
			ORDER BY reservation_id;
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	
#////////////////////////////////////////////////////////////////////////////////////////////CLIENT SHIZZ/////////////////////////////////////////////////////////////////////////////////////

	#READ client info on home
	public function home_client($data) {
		$query = $this->db->query(
		"SELECT *
		FROM users as us 
		LEFT JOIN clients as cl ON us.user_id = cl.user_id
		LEFT JOIN locations as lo ON cl.location_id = lo.location_id
		LEFT JOIN services as se ON cl.service_id = se.service_id
		WHERE user_status = 'A' AND cl.client_id = '$data';
		");
		if($query->num_rows() > 0){		
				return $query->result();
		}
		else{ 
			return NULL;
		}
	}
	
	#READ home - reservation count
	public function read_home_reservations($data){
		$query = $this->db->query(
			"SELECT COUNT(reservation_id) as reservation_count
			FROM reservations as re
			INNER JOIN branches as br ON re.branch_id = br.branch_id
			INNER JOIN clients as cl ON br.client_id = cl.client_id 
			WHERE reservation_status = 'A' AND cl.client_id = '$data';"
			);
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	#READ home - branch count
	public function read_home_branches($data){
		$query = $this->db->query(
			"
			SELECT COUNT(branch_id) as branch_count
			FROM branches as br
			INNER JOIN clients as cl ON br.client_id = cl.client_id
			INNER JOIN locations as lo ON br.location_id = lo.location_id
			INNER JOIN users as us ON br.user_id = us.user_id
			WHERE br.client_id = '$data' AND us.user_status = 'A'
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#READ home - subservice count
	public function read_home_subservices($data){
		$query = $this->db->query(
			"SELECT COUNT(subservice_id) as subservice_count
			FROM subservices as se
			INNER JOIN clients as cl ON se.client_id = cl.client_id 
			WHERE subservice_status = 'A' AND cl.client_id = '$data';"
			);
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#READ home - client info
	public function read_home_clients(){
		$query = $this->db->query(
			'SELECT *
			FROM clients as cl 
			LEFT JOIN users as us ON cl.user_id = us.user_id
			LEFT JOIN locations as lo ON cl.location_id = lo.location_id
			LEFT JOIN services as se ON cl.service_id = se.service_id
			WHERE us.user_status = "A";'
			);
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#READ home - client info
	public function read_home_info($data){
		$query = $this->db->query(
			"SELECT *
			FROM clients as cl 
			LEFT JOIN users as us ON cl.user_id = us.user_id
			LEFT JOIN locations as lo ON cl.location_id = lo.location_id
			LEFT JOIN services as se ON cl.service_id = se.service_id
			WHERE cl.client_id = '$data';
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#UPDATE home_client
	public function update_home_client($data){
		$field = array(
			'client_name' => $this->input->post('client_name'),
			'location_id' => $this->input->post('location_id'),
			'client_contact' => $this->input->post('client_contact'),
			'client_street' => $this->input->post('client_street'),
			'client_email' => $this->input->post('client_email'),
			'client_profile' => $this->input->post('client_profile'),
		);
		if($data == 0){
			return $this->db->insert('clients',$field);
		}
		else{
			$this->db->where('client_id', $data);
			return $this->db->update('clients', $field);
		}
	}
	
#=================================================================================CLIENT_RESERVATION==========================================================================================	
	
	#READ reservation
	public function read_reservation($data){
		$query = $this->db->query(
			"SELECT *
			FROM reservations as re
			LEFT JOIN customers as cu ON re.customer_id = cu.customer_id
			LEFT JOIN users as us ON cu.user_id = us.user_id
			LEFT JOIN branches as br ON re.branch_id = br.branch_id
			LEFT JOIN clients as cl ON br.client_id = cl.client_id
			WHERE cl.client_id = '$data' AND re.reservation_status = 'A' AND us.user_status = 'A'
			ORDER BY reservation_id;
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}	
	
	#READ reservation
	public function read_reservation_inactive($data){
		$query = $this->db->query(
			"SELECT *
			FROM reservations as re
			LEFT JOIN customers as cu ON re.customer_id = cu.customer_id
			LEFT JOIN users as us ON cu.user_id = us.user_id
			LEFT JOIN branches as br ON re.branch_id = br.branch_id
			LEFT JOIN clients as cl ON br.client_id = cl.client_id
			WHERE cl.client_id = '$data' AND re.reservation_status = 'I'
			ORDER BY reservation_id;
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#VIEW_BTN reservation
	public function view_reservation($data){
		$query = $this->db->query(
			"SELECT *
			FROM reservations as re
			LEFT JOIN customers as cu ON re.customer_id = cu.customer_id
			LEFT JOIN users as us ON cu.user_id = us.user_id
			LEFT JOIN branches as br ON re.branch_id = br.branch_id
			LEFT JOIN locations as lo ON br.location_id = lo.location_id
			WHERE re.reservation_id = '$data'
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#VIEW_BTN reservation
	public function view_reservation_services($data){
		$query = $this->db->query(
			"SELECT *
			FROM rs_connection as rs
			LEFT JOIN bs_connection as bs ON rs.branch_subservice_id = bs.branch_subservice_id
			LEFT JOIN subservices as su ON bs.subservice_id = su.subservice_id
			WHERE rs.reservation_id = '$data'
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}

#=================================================================================CLIENT_SUBSERVICE==========================================================================================	
	
	#READ subservice
	public function read_subservice($data){
		$query = $this->db->query(
			"SELECT *
			FROM subservices as su
			INNER JOIN clients as cl ON su.client_id = cl.client_id
			WHERE su.client_id = '$data' AND subservice_status = 'A'
			ORDER BY subservice_id;
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#READ subservice
	public function read_subservice_inactive($data){
		$query = $this->db->query(
			"SELECT *
			FROM subservices as su
			INNER JOIN clients as cl ON su.client_id = cl.client_id
			WHERE su.client_id = '$data' AND subservice_status = 'I'
			ORDER BY subservice_id;
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#CREATE subservice
	public function create_subservice($data){
		$this->db->insert("subservices",$data);
	}
	
	#UPDATE subservice
	public function update_subservice($data){
		$sub_name=$this->input->post('subservice_name');
		$check=$this->db->get_where('subservices', array('subservice_name'=>$sub_name));
		date_default_timezone_set('Asia/Kuala_Lumpur');

		if($check->num_rows()> 0){
				echo "<script type='text/javascript'>alert('Service already exist!')
			</script>";
			return false;
			}
		else{
			$field = array(
			'subservice_name' => $this->input->post('subservice_name'),
			'subservice_etc' => $this->input->post('subservice_etc'),
			'subservice_price' => $this->input->post('subservice_price'),
			'updated_date' => date('Y-m-d H:i:s T', time())
		);
			if($data == 0){
				return $this->db->insert('subservices',$field);
			}
			else{
				$this->db->where('subservice_id', $data);
				return $this->db->update('subservices', $field);
			}
			return true;

		
		}
	}
	
	#DELETE subservice
	public function delete_subservice($data){
		$query = $this->db->query(
			'UPDATE subservices
			SET subservice_status = "I"
			WHERE subservice_id = '.$data.';
			');
		return $query;
	}
	
	#ACTIVATE subservice
	public function activate_subservice($data){
		$query = $this->db->query(
			'UPDATE subservices
			SET subservice_status = "A"
			WHERE subservice_id = '.$data.';
			');
		return $query;
	}

#=================================================================================CLIENT_BRANCHES==========================================================================================	
	
	#READ branch
	public function read_branch_client($data){
		$query = $this->db->query(
			"SELECT *
			FROM branches as br
			INNER JOIN clients as cl ON br.client_id = cl.client_id
			INNER JOIN locations as lo ON br.location_id = lo.location_id
			INNER JOIN users as us ON br.user_id = us.user_id
			WHERE br.client_id = '$data' AND us.user_status = 'A'
			ORDER BY branch_id;
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#READ branch
	public function read_branch_client_inactive($data){
		$query = $this->db->query(
			"SELECT *
			FROM branches as br
			INNER JOIN clients as cl ON br.client_id = cl.client_id
			INNER JOIN locations as lo ON br.location_id = lo.location_id
			INNER JOIN users as us ON br.user_id = us.user_id
			WHERE br.client_id = '$data' AND us.user_status = 'I'
			ORDER BY branch_id;
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}

	#location for 'read branches' combobox
	public function read_br(){
		$query = $this->db->query(
			'SELECT *
			FROM locations
			WHERE location_status = "A"
			ORDER BY location_name;'
		);
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#GET branch - reservation
	public function get_branch_reservation($data){
		$query = $this->db->query(
			"SELECT *
			FROM reservations as re
			WHERE re.branch_id = '$data';
			");
		return $query->result();
	}
	
	#DELETE branch - reservation
	public function delete_branch_reservation($data){
		$query = $this->db->query(
			"UPDATE reservations as re
			SET re.reservation_status = 'I'
			WHERE re.reservation_id = '$data';
			");
	}
	
	#DELETE branch
	public function delete_branch($data){
		$this->db->query(
			"UPDATE users as us
			LEFT JOIN branches as br ON us.user_id = br.user_id
			SET us.user_status = 'I'
			WHERE br.branch_id = '$data';
		");
	}
	
	#ACTIVATE branch
	public function activate_branch($data){
		$this->db->query(
			"UPDATE users as us
			LEFT JOIN branches as br ON us.user_id = br.user_id
			SET us.user_status = 'A'
			WHERE br.branch_id = '$data';
		");
	}
	
	#CREATE branch - branches table
	public function create_branch($data){
		$this->db->insert("branches",$data);
	}
	
	#CREATE branch - users table
	public function create_branch_user($data){
		$this->db->insert("users",$data);
	}
	
	#CREATE branch - bs_connection table
	public function create_bs_connection($data){
		$this->db->insert("bs_connection",$data);
	}
	
#////////////////////////////////////////////////////////////////////////////////////////////BRANCH SHIZZ/////////////////////////////////////////////////////////////////////////////////////
	
	#READ client info on home
	public function home_branch($data) {
		$query = $this->db->query(
		"SELECT *
		FROM users as us 
		LEFT JOIN branches as br ON us.user_id = br.user_id
		LEFT JOIN clients as cl ON br.client_id = cl.client_id
		LEFT JOIN locations as lo ON br.location_id = lo.location_id
		WHERE us.user_status = 'A' AND br.branch_id = '$data';
		");
		if($query->num_rows() > 0){		
				return $query->result();
		}
		else{ 
			return NULL;
		}
	}
	
	#READ home - reservation count
	public function read_home_reservations_branch($data){
		$query = $this->db->query(
			"SELECT COUNT(reservation_id) as reservation_count
			FROM reservations as re
			INNER JOIN branches as br ON re.branch_id = br.branch_id
			WHERE reservation_status = 'A' AND br.branch_id = '$data';"
			);
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#READ reservation
	public function read_reservation_branch($data){
		$query = $this->db->query(
			"SELECT *
			FROM reservations as re
			LEFT JOIN customers as cu ON re.customer_id = cu.customer_id
			LEFT JOIN users as us ON cu.user_id = us.user_id
			LEFT JOIN branches as br ON re.branch_id = br.branch_id
			WHERE br.branch_id = '$data' AND re.reservation_status = 'A' AND us.user_status = 'A'
			ORDER BY reservation_id;
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}	
	
	#READ reservation
	public function read_reservation_branch_inactive($data){
		$query = $this->db->query(
			"SELECT *
			FROM reservations as re
			LEFT JOIN customers as cu ON re.customer_id = cu.customer_id
			LEFT JOIN users as us ON cu.user_id = us.user_id
			LEFT JOIN branches as br ON re.branch_id = br.branch_id
			WHERE br.branch_id = '$data' AND re.reservation_status = 'I'
			ORDER BY reservation_id;
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#READ home - branch info
	public function read_branch_info($data){
		$query = $this->db->query(
			"SELECT *
			FROM branches as br 
			LEFT JOIN users as us ON br.user_id = us.user_id
			LEFT JOIN locations as lo ON br.location_id = lo.location_id
			LEFT JOIN clients as cl ON br.client_id = cl.client_id
			WHERE br.branch_id = '$data';
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#UPDATE home_branch
	public function update_branch_client($data){
		$branch=$this->input->post('branch_name');
		$check=$this->db->get_where('branches', array('branch_name'=>$branch));

		
		if($check->num_rows()> 0){
			echo "<script type='text/javascript'>alert('Branch Name is already used!')</script>";
				return false;

			}
		else{
			$field = array(
			'branch_name' => $this->input->post('branch_name'),
			'location_id' => $this->input->post('location_id'),
			'branch_contact' => $this->input->post('branch_contact'),
			'branch_street' => $this->input->post('branch_street'),
				);
			if($data == 0){
				return $this->db->insert('branches',$field);
			}
			else{
				$this->db->where('branch_id', $data);
				return $this->db->update('branches', $field);
			}
			return true;
		}
		
	}

#=================================================================================BRANCHES_SERVICES==========================================================================================	
	
	#READ service
	public function read_service_branch($data){
		$query = $this->db->query(
			"SELECT *
			FROM bs_connection as bs
			INNER JOIN subservices as su ON bs.subservice_id = su.subservice_id
			INNER JOIN branches as br ON bs.branch_id = br.branch_id
			WHERE bs.branch_id = '$data' AND (bs.status = 'A' OR subservice_status = 'A')
			ORDER BY subservice_name;
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}	

	#DELETE branch
	public function delete_service_branch($data){
		$this->db->query(
			"UPDATE bs_connection as bs
			SET status = 'I'
			WHERE bs.branch_subservice_id = '$data';
		");
	}
	
	#ACTIVATE branch
	public function activate_service_branch($data){
		$this->db->query(
			"UPDATE bs_connection as bs
			SET status = 'A'
			WHERE bs.branch_subservice_id = '$data';
		");
	}
	
	#READ service
	public function read_specific_service_branch($data){
		$query = $this->db->query(
			"SELECT *
			FROM bs_connection as bs
			INNER JOIN subservices as se on bs.subservice_id = se.subservice_id
			WHERE bs.branch_subservice_id = '$data';
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	
	#READ service
	public function read_specific_service_branch2($data){
		$query = $this->db->query(
			"SELECT *
			FROM bs_connection as bs
			WHERE bs.branch_subservice_id = '$data';
			");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}

	#UPDATE location
	public function update_subservice_branch($data){
		date_default_timezone_set('Asia/Kuala_Lumpur');
		$field = array(
			'bs_etc' => $this->input->post('bs_etc'),
			'bs_price' => $this->input->post('bs_price'),
			'updated_date' => date('Y-m-d H:i:s T', time())
		);
		if($data == 0){
			return $this->db->insert('bs_connection',$field);
		}
		else{
			$this->db->where('branch_subservice_id', $data);
			return $this->db->update('bs_connection', $field);
		}
	}
}
?>