<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
    <?php  $this->load->view("common/common_head_data_table"); ?> 

    <body>
    <?php  $this->load->view("satker/common/common_header_top"); ?>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <?php  $this->load->view("satker/common/common_header_mobile"); ?>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <?php  $this->load->view("satker/common/common_header_menu"); ?>
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
                                 
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Data Penilaian Garjas</h2>
                        </div>
                        <div class="table-responsive">
                            <table id="tablegarjas" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Pangkat/Korps/NRP</th>
                                        <th>Seldik & Tgl.Pelaks</th>
                                        <th>Jabatan</th>
										<th>Kategori</th>
                                        <th>Hasil Test</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>                                  
                                        <?php 
                                        if (!empty($data_selidik)){
                                        $no = 1;
                                        foreach($data_selidik as $data_selidik){

                                            ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data_selidik->nama; ?></td>
                                            <td><?php echo $data_selidik->jenis_kelamin; ?></td>
                                            <td><?php echo date('d-m-Y',strtotime($data_selidik->tanggal_lahir)); ?></td>
                                            <td><?php echo $data_selidik->pangkat; ?>/<?php echo $data_selidik->korps; ?><br><?php echo $data_selidik->nrp; ?></td>
                                            <td><?php echo $data_selidik->nama_seldik; ?><br><?php echo date('d-m-Y',strtotime($data_selidik->date_created)); ?></td>
                                            <td><?php echo $data_selidik->jabatan; ?><br><?php echo $data_selidik->kesatuan; ?></td>                                         
                                            <td><?php echo $data_selidik->kategori; ?></td>
                                            <td><?php echo $data_selidik->nilai; ?>/<?php echo $data_selidik->keterangan; ?></td>
                                            <td>
                        
                                                <a href="<?php echo site_url("satker/tampil_nilai/".$data_selidik->id); ?>" class="btn btn-info info-icon-notika btn-reco-mg btn-button-mg waves-effect">
                                                <i title="Lihat Nilai" class="notika-icon notika-search btn" ></i></a>
                                              
                                            </td>
                                        </tr>
                                        <?php  }
                                      } ?>
                                </tbody>
                              
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

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> 
     <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
     <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
     <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
     <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

   <script>
        $(function (){$('#tablegarjas').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "order": [[ 0, "desc" ]],
          "info": true,
          "autoWidth": false,
          "dom": 'Bfrtip',
          "buttons": [{
                          extend: 'excel',
                          className: 'fa fa-download',
                          messageTop: 'Data Penilaian Garjas',
                          text: '  Unduh Excel',
                          exportOptions: {
                              modifier: {
                                  page: 'current'
                              },
                              columns: [0,1,2,3,4,5,6,7,8,9,10]
                            
                             
                          }
                      },
                      {
                            extend: 'print',
                            className: 'fa fa-print',
                            messageTop: 'Data Penilaian Garjas',
                            text: '  Print',
                            exportOptions: {
                                modifier: {
                                    page: 'current'
                                },
                               columns: [0,1,2,3,4,5,6,7,8,9,10]
                            
                            }

                      }],
          "columnDefs": [
                  {
                      "targets": [],
                      "visible": false,
                      "searchable": false
                  },
              ]
         });
        });
         

       </script>


        
    </body>
</html>