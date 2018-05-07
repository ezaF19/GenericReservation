
	<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
			<div class="row">
				<div class="col-lg-5">
					<div class="card">
						<h3> Welcome, <?php echo $home1[0]->user_username; ?>!</h3>
							<table class="">
								<tr>
									<td style="font-weight: bold">Branch Name:</td>
									<td style="text-align: left"> <?php echo $home1[0]->branch_name; ?></td>
								</tr>
								<tr>
									<td style="font-weight: bold">Location:</td>
									<td style="text-align: left"> <?php echo $home1[0]->location_name; ?></td>
								</tr>
								<tr>
									<td style="font-weight: bold">Contact:</td>
									<td style="text-align: left"> <?php echo $home1[0]->branch_contact; ?></td>
								</tr>
								<tr>
									<td style="font-weight: bold">Street:</td>
									<td style="text-align: left"> <?php echo $home1[0]->branch_street; ?></td>
								</tr>
								<tr>
									<td style="font-weight: bold">Profile:</td>
									<td style="text-align: left"> <?php echo $home1[0]->client_profile; ?></td>
								</tr>			
							</table>
							<br>
							<?php 
                                    echo '<a data-toggle="modal" data-target="#update1'.$home1[0]->branch_id.'" class="btn btn-warning" style=" color:white;">Manage Information</a>';
                                    echo '<div class="modal" id="update1'. $home1[0]->branch_id.'" >
                                                <div class="modal-dialog" >
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h2 class="modal-title">Manage Information </h2>
                                                                        <button class="close" type="button" data-dismiss="modal" >
                                                                            <span></span>
                                                                            <span ><i class="ti-close"></i></span>
                                                                        </button>
                                                                    </div>';?>
                                                                   
	<form method="post" action="<?php echo site_url('branch_controller/update_bra/'.$home1[0]->branch_id);?>">
		<nav align="center">
			<p>Branch Name:   	<input type="text" name="branch_name" value="<?php echo $home1[0]->branch_name;?>"  required /></p>
			<p>Location: 
			<select name="location_id">
					<?php 
						foreach($br as $category){
							echo '<option value="'.$category->location_id.'">'.$category->location_name.'</option>';
						}			
					?>
			</select>
			</p> 
			<p>Contact:   	<input type="text" name="branch_contact" value="<?php echo $home1[0]->branch_contact;?>"  required /></p>
			<p>Street:   	<input type="text" name="branch_street" value="<?php echo $home1[0]->branch_street;?>"  required /></p>
			<p>Profile:   	<?php echo $home1[0]->client_profile;?></p>
		</nav>
																	<div class="modal-footer">
                                                                        <button class="btn btn-warning" value="submit">Update</button>
                                                                        <button class="btn btn-secondary " type="button" data-dismiss="modal">Cancel</button>
                                                                    </div>
                                                                     </form>
                                                                </div>
                                                            </div>
                                                        </div> 
					</div>
				</div>
			<div class="col-lg-3">
                <div class="card p-0">
                  <div class="stat-widget-three">
                    <div class="stat-icon bg-primary">
                      <i class="fa fa-users" style="height: 34px;"></i>
                    </div>
                    <div class="stat-content">
                  <?php 
									if($home != NULL){
										foreach ($home as $key) {
								?>
										<div class="stat-text">Active Reservations: </div>
						                <div class="stat-digit">
						                	<?php echo $key->reservation_count ?>
						                </div>
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
			<!-- <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                       	<h3>Calendar</h3>
                        <div class="card-body">
                            <div class="year-calendar"></div>
                        </div>
                    </div>
                </div>
		</div> -->
	</div>
</div>
	