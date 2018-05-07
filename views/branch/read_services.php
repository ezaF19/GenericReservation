<div class="content-wrap">
    <div class="main">
    	<div class="container-fluid">
            <section id="main-content">
                <div class="row">
					<div class="col-lg-12" style="width: 100%;">
                        <div class="card1">

                        	<div class="card-title">
                                <h2 style="color:  #ccc;">Services</h2>
                            </div>

							<div class="card">
								<table id="row-select" style="width: 100%;" class="table example table-bordered table-hover">
									<thead style="font-weight: bold; font-size: 15px;">
										<tr>
											<td align="center" width="7%%">Service ID</td>
											<td align="center" width="15%">Service Name</td>
											<td align="center" width="12%">Suggested Duration</td>
											<td align="center" width="12%">Suggested Price</td>
											<td align="center" width="12%">Displayed Duration</td>
											<td align="center" width="10%">Displayed Price</td>
											<td align="center" width="10%">Service Status</td>
											<td align="center" width="15%">Options</td>
										</tr>
									</thead>
									<tbody>
										<?php if($branches!=NULL){
												foreach ($branches as $key) {
										?>
											<tr>
												<td align="center"><?php echo $key->branch_subservice_id ?></td>
												<td align="center"><?php echo $key->subservice_name ?></td>
												<td align="center"><?php echo $key->subservice_etc ?></td>
												<td align="center"><?php echo $key->subservice_price ?></td>
												<td align="center"><?php echo $key->bs_etc ?></td>
												<td align="center"><?php echo $key->bs_price ?></td>
												<td align="center"><?php echo $key->status ?></td>
												<td align="center"> 
												<!-- <a href="<?php echo site_url('branch_controller/read_update_sub/'.$key->branch_subservice_id.''); ?>" class="btn btn-xs btn-warning" style="width:50px;">Edit</a> -->
												 <?php 
                                                    echo '<a data-toggle="modal" data-target="#edit'.$key->branch_subservice_id.'" class="btn btn-warning" style="width:50px; color:white;">Edit</a>';
                                                    echo '<div class="modal" id="edit'. $key->branch_subservice_id.'" >
                                                             <div class="modal-dialog" >
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h2 class="modal-title">Edit </h2>
                                                                        <button class="close" type="button" data-dismiss="modal" >
                                                                            <span></span>
                                                                            <span ><i class="ti-close"></i></span>
                                                                        </button>
                                                                    </div>';?>
																	<div align="left">
																			<p style="margin-left: 25px;"><b>Service Name:</b>		 	<?php echo $key->subservice_name;?></p>
																			<p style="margin-left: 25px;"><b>Suggested Duration:</b>	<?php echo $key->subservice_etc;?></p>
																			<p style="margin-left: 25px;"><b>Suggested Price:</b> 		<?php echo $key->subservice_price;?></p>	

																			<form method="post" action="<?php echo site_url('branch_controller/update_sub/'.$key->branch_subservice_id);?>">
																				<p style="margin-left: 25px; font-weight: bold;">Displayed Duration:   </p>
																				<input style="margin-left: 45px;width: 80%;font-size:20px;" type="text" name="bs_etc" value="<?php echo $key->bs_etc;?>"  required />
																				<p style="margin-left: 25px; font-weight: bold;">Displayed Price:   </p>
																				<input style="margin-left: 45px;width: 80%;font-size:20px;" type="text" name="bs_price" value="<?php echo $key->bs_price;?>"  required />
																	<div class="modal-footer">
                                                                        <button class="btn btn-warning" value="submit">Update</button>
                                                                        <button class="btn btn-secondary " type="button" data-dismiss="modal">Cancel</button>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div> 
												<?php if($key->status == "I"){
														if($key->bs_etc != NULL && $key->bs_price != NULL){
												?>
												<a href="<?php echo site_url('branch_controller/activate_ser/'.$key->branch_subservice_id.''); ?>" 
												 class="btn btn-xs btn-success" style="width:75px;">Activate</a>
												<?php
													}
												}
												?>
												
												<?php if($key->status == "A"){
												?>
												<a href="<?php echo site_url('branch_controller/delete_ser/'.$key->branch_subservice_id.''); ?>" class="btn btn-xs btn-danger" style="width:85px;">Deactivate</a>
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
			</section>
		</div>
	</div>
</div>