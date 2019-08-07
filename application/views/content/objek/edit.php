
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Objek</h1>
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
                             echo form_open_multipart('objek/edit', 'role="form" class="form-horizontal"');
                             echo form_hidden('id_objek', $data['id_objek']);
                             ?>
                            <div class="form-group">
                                <label>Kategori</label>
                                    <div class="col-sm-8">
                                            <select name="id_kategori" class="form-control">
                                                <option value="1" class="form-control">Kepemimpinan</option>
                                                <option value='2' class="form-control">Customer Focus</option>
                                                <option value="3" class="form-control">Proses Management</option>
                                                <option value="4" class="form-control">Strategic Planning</option>
                                                <option value="5" class="form-control">Resources Management</option>
                                                <option value="6" class="form-control">Document System</option>
                                                <option value="7" class="form-control">Performance Result</option>
                                            </select>
                                        </div>
                                <label class="col-sm-8 control-label" for="form-field-1">
                                    Objek
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" name="objek" value="<?php echo $data ['objek']?>" id="form-field-1" class="form-control">
                                </div> 
                                <label class="col-sm-8 control-label" for="form-field-1">
                                    Keterangan
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" name="keterangan" value="<?php echo $data ['keterangan']?>" id="form-field-1" class="form-control">
                                </div>

                                 <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-1">

                                    </label>
                                    <div class="col-sm-3">
                                        <button type="submit" name="submit" class="btn btn-primary  btn-sm">Simpan</button>
                                        <?php echo anchor('objek', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
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
