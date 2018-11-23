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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <form action="#" method="post">
                    <div class="form-example-wrap mg-t-30">
                        <div class="cmp-tb-hd cmp-int-hd">
                            <h2>Form Edit Nilai</h2>
                        </div>
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Nama</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" placeholder="Username" name="nama" value="<?php echo $user->nama; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Pangkat / Korps / NRP</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" name="pangkat" value="<?php echo $user->pangkat.' / '.$user->korps.' / '.$user->nrp; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Tanggal Lahir</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" name="pangkat" value="<?php echo date('d-m-Y',strtotime($user->tanggal_lahir)) ; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Jenis Kelamin</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" name="jenis_kelamin" value="<?php echo $user->jenis_kelamin ; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Kelompok Umur</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" name="kelompok_umur" value="<?php echo $kelompok_umur ; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                           <?php foreach($nilai as $nilai){ ?>
                         <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Nama Seldik</label>
                                    </div>
                                     <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="bootstrap-select fm-cmp-mg">
                                          <select name="seldik" class="selectpicker" data-live-search="true">
                                            <option value="0">--Pilih Seldik--</option>
                                            <?php 
                                                foreach ($seldik->result() as $seldik) {
                                                ?>
                                                <option value="<?php echo $seldik->nama_seldik ?>" <?php if($nilai->nama_seldik == $seldik->nama_seldik){ echo "selected"; } ?>><?php echo $seldik->nama_seldik ?></option>
                                                <?php } ?>
                                          </select>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <hr>
                     
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Tinggi Badan</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" name="tinggi_badan" placeholder="Tinggi Badan (cm)" value="<?php echo $nilai->tinggi_badan; ?>" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Berat Badan</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" name="berat_badan" placeholder="Berat Badan (kg)" value="<?php echo $nilai->berat_badan; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                          <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Waktu Lari</label>
                                    </div>
                                   <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <input type="text" class="form-control" data-mask="99:99:99" name="waktu_lari" placeholder="Menit-Detik" value="<?php echo $nilai->lari; ?>">
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                                        <label class="hrzn-fm">Pull Up</label>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" name="pull_up" placeholder="Pull Up"
                                            value="<?php echo $nilai->pull_up; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                                        <label class="hrzn-fm">Sit Up</label>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" name="sit_up" placeholder="Sit Up" value="<?php echo $nilai->sit_up; ?>">
                                        </div>
                                    </div>                                                                           
                                </div>                               
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                                        <label class="hrzn-fm">Push Up</label>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" name="push_up" placeholder="Push Up" value="<?php echo $nilai->push_up; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                                        <label class="hrzn-fm">Shuttle Run</label>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" name="suttle_run" placeholder="Shuttle Run (detik)" value="<?php echo $nilai->shuttle_run; ?>">
                                        </div>
                                    </div>                                                                           
                                </div>                               
                            </div>
                        </div>
                        <hr>
                       
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Waktu Renang</label>
                                    </div>
                                   <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <input type="text" class="form-control" data-mask="99:99:99" name="waktu_renang" placeholder="Menit-Detik" value="<?php echo $nilai->renang; ?>">
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Tanggal Pelaksanaan Garjas </label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">                                   
                                    <div class="input-group date nk-int-st">
                                        <span class="input-group-addon"></span>
                                        <input type="text" name="tgl_pelaksanaan" class="form-control" value="<?php echo date('d/m/Y',strtotime($nilai->date_created)) ; ?>">
                                    </div>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                        
                        <div class="form-example-int mg-t-15">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <button class="btn btn-success notika-btn-success" type="submit" name="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
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