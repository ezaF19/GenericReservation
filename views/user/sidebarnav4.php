        <div style="height: auto;" class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <ul>
                        <div class="logo" style="padding-bottom: 20px;"><a href="<?php echo base_url('User_controller/user_profile');?>"><span style="font-size: 20px;">Generic Reservation</span></a></div>
                        <li class="label">Home</li>
                        <li style="font-size: 16px;"><a href="<?php echo base_url('User_controller/user_profile');?>"><i class="ti-home"></i>DashBoard</a></li>
                        <li style="font-size: 16px;"><a href="<?php echo base_url('User_controller/edit');?>"><i class="ti-home"></i>Edit Profile</a></li>
                       
                        <li style="font-size: 16px;"><a href="<?php echo base_url('User_controller/make_reservation');?>"><i class="fa fa-users"></i>Make Reservation</a></li>
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
                                <li class="header-icon dib"><i class="ti-user" style="margin-right: 10px;"></i><span class="user-avatar" ><?php echo $this->session->userdata['user_username']; ?></span>
                                </li>
								<li style="font-size: 16px;"><a class="nav-link" data-toggle="modal" data-target="#logout" ><i class="ti-close"></i>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>