<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css');?>">
<style type="text/css">
	input{
		margin-bottom: 5px;
	}
	.topnav{
		width: 1700px;
	}
	.topnav {
    background-color: #333;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: #4CAF50;
    color: white;
}	

#loc_id, #service_id{
 width:205px;   
 height: 30px;
 margin-bottom: 4px;
}

</style>
</head>
<body>
<div class="topnav">
  	<a href="<?php echo base_url('User_controller/register');?>">Customer Register</a>
 	<a  class="active" href="<?php echo base_url('User_controller/client_register	');?>">Client Register</a>
	</div> <br/>

<div class="container">
	<form action="<?php echo base_url('User_controller/submit_client')?> " method="post" align="center">
		<div class="form-group">	
		<h2>Client Registration</h2>
		<?php

		$conn = new mysqli('localhost', 'root', '', 'generic_reservation_db') 
		or die ('Cannot connect to db');

    	$result = $conn->query("select location_id, location_name from locations");
    
    	echo "<html>";
    	echo "<body>";
    	echo "<select name='loc_id' id='loc_id'>";

    	while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['location_id'];
                  $name = $row['location_name']; 
                  echo '<option value="'.$id.'">'.$name.'</option>';
              
		}

    	echo "</select>";
    	echo "</body>";
    	echo "</html>";
		?><br/>

		<?php

		$conn = new mysqli('localhost', 'root', '', 'generic_reservation_db') 
		or die ('Cannot connect to db');

    	$result = $conn->query("select service_id, service_name from services");
    
    	echo "<html>";
    	echo "<body>";
    	echo "<select name='service_id' id='service_id'>";

    	while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['service_id'];
                  $name = $row['service_name']; 
                  echo '<option value="'.$id.'">'.$name.'</option>';
              
		}

    	echo "</select>";
    	echo "</body>";
    	echo "</html>";
		?><br/>
		<input type="hidden" value="3" name="ut_id">
		<input type="text" name="username" id="username" placeholder="Username" required><br/>
		<input type="password" name="password" id="password" placeholder="Password" required><br/>
		<input type="text" name="clientname" id="clientname" placeholder="Company Name" required><br/>
		<input type="text" name="clientaddress" id="clientaddress" placeholder="Company Address" required><br/>
		<input type="text" name="clientcontact" id="clientcontact" placeholder="Company Contact No." required><br/>
		<input type="text" name="clientemail" id="clientemail" placeholder="Client Email" required><br/>
		<input type="text" name="desc" id="desc" placeholder="Brief Description" required><br/>
		</div>
		<a href="<?php echo base_url('../GenericReservation2');?>" class="btn btn-primary">Back</a>
		<input type="submit" name="btnSave" class="btn btn-success" value="Submit">
	</form><br/>


</div>
</body>
</html>