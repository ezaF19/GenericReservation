
                        <div class="card">
							<?php if($branches!=NULL){
								foreach ($branches as $key) {
							?>
								<div style="text-align: left;">
									<nav>
										<ul >
											<h4 >Branch Information</h4>
												<li style="margin-left: 25px; "><b>Branch ID:</b>    <?php echo $key->branch_id;?> </li>
												<li style="margin-left: 25px; "><b>Location:</b>   	 <?php echo $key->location_name;?> </li>
												<li style="margin-left: 25px; "><b>Branch Name:</b>  <?php echo $key->branch_name;?> </li>
												<li style="margin-left: 25px; "><b>Contact:</b> 	 <?php echo $key->branch_contact;?> </li>
												<li style="margin-left: 25px; "><b>Street:</b> 		 <?php echo $key->branch_street;?> </li>
												<li style="margin-left: 25px; "><b>Profile:</b> 	 <?php echo $key->client_profile;?> </li>
										</ul>
									</nav>
								</div>
							<?php
							}
							}
							?>		
														
							<div style="text-align: left;">
								<nav >
									<ul>
									<h4 style="margin-top:20px; ">Services Offered:</h4> 
									<?php if($subs!=NULL){
										foreach ($subs as $keyy) {
									?>
									<li style="margin-left: 25px; "> <?php echo $keyy->subservice_name;?> </li>
									<?php
										}
										}
									?>	
									</ul>
								</nav>
							</div>
						</div>
					