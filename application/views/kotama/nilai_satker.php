<!doctype html>
<html class="no-js" lang="">

<?php  $this->load->view("common/common_head"); ?>
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/js/fullcalendar/fullcalendar.min.css"); ?>"> 

<body>

    <?php  $this->load->view("kotama/common/common_header_top"); ?>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <?php  $this->load->view("kotama/common/common_header_mobile"); ?>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <?php  $this->load->view("kotama/common/common_header_menu"); ?>
    <!-- Main Menu area End-->
    <!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </div>
    <!-- End Status area-->
    <!-- Breadcomb area Start-->
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Data Test Garjas Seldik <?php echo $kotama->nama_kotama." <br>Tahun ".date("Y") ?></h2>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="notika-status-area">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php echo $count_datadiktukba;?></span></h2>
                            <p><a href="<?php echo site_url("users/"); ?>">
                                     DIKTUKBA</a></p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php echo $count_datadiktukpa;?></span></h2>
                            <p><a href="<?php echo site_url("personel/"); ?>">
                                     DIKTUKPA</a></p>
                        </div>
                        <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php echo $count_datadiklapa1;?></span></h2>
                            <p><a href="<?php echo site_url("dataadmin/"); ?>">
                                     DIKLAPA I</a></p>
                        </div>
                        <div class="sparkline-bar-stats3">4,2,8,2,5,6,3,8,3,5,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php echo $count_datadiklapa2;?></span></h2>
                            <p><a href="<?php echo site_url("datanilai/tabel_nilai"); ?>">
                                     DIKLAPA II</a></p>
                        </div>
                        <div class="sparkline-bar-stats4">2,4,8,4,5,7,4,7,3,5,7,5</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <br/>
    <div class="notika-status-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2><span class="counter"><?php echo $count_datapersonel_kotama;?></span></h2>
                                <p><a href="<?php echo site_url("datanilai/tabel_nilai"); ?>">
                                         Jumlah Personel</a></p>
                            </div>
                            <div class="sparkline-bar-stats4">2,4,8,4,5,7,4,7,3,5,7,5</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2><span class="counter"><?php echo $count_datanilai_kotama;?></span></h2>
                                <p><a href="<?php echo site_url("dataadmin/"); ?>">
                                         Jumlah Personel Mengikuti Ujian</a></p>
                            </div>
                            <div class="sparkline-bar-stats3">4,2,8,2,5,6,3,8,3,5,9,5</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2><span class="counter"><?php echo $tidak_ikut = $count_datapersonel_kotama - $count_datanilai_kotama;?></span></h2>
                                <p><a href="<?php echo site_url("dataadmin/"); ?>">
                                         Jumlah Personel Tidak Mengikuti Ujian</a></p>
                            </div>
                            <div class="sparkline-bar-stats3">4,2,8,2,5,6,3,8,3,5,9,5</div>
                        </div>
                    </div>

                </div>
            </div>
    </div>
<br>
     <div class="bar-chart-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="bar-chart-wp">
                        <canvas height="140vh" width="180vw" id="barchartdk"></canvas>
                    </div>
                </div>                
            </div>
            
        </div>
    </div>
    <!-- Breadcomb area End-->

    <!-- Start Footer area-->
        <?php  $this->load->view("satker/common/common_footer"); ?>
    <!-- End Footer area-->
    <!-- jquery
        ============================================ -->
   <?php  $this->load->view("common/common_foot"); ?>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/fullcalendar/moment.min.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/fullcalendar/fullcalendar.min.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/fullcalendar/calendar.js"); ?>"></script>


    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/jvectormap/jquery-jvectormap-2.0.2.min.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/jvectormap/jquery-jvectormap-world-mill-en.js"); ?>"></script>

    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/jvectormap/jvectormap-active.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/flot/jquery.flot.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/flot/jquery.flot.resize.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/flot/jquery.flot.pie.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/flot/jquery.flot.tooltip.min.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/flot/jquery.flot.orderBars.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/flot/curvedLines.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/flot/flot-active.js"); ?>"></script>


    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/chat/moment.min.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/chat/jquery.chat.js"); ?>"></script>


    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/charts/Chart.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/charts/bar-chart.js"); ?>"></script>
    <script>
            var ctx = document.getElementById("barchartdk");
            var barchart1 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [<?php foreach($satker as $satker){echo '"'. $satker->kesatuan.'",';} ?>],
                    datasets: [{
                        label: 'Kelulusan Seldik Diktukba tiap Satker',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(75, 192, 192, 0.2)',
                             'rgb(50,205,50, 0.2)',
                             'rgba(255, 206, 86, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(0, 0, 0, 0.2)'
                        ],
                        borderColor: [
                            'rgba(75, 192, 192, 1)',
                             'rgba(54, 162, 235, 1)',
                             'rgba(255, 206, 86, 1)',
                            'rgba(255,99,132,1)',
                            'rgba(0, 0, 0, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
                 

       </script>

</body>

</html>