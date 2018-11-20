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


        <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-windows"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                 <a href="<?php echo site_url("dataadmin/add_admin/"); ?>"><i class="notika-icon notika-success"></i> Tambah</a>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Daftar Admin</h2>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Kesatuan</th>
                                        <th>Jabatan</th>
                                        <th>Username</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody> <?php $no=1?>
                                        <?php foreach($users as $users){?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $users->nama; ?><br><?php echo $users->pangkat; ?> / <?php echo $users->nrp; ?></td>
                                            <td><?php echo $users->kesatuan; ?> / <?php echo $users->matra; ?></td>
                                            <td><?php echo $users->jabatan; ?> </td>
                                            <td><?php echo $users->user_name; ?></td>
                                            <td>
                                                <a href="<?php echo site_url("dataadmin/edit_admin/".$users->id); ?>">
                                                <i class="notika-icon notika-edit btn"></i></a>
                                                &nbsp;&nbsp;&nbsp;&emsp;
                                               <a href="<?php echo site_url("dataadmin/delete_admin/".$users->id); ?>" onclick="return confirm('are you sure to delete?')" class=""> 

                                               <!--  <a class="waves-effect waves-light m-b-xs sweetalert-warning"> -->
                                               <i class="notika-icon notika-close btn"></i></a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                       <th>No</th>
                                       <th>Nama</th>
                                       <th>Kesatuan</th>
                                       <th>Jabatan</th>
                                       <th>Username</th>
                                       <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->

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