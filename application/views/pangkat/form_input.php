<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">Input Pangkat</h2>
                    </div>
                </div>
            </div>
        </div>

                <!-- /. ROW  -->
<div class="card shadow mb-4">
    <div class="card-header">
        <strong class="card-title">Form Input</strong>
    </div>
    <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">    
                                <?php echo form_open('pangkat/post'); ?>
                                <div class="form-group <?= form_error('taraf') ? 'has-error' : null?> ">
                                    <label>Taraf</label>
                                    <input type="text" class="form-control" name="taraf" >
                                     <span class="help-block alert-danger"><?= form_error('taraf') ?></span>
                                </div>
                                <div class="form-group <?= form_error('pangkat') ? 'has-error' : null?> ">
                                    <label>Pangkat</label>
                                    <input type="text" class="form-control" name="pangkat" >
                                    <span class="help-block alert-danger"><?= form_error('pangkat') ?></span>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button>
                                <?php echo anchor('pangkat','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->
            </div>
        </div>