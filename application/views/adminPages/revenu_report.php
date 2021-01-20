<div class="row">
    <div class="col-12 col-lg-4 col-xl-4">
        <div class="card">
            <div class="card-header">Movie Revenu Report
                <div class="card-action">
                    <div class="dropdown">
                        <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                            <i class="icon-options"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="<?php echo base_url() ?>movie_revenu">Movie Revenu Report</a>
                            <a class="dropdown-item" href="<?php echo base_url() ?>cinema_revenu">Cinema Revenu Report</a>

                        </div>
                    </div>
                </div>
            </div>
           
            <div class="table-responsive">
                <table class="table align-items-center">
                    <tbody>

                        <tr>
                            <label for="exampleInputEmail1"></label>
                            <div class="d-flex justify-content-center">
                                <a href="<?php echo base_url() ?>box_office" class="btn btn-light btn-round px-4 float-right">
                                    <i class="icon-lock"></i>Tranding</a>

                            </div>
                            <label for="exampleInputEmail1"></label>
                            <div class="d-flex justify-content-center">
                                <a href="<?php echo base_url() ?>weekly_revenu" class="btn btn-light btn-round px-4 float-right">
                                    <i class="icon-lock"></i>This week Revenu</a>

                            </div>
                            <label for="exampleInputEmail1"></label>
                            <div class="d-flex justify-content-center">
                                <a href="<?php echo base_url() ?>monthly_revenu" class="btn btn-light btn-round px-4 float-right">
                                    <i class="icon-lock"></i>This month</a>

                            </div>

                            <label for="exampleInputEmail1"></label>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <div class="col-12 col-lg-8 col-xl-8">
        <div class="card">
            <div class="card-header">Report

            </div>
            <div class="card-body">


                <?php if (isset($weekly_revenu)) { ?>
                    <h4>Weekly Revenu</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>

                                    <th scope="col">Movie</th>
                                    <th scope="col">gross</th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($weekly_revenu as $m) : ?>
                                    <tr>
                                        <td><?= $m['mov_name']; ?></td>
                                        <td><?= $m['gross']; ?></td>
                                        
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <a href="<?php echo base_url(); ?>weekly_revenu_pdfdetails" class="btn btn-light btn-round px-5 ml-1">View in PDF</a>
                    </div>
                <?php } else if (isset($monthly_revenu)) { ?>
                    <h4>Monthly revenu</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>

                                    <th scope="col">movie</th>
                                    <th scope="col">gross</th>
                                   
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($monthly_revenu as $c) : ?>
                                    <tr>
                                        <td><?= $c['mov_name']; ?></td>
                                        <td><?= $c['gross']; ?></td>
                                        
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <a href="<?php echo base_url(); ?>monthly_revenu_pdfdetails" class="btn btn-light btn-round px-5 ml-1">View in PDF</a>
                    </div>
                <?php } else if (isset($box_office)) { ?>
                    <h4>Tranding Movies</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>

                                    <th scope="col">title</th>

                                    <th scope="col">gross</th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($box_office as $c) : ?>
                                    <tr>
                                        <td><?= $c['mov_name']; ?></td>

                                        <td><?= $c['gross']; ?></td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        </div>
                <?php } else {
                    echo 'No Data Found!';
                } ?>
            </div>

            

        </div>
    </div>


</div>