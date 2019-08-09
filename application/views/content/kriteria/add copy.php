
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Kriteria</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- konten tabel -->
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        <br>
                        <br>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- konten dimari -->
                            <?php
                            echo form_open_multipart('kriteria/add', 'role="form" class="form-horizontal"');
                            ?>
                            <div class="form-group">
                                <label>Kategori</label>
                                    <div class="col-sm-8">
                                            <select name="id_kategori" class="form-control">
                                                <option value="1" class="form-control">1.Kepemimpinan</option>
                                                <option value='2' class="form-control">2.Customer Focus</option>
                                                <option value="3" class="form-control">3.Proses Management</option>
                                                <option value="4" class="form-control">4.Strategic Planning</option>
                                                <option value="5" class="form-control">5.Resources Management</option>
                                                <option value="6" class="form-control">6.Document System</option>
                                                <option value="7" class="form-control">7.Performance Result</option>
                                            </select>
                                        </div>
                                <!-- <label class="col-sm-8 control-label" for="form-field-1">
                                    Kategori
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" name="id_kategori" placeholder="kategori" id="form-field-1" class="form-control">
                                </div> -->
                                <label class="col-sm-8 control-label" for="form-field-1">
                                    Kriteria
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" name="kriteria" placeholder="Kriteria" id="form-field-1" class="form-control">
                                </div> 
                                <label class="col-sm-8 control-label" for="form-field-1">
                                    Ceklist
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" name="ceklist" placeholder="Cek List" id="form-field-1" class="form-control">
                                </div> 
                                <label class="col-sm-8 control-label" for="form-field-1">
                                    Keterangan
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" name="keterangan" placeholder="Keterangan" id="form-field-1" class="form-control">
                                </div>

                                 <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-1">

                                    </label>
                                    <div class="col-sm-3">
                                        <button type="submit" name="submit" class="btn btn-primary  btn-sm">Simpan</button>
                                        <?php echo anchor('kriteria', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                                    </div>
                                    <!-- <div class="col-sm-1"> -->
                                    </div>
                                </div> 
                            </div>
                            </form>
                            <!-- end kontent -->
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
