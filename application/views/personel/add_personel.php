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
                            <h2>Tambah Personel</h2>
                        </div>
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Nama</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" placeholder="Nama" name="nama">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Pangkat</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="bootstrap-select fm-cmp-mg">
                                          <select name="pangkat" class="selectpicker" data-live-search="true">
                                            <option value="" disabled selected>--Pilih Pangkat--</option>
                                            <option value="Prada">Prada</option>
                                            <option value="Pratu">Pratu</option>
                                            <option value="Praka">Praka</option>
                                            <option value="Kopda">Kopda</option>
                                            <option value="Koptu">Koptu</option>
                                            <option value="Kopka">Kopka</option>
                                            <option value="Serda">Serda</option>
                                            <option value="Sertu">Sertu</option>
                                            <option value="Serka">Serka</option>
                                            <option value="Serma">Serma</option>
                                            <option value="Pelda">Pelda</option>
                                            <option value="Peltu">Peltu</option>
                                            <option value="Letda">Letda</option>
                                            <option value="Lettu">Lettu</option>
                                            <option value="Kapten">Kapten</option>
                                            <option value="Mayor">Mayor</option>
                                             <option value="Letkol">Letkol</option>
                                            <option value="Kolonel">Kolonel</option>
                                            <option value="Brigjen">Brigjend</option>
                                            <option value="Mayjend">Mayjend</option>
                                            <option value="Letjend">Letjend</option>
                                            <option value="Jendral">Jendral</option>
                                          </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Korps</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" placeholder="Korps" name="korps">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">NRP</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" placeholder="NRP" name="nrp">
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
                                        <div class="bootstrap-select fm-cmp-mg">
                                          <select name="jenis_kelamin" class="selectpicker" data-live-search="true">
                                            <option value="" disabled selected>--Pilih Jenis Kelamin--</option>
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>                                            
                                          </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Tanggal Lahir</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">                                   
                                    <div class="input-group date nk-int-st">
                                        <span class="input-group-addon"></span>
                                        <input type="text" name="tanggal_lahir" class="form-control">
                                    </div>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Jabatan</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" placeholder="Jabatan" name="jabatan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Satker</label>
                                    </div>
                                     <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="bootstrap-select fm-cmp-mg">
                                          <select name="satker" class="selectpicker" data-live-search="true">
                                            <option value="0">--Pilih Satker--</option>
                                            <?php 
                                                foreach ($satker->result() as $data) {
                                                ?>
                                                <option value='<?php echo $data->id_satker ?>'><?php echo $data->nama_satker ?></option>
                                                <?php } ?>
                                          </select>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                          <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Kotama</label>
                                    </div>
                                     <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="bootstrap-select fm-cmp-mg">
                                          <select name="kotama" class="selectpicker" data-live-search="true" >
                                            <option value="0">--Pilih Kotama--</option>
                                            <?php 
                                                foreach ($kotama->result() as $data) {
                                                ?>
                                                <option value='<?php echo $data->id_kotama ?>'><?php echo $data->nama_kotama ?></option>
                                                <?php } ?>
                                          </select>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>



                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Username</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="bootstrap-select fm-cmp-mg">
                                              <select name="id_user" class="selectpicker" data-live-search="true">
                                                <option value="" disabled selected>--Pilih Username--</option>
                                                 <?php foreach($user as $user){?>
                                                        <option value="<?php echo $user->user_id; ?>"><?php echo $user->user_name; ?></option>
                                                    <?php } ?>
                                              </select>
                                        </div>              
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Matra</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="bootstrap-select fm-cmp-mg">
                                          <select name="matra" class="selectpicker" data-live-search="true">
                                            <option value="" disabled selected>--Pilih Matra--</option>
                                            <option value="TNI AD">TNI AD</option>
                                            <option value="TNI AL">TNI AL</option>
                                            <option value="TNI AU">TNI AU</option>                                           
                                          </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
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