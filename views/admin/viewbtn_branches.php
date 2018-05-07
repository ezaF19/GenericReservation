	<div  class="card">
					<?php if($branches!=NULL){
						foreach ($branches as $key) {
					?>
					
						<div style="text-align: left;">
							<nav >
								<ul >
									<h3>Branch Information</h3>
										<li><b>Branch ID:</b>    <?php echo $key->branch_id;?> </li>
										<li><b>Location:</b>   	 <?php echo $key->location_name;?> </li>
										<li><b>Branch Name:</b>  <?php echo $key->branch_name;?> </li>
										<li><b>Contact:</b> 	 <?php echo $key->branch_contact;?> </li>
										<li><b>Street:</b> 		 <?php echo $key->branch_street;?> </li>
										<li><b>Profile:</b> 	 <?php echo $key->client_profile;?> </li>
								</ul>	
							</nav>
						</div>
					<?php
					}
					}
					?>		
					<br>				
						<nav style="text-align: left;" >
							<ul  style="list-style:none">
							<h3>Services Offered:</h3> 
							<?php if($subs!=NULL){
								foreach ($subs as $keyy) {
							?>
							<li > <?php echo $keyy->subservice_name;?> </li>
							<?php
								}
							}
							?>	
							</ul>
						</nav>
				</div>
			