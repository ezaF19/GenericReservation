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

#service_id,#location_id	{
	 width:205px;   
 height: 30px;
 margin-bottom: 4px;
}

</style>
</head>
<body>
<div class="topnav">
  	<a class="active" href="<?php echo base_url('User_controller/make_reservation');?>">Make reservation</a>
	</div> <br/>

<div class="container">
	<form action="<?php echo base_url('User_controller/submit_reservation')?> " method="post" align="center">
		<div class="form-group">	
		<h2>Reservation Details</h2>
		<label for="service_id">Select service&nbsp;</label>
		<input type="hidden" value="2" name="ut_id">
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

		<label for="location_id">Select location</label>
		<?php

		$conn = new mysqli('localhost', 'root', '', 'generic_reservation_db') 
		or die ('Cannot connect to db');

    	$result = $conn->query("select location_id, location_name from locations");
    
    	echo "<html>";
    	echo "<body>";
    	echo "<select name='location_id' id='location_id'>";

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
		</div>
		<a href="<?php echo base_url('User_controller/redirect_user');?>" class="btn btn-primary">Back</a>
		<input type="submit" name="btnSave" class="btn btn-success" value="Submit">
	</form><br/>


	<div class="w3-container">
		<table class="table table-bordered table-responsive">
			<thead>
				<tr>
					<th >Client Name</th>
					<th>Client Contact</th>
					<th>Email</th>
					<th>Address</th>
					<th>Profile</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php
			if($client_data){
				foreach ($client_data as $client) {


			?>
				<tr>
					<td style="display: none;"><?php echo $client->client_id; ?></td>
					<td><?php echo $client->client_name; ?></td>
					<td><?php echo $client->client_contact; ?></td>
					<td><?php echo $client->client_email; ?></td>
					<td><?php echo $client->client_street; ?></td>
					<td><?php echo $client->client_profile; ?></td>
					<td>
						<a href="<?php echo base_url('User_controller/view_client_data/'.$client->client_id); ?>" class="btn btn-info" >View</a>
					</td>
				</tr>
				<?php
					}
				}

				?>
			</tbody>
			
		</table>
	</div>

</div>
</body>
</html>