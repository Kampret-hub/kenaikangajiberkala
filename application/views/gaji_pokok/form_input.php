<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">Input Gaji Pokok</h2>
                    </div>
                </div>
            </div>
        </div>

                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">    
                                <?php echo form_open('gaji_pokok/post'); ?>
                                <div class="form-group <?= form_error('kode_gapok') ? 'has-error' : null?> ">
                                    <label>Kode Gapok</label>
                                    <input type="text" class="form-control " name="kode_gapok" value="<?= set_value('kode_gapok')?>">
                                    <span class="help-block alert-danger alert-danger"><?= form_error('kode_gapok')?></span>
                                </div>
                                <div class="form-group <?= form_error('gaji') ? 'has-error' : null?> ">
                                    <label>Gaji</label>
                                    <input type="text" class="form-control" name="gaji" >
                                    <span class="help-block alert-danger"><?= form_error('gaji') ?></span>
                                </div>
                                <div class="form-group <?= form_error('masa_kerja') ? 'has-error' : null?> ">
                                    <label>Masa Kerja</label>
                                    <input type="text" class="form-control" name="masa_kerja" >
                                    <span class="help-block alert-danger"><?= form_error('masa_kerja') ?></span>
                                </div>
                                <div class="form-group <?= form_error('golongan') ? 'has-error' : null?> ">
                                    <label>Golongan</label>
                                    <input type="text" class="form-control" name="golongan" >
                                     <span class="help-block alert-danger"><?= form_error('golongan') ?></span>
                                </div>
                                <div class="form-group <?= form_error('taraf') ? 'has-error' : null?> ">
                                    <label>Taraf</label>
                                    <input type="text" class="form-control" name="taraf" >
                                     <span class="help-block alert-danger"><?= form_error('taraf') ?></span>
                                </div>
                                <div class="form-group <?= form_error('pangkat') ? 'has-error' : null?> ">
                                    <label>Pangkat</label>
                                    <input type="text" class="form-control" name="pangkat">
                                    <span class="help-block alert-danger"><?= form_error('pangkat') ?></span>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button>
                                <?php echo anchor('gaji_pokok','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->