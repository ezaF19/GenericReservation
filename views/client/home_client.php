
	<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
			<div class="row">
				<div class="col-lg-5">
					<div class="card">
						<?php
						if($home != NULL){
						?>
						<h3> Welcome, <?php echo $home[0]->user_username; ?>!</h3>
							<table class="">
								<tr>
									<td style="font-weight: bold">Company Name:</td>
									<td style="text-align: left"><?php echo $home[0]->client_name; ?></td>
								</tr>
								<tr>
									<td style="font-weight: bold">Service Type:</td>
									<td style="text-align: left"><?php echo $home[0]->service_name; ?></td>
								</tr>
								<tr>
									<td style="font-weight: bold">Location:</td>
									<td style="text-align: left"><?php echo $home[0]->location_name; ?></td>
								</tr>
								<tr>
									<td style="font-weight: bold">Contact:</td>
									<td style="text-align: left"><?php echo $home[0]->client_contact; ?></td>
								</tr>
								<tr>
									<td style="font-weight: bold">Email:</td>
									<td style="text-align: left"><?php echo $home[0]->client_email; ?></td>
								</tr>
								<tr>
									<td style="font-weight: bold">Street:</td>
									<td style="text-align: left"><?php echo $home[0]->client_street; ?></td>
								</tr>
								<tr>
									<td style="font-weight: bold">Profile:</td>
									<td style="text-align: left"><?php echo $home[0]->client_profile; ?></td>
								</tr>
							 	<!--<a href="<?php echo site_url('client_controller/read_update_hom/'.$this->session->userdata['client_id'].''); ?>" class="btn btn-xs btn-warning" style="width:100px;">Manage Profile</a> -->

							</table>
								<?php 
                                                    echo '<a data-toggle="modal" data-target="#update1'.$home[0]->client_id.'" class="btn btn-warning" style=" color:white;">Manage Information</a>';
                                                    echo '<div class="modal" id="update1'. $home[0]->client_id.'" >
                                                             <div class="modal-dialog" >
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h2 class="modal-title">Manage Information </h2>
                                                                        <button class="close" type="button" data-dismiss="modal" >
                                                                            <span></span>
                                                                            <span ><i class="ti-close"></i></span>
                                                                        </button>
                                                                    </div>';?>
                                                                   
	<form method="post" action="<?php echo site_url('client_controller/update_hom/'.$home[0]->client_id);?>">
		<nav align="center">
			<p>Company Name:   	<input type="text" name="client_name" value="<?php echo $home[0]->client_name;?>"  required /></p>
			<p>Location: 
			<select name="location_id">
					<?php 
						foreach($br as $key){
							echo '<option value="'.$key->location_id.'">'.$key->location_name.'</option>';
						}			
					?>
			</select>
			</p> 
			<p>Service Type:   	<?php echo $home[0]->service_name;?></p>
			<p>Contact:   	<input type="text" name="client_contact" value="<?php echo $home[0]->client_contact;?>"  required /></p>
			<p>Email:   	<input type="text" name="client_email" value="<?php echo $home[0]->client_email;?>"  /></p>
			<p>Address:   	<input type="text" name="client_street" value="<?php echo $home[0]->client_street;?>"  required /></p>
			<label for="textarea">Profile:</label> 
			<p style="vertical-align:middle;">
			<textarea id="textarea" cols="50" rows="10" name="client_profile"><?php echo $home[0]->client_profile;?></textarea>
			</p>
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
							}
							?>
					</div>
				</div>
			</div>
				<div class="row">
					<div class="col-lg-4">
				    <div class="card">
				        <div class="stat-widget-two">
				            <div class="stat-content">
				            	<?php 
									if($home1 != NULL){
										foreach ($home1 as $key) {
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
				            <div class="progress">
				               <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
				            </div>
				        </div>
				    </div>
				</div>
				<div class="col-lg-4">
				    <div class="card">
				        <div class="stat-widget-two">
				            <div class="stat-content">
				               	<?php 
									if($home2 != NULL){
										foreach ($home2 as $key) {
								?>
										<div class="stat-text">Active Branches: </div>
						                <div class="stat-digit">
						                	<?php echo $key->branch_count ?>
						                </div>
								<?php
										}
									}
								?>
				            </div>
				            <div class="progress">
				               <div class="progress-bar progress-bar-warning w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
				            </div>
				        </div>
				    </div>
				</div>
				<div class="col-lg-4">
				    <div class="card">
				        <div class="stat-widget-two">
				            <div class="stat-content">
				               	<?php 
									if($home3 != NULL){
										foreach ($home3 as $key) {
								?>
										<div class="stat-text">Active Services: </div>
						                <div class="stat-digit">
						                	<?php echo $key->subservice_count ?>
						                </div>
								<?php
										}
									}
								?>
				            </div>
				            <div class="progress">
				               <div class="progress-bar progress-bar-info w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
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
	