
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Welcome, <?php echo $this->session->userdata['user_username']; ?>!</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-wrap">
	<div class="main">
		<div class="container-fluid">
			<div class="row">
				
			<!--##################################################################################################################################################-->
			<div class="col-lg-12">
				<div class="card1">
					<div class="card" data-toggle="collapse" data-target="#demo3">
                    	<h2  style="color:  #343957;">Client Information</h2>
                	</div>
					<div  id="demo3" class="collapse">
				 <div  class="card" >
					<?php if($clients!=NULL){
						foreach ($clients as $key) {
					?>
						
							<table class="table-bordered">
								<tr>
									<td style="font-weight: bold">Client ID:</td>
									<td style="text-align: left">    <?php echo $key->client_id;?> </td>
								</tr>
								<tr>
									<td style="font-weight: bold">Location:</td>
									<td style="text-align: left">    <?php echo $key->location_name;?> </td>
								</tr>
								<tr>
									<td style="font-weight: bold">Service Type:</td>
									<td style="text-align: left">    <?php echo $key->service_name;?> </td>
								</tr>
								<tr>
									<td style="font-weight: bold">Client Name:</td>
									<td style="text-align: left">    <?php echo $key->client_name;?> </td>
								</tr>
								<tr>
									<td style="font-weight: bold">Contact:</td>
									<td style="text-align: left">    <?php echo $key->client_contact;?> </td>
								</tr>
								<tr>
									<td style="font-weight: bold">Email:</td>
									<td style="text-align: left">    <?php echo $key->client_email;?> </td>
								</tr>
								<tr>
									<td style="font-weight: bold">Street:</td>
									<td style="text-align: left">    <?php echo $key->client_street;?> </td>
								</tr>
								<tr>
									<td style="font-weight: bold">Profile:</td>
									<td style="text-align: left">   <?php echo $key->client_profile;?> </td>
								</tr>
							</table>
							
					<?php
					}
					}
					?>	
