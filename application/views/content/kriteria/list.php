
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kriteria</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- konten tabel -->
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <?php echo anchor('kriteria/add','<button class="btn btn-info btn-sm" aria-hidden="true"> Tambah Data</button>',"title='Tambah Data'");?>
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
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $i = $this->uri->segment('3') + 1;
                                        foreach ($data->result() as $row) {?>
                                        <tr>
                                            <td><?php echo $i++ ?></td>
                                            <td><?= $row->kategori ?></td>
                                            <td><?= $row->kriteria ?></td>
                                            <td><?= $row->ceklist ?></td>
                                            <td><?= $row->keterangan ?></td>
                                            <td><? echo "Disabled"?></td>

                                            <!-- <td>
                                                <div class="btn-group">
                                                    <a href="<?php echo base_URL()?>kriteria/edit/<?php echo $row->id_kriteria?>" class="btn btn-warning btn-sm"  title="Edit kriteria">Edit</a>

                                                    <a href="<?php echo base_URL()?>kriteria/delete/<?php echo $row->id_kriteria?>" class="btn btn-danger btn-sm" title="Hapus Data" onclick="return confirm('Anda Yakin Menghapus Data ini ..?')">Del</a>			
                                                </div>
                                            </td> -->
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                                <?php
                                    echo $paging;
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
