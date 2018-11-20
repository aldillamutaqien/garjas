<!doctype html>
<html class="no-js" lang="">

<?php  $this->load->view("common/common_head"); ?>
  <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/js/fullcalendar/fullcalendar.min.css"); ?>"> 


<body>

    <?php  $this->load->view("admin/common/common_header_top"); ?>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <?php  $this->load->view("admin/common/common_header_mobile"); ?>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <?php  $this->load->view("admin/common/common_header_menu"); ?>
    <!-- Main Menu area End-->
    <!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php echo $count_pengguna;?></span></h2>
                            <p><a href="<?php echo site_url("users/"); ?>">
                                     Total Pengguna</a></p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php echo $count_personel;?></span></h2>
                            <p><a href="<?php echo site_url("personel/"); ?>">
                                     Total Data Personel</a></p>
                        </div>
                        <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php echo $count_dataadmin;?></span></h2>
                            <p><a href="<?php echo site_url("dataadmin/"); ?>">
                                     Total Admin</a></p>
                        </div>
                        <div class="sparkline-bar-stats3">4,2,8,2,5,6,3,8,3,5,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php echo $count_datanilai;?></span></h2>
                            <p><a href="<?php echo site_url("datanilai/tabel_nilai"); ?>">
                                     Total Penilaian Garjas</a></p>
                        </div>
                        <div class="sparkline-bar-stats4">2,4,8,4,5,7,4,7,3,5,7,5</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Status area-->
    <!-- Start Sale Statistic area-->
    <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        <div class="curved-inner-pro">
                            <div class="curved-ctn">
                                <h2>Kalender</h2>
                                <p>..............................</p>
                            </div>
                        </div>
                        <!-- <div id="curved-line-chart" class="flot-chart-sts flot-chart"></div> -->
                        <div id="calendar"></div> 
                    </div>
                </div>
<!--                 <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                    <div class="statistic-right-area notika-shadow mg-tb-30 sm-res-mg-t-0">
                        <div class="past-day-statis">
                            <h2>Tingkat Kebugaran</h2>
                            <p></p>
                        </div>
                        <div class="dash-widget-visits"></div>
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3><span class="counter">3,20,000</span></h3>
                                <p>----</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-bar"></div>
                            </div>
                        </div>
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3><span class="counter">1,03,000</span></h3>
                                <p>----</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-line"></div>
                            </div>
                        </div>
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3><span class="counter">24,00,000</span></h3>
                                <p>----</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-bar-2"></div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- End Sale Statistic area-->

    <!-- Start Footer area-->
        <?php  $this->load->view("admin/common/common_footer"); ?>
    <!-- End Footer area-->
    <!-- jquery
        ============================================ -->
   <?php  $this->load->view("common/common_foot"); ?>
       <script src="<?php echo base_url($this->config->item("theme_admin")."/js/fullcalendar/moment.min.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/fullcalendar/fullcalendar.min.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/fullcalendar/calendar.js"); ?>"></script>
</body>

</html>