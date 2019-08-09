
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
                                <h6 class="m-0 font-weight-bold text-primary">Tambah Kriteria</h6>
                            </div>
                            <br>
                            <?php
                            echo form_open_multipart('kriteria/add', 'role="form" class="form-horizontal"');
                            ?>
                                <div class="form-group">
                                <label for="">Kategori</label>
                                    <!-- <div class="col-sm-8"> -->
                                            <select name="id_kategori" class="form-control">
                                                <option value="1" class="form-control">1.Kepemimpinan</option>
                                                <option value='2' class="form-control">2.Customer Focus</option>
                                                <option value="3" class="form-control">3.Proses Management</option>
                                                <option value="4" class="form-control">4.Strategic Planning</option>
                                                <option value="5" class="form-control">5.Resources Management</option>
                                                <option value="6" class="form-control">6.Document System</option>
                                                <option value="7" class="form-control">7.Performance Result</option>
                                            </select>
                                        <!-- </div> -->
                                </div>
                                <div class="form-group">
                                    <label for="">Kategori</label>
                                    <input type="text" name="kriteria" placeholder="Kriteria" id="form-field-1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Ceklist</label>
                                    <input type="text" name="ceklist" placeholder="Cek List" id="form-field-1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Keterangan</label>
                                    <input type="text" name="keterangan" placeholder="Keterangan" id="form-field-1" class="form-control">
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
