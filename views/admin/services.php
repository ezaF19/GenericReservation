<!-- 
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Welcome, <?php echo $this->session->userdata['user_username']; ?>!</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 -->
<div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12" style="width: 100%;">
                            <div class="card1">
                                <div class="card-title">
                                    <h2 style="color:  #ccc;">Services
                                        <a style=" float: right;" ><button data-toggle="modal" data-target="#newservice" class="btn btn-primary btn-md">Add New Service</button> </a>
                                        <div class="modal " id="newservice" >
                                            <div class="modal-dialog" >
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 style="color:  #343957;" class="modal-title">Add</h2>
                                                        <button class="close" type="button" data-dismiss="modal" >
                                                            <span></span>
                                                            <span ><i class="ti-close"></i></span>
                                                        </button>
                                                    </div>
                                                    <!--  -->
                                                     <?php 
                                                        echo form_open('admin_controller/create_ser');
                                                        echo '
                                                            <h4 style="margin-left:20px; color:  #343957;" align="left">Service Name:</h4>
                                                            <input align="center" style="padding:5px; width: 80%;font-size:20px; margin-left:50px; margin-bottom:20px;" type="text" placeholder="Service Name" name="service_name">
                                                            <div class="modal-footer">
                                                                <input class="btn btn-primary" name="submit" value="Add" type="submit" style="">
                                                                <button class="btn btn-secondary" style="float:right;" type="button" data-dismiss="modal">Cancel</button>       
                                                            </div>';
                                                        echo form_close();

                                                     ?>
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
                                    <table id="row-select" style="width: 100%" class=" example table table-bordered table-hover">
                                        <thead style="color:  #343957;font-weight: bold; font-size: 15px;">
                                            <tr>
                                                <td align="center" width="15%">Service ID</td>
                                                <td align="center" width="20%">Service Name</td>
                                                <td align="center" width="15%">Created By</td>
                                                <td align="center" width="15%">Created Date</td>
                                                <td align="center" width="15%">Updated By</td>
                                                <td align="center" width="15%">Updated Date</td>
                                                <td align="center" width="15%">Options</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($services!=NULL){
                                                foreach ($services as $key) {
                                                ?>
                                                <tr>
                                                    <td align="center"><?php echo $key->service_id ?></td>
                                                    <td align="center"><?php echo $key->service_name ?></td>
                                                    <td align="center"><?php echo $key->created_by ?></td>
                                                    <td align="center"><?php echo $key->created_date ?></td>
                                                    <td align="center"><?php echo $key->updated_by ?></td>
                                                    <td align="center"><?php echo $key->updated_date ?></td>
                                                    <td align="center">
                                                    <?php 
                                                        echo '<a data-toggle="modal" data-target="#update'.$key->service_id.'" class="btn btn-warning" style="width:65px; color:white;">Update</a>';
                                                        echo '<div class="modal" id="update'. $key->service_id.'" >
                                                                 <div class="modal-dialog" >
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h2 class="modal-title">Update </h2>
                                                                            <button class="close" type="button" data-dismiss="modal" >
                                                                                <span></span>
                                                                                <span ><i class="ti-close"></i></span>
                                                                            </button>
                                                                        </div>
                                                                     '.form_open("admin_controller/update_ser/$key->service_id").'
                                                                         <h4 style="margin-left:15px;margin-bottom:10px;" align="left">Service Name:</h4>
                                                                         <nav align="center">
                                                                            <input style="width: 80%;font-size:20px;" type="text" name="service_name" value="'.$key->service_name.'"  required />
                                                                        </nav>                                                             
                                                                        <div class="modal-footer">
                                                                            <input type="submit" name="submit" value="Update" class="btn    btn-primary">
                                                                            <button class="btn btn-secondary   " type="button" data-dismiss="modal">Cancel</button>
                                                                        </div>
                                                                         '.form_close().'
                                                                    </div>
                                                                </div>
                                                            </div>';

                                                    ?>
                                                    <?php 
                                                        echo '<a data-toggle="modal" data-target="#delete'.$key->service_id.'" class="btn  btn-danger" style="width:85px; color:white;">Deactivate</a>';
                                                        echo '<div class="modal " id="delete'.$key->service_id.'" >
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
                                                                       <a class="btn btn-danger" href="'.base_url("admin_controller/delete_ser/".$key->service_id).'">Deactivate</a>
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
                                       <table id="bootstrap-data-table" style="width: 100%"  class="table example table-bordered table-hover">
                                        <thead style="color:  #343957;font-weight: bold; font-size: 15px;">
                                                <tr>
                                                     <td align="center" width="10%">Service ID</td>
                                                <td align="center" width="10%">Service Name</td>
                                                <td align="center" width="12%">Created By</td>
                                                <td align="center" width="14%">Created Date</td>
                                                <td align="center" width="10%">Updated By</td>
                                                <td align="center" width="14%">Updated Date</td>
                                                <td align="center" width="14%">Options</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($services_inactive!=NULL){
                                                    foreach ($services_inactive as $key) {
                                                    ?>
                                                    <tr>
                                                        <td align="center"><?php echo $key->service_id ?></td>
                                                        <td align="center"><?php echo $key->service_name ?></td>
                                                        <td align="center"><?php echo $key->created_by ?></td>
                                                        <td align="center"><?php echo $key->created_date ?></td>
                                                        <td align="center"><?php echo $key->updated_by ?></td>
                                                        <td align="center"><?php echo $key->updated_date ?></td>
                                                        <td align="center">
                                                        <!-- <a href="<?php echo site_url('admin_controller/read_update_ser/'.$key->service_id.''); ?>" class="btn btn-xs btn-warning" style="width:70px;">Update</a> -->
                                                        <!-- <a href="<?php echo site_url('admin_controller/activate_ser/'.$key->service_id.''); ?>" class="btn btn-xs btn-success" style="width:70px;">Activate</a> -->
                                                         <?php 
                                                        echo '<a data-toggle="modal" data-target="#update1'.$key->service_id.'" class="btn btn-warning" style="width:65px; color:white;">Update</a>';
                                                        echo '<div class="modal" id="update1'. $key->service_id.'" >
                                                                 <div class="modal-dialog" >
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h2 class="modal-title">Update </h2>
                                                                            <button class="close" type="button" data-dismiss="modal" >
                                                                                <span></span>
                                                                                <span ><i class="ti-close"></i></span>
                                                                            </button>
                                                                        </div>
                                                                     '.form_open("admin_controller/update_ser/$key->service_id").'
                                                                         <h4 style="margin-left:15px;margin-bottom:10px;" align="left">Service Name:</h4>
                                                                         <nav align="center">
                                                                            <input style="width: 80%;font-size:20px;" type="text" name="service_name" value="'.$key->service_name.'"  required />
                                                                        </nav>                                                             
                                                                        <div class="modal-footer">
                                                                            <input type="submit" name="submit" value="Update" class="btn    btn-primary">
                                                                            <button class="btn btn-secondary   " type="button" data-dismiss="modal">Cancel</button>
                                                                        </div>
                                                                         '.form_close().'
                                                                    </div>
                                                                </div>
                                                            </div>';

                                                    ?>
                                                    <?php 
                                                        echo '<a data-toggle="modal" data-target="#activate'.$key->service_id.'" class="btn  btn-success" style="width:80px; color:white;">Activate</a>';
                                                        echo '<div class="modal " id="activate'.$key->service_id.'" >
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
                                                                       <a class="btn btn-success" href="'.base_url("admin_controller/activate_ser/".$key->service_id).'">Activate</a>
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

                </section>
                </div>
                </div>
            </div>
        </div>


