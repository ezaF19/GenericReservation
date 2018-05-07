<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css');?>">
	<script>
	function doconfirm()
	{
    acc=confirm("Deactivating will automatically log you out and cancel ALL of your reservations. Are you sure you want to deactivate?");
    if(acc!=true)
    {
        return false;
    }
	}
</script>
</head>
<body>
<div class="container">
	<h2>User Profile</h2>	
	<div class="w3-container">
		<table class="table table-bordered table-responsive">
			<thead>
				<tr>
					<th>ID</th>
					<th>UT_ID</th>
					<th>NAME</th>
					<th>USERNAME</th>
					<th>PASSWORD</th>
					<th>Contact no</th>
					<th>Email</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php
			if($user_data){
				foreach ($user_data as $user) {


			?>
				<tr>
					<td><?php echo $user->user_id; ?></td>
					<td><?php echo $user->ut_id; ?></td>
					<td><?php echo $user->customer_name; ?></td>
					<td><?php echo $user->user_username; ?></td>
					<td><?php echo $user->user_password; ?></td>
					<td><?php echo $user->customer_contact; ?></td>
					<td><?php echo $user->customer_email; ?></td>
					<td><?php echo $user->user_status; ?></td>
					<td>
						<a href="<?php echo base_url('User_controller/deactivate/'.$user->user_id);?>" onclick="return doconfirm()" class="btn btn-danger" id="deactivate">Deactivate</a>

						<a href="<?php echo base_url('User_controller/activate/'.$user->user_id);?>" class="btn btn-success" id="deactivate">Activate</a>
					</td>
				</tr>
				<?php
					}
				}

				?>
			</tbody>
			
		</table>
		<a href="<?php echo base_url('User_controller/logout');?>" class="btn btn-info" id="logout">Logout</a>
		<a href="<?php echo base_url('User_controller/make_reservation');?>" class="btn btn-success" id="make">Make Reservation</a>
		<a href="<?php echo base_url('User_controller/edit/'.$user->user_id);?>" class="btn btn-primary" id="logout">Edit profile</a>


		<div class="w3-container"><br/>
		<h3>Reservations</h3>
		<table class="table table-bordered table-responsive">
			<thead>
				<tr>
					<th>Reference Number</th>
					<th>Branch</th>
					<th>Reservation Date</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php
			if($reservation_data){
				foreach ($reservation_data as $reservation) {


			?>
				<tr>
					<td style="display: none;"><?php echo $reservation->reservation_id; ?></td>
					<td><?php echo $reservation->reservation_reference_no; ?></td>
					<td><?php echo $reservation->branch_name; ?></td>
					<td><?php echo $reservation->reservation_date; ?></td>
					<td><?php echo $reservation->reservation_status; ?></td>
					<td>
						<a href="<?php echo base_url(''); ?>" class="btn btn-info" >View</a>
						<a href="<?php echo base_url('User_controller/cancel_reservation/'.$reservation->reservation_id); ?>" class="btn btn-warning" >Cancel</a>
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