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
                                 <a href="<?php echo site_url("users/add_user/"); ?>"><i class="notika-icon notika-success"></i> Tambah</a>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Daftar Pengguna</h2>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Tipe User</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php foreach($users as $user){?>
                                        <tr>
                                            <td><?php echo $user->user_id; ?></td>
                                            <td><?php echo $user->user_name; ?></td>
                                            <td><?php if($user->user_type_id=="1"){ echo "Front User"; } else echo "Admin" ?></td>
                                            <td>
                                                <div class="fm-checkbox">
                                                    <label for='cb_<?php echo $user->user_id; ?>'>
                                                      <input type="checkbox" class="tgl_checkbox i-checks"
                                                       data-table="users" 
                                                       data-status="user_status" 
                                                       data-idfield="user_id"
                                                       data-id="<?php echo $user->user_id; ?>" 
                                                       id='cb_<?php echo $user->user_id; ?>'
                                                       <?php echo ($user->user_status==1)? "checked" : ""; ?>
                                                        >
                                                      <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="<?php echo site_url("users/edit_user/".$user->user_id); ?>">
                                                <i class="notika-icon notika-edit btn"></i></a>
                                                &nbsp;&nbsp;&nbsp;&emsp;
                                               <a href="<?php echo site_url("users/delete_user/".$user->user_id); ?>" onclick="return confirm('are you sure to delete?')" class=""> 

                                               <!--  <a class="waves-effect waves-light m-b-xs sweetalert-warning"> -->
                                               <i class="notika-icon notika-close btn"></i></a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Tipe User</th>
                                        <th>Status</th>
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