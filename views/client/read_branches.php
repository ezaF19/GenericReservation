<div class="content-wrap">
    <div class="main">
    	<div class="container-fluid">
            <section id="main-content">
                <div class="row">
					<div class="col-lg-12" style="width: 100%;">
                        <div class="card1">

							<div class="card-title">
                                <h2 style="color:  #ccc;">Branches
							
							<a style=" float: right;" ><button data-toggle="modal" data-target="#newbranch" class="btn btn-primary btn-md">Add New Branch</button> </a>
                                <div class="modal " id="newbranch" >
                                    <div class="modal-dialog" >
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 style="color:  #343957" class="modal-title">Add a Branch</h2>
                                                <button class="close" type="button" data-dismiss="modal" >
                                                    <span></span>
                                                    <span ><i class="ti-close"></i></span>
                                                </button>
                                            </div>
                                            <!--  -->
                                            <?php echo form_open('create_branch_client'); ?>
													<p style="margin-left: 25px;color:  #343957; font-weight: bold; font-size: 15px;">Company Name:</p>
													<p style="margin-left: 45px;color:  #343957;font-size: 15px; "><?php echo $this->session->userdata['client_name']; ?> -
														<input style="padding: 5px;" align="left" type="text" name="branch_name" placeholder="Branch Extension Name" required  />
													</p>
													<p style="margin-left: 25px;color:  #343957; font-weight: bold;font-size: 15px;">Company Location:</p>
														<input style="color:  #343957;margin-left: 45px; padding: 5px;font-size: 15px;" align="left" type="text" name="branch_street" placeholder="Street" required  />
														<select style="color:  #343957;margin-left: 15px; padding: 5px;font-size: 15px;"  align="left" name="location_id">
														<?php 
															foreach($br as $category){
																echo '<option value="'.$category->location_id.'">'.$category->location_name.'</option>';
															}			
														?>
														</select>
														<br>
													<p style="color:  #343957;margin-left: 25px;color:  #343957; font-weight: bold;font-size: 15px;">Company Contact:</p>

														<input style="color:  #343957;margin-left: 45px;padding: 5px;font-size: 15px;" align="left" type="text" name="branch_contact" placeholder="Contact" required  />	</br>
													<p style="color:  #343957;margin-left: 25px; font-weight: bold;font-size: 15px;">Username:</p>
														<input style="color:  #343957;margin-left: 45px;padding: 5px;font-size: 15px;" align="left" type="text" name="user_username" placeholder="Username" required  /> 
													<p style="color:  #343957;margin-left: 25px; font-weight: bold;font-size: 15px;">Password:</p>
														<input style="color:  #343957;margin-left: 45px;padding: 5px;font-size: 15px;" align="left" type="password" name="user_password" placeholder="Password" required  />
											<div class="modal-footer">
												<button class="btn btn-primary" value="submit">Add</button>
                                                <button class="btn btn-secondary" style="float:right;" type="button" data-dismiss="modal">Cancel</button>       
                                            </div>
											<?php echo form_close(); ?>
										</div>
                                    </div>
                                </div>

                               </h2>
                            </div>					
			                   <br>     	
			                <div class="card" data-toggle="collapse" data-target="#demo">
	                                <h4 style="color:  #343957;">Active</h4>
	                        </div>	
			                        				
	                                <div  id="demo" class="collapse">
										<div class="card">
										<table id="row-select" style="width: 100%" class="table example table-bordered table-hover table-harvey1">
											<thead>
												<tr>
													<td align="center" width="10%">Branch ID</td>
													<td align="center" width="25%">Branch Name</td>
													<td align="center" width="16%">Street</td>
													<td align="center" width="16%">Location</td>
													<td align="center" width="16%">Contact</td>
													<td align="center" width="22%">Options</td>
												</tr>
											</thead>
											<tbody>
												<?php if($branches!=NULL){
														foreach ($branches as $key) {
												?>
													<tr>
														<td align="center"><?php echo $key->branch_id ?></td>
														<td align="center"><?php echo $key->branch_name ?></td>
														<td align="center"><?php echo $key->branch_street ?></td>
														<td align="center"><?php echo $key->location_name ?></td>
														<td align="center"><?php echo $key->branch_contact ?></td>
														<td align="center">
														<!-- <a href="<?php echo site_url('client_controller/view_bra/'.$key->branch_id.''); ?>" class="btn btn-xs btn-info" style="width:70px;">View</a> -->
														<?php 
		                                                    echo '<a href="'.site_url('client_controller/view_bra/'.$key->branch_id.'').'" data-toggle="modal" data-target="#view'.$key->branch_id.'" class="btn btn-info" style="width:60px; color:white;">View</a>';
		                                                    echo '<div class="modal " id="view'.$key->branch_id.'" >
		                                                            <div class="modal-dialog" >
		                                                              <div class="modal-content">
		                                                                 <div class="modal-header">
		                                                                    
		                                                                 </div>
		                                                                 <div class="modal-footer">
		                                                                 </div>
		                                                               </div>
		                                                              </div>
		                                                            </div>';

		                                                ?>
														<!-- <a href="<?php echo site_url('client_controller/delete_bra/'.$key->branch_id.''); ?>" class="btn btn-xs btn-danger" style="width:70px;">Deactivate</a> -->
														<?php 
		                                                    echo '<a data-toggle="modal" data-target="#delete1'.$key->branch_id.'" class="btn  btn-danger" style="width:85px; color:white;">Deactivate</a>';
		                                                    echo '<div class="modal " id="delete1'.$key->branch_id.'" >
		                                                            <div class="modal-dialog" >
		                                                              <div class="modal-content">
		                                                                 <div class="modal-header">
		                                                                    <h2 class="modal-title">Are you sure you want to deactivate<br> this?</h2>
		                                                                      <button class="close" type="button" data-dismiss="modal" >
		                                                                      <span></span>
		                                                                            <span ><i class="ti-close"></i></span>
		                                                                    </button>
		                                                                 </div>
		                                                                 <div class="modal-footer">
		                                                                   <a class="btn btn-danger" href="'.base_url("client_controller/delete_bra/".$key->branch_id).'">Deactivate</a>
		                                                                   <button class="btn btn-secondary   " type="button" data-dismiss="modal">Cancel</button>
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
										<table id="bootstrap-data-table" style="width: 100%" class="table example table-bordered table-hover table-harvey1 ">
											<thead>
												<tr>
													<td align="center" width="10%">Branch ID</td>
													<td align="center" width="25%">Branch Name</td>
													<td align="center" width="16%">Street</td>
													<td align="center" width="16%">Location</td>
													<td align="center" width="16%">Contact</td>
													<td align="center" width="20%">Options</td>
												</tr>
											</thead>
											<tbody>
												<?php if($branches_inactive!=NULL){
														foreach ($branches_inactive as $key) {
												?>
													<tr>
														<td align="center"><?php echo $key->branch_id ?></td>
														<td align="center"><?php echo $key->branch_name ?></td>
														<td align="center"><?php echo $key->branch_street ?></td>
														<td align="center"><?php echo $key->location_name ?></td>
														<td align="center"><?php echo $key->branch_contact ?></td>
														<td align="center">
														
														<?php 
		                                                    echo '<a href="'.site_url('client_controller/view_bra/'.$key->branch_id.'').'" data-toggle="modal" data-target="#view1'.$key->branch_id.'" class="btn btn-info" style="width:60px; color:white;">View</a>';
		                                                    echo '<div class="modal " id="view1'.$key->branch_id.'" >
		                                                            <div class="modal-dialog" >
		                                                              <div class="modal-content">
		                                                                 <div class="modal-header">
		                                                                    
		                                                                 </div>
		                                                                 <div class="modal-footer">
		                                                                 </div>
		                                                               </div>
		                                                              </div>
		                                                            </div>';

		                                                ?>
														
														<?php 
		                                                    echo '<a data-toggle="modal" data-target="#activate'.$key->branch_id.'" class="btn  btn-success" style="width:75px; color:white;">Activate</a>';
		                                                    echo '<div class="modal " id="activate'.$key->branch_id.'" >
		                                                            <div class="modal-dialog" >
		                                                              <div class="modal-content">
		                                                                 <div class="modal-header">
		                                                                    <h2 class="modal-title">Are you sure you want to activate<br> this?</h2>
		                                                                      <button class="close" type="button" data-dismiss="modal" >
		                                                                      <span></span>
		                                                                            <span ><i class="ti-close"></i></span>
		                                                                    </button>
		                                                                 </div>
		                                                                 <div class="modal-footer">
		                                                                   <a class="btn btn-success" href="'.base_url("client_controller/activate_bra/".$key->branch_id).'">Activate</a>
		                                                                   <button class="btn btn-secondary   " type="button" data-dismiss="modal">Cancel</button>
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

							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
</div>