<input type="hidden" id="dashboard-page">
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-8 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0"><?php echo $page_title; ?> - Page</h3>
        </div>
        <div class="">
            <!-- <button class="right-side-toggle waves-effect waves-light btn-primary btn btn-circle pull-right m-l-10"><i class="fa fa-sun text-white"></i></button> -->
            <!-- <button id="push-api" class="btn btn-primary pull-right">PUSH API</button> -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <p><?php // print_r($common_count); ?></p>
        <input type="hidden" id="runningVehicles" value="<?php
            if(isset(json_decode($common_count)->data->running_vehicle_count)){
                print_r(json_decode($common_count)->data->running_vehicle_count);
            } else { echo '0'; }?>">
        <input type="hidden" id="idleVehicles" value="<?php
            if(isset(json_decode($common_count)->data->idle_vehicle_count)){
                print_r(json_decode($common_count)->data->idle_vehicle_count);
            } else { echo '0'; }?>">
        <input type="hidden" id="parkedVehicles" value="<?php
            if(isset(json_decode($common_count)->data->parked_vehicle_count)){
                print_r(json_decode($common_count)->data->parked_vehicle_count);
            } else { echo '0'; }?>">
        <input type="hidden" id="overspeedVehicles" value="<?php
            if(isset(json_decode($common_count)->data->over_speed_count)){
                print_r(json_decode($common_count)->data->over_speed_count);
            } else { echo '0'; }?>">
        <input type="hidden" id="speed_30" value="<?php
            if(isset(json_decode($common_count)->data->speed_30)){
                print_r(json_decode($common_count)->data->speed_30);
            } else { echo '0'; }?>">
        <input type="hidden" id="speed_80" value="<?php
            if(isset(json_decode($common_count)->data->speed_80)){
                print_r(json_decode($common_count)->data->speed_80);
            } else { echo '0'; }?>">
        <input type="hidden" id="distance_today" value='<?php
            if(isset(json_decode($common_count)->data->distance_today)){
                print_r(json_encode(json_decode($common_count)->data->distance_today));
            } else { print_r($common_count); }?>'>
        <input type="hidden" id="distance_week" value='<?php
            if(isset(json_decode($common_count)->data->distance_week)){
                print_r(json_encode(json_decode($common_count)->data->distance_week));
            } else { echo '0'; }?>'>
        <input type="hidden" id="distance_month" value='<?php
            if(isset(json_decode($common_count)->data->distance_month)){
                print_r(json_encode(json_decode($common_count)->data->distance_month));
            } else { echo '0'; }?>'>
        <input type="hidden" id="ldistance_today" value='<?php
            if(isset(json_decode($common_count)->data->ldistance_today)){
                print_r(json_encode(json_decode($common_count)->data->ldistance_today));
            } else { print_r($common_count); }?>'>
        <input type="hidden" id="ldistance_week" value='<?php
            if(isset(json_decode($common_count)->data->ldistance_week)){
                print_r(json_encode(json_decode($common_count)->data->ldistance_week));
            } else { echo '0'; }?>'>
        <input type="hidden" id="ldistance_month" value='<?php
            if(isset(json_decode($common_count)->data->ldistance_month)){
                print_r(json_encode(json_decode($common_count)->data->ldistance_month));
            } else { echo '0'; }?>'>
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <?php 
            $vechicle_count = '0';
        ?>
        <div class="col-lg-3 col-md-6">
            <a href="<?php echo base_url("admin/management/alerts"); ?>" target="_blank">
                <div class="card">
                    <div class="d-flex flex-row">
                        <div class="p-10 bg-danger">
                            <h3 class="text-white box m-b-0"><i class="fa fa-bell fa-2x"></i></h3></div>
                        <div class="align-self-center m-l-20">
                            <h3 class="m-b-0 text-info" id="panic-count">
                                <?php 
                                    // if(isset(json_decode($common_count)->data->panic_count)){
                                    //     print_r(json_decode($common_count)->data->panic_count);
                                    // }
                                ?>
                            </h3>
                            <h5 class="text-muted m-b-0">Panic Alert</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <a href="<?php echo base_url("admin/management/vehicle"); ?>" target="_blank">
                <div class="card">
                    <div class="d-flex flex-row">
                        <div class="p-10 bg-success">
                            <h3 class="text-white box m-b-0"><i class="fa fa-truck-moving fa-2x"></i></h3></div>
                        <div class="align-self-center m-l-20">
                            <h3 class="m-b-0 text-info" id="vehicle-count">
                                <?php 
                                    if(isset(json_decode($common_count)->data->vehicle_count)){
                                        print_r(json_decode($common_count)->data->vehicle_count);
                                        $vechicle_count = json_decode($common_count)->data->vehicle_count;
                                    }
                                ?>
                            </h3>
                            <h5 class="text-muted m-b-0">Vehicles</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <a href="<?php echo base_url("admin/management/vehicle"); ?>" target="_blank">
                <div class="card">
                    <div class="d-flex flex-row">
                        <div class="p-10 bg-info">
                            <h3 class="text-white box m-b-0"><i class="fa fa-envelope fa-2x"></i></h3></div>
                        <div class="align-self-center m-l-20">
                            <h3 class="m-b-0 text-info" id="sms-count">
                                <?php 
                                    if(isset(json_decode($common_count)->data->sms_balance)){
                                        print_r(json_decode($common_count)->data->sms_balance);
                                    }
                                ?>
                            </h3>
                            <h5 class="text-muted m-b-0">SMS Balance</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <a href="<?php echo base_url("admin/management/driver"); ?>" target="_blank">
                <div class="card">
                    <div class="d-flex flex-row">
                        <div class="p-10 bg-primary">
                            <h3 class="text-white box m-b-0"><i class="fa fa-steering-wheel fa-2x"></i></h3></div>
                        <div class="align-self-center m-l-20">
                            <h3 class="m-b-0 text-info" id="driver-count">
                                <?php
                                    if(isset(json_decode($common_count)->data->driver_count)){
                                        print_r(json_decode($common_count)->data->driver_count);
                                    }
                                ?>
                            </h3>
                            <h5 class="text-muted m-b-0">Drivers</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- Column -->
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 pr-3">
                            <table class="table browser mb-0 no-border">
                                <tbody>
                                    <tr>
                                        <a href="#">
                                            <td style="width:40px"><i class="fa fa-location-arrow home-staus-icon icon-running"></i></td>
                                            <td>Running Vehicless</td>
                                            <td class="text-right">
                                                <a href="#" onclick="dashboard_page.viewvehicleReport(id)">
                                                    <span class="label states-label label-light-info" id="running-count">
                                                        <?php
                                                            // if(isset(json_decode($common_count)->data->running_vehicle_count)){
                                                            //     print_r(json_decode($common_count)->data->running_vehicle_count . " / ". $vechicle_count);
                                                            // }
                                                        ?>
                                                    </span>
                                                </a>
                                            </td>
                                        </a>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-bed home-staus-icon icon-idle"></i></td>
                                        <td>Idle Vehicles</td>
                                        <td class="text-right">
                                            <span class="label states-label label-light-success"  id="idle-count">
                                                <?php
                                                    // if(isset(json_decode($common_count)->data->idle_vehicle_count)){
                                                    //     print_r(json_decode($common_count)->data->idle_vehicle_count . " / ". $vechicle_count);
                                                    // }
                                                ?>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-archway home-staus-icon icon-geo-area"></i></td>
                                        <td>Inside Geofence Area</td>
                                        <td class="text-right">
                                            <span class="label states-label label-light-danger"  id="insidegeo-count">
                                                <?php
                                                    // if(isset(json_decode($common_count)->data->inside_geofence_count)){
                                                    //     print_r(json_decode($common_count)->data->inside_geofence_count . " / ". $vechicle_count);
                                                    // }
                                                ?>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4 pr-3">
                            <table class="table browser mb-0 no-border">
                                <tbody>
                                    <tr>
                                        <td style="width:40px"><i class="fa fa-shipping-fast home-staus-icon icon-no-gps"></i></td>
                                        <td>Speed 60-</td>
                                        <td class="text-right">
                                            <span class="label states-label label-light-primary"  id="speed30-count">
                                                <?php
                                                    // if(isset(json_decode($common_count)->data->speed_30)){
                                                    //     print_r(json_decode($common_count)->data->speed_30 . " / ". $vechicle_count);
                                                    // }
                                                ?>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-shipping-fast home-staus-icon icon-over-speed"></i></td>
                                        <td>Over Speed 60+</td>
                                        <td class="text-right">
                                            <span class="label states-label label-light-warning"  id="speed60-count">
                                                <?php
                                                    // if(isset(json_decode($common_count)->data->over_speed_count)){
                                                    //     print_r(json_decode($common_count)->data->over_speed_count . " / ". $vechicle_count);
                                                    // }
                                                ?>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-shipping-fast home-staus-icon icon-idle"></i></td>
                                        <td>Speed 80+</td>
                                        <td class="text-right">
                                            <span class="label states-label label-light-megna"  id="speed80-count">
                                                <?php
                                                    // if(isset(json_decode($common_count)->data->speed_80)){
                                                    //     print_r(json_decode($common_count)->data->speed_80 . " / ". $vechicle_count);
                                                    // }
                                                ?>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4 pr-3">
                            <table class="table browser mb-0 no-border">
                                <tbody>
                                    <tr>
                                        <td style="width:40px"><i class="fa fa-map-marker-alt-slash home-staus-icon icon-no-gps"></i></td>
                                        <td>No GPS Coverage</td>
                                        <td class="text-right">
                                            <span class="label states-label label-light-primary"  id="nogps-count">
                                                <?php
                                                    // if(isset(json_decode($common_count)->data->nogps_coverage_count)){
                                                    //     print_r(json_decode($common_count)->data->nogps_coverage_count . " / ". $vechicle_count);
                                                    // }
                                                ?>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-signal home-staus-icon icon-idle"></i></td>
                                        <td>No GSM</td>
                                        <td class="text-right">
                                            <span class="label states-label label-light-megna"  id="nogsm-count">
                                                <?php
                                                    // if(isset(json_decode($common_count)->data->nogsm_count)){
                                                    //     print_r(json_decode($common_count)->data->nogsm_count . " / ". $vechicle_count);
                                                    // }
                                                ?>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-battery-quarter home-staus-icon icon-over-speed"></i></td>
                                        <td>Low Battery</td>
                                        <td class="text-right">
                                            <span class="label states-label label-light-megna"  id="lowbattery-count">
                                                <?php
                                                    // if(isset(json_decode($common_count)->data->low_battery_count)){
                                                    //     print_r(json_decode($common_count)->data->low_battery_count . " / ". $vechicle_count);
                                                    // }
                                                ?>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Pie Chart -->
    <div class="row">
    <div class="col-md-12">
        <figure class="highcharts-figure">
        <div id="container"></div>
        </figure>
    </div>
    </div>
    <!--  Bar Chart Distance -->
    <div class="row">
        <!-- Column -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3 text-center">Distance Travelled Today</h4>
                    <div class="clear"></div>
                    <canvas id="distance-today-chart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3 text-center">Distance Travelled this Week</h4>
                    <div class="clear"></div>
                    <canvas id="distance-week-chart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3 text-center">Distance Travelled this Month</h4>
                    <div class="clear"></div>
                    <canvas id="distance-month-chart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!--  Bar Chart Least Distance -->
    <div class="row">
        <!-- Column -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3 text-center">Least Distance Today</h4>
                    <div class="clear"></div>
                    <canvas id="ldistance-today-chart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3 text-center">Least Distance this Week</h4>
                    <div class="clear"></div>
                    <canvas id="ldistance-week-chart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3 text-center">Least Distance this Month</h4>
                    <div class="clear"></div>
                    <canvas id="ldistance-month-chart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- Start Model -->
<!-- ============================================================== -->
<div id="vehicleprint-modal" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="#" id="singlevtrack-detail-form" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div id="vehicle-print-area" style="width: 100%; min-height: 450px;"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php if(!empty($user_data) && $user_data['role'] == 'super_admin' ){
        // print_r($user_data);
    }?>
</div>
<!-- ============================================================== -->
<!-- Start Model -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->