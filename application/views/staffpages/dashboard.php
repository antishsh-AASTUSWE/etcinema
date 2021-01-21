

        <!--Start Dashboard Content-->

        <div class="card mt-3">
            <div class="card-content">
                <div class="row row-group m-0">
                    <div class="col-12 col-lg-6 col-xl-6 border-light">
                        <div class="card-body">
                            <?Php if(isset($countMovie)){
                             ?>
                            <h5 class="text-white mb-0"><?php echo $countMovie?> <span class="float-right">
                            <i class="fa fa-film fa-2x" ></i></span></h5>
                                <?php }?>
                            <div class="progress my-3" style="height:3px;">
                                <div class="progress-bar" style="width:100%"></div>
                            </div>
                            <p class="mb-0 text-white small-font">Movies Showing Today</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-6 border-light">
                        <div class="card-body">
                        <?Php if(isset($countCustomer)){
                             ?>
                            <h5 class="text-white mb-0"><?php echo $countCustomer?><span class="float-right">
                            <i class="fa fa-user-o fa-2x" aria-hidden="true"></i></span></h5>
                            <?php }?>
                            <div class="progress my-3" style="height:3px;">
                                <div class="progress-bar" style="width:100%"></div>
                            </div>
                            <p class="mb-0 text-white small-font">Users Registerd today</p>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-8 col-xl-8">
                <div class="card">
                    <div class="card-header">Next Movies
                        <div class="card-action">
                        </div>
                    </div>
                  <div class="card-body">
                    <?Php if(isset($nextMovies)){
                        foreach ($nextMovies as $m) {
                             ?>
                             
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-circle mr-2 text-white">
                            </i><?= $m['mov_name']; ?></li>
                            <ul>
                            </i><?= $m['show_date']; ?></li>
                            </ul>
                            <ul>
                            </i><?= $m['show_time']; ?></li>
                            </ul>
                            <ul>
                            </i><?= $m['cinema_name']; ?></li>
                            </ul>
                            </ul>
                        <div class="container">
                            
                        </div>
                        <?php }}?>
                    </div>

                    

                </div>
            </div>

            <div class="col-12 col-lg-4 col-xl-4">
                <div class="card">
                    <div class="card-header">New Customers
                        <div class="card-action">

                        </div>
                    </div>
                    <?Php if(isset($newCustomer)){
                        foreach ($newCustomer as $c) {
                             ?>
                             
                    <div class="card-body">
                        <div class="container">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-circle mr-2 text-white">
                            </i><?= $c['first_name']; ?>&nbsp;<?= $c['last_name']; ?></li>
                            
                            </ul>

                        </div>
                    </div>
                        <?php }} ?>
                    
                </div>
            </div>
        </div>
        <!--End Row-->

        
        <!--End Row-->

        <!--End Dashboard Content-->
