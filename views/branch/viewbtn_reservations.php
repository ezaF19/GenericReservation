
					<div style="text-align: left">
					<?php if($resers!=NULL){
						foreach ($resers as $key) {
					?>
						<h3 style="margin-left: 25px; margin-top: 15px;">Reservation Info</h3>
						<li><b>Reservation Ref No:</b>    <?php echo $key->reservation_reference_no;?> </li>
						<li><b>Customer Name:</b>   	 <?php echo $key->customer_name;?> </li>
						<li><b>Customer Address:</b>   	 <?php echo $key->customer_address;?> </li>
						<li><b>Customer Contact:</b>   	 <?php echo $key->customer_contact;?> </li>
						<li><b>Customer Email:</b>   	 <?php echo $key->customer_email;?> </li>
						<li><b>Branch Location:</b>   	 <?php echo $key->location_name;?> </li>
						<li><b>Branch Name:</b>  <?php echo $key->branch_name;?> </li>
						<li><b>Start Time:</b> 	 <?php echo $key->start_time;?> </li>
						<li><b>End Time:</b> 	 <?php echo $key->end_time;?> </li>
						<li><b>Reserved Date:</b> 		 <?php echo $key->reservation_date;?> </li>
						<li><b>Reserved Status:</b> 		 <?php echo $key->reservation_status;?> </li>
							
					<?php
					}
					}
					?>	
					</div>
					<div style="text-align: left" >
							<h3  style="margin-left: 25px;margin-top: 10px;">Services Reserved:</h3> 
							<?php if($resers_sers!=NULL){
								foreach ($resers_sers as $keyy) {
							?>
							
							<li><?php echo $keyy->subservice_name;?></li>
									
							<?php
								}
								}
							?>		
					</div>
					<br>
					<style type="text/css">
						li{
							margin-left: 45px;
						}
						li b{
						}
					</style>
