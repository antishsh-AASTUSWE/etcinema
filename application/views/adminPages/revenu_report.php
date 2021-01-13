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
                                    <a class="dropdown-item" href="<?php echo base_url() ?>admin/movie_revenu">Movie Revenu Report</a>
                                    <a class="dropdown-item" href="<?php echo base_url() ?>admin/cinema_revenu">Cinema Revenu Report</a>
                                    
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="card-body">
                    <?php echo form_open_multipart('admin/movie_report'); ?>
                    <div class="form-group">
                            <input type="text" name="movie" list="cars" placeholder="Type Movie name or Select" class="form-control form-control-rounded" />
                                <datalist id="cars" >
                                <option>Volvo</option>
                                <option>Saab</option>
                                <option>Mercedes</option>
                                <option>Audi</option>
                                </datalist>
                                <div class="text-danger">
                        <?php echo form_error('movie'); ?>
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Select Date</label>
                    <input type="date" class="form-control form-control-rounded" name="date">
                    <div class="text-danger">
                        <?php echo form_error('date'); ?>
                    </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-light btn-round px-4 float-right"><i class="icon-lock"></i> Go</button>
                        </div>
                        </form>
                </div>
                <div class="table-responsive">
                        <table class="table align-items-center">
                            <tbody>
                                
                                <tr>
                                <label for="exampleInputEmail1"></label>
                                <div class="d-flex justify-content-center">
                                <a href="<?php echo base_url() ?>admin/box_office" class="btn btn-light btn-round px-4 float-right">
                                <i class="icon-lock"></i>Box Office</a>
                                
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
                        
                       
                    <?php if(isset($movie_revenu)){ ?>
                            <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                            
                            <th scope="col">Movie</th>
                            <th scope="col">Revenu</th>
                            <th scope="col">date</th>
                            </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($movie_revenu as $m) : ?>
                                    <tr>
                                    <td><?= $m['mov_name']; ?></td>
                                    <td><?= $m['revenu']; ?></td>
                                    <td><?= $m['show_date']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                            <a href="<?php echo base_url(); ?>admin/showtime_pdfdetails" class="btn btn-light btn-round px-5 ml-1">View in PDF</a>
                            </div>
                            <?php } else if(isset($cinema_revenu)){ ?>
                            <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                            
                            <th scope="col">Cinema</th>
                            <th scope="col">Revenu</th>
                            <th scope="col">date</th>
                            </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($cinema_revenu as $c) : ?>
                                    <tr>
                                    <td><?= $c['mov_name']; ?></td>
                                    <td><?= $c['revenu']; ?></td>
                                    <td><?= $c['show_date']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                            <a href="<?php echo base_url(); ?>admin/showtime_pdfdetails" class="btn btn-light btn-round px-5 ml-1">View in PDF</a>
                            </div>
                            <?php }else if(isset($box_office)){ ?>
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
                            <a href="<?php echo base_url(); ?>admin/showtime_pdfdetails" class="btn btn-light btn-round px-5 ml-1">View in PDF</a>
                            </div>
                            <?php } else {
                                echo 'No Data Found!';}?>
                    </div>

                    <div class="row m-0 row-group text-center border-top border-light-3">
                        <div class="col-12 col-lg">
                            <div class="p-3">
                                <h5 class="mb-0">45.87M</h5>
                                <small class="mb-0">Overall Visitor <span> <i class="fa fa-arrow-up"></i> 2.43%</span></small>
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>

            
        </div>