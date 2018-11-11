<!DOCTYPE html>
<html lang="en">
    <?php  $this->load->view("common/common_head_data_table"); ?> 
    <body>
    <?php  $this->load->view("admin/common/common_header_top"); ?>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <?php  $this->load->view("admin/common/common_header_mobile"); ?>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <?php  $this->load->view("admin/common/common_header_menu"); ?>
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
                                                    <span>Kelas & Nilai BMI</span>
                                                    <h2><?php echo $data->kelas; ?> / <?php echo $data->nilai_bmi; ?></h2>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="invoice-hs wt-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                    <span>Kategori</span>
                                                    <h2><?php echo $data->kategori; ?></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ///////////////////////////////////////////////////////////////////////// -->
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="invoice-hs date-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                    <span>Waktu Lari</span>
                                                    <h2><?php echo date('i:s',strtotime($data->lari)) ; ?></h2>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="invoice-hs date-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                    <span>Pull Up</span>
                                                    <h2><?php echo $data->pull_up; ?> </h2>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="invoice-hs date-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                    <span>Sit Up</span>
                                                    <h2><?php echo $data->sit_up; ?></h2>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="invoice-hs date-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                    <span>Push Up</span>
                                                    <h2><?php echo $data->push_up; ?></h2>
                                                </div>
                                            </div>
                                        </div>
                                          <!-- ///////////////////////////////////////////////////////////////////////// -->
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="invoice-hs date-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                    <span>Shuttle Run</span>
                                                    <h2><?php echo $data->shuttle_run ; ?></h2>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="invoice-hs date-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                    <span>Renang</span>
                                                    <h2><?php echo date('i:s',strtotime($data->renang)) ; ?></h2>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="invoice-hs gdt-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                    <span>Nilai Keseluruhan</span>
                                                    <h2><?php echo $data->nilai; ?></h2>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="invoice-hs gdt-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                    <span>Keterangan</span>
                                                    <h2>Lulus / Tidak</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                      <?php } ?>
                    
                
            </div>
        </div>
    </div>
    <!-- Form Examples area End-->



    <!-- Start Footer area-->
    <?php  $this->load->view("admin/common/common_footer"); ?>
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
                url: "<?php echo site_url("admin/change_status"); ?>",
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