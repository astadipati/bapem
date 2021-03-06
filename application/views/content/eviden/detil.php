
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detil Eviden</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- konten tabel -->
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> 
                        <br>
                        <!-- <?php echo $msg?> -->
                        <!-- <?php echo anchor('kriteria/add','<button class="btn btn-info btn-sm" aria-hidden="true"> Tambah Data</button>',"title='Tambah Data'");?> -->
                        <br>
                        <br>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>Kriteria</th>
                                            <th>Ceklist</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $i = $this->uri->segment('3') + 1;
                                        // echo form_hidden('id_kriteria', $data['id_kriteria']);
                                        foreach ($data->result() as $row) {?>
                                            <tr>
                                                <td><?php echo $i++ ?></td>
                                                <td><?= $row->kategori ?></td>
                                                <td><?= $row->kriteria ?></td>
                                                <td><?= $row->ceklist ?></td>
    
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?php echo base_URL()?>eviden/add/<?php  ?>" class="btn btn-success btn-sm"  title="Tambah Eviden">Tambah</a>

                                                    <a href="<?php echo base_URL()?>eviden/detil/<?php ?>" class="btn btn-primary btn-sm" title="Hapus Data" >Detil</a>			
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                                <?php
                                    // echo $paging;
                                ?>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <!-- /.col-lg-6 -->
            </div>
          <!-- end konten tabel -->

          <!-- Content Row -->
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <script>   
    $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
    </script>
