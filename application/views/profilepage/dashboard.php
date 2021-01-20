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
                                <div class="progress-bar" style="width:100%"></div>
                            </div>
                            <p class="mb-0 text-white small-font">Total Bookings</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <?Php if(isset($canceled)){
                             ?>
                            <h5 class="text-white mb-0"><?php echo $canceled.' Birr'?><span class="float-right">
                            <i class="fa fa-file-o fa-2x" aria-hidden="true"></i></span></h5>
                            <?php }?>
                            <div class="progress my-3" style="height:3px;">
                                <div class="progress-bar" style="width:100%"></div>
                            </div>
                            <p class="mb-0 text-white small-font">Cancelled Tickets</p>
                        </div>
                    <div class="col-12 col-lg-6 col-xl-3 border-light">
                        <div class="card-body">
                        <?Php if(isset($paid)){
                             ?>
                            <h5 class="text-white mb-0"><?php echo $paid?><span class="float-right">
                            <i class="fa fa-user-o fa-2x" aria-hidden="true"></i></span></h5>
                            <?php }?>
                            <div class="progress my-3" style="height:3px;">
                                <div class="progress-bar" style="width:100%"></div>
                            </div>
                            <p class="mb-0 text-white small-font">Paid Tickets</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>