<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">Edit Gaji Pokok</h2>
                    </div>
                </div>
            </div>
        </div>

                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('kontak/setup'); ?>
                                <input type="hidden" value="<?php echo $record['id_kontak']?>" name="id_kontak">
                                <div class="form-group">
                                    <label>Kabupaten / Kota</label>
                                    <input type="text" class="form-control" name="kab"  value="<?php echo $record['kab']?>">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" name="alamat" value="<?php echo $record['alamat']?>">
                                </div>
                                <div class="form-group">
                                    <label>No Telepon</label>
                                    <input type="text" class="form-control" name="no_telp"  value="<?php echo $record['no_telp']?>">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email"  value="<?php echo $record['email']?>">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Edit</button>
                                <?php echo anchor('kontak','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->