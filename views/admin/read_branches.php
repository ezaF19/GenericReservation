
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
 	        <section id="main-content">
                <div class="row">
             	    <div class="col-lg-12" style="width: 100%;">
                        <div class="card1">
                            <div class="card-title">
                                <h2 style="color:  #ccc;">Branches</h2>
                            </div>
        <br>
	                            <div class="card" data-toggle="collapse" data-target="#demo">
                                    <h4>Active</h4>
                                </div>   

                                <div  id="demo" class="collapse">   
		                            <div class="card">
										<table id="row-select" style="width: 100%"  class="table example table-hover table-bordered">
                                        <thead style="color:  #343957;font-weight: bold; font-size: 15px;">
														<tr>
															<td align="center">Branch ID</td>
															<td align="center">Branch Name</td>
															<td align="center">Company Name</td>
															<td align="center">Service Type</td>
															<td align="center">Street</td>
															<td align="center">Location</td>
															<td align="center">Contact</td>
															<td align="center">Options</td>
														</tr>
													</thead>
													<tbody>
														<?php if($branches!=NULL){
																foreach ($branches as $key) {
														?>
															<tr>
																<td align="center"><?php echo $key->branch_id ?></td>
																<td align="center"><?php echo $key->branch_name ?></td>
																<td align="center"><?php echo $key->client_name ?></td>
																<td align="center"><?php echo $key->service_name ?></td>
																<td align="center"><?php echo $key->branch_street ?></td>		
																<td align="center"><?php echo $key->location_name ?></td>	
																<td align="center"><?php echo $key->branch_contact ?></td>	
																<td align="center">
														<?php 
		                                                    echo '<a href="'.site_url('admin_controller/view_bra/'.$key->branch_id.'').'" data-toggle="modal" data-target="#view'.$key->branch_id.'" class="btn btn-info" style="width:60px; color:white;">View</a>';
		                                                    echo '<div class="modal " id="view'.$key->branch_id.'" >
		                                                            <div class="modal-dialog" >
		                                                              <div class="modal-content">
		                                                                 <div class="modal-header">
		                                                                 </div>
		                                                                 <div class="modal-footer">
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
                                    <h4>Inactive</h4>
                                </div>   

                                <div  id="demo1" class="collapse">   
		                            <div class="card">
										<table id="bootstrap-data-table" style="width: 100%"  class="table example table-hover table-bordered">
                                        <thead style="color:  #343957;font-weight: bold; font-size: 15px;">
														<tr>
															<td align="center">Branch ID</td>
															<td align="center">Branch Name</td>
															<td align="center">Company Name</td>
															<td align="center">Service Type</td>
															<td align="center">Street</td>
															<td align="center">Location</td>
															<td align="center">Contact</td>
															<td align="center">Options</td>
														</tr>
													</thead>
													<tbody>
														<?php if($branches_inactive!=NULL){
																foreach ($branches_inactive as $key) {
														?>
															<tr>
																<td align="center"><?php echo $key->branch_id ?></td>
																<td align="center"><?php echo $key->branch_name ?></td>
																<td align="center"><?php echo $key->client_name ?></td>
																<td align="center"><?php echo $key->service_name ?></td>
																<td align="center"><?php echo $key->branch_street ?></td>		
																<td align="center"><?php echo $key->location_name ?></td>	
																<td align="center"><?php echo $key->branch_contact ?></td>	
																<td align="center">
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
            </section>
        </div>
    </div>
</div>
    