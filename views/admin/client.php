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
</div> -->

<div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
   
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12" style="width: 100%;">
                            <div class="card1">
                                <div class="card-title">
                                    <h2 style="color:  #ccc;">Clients</h2>
                                </div>

<br>
                                <div class="card" data-toggle="collapse" data-target="#demo">
                                <h4 style="color:  #343957;">Active</h4>
                                </div>

                                <div  id="demo" class="collapse">
                                  <div class="card" >
                                  <table id="example" style="width: 100%;" class="table table-bordered table-hover">
                                      <thead style="font-weight: bold; font-size: 15px;">
                                          <tr>
                                              <td align="center" width="">Client ID</td>
                                              <td align="center" width="">Service Type</td>
                                              <td align="center" width="">Location</td>
                                              <td align="center" width="" >Client Name</td>
                                              <td align="center" width="">Options</td>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <?php if($clients!=NULL){
                                                  foreach ($clients as $key) {
                                          ?>
                                              <tr>
                                                  <td align="center"><?php echo $key->client_id ?></td>
                                                  <td align="center"><?php echo $key->service_name ?></td>
                                                  <td align="center"><?php echo $key->location_name ?></td>
                                                  <td align="center"><?php echo $key->client_name ?></td>     
                                                 <td align="center">
                                                   <?php 
                                                   echo '<a href="'.site_url('admin_controller/view_cli/'.$key->client_id.'').'"class="btn  btn-info" style="width:60px; border-bottom: 0.5px;">View</a>';
                                                   echo '<a data-toggle="modal" data-target="#delete'.$key->client_id.'" class="btn btn-danger" style="width:85px; margin-left:5px; color:white;">Deactivate</a>';
                                                      echo '<div class="modal " id="delete'.$key->client_id.'" >
                                                              <div class="modal-dialog" >
                                                                <div class="modal-content">
                                                                   <div class="modal-header">
                                                                      <h2 class="modal-title">Are you sure you want to deactivate <br> this?</h2>
                                                                        <button class="close" type="button" data-dismiss="modal" >
                                                                         <span></span>
                                                                              <span ><i class="ti-close"></i></span>
                                                                      </button>
                                                                   </div>
                                                                   <div class="modal-footer">
                                                                     <a class="btn btn-lg btn-danger" href="'.site_url("admin_controller/delete_cli/".$key->client_id).'">Delete</a>
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
                                <h4 style="color:  #343957;">Inactive</h4>
                                </div> 

                                <div  id="demo1" class="collapse">
                                  <div class="card">
                                  <table id="bootstrap-data-table" style="width: 100%;" class="example table table-bordered table-hover">
                                      <thead style="font-weight: bold; font-size: 15px;">
                                          <tr>
                                              <td align="center" width="20%">Client ID</td>
                                              <td align="center" width="13%">Service Type</td>
                                              <td align="center" width="15%">Location</td>
                                              <td align="center" width="24%" >Client Name</td>
                                              <td align="center" width="10%">Options</td>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <?php if($clients_inactive!=NULL){
                                                  foreach ($clients_inactive as $key) {
                                          ?>
                                              <tr>
                                                  <td align="center"><?php echo $key->client_id ?></td>
                                                  <td align="center"><?php echo $key->service_name ?></td>
                                                  <td align="center"><?php echo $key->location_name ?></td>
                                                  <td align="center"><?php echo $key->client_name ?></td>     
                                                  <td align="center">
                                                  <!-- <a href="<?php echo site_url('admin_controller/view_cli/'.$key->client_id.''); ?>" class="btn btn-xs btn-info" style="width:70px;">View</a>
                                                  <a href="<?php echo site_url('admin_controller/activate_cli/'.$key->client_id.''); ?>" class="btn btn-xs btn-success" style="width:70px;">Activate</a> -->
                                                  <?php 
                                                   echo '<a href="'.site_url('admin_controller/view_cli/'.$key->client_id.'').'"class="btn  btn-info" style="width:60px; border-bottom: 0.5px;">View</a>';
                                                   echo '<a data-toggle="modal" data-target="#activate'.$key->client_id.'" class="btn btn-success" style="width:75px; margin-left:5px; color:white;">Activate</a>';
                                                      echo '<div class="modal " id="activate'.$key->client_id.'" >
                                                              <div class="modal-dialog" >
                                                                <div class="modal-content">
                                                                   <div class="modal-header">
                                                                      <h2 class="modal-title">Are you sure you want to activate <br> this?</h2>
                                                                        <button class="close" type="button" data-dismiss="modal" >
                                                                         <span></span>
                                                                              <span ><i class="ti-close"></i></span>
                                                                      </button>
                                                                   </div>
                                                                   <div class="modal-footer">
                                                                     <a class="btn btn-lg btn-success" href="'.base_url("admin_controller/activate_cli/".$key->client_id).'">Activate</a>
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
                </section>
            </div>
        </div>
    </div>
    