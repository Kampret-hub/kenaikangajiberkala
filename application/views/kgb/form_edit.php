<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">Edit Data KGB</h2>
            </div>
         </div> 
     </div>
 </div>
 <span>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('kgb/edit'); ?>
                                <input type="hidden" value="<?php echo $record['id_kgb']?>" name="id_kgb">
                                <div class="form-group">
                                    <label>username</label>
                                    <input type="text" class="form-control" name="username" readonly="" value="<?php echo $record['username']?>">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama" readonly="" value="<?php echo $record['nama']?>">
                                </div>
                                <div class="form-group">
                                    <label>Gaji Pokok Lama</label>
                                    <input type="text" class="form-control" name="gpl" value="<?php echo $record['gpl']?>">
                                </div>
                                <div class="form-group">
                                    <label>Gaji Pokok Baru</label>
                                    <input type="text" class="form-control" name="gpb" value="<?php echo $record['gpb']?>">
                                </div>
                                <div class="form-group">
                                    <label>Mkgg</label>
                                    <input type="text" class="form-control" name="mkgg" value="<?php echo $record['mkgg']?>">
                                </div>
                                <div class="form-group">
                                    <label>TMT Lama</label>
                                    <input type="date" class="form-control" name="tmtl" value="<?php echo $record['tmtl']?>">
                                </div>
                                <div class="form-group">
                                    <label>TMT baru</label>
                                    <input type="date" class="form-control" name="tmtb" value="<?php echo $record['tmtb']?>">
                                </div>
                                <div class="form-group">
                                    <label>nosk</label>
                                    <input type="text" class="form-control" name="nosk" value="<?php echo $record['nosk']?>">
                                </div>
                                <div class="form-group">
                                    <label>kgbb</label>
                                    <input type="text" class="form-control" name="kgbb" value="<?php echo $record['kgbb']?>">
                                </div>
                               
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Edit</button> | 
                                <?php echo anchor('kgb','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->