        <div style="height: auto%" class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <ul>
                        <div class="logo" style="padding-bottom: 20px;"><a href="<?php echo site_url('home_client');?>"><span style=" font-size: 20px;"> <?php echo $this->session->userdata['client_name']; ?></span></a></div>
                        <li class="label">Home</li>
                        <li style="font-size: 16px;"><a href="<?php echo site_url('home_client');?>"><i class="ti-home"></i> Dashboard</a></li>
                        <li class="label">Client</li>
                        <li style="font-size: 16px;"><a href="<?php echo site_url('reservations');?>"><i class="ti-calendar"></i> Reservations</a></li>
                        <li style="font-size: 16px;"><a href="<?php echo site_url('branches_client');?>"><i class="fa fa-sitemap"></i> Branches</a></li>
                        <li style="font-size: 16px;"><a href="<?php echo site_url('services_client');?>"><i class="fa fa-wrench"></i> Services Offered</a></li>
                          <!--  <li style="font-size: 16px;"><a href="<?php echo site_url('clients');?>"><i class="fa fa-users"></i>Clients</a></li>
                        <li style="font-size: 16px;"><a href="<?php echo site_url('services');?>"><i class="fa fa-wrench"></i> Services</a></li>
                        <li style="font-size: 16px;" > <a href="<?php echo site_url('locations');?>"><i class="ti-location-pin"></i> Locations</a></li>-->
                        <li style="font-size: 16px;"><a class="nav-link" data-toggle="modal" data-target="#logout" ><i class="ti-close"></i>Logout</a></li> 
                    </ul>
                </div>
            </div>
        </div>
        <div class="modal " id="logout" >
            <div class="modal-dialog" >
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Logout</h3>
                        <button class="close" type="button" data-dismiss="modal" >
                            <span></span>
                            <span ><i class="ti-close"></i></span>
                        </button>
                    </div>
                    <h4 style="margin-left:25px;margin-bottom:15px;" align="left"> Select "Logout" below if you are ready to end your current session.</h4>
                   
                    <div class="modal-footer">
                        <a class="btn btn-primary" href="<?php echo site_url('logout');?>">Logout</a>
                        <button class="btn btn-secondary   " type="button" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
<div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left">
                            <div class="hamburger sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="float-right">
                            <ul>
                                <li class="header-icon dib"><i class="ti-user" style="margin-right: 10px;"></i><span class="user-avatar" ><?php echo $this->session->userdata['client_name']; ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>