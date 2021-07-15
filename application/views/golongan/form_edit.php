<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">Edit Golongan</h2>
                    </div>
                </div>
            </div>
        </div>

                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('golongan/edit'); ?>
                                <input type="hidden" value="<?php echo $record['id_golongan']?>" name="id_golongan">
                                <div class="form-group">
                                    <label>Golongan</label>
                                    <input type="text" class="form-control" name="golongan"  value="<?php echo $record['nama_golongan']?>">
                                </div>
                                <div class="form-group">
                                    <label>Pangkat</label>
                                    <input type="text" class="form-control" name="pangkat"  value="<?php echo $record['pangkat']?>">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Edit</button>
                                <?php echo anchor('golongan','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  --> 