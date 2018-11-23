<!doctype html>
<html class="no-js" lang="">

<?php  $this->load->view("common/common_head"); ?>
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/js/fullcalendar/fullcalendar.min.css"); ?>"> 
     <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/css/wave/button.css"); ?>"> 
<body>

    <?php  $this->load->view("satker/common/common_header_top"); ?>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <?php  $this->load->view("satker/common/common_header_mobile"); ?>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <?php  $this->load->view("satker/common/common_header_menu"); ?>
    <!-- Main Menu area End-->
    <!-- Start Status area -->

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
                                        <h2><?php echo $datapersonel->kesatuan?></h2>
                                        <p>Selamat datang <span class="bread-ntd"><?php echo $datapersonel->nama?></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
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
                            <h2><span class="counter"><?php echo $count_datapersonel_satker;?></span></h2>
                            <p><a href="<?php echo site_url("datanilai/tabel_nilai"); ?>">
                                     Jumlah Personel</a></p>
                        </div>
                        <div class="sparkline-bar-stats4">2,4,8,4,5,7,4,7,3,5,7,5</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php echo $count_datanilai_satker;?></span></h2>
                            <p><a href="<?php echo site_url("dataadmin/"); ?>">
                                     Jumlah Personel Mengikuti Ujian</a></p>
                        </div>
                        <div class="sparkline-bar-stats3">4,2,8,2,5,6,3,8,3,5,9,5</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php echo $tidak_ikut = $count_datapersonel_satker - $count_datanilai_satker;?></span></h2>
                            <p><a href="<?php echo site_url("dataadmin/"); ?>">
                                     Jumlah Personel Tidak Mengikuti Ujian</a></p>
                        </div>
                        <div class="sparkline-bar-stats3">4,2,8,2,5,6,3,8,3,5,9,5</div>
                    </div>
                </div>

            </div>
        </div>
</div>
<div class="sale-statistic-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        <div class="curved-inner-pro">
                            <div class="curved-ctn">
                                <h2>Sales Statistics</h2>
                                <p>Vestibulum purus quam scelerisque, mollis nonummy metus</p>
                            </div>
                        </div>
                        <div id="bar-chart" class="flot-chart bar-three bar-hm-three" style="padding: 0px; position: relative;"><canvas class="flot-base" width="331" height="241" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 368px; height: 268px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; max-width: 89px; top: 254px; font: 400 11px/14px Roboto, sans-serif; color: rgb(0, 194, 146); left: 27px; text-align: center;">1</div><div style="position: absolute; max-width: 89px; top: 254px; font: 400 11px/14px Roboto, sans-serif; color: rgb(0, 194, 146); left: 81px; text-align: center;">2</div><div style="position: absolute; max-width: 89px; top: 254px; font: 400 11px/14px Roboto, sans-serif; color: rgb(0, 194, 146); left: 135px; text-align: center;">3</div><div style="position: absolute; max-width: 89px; top: 254px; font: 400 11px/14px Roboto, sans-serif; color: rgb(0, 194, 146); left: 189px; text-align: center;">4</div><div style="position: absolute; max-width: 89px; top: 254px; font: 400 11px/14px Roboto, sans-serif; color: rgb(0, 194, 146); left: 243px; text-align: center;">5</div><div style="position: absolute; max-width: 89px; top: 254px; font: 400 11px/14px Roboto, sans-serif; color: rgb(0, 194, 146); left: 297px; text-align: center;">6</div><div style="position: absolute; max-width: 89px; top: 254px; font: 400 11px/14px Roboto, sans-serif; color: rgb(0, 194, 146); left: 351px; text-align: center;">7</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; top: 2px; font: 400 11px/14px Roboto, sans-serif; color: rgb(0, 194, 146); left: 1px; text-align: right;">120</div><div style="position: absolute; top: 243px; font: 400 11px/14px Roboto, sans-serif; color: rgb(0, 194, 146); left: 13px; text-align: right;">0</div><div style="position: absolute; top: 202px; font: 400 11px/14px Roboto, sans-serif; color: rgb(0, 194, 146); left: 8px; text-align: right;">20</div><div style="position: absolute; top: 162px; font: 400 11px/14px Roboto, sans-serif; color: rgb(0, 194, 146); left: 8px; text-align: right;">40</div><div style="position: absolute; top: 122px; font: 400 11px/14px Roboto, sans-serif; color: rgb(0, 194, 146); left: 8px; text-align: right;">60</div><div style="position: absolute; top: 82px; font: 400 11px/14px Roboto, sans-serif; color: rgb(0, 194, 146); left: 8px; text-align: right;">80</div><div style="position: absolute; top: 42px; font: 400 11px/14px Roboto, sans-serif; color: rgb(0, 194, 146); left: 1px; text-align: right;">100</div></div></div><canvas class="flot-overlay" width="331" height="241" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 368px; height: 268px;"></canvas></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                    <div class="statistic-right-area notika-shadow mg-tb-30 sm-res-mg-t-0">
                        <div class="email-ctn-round">
                            <div class="email-rdn-hd">
                                <h2>Jumlah Kelulusan</h2>
                            </div>
                            <div class="email-statis-wrap">
                                <div class="email-round-nock">
                                    <input type="text" class="knob" value="0" data-rel="<?php echo $count_datanilai_satker;?>" data-linecap="round" data-width="130" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true">
                                </div>
                                <div class="email-ctn-nock">
                                    <p>Personel Mengikuti Ujian</p>
                                </div>
                            </div>
                            <div class="email-round-gp">
                                <div class="email-round-pro">
                                    <div class="email-signle-gp">
                                        <input type="text" class="knob" value="0" data-rel="<?php echo $count_datalulus; ?>" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Personel Lulus Ujian</p>
                                    </div>
                                </div>
                                <div class="email-round-pro">
                                    <div class="email-signle-gp">
                                        <input type="text" class="knob" value="0" data-rel="<?php echo $count_datatdklulus; ?>" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Personel Tidak Lulus Ujian</p>
                                    </div>
                                </div>
                            </div>
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
  <div class="bar-chart-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="bar-chart-wp">
                        <canvas height="140vh" width="180vw" id="barchartdk"></canvas>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="bar-chart-wp sm-res-mg-t-30 chart-display-nn">
                        <canvas height="140vh" width="180vw" id="barchart2"></canvas>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="bar-chart-wp mg-t-30 chart-display-nn">
                        <canvas height="140vh" width="180vw" id="barchart3"></canvas>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="bar-chart-wp mg-t-30 chart-display-nn">
                        <canvas height="140vh" width="180vw" id="barchart4"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Start Footer area-->
        <?php  $this->load->view("satker/common/common_footer"); ?>
    <!-- End Footer area-->
    <!-- jquery
        ============================================ -->
   <?php  $this->load->view("common/common_foot"); ?>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/fullcalendar/moment.min.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/fullcalendar/fullcalendar.min.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/fullcalendar/calendar.js"); ?>"></script>


   <script src="<?php  echo base_url($this->config->item("theme_admin")."/js/jvectormap/jquery-jvectormap-2.0.2.min.js"); ?>"></script>
    <script src="<?php  echo base_url($this->config->item("theme_admin")."/js/jvectormap/jquery-jvectormap-world-mill-en.js"); ?>"></script>

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
                    labels: ["Istimewa", "Baik Sekali", "Baik", "Cukup", "Kurang"],
                    datasets: [{
                        label: 'Bar Chart',
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