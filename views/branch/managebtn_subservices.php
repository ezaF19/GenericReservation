<html>
<head>
	<title>Services Offere</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
</head>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<ul class="nav navbar-nav">
			<li class="active"><a href="<?php echo site_url('home_branch');?>"/>Home</a></li>
			<li><a href="<?php echo site_url('reservations_branch');?>"/>Reservations</a></li>
			<li><a href="<?php echo site_url('services_branch');?>"/>Services</a></li>
		</ul>
		<div>
			<?php echo form_open('logout'); ?>
			<button style="float:right;" value="submit" class="  ">Logout</button>
			<?php echo form_close(); ?>
		</div>
   </div>
</nav>

<body>
	<div align="center">
		<?php echo form_open('logout'); ?>
			<?php 
				foreach($subs as $category){
					echo '<input type="checkbox" name="subservice_id" value="'.$category->subservice_id.'">'.$category->subservice_name.'</br>';
				}			
			?>
			<button value="submit" class="  ">Save</button>
		<?php echo form_close(); ?>
	</div>
</body>
</html>