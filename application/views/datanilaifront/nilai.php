<!DOCTYPE html>
<html lang="en">
    <?php  $this->load->view("common/common_head_data_table"); ?> 
    <body>
    <?php  $this->load->view("front/common/common_header_top"); ?>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <?php  $this->load->view("front/common/common_header_mobile"); ?>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <?php  $this->load->view("front/common/common_header_menu"); ?>
    <!-- Main Menu area End-->
    <!-- Form Examples area start-->
    <div class="form-example-area">
        <div class="container">
            <div class="row">
             
                    
                         <?php foreach($nilai as $data) { ?>
                    <div class="invoice-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="invoice-wrap">
                                        <div class="invoice-img" style="color: white">
                                            <h2 >Data Nilai Garjas</h2>
                                             <span>Tanggal Pelaksanaan : <?php echo date('d-m-Y',strtotime($data->date_created)) ; ?></span>
                                        </div>
                                         
                                        <div class="invoice-hds-pro">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="invoice-cmp-ds ivc-frm">
                                                        <center>
                                                            <table>
                                                            <tr>
                                                                <td width="30%">Nama </td>
                                                                <td width="10%">&nbsp : &nbsp</td>
                                                                <td> <?php echo $data->nama; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="30%">Pangkat/Korps </td>
                                                                <td width="10%">&nbsp : &nbsp</td>
                                                                <td> <?php echo $data->pangkat.' / '.$data->korps; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="30%">NRP </td>
                                                                <td width="10%">&nbsp : &nbsp</td>
                                                                <td> <?php echo $data->nrp; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="30%">Tanggal Lahir </td>
                                                                <td width="10%">&nbsp : &nbsp</td>
                                                                <td> <?php echo date('d-m-Y',strtotime($data->tanggal_lahir)) ; ?></td>
                                                            </tr>
                                                             <tr>
                                                                <td width="30%">Jabatan </td>
                                                                <td width="10%">&nbsp : &nbsp</td>
                                                                <td> <?php echo $data->jabatan; ?>, <?php echo $data->kesatuan; ?> / <?php echo $data->matra; ?></td>
                                                            </tr>
                                                        </table>  
                                                            
                                                        </center>
                                                                                            
                                                      
                                                        
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="invoice-hs wt-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                    <span>Kelompok Umur</span>
                                                    <h2><?php echo $data->kelompok_umur; ?></h2>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="invoice-hs wt-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                    <span>Tinggi & Berat Badan</span>
                                                    <h2><?php echo $data->tinggi_badan; ?> cm / <?php echo $data->berat_badan; ?> kg</h2>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="invoice-hs wt-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                   
                                                    <span>Kelas : <?php echo $kelas_postur; ?> </span>
                                                    <span>BMI : <?php echo $bmi; ?></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <?php if($kelas_postur=="Luar Limit Atas" || $kelas_postur == "Luar Limit Atas" || $kelas_postur == "Luar Limit Bawah" || $kelas_postur == "Luar Limit Bawah"){ ?>
                                                <div class="invoice-hs gdt-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                 <?php } else { ?>
                                                <div class="invoice-hs wt-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                    <?php } ?>
                                                   <span>Nilai Postur : <?php echo $nilai_postur; ?> </span>
                                                    <span><?php echo $kategori; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ///////////////////////////////////////////////////////////////////////// -->
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <?php if($nilai_total['lari']->nilai_lari<41){ ?> 
                                                <div class="invoice-hs gdt-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                <?php } else { ?>
                                                <div class="invoice-hs date-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                    <?php } ?>
                                                    <span>Waktu Lari</span>
                                                    <h2><?php echo date('i:s',strtotime($data->lari)) ; ?> <br> Nilai : <?php echo $nilai_total['lari']->nilai_lari ?></h2>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                              <?php if($nilai_total['pull_up']->nilai_pull_up<41){ ?> 
                                                <div class="invoice-hs gdt-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                <?php } else { ?>
                                                <div class="invoice-hs date-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                    <?php } ?>
                                                    <span>Pull Up</span>
                                                    <h2> Jumlah : <?php echo $data->pull_up; ?> <br> Nilai : <?php echo $nilai_total['pull_up']->nilai_pull_up ?> </h2>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <?php if($nilai_total['sit_up']->nilai_sit_up<41){ ?> 
                                                <div class="invoice-hs gdt-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                <?php } else { ?>
                                                <div class="invoice-hs date-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                    <?php } ?>
                                                    <span>Sit Up</span>
                                                    <h2><?php echo $data->sit_up; ?><br> Nilai : <?php echo $nilai_total['sit_up']->nilai_sit_up ?></h2>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                               <?php if($nilai_total['push_up']->nilai_push_up<41){ ?> 
                                                <div class="invoice-hs gdt-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                <?php } else { ?>
                                                <div class="invoice-hs date-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                    <?php } ?>
                                                    <span>Push Up</span>
                                                    <h2><?php echo $data->push_up; ?><br> Nilai : <?php echo $nilai_total['push_up']->nilai_push_up ?></h2>
                                                </div>
                                            </div>
                                        </div>
                                          <!-- ///////////////////////////////////////////////////////////////////////// -->
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <?php if($nilai_total['shuttle_run']->nilai_shuttle_run<41){ ?> 
                                                <div class="invoice-hs gdt-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                <?php } else { ?>
                                                <div class="invoice-hs date-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                    <?php } ?>
                                                    <span>Shuttle Run</span>
                                                    <h2><?php echo $data->shuttle_run ; ?><br> Nilai : <?php echo $nilai_total['shuttle_run']->nilai_shuttle_run ?></h2>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="invoice-hs date-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                    <span>Renang</span>
                                                    <h2><?php echo date('i:s',strtotime($data->renang)) ; ?><br> Nilai : <?php echo $nilai_total['renang']->nilai_renang ?></h2>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <?php if($nilai_ab < 70 || $nilai_b < 70){ ?>
                                                <div class="invoice-hs gdt-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0"> <?php } else { ?>
                                                    <div class="invoice-hs">
                                                    <?php } ?>
                                                 
                                                    <span>Nilai B = <?php echo $nilai_b; ?><br>Nilai A+B = <?php echo $nilai_ab; ?></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <?php if($keterangan=="Lulus"){ ?>
                                                <div class="invoice-hs"> 
                                                <?php } else { ?>
                                                <div class="invoice-hs gdt-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0"> <?php } ?>
                                                    <span>Total Nilai : <?php echo $jumlah_nilai ?></span>
                                                    <h2><?php echo $keterangan ?> / <?php echo $status; ?></h2>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                      <?php } ?>
                    
                
            </div>
        </div>
    </div>
    <!-- Form Examples area End-->



    <!-- Start Footer area-->
    <?php  $this->load->view("front/common/common_footer"); ?>
    <!-- End Footer area-->
    <!-- jquery-->
   <?php  $this->load->view("common/common_foot_data_table"); ?>

    <script>
        $(function () {
          
          $("body").on("change",".tgl_checkbox",function(){
              var table = $(this).data("table");
              var status = $(this).data("status");
              var id = $(this).data("id");
              var id_field = $(this).data("idfield");
              var bin=0;
              if($(this).is(':checked')){
                  bin = 1;
              }
              $.ajax({
                method: "POST",
                url: "<?php echo site_url("front/change_status"); ?>",
                data: { table: table, status: status, id : id, id_field : id_field, on_off : bin }
              })
                .done(function( msg ) {
                  //alert(msg);
                }); 
          });
        });
       </script>

        
    </body>
</html>