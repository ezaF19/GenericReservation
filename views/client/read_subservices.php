<div class="content-wrap">
    <div class="main">
    	<div class="container-fluid">
            <section id="main-content">
                <div class="row">
					<div class="col-lg-12" style="width: 100%;">
                        <div class="card1">
                       		
							<div class="card-title">
                                <h2 style="color:  #ccc;">Services
							<a style=" float: right;"><button data-toggle="modal" data-target="#newservice2" class="btn btn-primary btn-md">Add New Service</button> </a>
                                <div class="modal " id="newservice2" >
                                    <div class="modal-dialog" >
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 style="color:  #343957" class="modal-title">Add a Service</h2>
                                                <button class="close" type="button" data-dismiss="modal" >
                                                    <span></span>
                                                    <span ><i class="ti-close"></i></span>
                                                </button>
                                            </div>
					                     	 <?php echo form_open('create_subservice_client'); ?>
															<input style="font-size: 15px;margin-bottom: 10px; margin-left: 45px; width: 80%; padding: 5px;" type="text" name="subservice_name" placeholder="Service Name" required  />
															<input style="font-size: 15px;margin-bottom: 10px; margin-left: 45px; width: 80%; padding: 5px;" type="text" name="subservice_etc" placeholder="Suggested Duration" required  />
															<input style="font-size: 15px;margin-bottom: 10px; margin-left: 45px; width: 80%; padding: 5px;" type="text" name="subservice_price" placeholder="Suggested Price" required  />
															<div class="modal-footer">
                                                        <button value="submit"  class="btn btn-primary">Add</button>
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
                                    <h4>Active</h4>
                                </div>   
 
                                <div  id="demo" class="collapse"> 
									<div class="card">
										<table id="row-select" style="width: 100%" class="table example table-bordered table-hover">
											<thead style="font-weight: bold;">
												<tr>
													<td align="center" width="12%">Service ID</td>
													<td align="center" width="20%">Service Name</td>
													<td align="center" width="10%">Service Duration</td>
													<td align="center" width="10%">Service Price</td>
													<td align="center" width="15%">Service Status</td>
													<td align="center" width="16%">Created Date</td>
													<td align="center" width="16%">Updated Date</td>
													<td align="center" width="17%">Options</td>

												</tr>
											</thead>
											<tbody>
												<?php if($subs!=NULL){
														foreach ($subs as $key) {
												?>
													<tr>
														<td align="center"><?php echo $key->subservice_id ?></td>
														<td align="center"><?php echo $key->subservice_name ?></td>
														<td align="center"><?php echo $key->subservice_etc ?></td>
														<td align="center"><?php echo $key->subservice_price ?></td>
														<td align="center"><?php echo $key->subservice_status ?></td>
														<td align="center"><?php echo $key->created_date ?></td>
														<td align="center"><?php echo $key->updated_date ?></td>	
														<td align="center">
														<?php 
		                                                    echo '<a data-toggle="modal" data-target="#update1'.$key->subservice_id.'" class="btn btn-warning" style="width:65px; color:white;">Update</a>';
		                                                    echo '<div class="modal" id="update1'. $key->subservice_id.'" >
		                                                             <div class="modal-dialog" >
		                                                                <div class="modal-content">
		                                                                    <div class="modal-header">
		                                                                        <h2 class="modal-title">Update </h2>
		                                                                        <button class="close" type="button" data-dismiss="modal" >
		                                                                            <span></span>
		                                                                            <span ><i class="ti-close"></i></span>
		                                                                        </button>
		                                                                    </div>';?>
		                                                                    <form method="post" action="<?php echo site_url('client_controller/update_sub/'.$key->subservice_id);?>">
																				<nav align="center">
																			<h4 style="margin-left:15px;margin-bottom:10px;" align="left">Service Name:</h4>	

																			<input style="width: 80%;font-size:20px;" type="text" name="subservice_name" value="<?php echo $key->subservice_name;?>"  required />
																			<input style="width: 80%;font-size:20px;" type="text" name="subservice_etc" value="<?php echo $key->subservice_etc;?>" required  />
																			<input style="width: 80%;font-size:20px;" type="text" name="subservice_price" value="<?php echo $key->subservice_price;?>" required  />
																				
																				</nav>
																			<div class="modal-footer">
		                                                                        <button class="btn btn-warning" value="submit">Update</button>
		                                                                        <button class="btn btn-secondary " type="button" data-dismiss="modal">Cancel</button>
		                                                                    </div>
		                                                                     </form>
		                                                                </div>
		                                                            </div>
		                                                        </div>
															<?php 
		                                                    echo '<a data-toggle="modal" data-target="#delete1'.$key->subservice_id.'" class="btn  btn-danger" style="width:85px; color:white;">Deactivate</a>';
		                                                    echo '<div class="modal " id="delete1'.$key->subservice_id.'" >
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
		                                                                   <a class="btn btn-danger   " href="'.base_url("client_controller/delete_sub/".$key->subservice_id).'">Deactivate</a>
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
                                    <h4>Inactive</h4>
                                </div>   

                                <div  id="demo1" class="collapse"> 
									<div class="card">
										<table id="bootstrap-data-table" style="width: 100%" class="table example table-bordered table-hover">
											<thead style="font-weight: bold;">
												<tr>
													<td align="center" width="12%">Service ID</td>
													<td align="center" width="20%">Service Name</td>
													<td align="center" width="10%">Service Duration</td>
													<td align="center" width="10%">Service Price</td>
													<td align="center" width="15%">Service Status</td>
													<td align="center" width="15%">Created Date</td>
													<td align="center" width="15%">Updated Date</td>
													<td align="center" width="15%">Options</td>

												</tr>
											</thead>
											<tbody>
												<?php if($subs_inactive!=NULL){
														foreach ($subs_inactive as $key) {
												?>
													<tr>
														<td align="center"><?php echo $key->subservice_id ?></td>
														<td align="center"><?php echo $key->subservice_name ?></td>
														<td align="center"><?php echo $key->subservice_etc ?></td>
														<td align="center"><?php echo $key->subservice_price ?></td>
														<td align="center"><?php echo $key->subservice_status ?></td>
														<td align="center"><?php echo $key->created_date ?></td>
														<td align="center"><?php echo $key->updated_date ?></td>	
														<td align="center">
														 <?php 
		                                                    echo '<a data-toggle="modal" data-target="#update'.$key->subservice_id.'" class="btn btn-warning" style="width:65px; color:white;">Update</a>';
		                                                    echo '<div class="modal" id="update'. $key->subservice_id.'" >
		                                                             <div class="modal-dialog" >
		                                                                <div class="modal-content">
		                                                                    <div class="modal-header">
		                                                                        <h2 class="modal-title">Update </h2>
		                                                                        <button class="close" type="button" data-dismiss="modal" >
		                                                                            <span></span>
		                                                                            <span ><i class="ti-close"></i></span>
		                                                                        </button>
		                                                                    </div>';?>
		                                                                    <form method="post" action="<?php echo site_url('client_controller/update_sub/'.$key->subservice_id);?>">
																				<nav align="center">
																			<h4 style="margin-left:15px;margin-bottom:10px;" align="left">Service Name:</h4>	
																			<input style="width: 80%;font-size:20px;" type="text" name="subservice_name" value="<?php echo $key->subservice_name;?>"  required />
																				
																				</nav>
																			<div class="modal-footer">
		                                                                        <button class="btn btn-warning" value="submit">Update</button>
		                                                                        <button class="btn btn-secondary " type="button" data-dismiss="modal">Cancel</button>
		                                                                    </div>
		                                                                     </form>
		                                                                </div>
		                                                            </div>
		                                                        </div>

		                                               	<?php 
		                                                    echo '<a data-toggle="modal" data-target="#activate'.$key->subservice_id.'" class="btn  btn-success" style="width:85px; color:white;">Activate</a>';
		                                                    echo '<div class="modal " id="activate'.$key->subservice_id.'" >
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
		                                                                   <a class="btn btn-success   " href="'.base_url("client_controller/activate_sub/".$key->subservice_id).'">Activate</a>
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