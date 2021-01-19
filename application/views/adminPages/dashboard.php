<!--Start Dashboard Content-->

<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                    <?Php if (isset($totalBooking)) {
                    ?>
                        <h5 class="text-white mb-0"><?php echo $totalBooking ?><span class="float-right">
                                <i class="fa fa-file-o fa-2x" aria-hidden="true"></i></span></h5>
                    <?php } ?>
                    <div class="progress my-3" style="height:3px;">
                        <div class="progress-bar" style="width:55%"></div>
                    </div>
                    <p class="mb-0 text-white small-font">Total Bookings</p>
                </div>
            </div>
            <div class="card-body">
                <?Php if (isset($totalRevenue)) {
                ?>
                    <h5 class="text-white mb-0"><?php echo $totalRevenue . ' Birr' ?><span class="float-right">
                            <i class="fa fa-file-o fa-2x" aria-hidden="true"></i></span></h5>
                <?php } ?>
                <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width:55%"></div>
                </div>
                <p class="mb-0 text-white small-font">Total Revenue</p>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                    <?Php if (isset($countCustomer)) {
                    ?>
                        <h5 class="text-white mb-0"><?php echo $countCustomer ?><span class="float-right">
                                <i class="fa fa-user-o fa-2x" aria-hidden="true"></i></span></h5>
                    <?php } ?>
                    <div class="progress my-3" style="height:3px;">
                        <div class="progress-bar" style="width:55%"></div>
                    </div>
                    <p class="mb-0 text-white small-font">Customer Registerd today</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                    <?Php if (isset($countUser)) {
                    ?>
                        <h5 class="text-white mb-0"><?php echo $countUser ?><span class="float-right">
                                <i class="fa fa-user-o fa-2x" aria-hidden="true"></i></span></h5>
                    <?php } ?>
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
            <div class="card-header">Whole sales

            </div>
            <div class="card-body">
                <div class="chart-container-2">
                    <div id="donutchart"></div>

                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center">
                    <tbody>
                        <tr>
                            <td><i class="fa fa-circle text-white mr-2"></i> Cbe Birr</td>
                            <td>$<?= $cbe; ?></td>
                            <td>+55%</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-circle text-light-1 mr-2"></i>Amole Walet</td>
                            <td>$<?= $amole; ?></td>
                            <td>+25%</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-circle text-light-2 mr-2"></i>Hello cash</td>
                            <td>$<?= $helo; ?></td>
                            <td>+15%</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-circle text-light-3 mr-2"></i>M-BIRR</td>
                            <td>$<?= $mbirr; ?></td>
                            <td>+5%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--End Row-->


<!--End Row-->

<!--End Dashboard Content-->




<script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['CBE BIRR', <?= $cbe; ?>],
            ['Amole', <?= $amole; ?>],
            ['M-Birr', <?= $mbirr; ?>],
            ['Halo Cash', <?= $helo; ?>]

        ]);

        var options = {
            //title: 'My Daily Activities',
            //pieHole: 0.4,
            chartArea: {
                width: '100%',
                height: '100%'
            },
          
            is3D: true,
            backgroundColor: {
                fill: 'transparent'
            }
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
    }
</script>