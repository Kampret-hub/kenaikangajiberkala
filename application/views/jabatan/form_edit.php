<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">Edit Jabatan</h2>
                    </div>
                </div>
            </div>
        </div>

                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('jabatan/edit'); ?>
                                <input type="hidden" value="<?php echo $record['id_jabatan']?>" name="id_jabatan">
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input type="text" class="form-control" name="jabatan"  value="<?php echo $record['nama_jabatan']?>">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Edit</button>
                                <?php echo anchor('jabatan','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  --> 