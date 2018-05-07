<style type="text/css">
	li{
		margin-left: 45px;
	}
	h3{
		margin-left: 25px;
	}
</style>
	<?php if($resers!=NULL){
		foreach ($resers as $key) {
	?>
		<div style="padding-top: 10px;" align="left" >
					<h3>Reservation Info</h3>
						<li><b>Reservation Ref No:</b>    <?php echo $key->reservation_reference_no;?> </li>
						<li><b>Customer Name:</b>  	 <?php echo $key->customer_name;?> </li>
						<li><b>Customer Address:</b>   	 <?php echo $key->customer_address;?> </li>
						<li><b>Customer Contact:</b>   	 <?php echo $key->customer_contact;?> </li>
						<li><b>Customer Email:</b>   	 <?php echo $key->customer_email;?> </li>
						<li><b>Branch Location:</b>   	 <?php echo $key->location_name;?> </li>
						<li><b>Branch Name:</b>  <?php echo $key->branch_name;?> </li>
						<li><b>Start Time:</b> 	 <?php echo $key->start_time;?> </li>
						<li><b>End Time:</b> 	 <?php echo $key->end_time;?> </li>
						<li><b>Reserved Date:</b> 		 <?php echo $key->reservation_date;?> </li>
						<li><b>Reserved Status:</b> 		 <?php echo $key->reservation_status;?> </li>
					
		</div>
	<?php
	}
	}
	?>	
	<div style="padding-bottom: 20px;" align="left">
		
			<h3>Services Reserved:</h3> 
			<?php if($resers_sers!=NULL){
				foreach ($resers_sers as $keyy) {
			?>
			<p style="margin-left: 48px; "><?php echo $keyy->subservice_name; ?></p>
			<?php
				}
			}
			?>	
	</div>
	