<br>					
								<h3 style="color:  #343957;" >Services Offered:</h3> 
								<?php if($subs!=NULL){
									foreach ($subs as $keyy) {
								?>
								<table >
									<tr>
										<td style="text-align: left;">
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
				<br>
				<div class="card" data-toggle="collapse" data-target="#demo2">
                    <h2  style="color:  #343957;">Branches</h2>
                </div>

                <div class=" collapse" id="demo2">
					<div class="card">
						<div class="card" data-toggle="collapse" data-target="#demo">
	                      	<h4 style="color:  #343957;">Active</h4>
	                    </div>  
				
						<div  id="demo" class="collapse">   
							<div  class="card">
								<table class="table table-bordered example table-hover" style="width: 100%"  id="row-select">
										<thead> 
											<tr>
												<td align="center" width="13%">Branch ID</td>
												<td align="center" width="23%">Location</td>
												<td align="center" width="38%">Branch Name</td>
												<td align="center" width="30%">Options</td>
											</tr>
										</thead>
										<tbody>
											<?php if($branches!=NULL){
													foreach ($branches as $key) {
											?>
												<tr>
													<td align="center"><?php echo $key->branch_id ?></td>
													<td align="center"><?php echo $key->location_name ?></td>
													<td align="center"><?php echo $key->branch_name ?></td>		
													<td align="center">
													<!-- <a href="<?php echo site_url('admin_controller/view_bra/'.$key->branch_id.''); ?>" class="btn btn-xs btn-info" style="width:70px;">View</a>
													<a href="<?php echo site_url('admin_controller/delete_bra/'.$key->branch_id.''); ?>" class="btn btn-xs btn-danger" style="width:70px;">Deactivate</a> -->
													<?php 
			                                                    echo '<a href="'.site_url('admin_controller/view_bra/'.$key->branch_id.'').'" data-toggle="modal" data-target="#view'.$key->branch_id.'" class="btn btn-info" style="width:60px; color:white;">View</a>';
			                                                    echo '<div class="modal " id="view'.$key->branch_id.'" >
			                                                            <div class="modal-dialog" >
			                                                              <div class="modal-content">
			                                                                 <div class="modal-header">
			                                                                    <h2 class="modal-title">View</h2>
			                                                                      <button class="close" type="button" data-dismiss="modal" >
			                                                                       <span></span>
			                                                                            <span ><i class="ti-close"></i></span>
			                                                                    </button>
			                                                                 </div>
			                                                                 <div class="modal-footer">
			                                                                   
			                                                                   <button class="btn btn-secondary btn-lg" type="button" data-dismiss="modal">Cancel</button>
			                                                                 </div>
			                                                               </div>
			                                                              </div>
			                                                            </div>';
			                                                ?>
													<?php 
			                                                    echo '<a data-toggle="modal" data-target="#delete'.$key->branch_id.'" class="btn btn-danger" style="width:85px; color:white;">Deactivate</a>';
			                                                    echo '<div class="modal " id="delete'.$key->branch_id.'" >
			                                                            <div class="modal-dialog" >
			                                                              <div class="modal-content">
			                                                                 <div class="modal-header">
			                                                                    <h3 style="color: #343957; font-weight:bold; margin-left:20px" class="modal-title">Are you sure you want to deactivate<br> this?</h3>
			                                                                      <button class="close" type="button" data-dismiss="modal" >
			                                                                      <span >×</span>
			                                                                    </button>
			                                                                 </div>
			                                                                 <div class="modal-footer">
			                                                                   <a class="btn btn-danger btn-lg" href="'.base_url("admin_controller/delete_bra/".$key->branch_id).'">Deactivate</a>
			                                                                   <button class="btn btn-secondary btn-lg" type="button" data-dismiss="modal">Cancel</button>
			                                                                 </div>
			                                                               </div>
			                                                              </div>
			                                                            </div>';

			                                                ?>
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

	<br>

						<div class="card" data-toggle="collapse" data-target="#demo1">
	                      	<h4 style="color:  #343957;">Inactive</h4>
	                    </div> 

						<div  id="demo1" class="collapse">   
							<div class="card">
								<table class="table example table-bordered"  style="width: 100%"  id="bootstrap-data-table">
									<thead>
										<tr>
											<td align="center" width="13%">Branch ID</td>
											<td align="center" width="23%">Location</td>
											<td align="center" width="38%">Branch Name</td>
											<td align="center" width="30%">Options</td>
										</tr>
									</thead>
									<tbody>
										<?php if($branches_inactive!=NULL){
												foreach ($branches_inactive as $keyy) {
										?>
											<tr>
												<td align="center"><?php echo $keyy->branch_id ?></td>
												<td align="center"><?php echo $keyy->location_name ?></td>
												<td align="center"><?php echo $keyy->branch_name ?></td>		
												<td align="center">
												<!-- <a href="<?php echo site_url('admin_controller/view_bra/'.$key->branch_id.''); ?>" class="btn btn-xs btn-info" style="width:70px;">View</a>
												<a href="<?php echo site_url('admin_controller/activate_bra/'.$key->branch_id.''); ?>" class="btn btn-xs btn-success" style="width:70px;">Activate</a> -->
												<?php 
			                                                    echo '<a href="'.site_url('admin_controller/view_bra/'.$keyy->branch_id.'').'" data-toggle="modal" data-target="#view1'.$keyy->branch_id.'" class="btn btn-info" style="width:60px; color:white;">View</a>';
			                                                    echo '<div class="modal " id="view1'.$keyy->branch_id.'" >
			                                                            <div class="modal-dialog" >
			                                                              <div class="modal-content">
			                                                                 <div class="modal-header">
			                                                                    <h2 class="modal-title">View</h2>
			                                                                      <button class="close" type="button" data-dismiss="modal" >
			                                                                       <span></span>
			                                                                            <span ><i class="ti-close"></i></span>
			                                                                    </button>
			                                                                 </div>
			                                                                 <div class="modal-footer">
			                                                                   
			                                                                   <button class="btn btn-secondary btn-lg" type="button" data-dismiss="modal">Cancel</button>
			                                                                 </div>
			                                                               </div>
			                                                              </div>
			                                                            </div>';

			                                                ?>
			                                        <?php
														if($client_status[0]->user_status != 'I'){
													?>
													<?php 
			                                                    echo '<a data-toggle="modal" data-target="#activate'.$keyy->branch_id.'" class="btn btn-success" style="width:75px; color:white;">Activate</a>';
			                                                    echo '<div class="modal " id="activate'.$keyy->branch_id.'" >
			                                                            <div class="modal-dialog" >
			                                                              <div class="modal-content">
			                                                                 <div class="modal-header">
																				<h3 style="color:  #343957; font-weight:bold;" class="modal-title">Are you sure you want to activate this?</h3>			                                                                      
																				<button class="close" type="button" data-dismiss="modal" >
			                                                                      ×
			                                                                    </button>
			                                                                 </div>
			                                                                 <div class="modal-footer">
			                                                                   <a class="btn btn-success btn-lg" href="'.base_url("admin_controller/activate_bra/".$keyy->branch_id).'">Activate</a>
			                                                                   <button class="btn btn-secondary btn-lg" type="button" data-dismiss="modal">Cancel</button>
			                                                                 </div>
			                                                               </div>
			                                                              </div>
			                                                            </div>';

			                                                ?>
			                                        <?php
														}
													?>
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
					</div>

				</div>
			</div>
			</div>
			</div>
		</div>
	</div>
</div>