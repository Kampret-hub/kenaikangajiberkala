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
                                <?php echo form_open('gaji_pokok/edit'); ?>
                                <input type="hidden" value="<?php echo $record['id_gaji']?>" name="id_gaji">
                                <div class="form-group">
                                    <label>Kode Gaji</label>
                                    <input type="text" class="form-control" name="kode_gapok"  value="<?php echo $record['kode_gapok']?>">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="gaji" value="<?php echo $record['gaji']?>">
                                </div>
                                <div class="form-group">
                                    <label>Masa Kerja</label>
                                    <input type="text" class="form-control" name="masa_kerja"  value="<?php echo $record['masa_kerja']?>">
                                </div>
                                <div class="form-group">
                                    <label>Golongan</label>
                                    <input type="text" class="form-control" name="golongan"  value="<?php echo $record['golongan']?>">
                                </div>
                                <div class="form-group">
                                    <label>Taraf</label>
                                    <input type="text" class="form-control" name="taraf"  value="<?php echo $record['taraf']?>">
                                </div>
                                <div class="form-group">
                                    <label>Pangkat</label>
                                    <input type="text" class="form-control" name="pangkat"  value="<?php echo $record['pangkat']?>">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Edit</button>
                                <?php echo anchor('gaji_pokok','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->