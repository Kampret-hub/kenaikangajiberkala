<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">Input Bagian</h2>
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
                                <?php echo form_open('bagian/post'); ?>
                                <div class="form-group <?= form_error('bagian') ? 'has-error' : null?> ">
                                    <label>Bagian</label>
                                    <input type="text" class="form-control" name="bagian" >
                                    <span class="help-block alert-danger"><?= form_error('bagian') ?></span>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button>
                                <?php echo anchor('bagian','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->
            </div>
        </div>