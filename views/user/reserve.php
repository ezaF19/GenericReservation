<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css');?>">
</head>
<body>
<div class="container-fluid">
<h2>Reservation Details</h2>
<form method="POST" action="<?php echo base_url('User_controller/final_reservation/');?>">

	<?php 
	 	if($sub_service){
			foreach($sub_service as $sub){
				echo '<label><input type="checkbox" name="subservice[]" value="'.$sub->subservice_id.'">'.$sub->subservice_name.'</label><br/>';

		}
	}


	 ?>

	 <input type="hidden" name="hiddenid" value="<?php echo $branch_data[0]->branch_id?>">
	 
	 <label for="date"> Select Date</label>
	 <input name="date" type="date" name="date"/>
  	 <label for="date"> Select Start Time</label>
 	 <input name="time" type="time" name="time"/>
<label for="date"> Select End Time</label>
 	 <input name="endtime" type="time"	/>
 	 <br/>
 	 <input type="submit" name="btnSubmit" class="btn btn-success" value="Submit">


</form>





<!--<?php

		$conn = new mysqli('localhost', 'root', '', 'generic_reservation_db') 
		or die ('Cannot connect to db');

    	$result = $conn->query("select subservice_id, subservice_name from subservices");
    
    	echo "<html>";
    	echo "<body>";
    	echo "<form>"; ?>
    	<form method='post' action= "<?php echo base_url("User_controller/final_reservation");?>">
    	<?php

    	while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['subservice_id'];
                  $name = $row['subservice_name']; 
                  echo '<label><input type="checkbox" name="subservice[]" value='.$id.'/>'.$name.'</label><br/>';
              
		}
		echo "<br/>";
		echo '<label for="date"> Select Date</label>';
 		echo '<input name="date" type="date" name="date"/>';
  		echo '<label for="date"> Select Time</label>';
 		echo '<input name="time" type="time" name="time"/>';
 		echo "<br/>";
 		echo '<input type="submit" name="btnSubmit" class="btn btn-success" value="Submit">';?>
 		<?
    	echo "<form>";
    	echo "</body>";
    	echo "</html>";

 ?> <br/>-->
</div>
</body>
</html>
	