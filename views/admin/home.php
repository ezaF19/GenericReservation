<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
      
     <!--===================================================ACTIVE==================================================================== -->
            <div class="row">
              <div class="col-lg-3">
                <div class="card p-0">
                  <div class="stat-widget-three">
                    <div class="stat-icon bg-primary">
                      <i class="fa fa-users" style="height: 34px;"></i>
                    </div>
                    <div class="stat-content">
                     <?php 
                                    if($homes != NULL){
                                        foreach ($homes as $key) {
                                ?>
                                <div class="stat-text">Active Clients: </div>
                                <div class="stat-digit">
                                    <?php echo $key->client_count ?>
                                </div>
                                <?php
                                        }
                                    }
                                ?>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-lg-3">
                <div class="card p-0">
                  <div class="stat-widget-three">
                    <div class="stat-icon bg-success">
                      <i class="fa fa-sitemap" style="height: 34px;"></i>
                    </div>
                    <div class="stat-content">
                  <?php 
                                    if($homessss != NULL){
                                        foreach ($homessss as $key) {
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
                  </div>
                </div>
              </div>



              <div class="col-lg-3">
                <div class="card p-0">
                  <div class="stat-widget-three">
                    <div class="stat-icon bg-warning">
                      <i class="ti-location-pin"></i>
                    </div>
                    <div class="stat-content">
                        <?php 
                                    if($homess != NULL){
                                        foreach ($homess as $key) {
                                ?>
                                <div class="stat-text">Active Locations: </div>
                                <div class="stat-digit">
                                    <?php echo $key->location_count ?>
                                </div>
                                <?php
                                        }
                                    }
                                ?>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-lg-3">
                <div class="card p-0">
                  <div class="stat-widget-three">
                    <div class="stat-icon bg-danger">
                      <i > <img style="width: 34px; height: 34px; color: white;" src="<?php echo base_url('assets/service.png');?>" ></i>
                    </div>
                    <div class="stat-content">
                      <?php 
                                    if($homesssss != NULL){
                                        foreach ($homesssss as $key) {
                                ?>
                                <div class="stat-text">Active Services: </div>
                                <div class="stat-digit">
                                    <?php echo $key->service_count ?>
                                </div>
                                <?php
                                        }
                                    }
                                ?>
                    </div>
                  </div>
                </div>
              </div>
			
			<div class="col-lg-3">
                <div class="card p-0">	<!-- customers ======================================-->
                  <div class="stat-widget-three">
                    <div class="stat-icon bg-danger">
                      <i > <img style="width: 34px; height: 34px; color: white;" src="<?php echo base_url('assets/service.png');?>" ></i>
                    </div>
                    <div class="stat-content">
                      <?php 
                                    if($homesss != NULL){
                                        foreach ($homesss as $key) {
                                ?>
                                <div class="stat-text">Active Customers: </div>
                                <div class="stat-digit">
                                    <?php echo $key->user_count ?>
                                </div>
                                <?php
                                        }
                                    }
                                ?>
                    </div>
                  </div>
                </div>
              </div>
			
			<div class="col-lg-3">
                <div class="card p-0">		<!-- reservations ======================================-->
                  <div class="stat-widget-three">
                    <div class="stat-icon bg-danger">
                      <i > <img style="width: 34px; height: 34px; color: white;" src="<?php echo base_url('assets/service.png');?>" ></i>
                    </div>
                    <div class="stat-content">
                      <?php 
                                    if($homessssss != NULL){
                                        foreach ($homessssss as $key) {
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


     <!--===================================================INACTIVE==================================================================== -->
      <div class="row">
              <div class="col-lg-3">
                <div class="card p-0">
                  <div class="stat-widget-three">
                    <div class="stat-icon bg-primary">
                      <i class="fa fa-users" style="height: 34px;"></i>
                    </div>
                    <div class="stat-content">
                     <?php 
                                    if($homes_i != NULL){
                                        foreach ($homes_i as $key) {
                                ?>
                                <div class="stat-text">Inactive Clients: </div>
                                <div class="stat-digit">
                                    <?php echo $key->client_count ?>
                                </div>
                                <?php
                                        }
                                    }
                                ?>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-lg-3">
                <div class="card p-0">
                  <div class="stat-widget-three">
                    <div class="stat-icon bg-success">
                      <i class="fa fa-sitemap" style="height: 34px;"></i>
                    </div>
                    <div class="stat-content">
                       <?php 
                                    if($homessss_i != NULL){
                                        foreach ($homessss_i as $key) {
                                ?>
                                <div class="stat-text">Inactive Branches: </div>
                                <div class="stat-digit">
                                    <?php echo $key->branch_count ?>
                                </div>
                                <?php
                                        }
                                    }
                                ?>
                    </div>
                  </div>
                </div>
              </div>



              <div class="col-lg-3">
                <div class="card p-0">
                  <div class="stat-widget-three">
                    <div class="stat-icon bg-warning">
                      <i class="ti-location-pin"></i>
                    </div>
                    <div class="stat-content">
                        <?php 
                                    if($homess_i != NULL){
                                        foreach ($homess_i as $key) {
                                ?>
                                <div class="stat-text">Inactive Locations: </div>
                                <div class="stat-digit">
                                    <?php echo $key->location_count ?>
                                </div>
                                <?php
                                        }
                                    }
                                ?>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-lg-3">
                <div class="card p-0">
                  <div class="stat-widget-three">
                    <div class="stat-icon bg-danger">
                      <i > <img style="width: 34px; height: 34px; color: white;" src="<?php echo base_url('assets/service.png');?>" ></i>
                    </div>
                    <div class="stat-content">
                      <?php 
                                    if($homesssss_i != NULL){
                                        foreach ($homesssss_i as $key) {
                                ?>
                                <div class="stat-text">Inactive Services: </div>
                                <div class="stat-digit">
                                    <?php echo $key->service_count ?>
                                </div>
                                <?php
                                        }
                                    }
                                ?>
                    </div>
                  </div>
                </div>
              </div>
			
			
			<div class="col-lg-3">
                <div class="card p-0">	<!-- customers ========================================-->
                  <div class="stat-widget-three">
                    <div class="stat-icon bg-danger">
                      <i > <img style="width: 34px; height: 34px; color: white;" src="<?php echo base_url('assets/service.png');?>" ></i>
                    </div>
                    <div class="stat-content">
                      <?php 
                                    if($homesss_i != NULL){
                                        foreach ($homesss_i as $key) {
                                ?>
                                <div class="stat-text">Inactive Customers: </div>
                                <div class="stat-digit">
                                    <?php echo $key->user_count ?>
                                </div>
                                <?php
                                        }
                                    }
                                ?>
                    </div>
                  </div>
                </div>
              </div>
			
			<div class="col-lg-3">
                <div class="card p-0">		<!-- reservations ======================================-->
                  <div class="stat-widget-three">
                    <div class="stat-icon bg-danger">
                      <i > <img style="width: 34px; height: 34px; color: white;" src="<?php echo base_url('assets/service.png');?>" ></i>
                    </div>
                    <div class="stat-content">
                      <?php 
                                    if($homessssss_i != NULL){
                                        foreach ($homessssss_i as $key) {
                                ?>
                                <div class="stat-text">Inactive Reservations: </div>
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
			
			<div class="row">
                           <!--  <div class="col-lg-12">
                                <div class="card">
                                	<h3>Calendar</h3>
                                    <div class="card-body">
                                        <div class="year-calendar"></div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- /# column -->
                            <!-- <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-title">
                                        <h4>Notice Board </h4>

                                    </div>
                                    <div class="recent-comment m-t-15">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#"><img class="media-object" src="assets/images/avatar/1.jpg" alt="..."></a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading color-primary">john doe</h4>
                                                <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                                <p class="comment-date">10 min ago</p>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#"><img class="media-object" src="assets/images/avatar/3.jpg" alt="..."></a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading color-danger">Mr. John</h4>
                                                <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                                <div class="comment-date">Yesterday</div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#"><img class="media-object" src="assets/images/avatar/1.jpg" alt="..."></a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading color-primary">john doe</h4>
                                                <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                                <p class="comment-date">10 min ago</p>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#"><img class="media-object" src="assets/images/avatar/2.jpg" alt="..."></a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading color-success">Mr. John</h4>
                                                <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                                <p class="comment-date">1 hour ago</p>
                                            </div>
                                        </div>
                                        <div class="media no-border">
                                            <div class="media-left">
                                                <a href="#"><img class="media-object" src="assets/images/avatar/3.jpg" alt="..."></a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading color-info">Mr. John</h4>
                                                <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                                <div class="comment-date">Yesterday</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-title">
                                        <h4>Timeline</h4>

                                    </div>
                                    <div class="card-body">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-badge primary"><i class="fa fa-smile-o"></i></div>
                                                <div class="timeline-panel">
                                                    <div class="timeline-heading">
                                                        <h5 class="timeline-title">School promote video sharing</h5>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>10 minutes ago</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-badge warning"><i class="fa fa-sun-o"></i></div>
                                                <div class="timeline-panel">
                                                    <div class="timeline-heading">
                                                        <h5 class="timeline-title">Ready our school website and online service</h5>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>20 minutes ago</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-badge danger"><i class="fa fa-times-circle-o"></i></div>
                                                <div class="timeline-panel">
                                                    <div class="timeline-heading">
                                                        <h5 class="timeline-title">Routine pubish our website form 10/03/2017 </h5>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>30 minutes ago</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-badge success"><i class="fa fa-check-circle-o"></i></div>
                                                <div class="timeline-panel">
                                                    <div class="timeline-heading">
                                                        <h5 class="timeline-title">Principle quotation publish our website</h5>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>15 minutes ago</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-badge warning"><i class="fa fa-sun-o"></i></div>
                                                <div class="timeline-panel">
                                                    <div class="timeline-heading">
                                                        <h5 class="timeline-title">Class schedule publish our website</h5>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>20 minutes ago</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
 -->                        </div>
		</div>
	</div>
</div>