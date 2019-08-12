
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Intern Eviden</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- konten tabel -->
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <!-- Kitchen Sink -->
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                        <th>Nomor</th>
                                            <th>Kategori</th>
                                            <th>Kriteria</th>
                                            <th>Ceklist</th>
                                            <th>Nama</th>
                                            <th>Nomor Eviden</th>
                                            <th>Aksi</th>
                                            <!-- <th>Nomor Eviden</th> -->
                                            <!-- <th></th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <?php

                                        $atts = array(
                                            'width'       => 800,
                                            'height'      => 600,
                                            'scrollbars'  => 'yes',
                                            'status'      => 'yes',
                                            'resizable'   => 'yes',
                                            'screenx'     => 0,
                                            'screeny'     => 0,
                                            'window_name' => '_blank'
                                        );

                                        $i = $this->uri->segment('3') + 1;
                                        foreach ($data->result() as $row) {?>
                                        <tr>
                                            <td><?php echo $i++ ?></td>
                                            <td><?= $row->kategori ?></td>
                                            <td><?= $row->kriteria ?></td>
                                            <td><?= $row->ceklist ?></td>
                                            <td><?= $row->nama_eviden ?></td>
                                            <td><?= $row->nomor ?></td>

                                            <td><?php echo anchor_popup("/uploads/eviden/".$row->file, 'Lihat', $atts) ?></td>
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
