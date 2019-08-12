
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          <!-- konten tabel -->
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Tambah Eviden</h6>
                            </div>
                            <br>
                            <?php
                            echo form_open_multipart('eviden/edit', 'role="form" class="form-horizontal"');
                            echo form_hidden('id_eviden', $data['id_eviden']);
                            ?>
                                  
                                <!-- <div class="form-group">
                                    <label for="">ID Kriteria</label>
                                    <input type="text" name="id_kriteria" value=" <?php 
                                    $uri = $this->uri->segment(3);
                                    echo $uri; ?>" id="form-field-1" class="form-control" disabled>
                                </div> -->
                                <div class="form-group">
                                    <label for="">ID</label>
                                    <input type="text" value="<?php echo $data ['id_eviden']?>" placeholder="Nomor" id="form-field-1" class="form-control" readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label for="">ID</label>
                                    <input type="text" name="id_kriteria" value="<?php echo $data ['id_kriteria']?>" placeholder="Nomor" id="form-field-1" class="form-control" readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label for="">Nomor</label>
                                    <input type="text" name="nomor" value="<?php echo $data ['nomor']?>" placeholder="Nomor" id="form-field-1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Eviden</label>
                                    <input type="text" name="nama_eviden" value="<?php echo $data ['nama_eviden']?>" placeholder="Nama Eviden" id="form-field-1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">File</label>
                                    <input type="file" name="userfile" size="20" value="<?php echo $data ['file']?>">
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3">
                                        <button type="submit" name="submit" class="btn btn-primary  btn-sm">Simpan</button>
                                        <?php echo anchor('kriteria', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                                    </div>
                                </div>

                            </form>
                        
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
