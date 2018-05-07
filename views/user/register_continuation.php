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

</style>
</head>
<body>

<div class="container">
	<?php
		if(($this->session->flashdata('success_msg'))){

	?>
		<div class="alert alert-success">
			<?php echo $this->session->flashdata('success_msg')?>
		</div>
	<?php
		}
	 ?>


	 <?php
		if(($this->session->flashdata('error_msg'))){
	?>
		<div class="alert alert-success">
			<?php echo $this->session->flashdata('error_msg')?>
		</div>
	<?php
		}
	 ?>
	<form action="<?php echo base_url('User_controller/submit1')?> " method="post" align="center">
		<div class="form-group">	
		<h2>Registration</h2>
		<input type="text" name="fullname" id="fullname" placeholder="Full Name" required><br/>
		<input type="address" name="address" id="address" placeholder="Address" required><br/>
		<input type="text" name="contact" id="contact" placeholder="Contact No." required><br/>
		<input type="text" name="email" id="email" placeholder="Email" required><br/>
		</div>
		<a href="<?php echo base_url('User_controller/register');?>" class="btn btn-primary">Back</a>
		<input type="submit" name="btnSave" class="btn btn-success" value="Submit">
	</form><br/>


</div>
</body>
</html>