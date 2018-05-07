<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css');?>">
</head>
<body>
<div class="container">


	<h2>Client Branches</h2>
	<div class="w3-container">
		<table class="table table-bordered table-responsive">
			<thead>
				<tr>
					<th>NAME</th>
					<th>Address</th>
					<th>Contact</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php
			if($branch_data){
				foreach ($branch_data as $branch) {
					

			?>
				<tr>
					<td style="display: none;"><?php echo $branch->branch_id; ?></td>
					<td><?php echo $branch->branch_name; ?></td>
					<td><?php echo $branch->branch_street; ?></td>
					<td><?php echo $branch->branch_contact; ?></td>
					<td>
						<a href="<?php echo base_url('User_controller/reserve/'.$branch->branch_id);?>" class="btn btn-success" id="deactivate">Reserve</a>
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