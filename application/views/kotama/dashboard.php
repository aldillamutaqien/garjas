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
                                        <h2>Data Test Garjas Seldik <?php echo @$kotama->nama_kotama." <br>Tahun ".date("Y") ?></h2>
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
                            <h2><span class="counter"><?php echo @$count_datadiktukba;?></span></h2>
                            <p><a href="<?php echo site_url("kotama/diktukba_kotama"); ?>">
                                     DIKTUKBA</a></p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php echo @$count_datadiktukpa;?></span></h2>
                            <p><a href="<?php echo site_url("kotama/diktukpa_kotama"); ?>">
                                     DIKTUKPA</a></p>
                        </div>
                        <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php echo @$count_datadiklapa1;?></span></h2>
                            <p><a href="<?php echo site_url("kotama/diklapasatu_kotama"); ?>">
                                     DIKLAPA I</a></p>
                        </div>
                        <div class="sparkline-bar-stats3">4,2,8,2,5,6,3,8,3,5,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php echo @$count_datadiklapa2;?></span></h2>
                            <p><a href="<?php echo site_url("kotama/diklapadua_kotama"); ?>">
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
                                <h2><span class="counter"><?php echo @$count_datapersonel_kotama;?></span></h2>
                                <p><a href="<?php echo site_url("kotama/data_personel"); ?>">
                                         Jumlah Personel</a></p>
                            </div>
                            <div class="sparkline-bar-stats4">2,4,8,4,5,7,4,7,3,5,7,5</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2><span class="counter"><?php echo @$count_datanilai_kotama;?></span></h2>
                                <p><a href="<?php echo site_url("kotama/pers_seldik"); ?>">
                                         Jumlah Personel Mengikuti Ujian</a></p>
                            </div>
                            <div class="sparkline-bar-stats3">4,2,8,2,5,6,3,8,3,5,9,5</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                            <div class="website-traffic-ctn">

                                <h2><span class="counter"><?php echo @$tidak_ikut = $count_datapersonel_kotama - $count_datanilai_kotama;?></span></h2>
                                <p><!-- <a href="<?php echo site_url("kotama/tidak_ikut_seldik"); ?>"> -->
                                         Jumlah Personel Tidak Mengikuti Ujian<!-- </a> --></p>
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
               
                
                <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                    <div class="statistic-right-area notika-shadow mg-tb-30 sm-res-mg-t-0">
                        <div class="email-ctn-round">
                            <div class="email-rdn-hd">
                                <h2>Peserta Seldik Diktukba <?php echo @$kotama->nama_kotama." ".date("Y"); ?></h2>
                            </div>
                           
                            <div class="email-statis-wrap">
                                 <div class="email-ctn-nock">
                                    <p>Jumlah Peserta Seldik </p>
                                </div>
                                <div class="email-round-nock">
                                    <input type="text" class="knob" value="0" data-rel="<?php echo @$count_datadiktukba;?>" data-linecap="round" data-width="130" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true">
                                </div>
                            </div>
                           
                            <div class="email-round-gp">
                                <div class="email-round-pro">
                                    <div class="email-signle-gp">
                                        <input type="text" class="knob" value="0" data-rel="<?php echo @$count_lulus_diktukba;?>" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Lulus</p>
                                    </div>
                                </div>
                                <div class="email-round-pro">
                                    <div class="email-signle-gp">
                                        <input type="text" class="knob" value="0" data-rel="<?php echo @$tidak_lulus = $count_datadiktukba - $count_lulus_diktukba;?>" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Tidak Lulus</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                    <div class="statistic-right-area notika-shadow mg-tb-30 sm-res-mg-t-0">
                        <div class="email-ctn-round">
                            <div class="email-rdn-hd">
                                <h2>Peserta Seldik Diktukpa <?php echo @$kotama->nama_kotama." ".date("Y"); ?></h2>
                            </div>
                           
                            <div class="email-statis-wrap">
                                 <div class="email-ctn-nock">
                                    <p>Jumlah Peserta Seldik </p>
                                </div>
                                 <div class="email-round-nock">
                                    <input type="text" class="knob" value="0" data-rel="<?php echo @$count_datadiktukpa;?>" data-linecap="round" data-width="130" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true">
                                </div>
                            </div>
                           
                            <div class="email-round-gp">
                                <div class="email-round-pro">
                                    <div class="email-signle-gp">
                                        <input type="text" class="knob" value="0" data-rel="<?php echo @$count_lulus_diktukpa;?>" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Lulus</p>
                                    </div>
                                </div>
                                <div class="email-round-pro">
                                    <div class="email-signle-gp">
                                        <input type="text" class="knob" value="0" data-rel="<?php echo @$tidak_lulus = $count_datadiktukpa - $count_lulus_diktukpa;?>" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Tidak Lulus</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                    <div class="statistic-right-area notika-shadow mg-tb-30 sm-res-mg-t-0">
                        <div class="email-ctn-round">
                            <div class="email-rdn-hd">
                                <h2>Peserta Seldik Diklapa I <?php echo @$kotama->nama_kotama." ".date("Y"); ?></h2>
                            </div>
                           
                            <div class="email-statis-wrap">
                                <div class="email-ctn-nock">
                                    <p>Jumlah Peserta Seldik </p>
                                </div>
                                <div class="email-round-nock">
                                    <input type="text" class="knob" value="0" data-rel="<?php echo @$count_datadiklapa1;?>" data-linecap="round" data-width="130" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true">
                                </div>
                            </div>
                           
                            <div class="email-round-gp">
                                <div class="email-round-pro">
                                    <div class="email-signle-gp">
                                        <input type="text" class="knob" value="0" data-rel="<?php echo @$count_lulus_diklapa1;?>" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Lulus</p>
                                    </div>
                                </div>
                                <div class="email-round-pro">
                                    <div class="email-signle-gp">
                                        <input type="text" class="knob" value="0" data-rel="<?php echo @$tidak_lulus = $count_datadiklapa1 - $count_lulus_diklapa1;?>" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Tidak Lulus</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                    <div class="statistic-right-area notika-shadow mg-tb-30 sm-res-mg-t-0">
                        <div class="email-ctn-round">
                            <div class="email-rdn-hd">
                                <h2>Peserta Seldik Diklapa II <?php echo @$kotama->nama_kotama." ".date("Y"); ?></h2>
                            </div>
                           
                            <div class="email-statis-wrap">
                                 <div class="email-ctn-nock">
                                    <p>Jumlah Peserta Seldik </p>
                                </div>
                                 <div class="email-round-nock">
                                    <input type="text" class="knob" value="0" data-rel="<?php echo @$count_datadiklapa2;?>" data-linecap="round" data-width="130" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true">
                                </div>
                            </div>
                           
                            <div class="email-round-gp">
                                <div class="email-round-pro">
                                    <div class="email-signle-gp">
                                        <input type="text" class="knob" value="0" data-rel="<?php echo @$count_lulus_diklapa2;?>" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Lulus</p>
                                    </div>
                                </div>
                                <div class="email-round-pro">
                                    <div class="email-signle-gp">
                                        <input type="text" class="knob" value="0" data-rel="<?php echo @$tidak_lulus = $count_datadiklapa2 - $count_lulus_diklapa2;?>" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Tidak Lulus</p>
                                    </div>
                                </div>
                            </div>
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
                    <div class="bar-chart-wp sm-res-mg-t-30 chart-display-nn">
                        <div class="curved-ctn">
                            <h2>Kategori Postur Seldik</h2>
                            <p>..............................</p>
                        
                        </div>
                        <canvas height="158vh" width="180vw" id="barchartdklagi"></canvas>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                     <div class="bar-chart-wp sm-res-mg-t-30 chart-display-nn">
                        <div class="curved-inner-pro">
                            <div class="curved-ctn">
                                <h2>Kalender</h2>
                                <p>..............................</p>
                            </div>
                        </div>
                        <div id="calendar" ></div> 
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
            var datams = <?php echo @$count_datams;?>;
            var datatms = <?php echo @$count_datatms;?>;
            var ctx = document.getElementById("barchartdklagi");
          var barchart2 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["MS", "TMS"],
                    datasets: [{
                        label: '',
                        data: [datams, datatms],
                        backgroundColor: [
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(255, 99, 132, 0.2)'
                        ],
                        borderColor: [
                            'rgba(75, 192, 192, 1)',
                            'rgba(255,99,132,1)'
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