<div class="content-wrap">
    <div class="main">
    	<div class="container-fluid">
            <section id="main-content">
                <div class="row">
					<div class="col-lg-12" style="width: 100%;">
                        <div class="card1">
						<div class="card-title">
                                <h2 style="color:  #ccc;">Reservations</h2>
                            </div>
        <br>
	                            <div class="card" data-toggle="collapse" data-target="#demo">
                                    <h4>Active</h4>
                                </div>   

                                <div  id="demo" class="collapse"> 
		                            <div class="card">
										<table id="row-select" class="table table-bordered example table-hover" style="width: 100%;">
											<thead style="font-weight: bold; font-size: 15px;">
												<tr>
													<td align="center" width="11%">Reference No</td>
													<td align="center" width="">Branch Name</td>
													<td align="center" width="">Customer Name</td>
													<td align="center" width="11%">Date</td>
													<td align="center" width="11%">Start Time</td>
													<td align="center" width="11%">End Time</td>
													<td align="center" width="7%">Status</td>
													<td align="center" width="">Created Date</td>
													<td align="center" width="9.5%">Options</td>
												</tr>
											</thead>
											<tbody>
												<?php if($resers!=NULL){
														foreach ($resers as $key) {
												?>
													<tr>
														<td align="center"><?php echo $key->reservation_reference_no ?></td>
														<td align="center"><?php echo $key->branch_name ?></td>
														<td align="center"><?php echo $key->customer_name ?></td>
														<td align="center"><?php echo $key->reservation_date ?></td>
														<td align="center"><?php echo $key->start_time ?></td>	
														<td align="center"><?php echo $key->end_time ?></td>	
														<td align="center"><?php echo $key->reservation_status ?></td>		
														<td align="center"><?php echo $key->created_date ?></td>
														<td align="center">
														<!-- <a href="<?php echo site_url('client_controller/view_res/'.$key->reservation_id.''); ?> " class="btn btn-xs btn-info" style="width:50px;">View</a> -->
														<?php 
	                                                    echo '<a href="'.site_url('admin_controller/view_res/'.$key->reservation_id.'').'" data-toggle="modal" data-target="#view'.$key->reservation_id.'" class="btn btn-info" style="width:60px; color:white;">View</a>';
	                                                    echo '<div class="modal " id="view'.$key->reservation_id.'" >
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
								

						<br>

								<div class="card" data-toggle="collapse" data-target="#demo1">
                                    <h4>Inactive</h4>
                                </div>   

                                <div  id="demo1" class="collapse"> 
									<div class="card">
										<table id="bootstrap-data-table" style="width: 100%;" class="table example table-bordered table-hover table-harvey">
											<thead style="font-weight: bold; font-size: 15px;">
												<tr>
													<td align="center" width="11%">Reference No</td>
													<td align="center" width="">Branch Name</td>
													<td align="center" width="">Customer Name</td>
													<td align="center" width="11%">Date</td>
													<td align="center" width="11%">Start Time</td>
													<td align="center" width="11%">End Time</td>
													<td align="center" width="7%">Status</td>
													<td align="center" width="">Created Date</td>
													<td align="center" width="9.5%">Options</td>
												</tr>
											</thead>
											<tbody>
												<?php if($resers_inactive!=NULL){
														foreach ($resers_inactive as $key) {
												?>
													<tr>
														<td align="center"><?php echo $key->reservation_reference_no ?></td>
														<td align="center"><?php echo $key->branch_name ?></td>
														<td align="center"><?php echo $key->customer_name ?></td>
														<td align="center"><?php echo $key->reservation_date ?></td>
														<td align="center"><?php echo $key->start_time ?></td>	
														<td align="center"><?php echo $key->end_time ?></td>		
														<td align="center"><?php echo $key->reservation_status ?></td>		
														<td align="center"><?php echo $key->created_date ?></td>
														<td align="center">
														<a href="<?php echo site_url('client_controller/view_res/'.$key->reservation_id.''); ?> " class="btn btn-xs btn-info" style="width:50px;">View</a>
														
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