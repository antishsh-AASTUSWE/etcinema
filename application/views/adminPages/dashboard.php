

        <!--Start Dashboard Content-->

        <div class="card mt-3">
            <div class="card-content">
                <div class="row row-group m-0">
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                        <div class="card-body">
                        <?Php if(isset($totalBooking)){
                             ?>
                            <h5 class="text-white mb-0"><?php echo $totalBooking?><span class="float-right">
                            <i class="fa fa-file-o fa-2x" aria-hidden="true"></i></span></h5>
                            <?php }?>
                            <div class="progress my-3" style="height:3px;">
                                <div class="progress-bar" style="width:55%"></div>
                            </div>
                            <p class="mb-0 text-white small-font">Total Bookings</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-3 border-light">
                        <div class="card-body">
                            <h5 class="text-white mb-0">8323 <span class="float-right"><i class="fa fa-usd"></i></span></h5>
                            <div class="progress my-3" style="height:3px;">
                                <div class="progress-bar" style="width:55%"></div>
                            </div>
                            <p class="mb-0 text-white small-font">Total Revenue <span class="float-right">+1.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-3 border-light">
                        <div class="card-body">
                        <?Php if(isset($countCustomer)){
                             ?>
                            <h5 class="text-white mb-0"><?php echo $countCustomer?><span class="float-right">
                            <i class="fa fa-user-o fa-2x" aria-hidden="true"></i></span></h5>
                            <?php }?>
                            <div class="progress my-3" style="height:3px;">
                                <div class="progress-bar" style="width:55%"></div>
                            </div>
                            <p class="mb-0 text-white small-font">Customer Registerd today</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-3 border-light">
                        <div class="card-body">
                        <?Php if(isset($countUser)){
                             ?>
                            <h5 class="text-white mb-0"><?php echo $countUser?><span class="float-right">
                            <i class="fa fa-user-o fa-2x" aria-hidden="true"></i></span></h5>
                            <?php }?>
                            <div class="progress my-3" style="height:3px;">
                                <div class="progress-bar" style="width:55%"></div>
                            </div>
                            <p class="mb-0 text-white small-font">Total Users</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-8 col-xl-8">
                <div class="card">
                    <div class="card-header">Site Traffic
                        
                    </div>
                    <div class="card-body">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-circle mr-2 text-white"></i>New Visitor</li>
                            <li class="list-inline-item"><i class="fa fa-circle mr-2 text-light"></i>Old Visitor</li>
                        </ul>
                        <div class="chart-container-1">
                            <canvas id="chart1"></canvas>
                        </div>
                    </div>

                    <div class="row m-0 row-group text-center border-top border-light-3">
                        <div class="col-12 col-lg-4">
                            <div class="p-3">
                                <h5 class="mb-0">45.87M</h5>
                                <small class="mb-0">Overall Visitor <span> <i class="fa fa-arrow-up"></i> 2.43%</span></small>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="p-3">
                                <h5 class="mb-0">15:48</h5>
                                <small class="mb-0">Visitor Duration <span> <i class="fa fa-arrow-up"></i> 12.65%</span></small>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="p-3">
                                <h5 class="mb-0">245.65</h5>
                                <small class="mb-0">Pages/Visit <span> <i class="fa fa-arrow-up"></i> 5.62%</span></small>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12 col-lg-4 col-xl-4">
                <div class="card">
                    <div class="card-header">Weekly sales
                        <div class="card-action">
                            <div class="dropdown">
                                <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                                    <i class="icon-options"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void();">Action</a>
                                    <a class="dropdown-item" href="javascript:void();">Another action</a>
                                    <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void();">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-container-2">
                            <canvas id="chart2"></canvas>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center">
                            <tbody>
                                <tr>
                                    <td><i class="fa fa-circle text-white mr-2"></i> Cbe Birr</td>
                                    <td>$5856</td>
                                    <td>+55%</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-circle text-light-1 mr-2"></i>Amole Walet</td>
                                    <td>$2602</td>
                                    <td>+25%</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-circle text-light-2 mr-2"></i>Hello cash</td>
                                    <td>$1802</td>
                                    <td>+15%</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-circle text-light-3 mr-2"></i>Other</td>
                                    <td>$1105</td>
                                    <td>+5%</td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--End Row-->

        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card">
                    <div class="card-header">Recent Order Tables

                    </div>
                    <div class="table-responsive">
                        
<?php if(isset($booking)){ ?>

 
      <table class="table table-striped" id="mydatatable">
        <thead>
          <tr>
      <th scope="col">ID</th>
      <th scope="col">User name</th>
      <th scope="col">Movie</th>
      <th scope="col">Date</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Joined Date</th>
      <th scope="col">Edit/Delete</th>
     
          </tr>
        </thead>
        <tbody>
          <?php foreach ($booking as $b) : ?>
            <tr>
              <td><?= $b['cust_id']; ?></td>
              <td><?= $b['first_name']; ?></td>
              <td><?= $b['last_name']; ?></td>
              <td><?= $b['email']; ?></td>
              <td><?= $b['phone_no']; ?></td>
              <td><?= $b['DBO']; ?></td>
              <td><?= $b['joined_date']; ?></td>
             
               
              <td><a href="<?php echo base_url(); ?>admin/bookingView/<?= $b['cust_id'] ?>"
               class="btn btn-light btn-round px-5">View</a>
               <a href="<?php echo base_url(); ?>admin/PDF/<?= $b['cust_id'] ?>"
                class="btn btn-light btn-round px-5 ml-1">view in PDF</a></td>

            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
   
          <?php }else { ?>
              <div class="card">
              <div class="card-body">
             NO Data found!
              </div>
          </div>
        <?php  }?>

                    </div>
                </div>
            </div>
        </div>
        <!--End Row-->

        <!--End Dashboard Content-->
