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
</style>
</head>
<body>
<div class="navbar navbar-inverse">
	<div class="container">

		<h2 style="color: white;"><span class="glyphicon"> </span>&nbsp;Edit Record</h2>
	</div>
</div>
<div class="container">
	<form action="<?php echo base_url('User_controller/update_user');?> " method="post">
		<div class="form-group">

		<input type="hidden" value="<?php echo $user_data->user_id; ?>" name="user_id">
		<input type="text" value="<?php echo $user_data->customer_name?>" name="fullname" id="fullname" placeholder="Full Name" > <br/>
		<input type="text" value="<?php echo $user_data->user_username?>" name="username" id="username" placeholder="Username" required><br/>
		<input type="text" value="<?php echo $user_data->user_password?>" name="password" id="password" placeholder="Password" required><br/>
		<input type="text" value="<?php echo $user_data->customer_contact?>" name="contact" id="contact" placeholder="Contact No." ><br/>
		<input type="text" value="<?php echo $user_data->customer_email?>" name="email" id="email" placeholder="Email" ><br/>
		<!--<input type="text" value="<?php echo $client_data->business_type_id; ?>" name="btid" id="btid" placeholder="Business Type" required><br/>-->
		<!--<input type="text" value="<?php echo $client_data->department_id; ?>" name="deptid" id="deptid" placeholder="Department" required><br/>-->
		</div>
		
		<input type="submit" name="btnUpdate" class="btn btn-success" value="Update">
	</form>
		<a href="<?php echo base_url('User_controller/redirect_user');?>" class="btn btn-primary">Back</a>
	
</div>
</body>
</html>