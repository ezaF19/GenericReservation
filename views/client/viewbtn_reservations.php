<div class="content-wrap">
	<div class="main">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4">
					<div  class="card">
						<?php if($resers!=NULL){
								foreach ($resers as $key) {
							?>
						<div>
							<h4>Reservation Info</h4>
								<li>Reservation Ref No:    <?php echo $key->reservation_reference_no;?> </li>
								<li>Customer Name:   	 <?php echo $key->customer_name;?> </li>
								<li>Customer Address:   	 <?php echo $key->customer_address;?> </li>
								<li>Customer Contact:   	 <?php echo $key->customer_contact;?> </li>
								<li>Customer Email:   	 <?php echo $key->customer_email;?> </li>
								<li>Branch Location:   	 <?php echo $key->location_name;?> </li>
								<li>Branch Name:  <?php echo $key->branch_name;?> </li>
								<li>Start Time: 	 <?php echo $key->start_time;?> </li>
								<li>End Time: 	 <?php echo $key->end_time;?> </li>
								<li>Reserved Date: 		 <?php echo $key->reservation_date;?> </li>
								<li>Reserved Status: 		 <?php echo $key->reservation_status;?> </li>
						
						</div>
						<?php
						}
						}
						?>	
					</div>	

					<br>

					<div class="card">

							<h4>Services Reserved:</h4> 
							<?php if($resers_sers!=NULL){
								foreach ($resers_sers as $keyy) {
							?>
							<table >
								<tr>
									<td >
										<?php echo $keyy->subservice_name;?>
									</td>
								</tr>
							</table>
							<?php
								}
								}
							?>	
							
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
	