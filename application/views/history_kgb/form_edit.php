<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title"><?php echo $title ?></h2>
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
                                <?php echo form_open('history/edit'); ?>
                                <input type="hidden" value="<?php echo $record['id']?>" name="id">
                                <div class="form-group">
                                    <label>NRP</label>
                                    <input type="text" class="form-control" name="nrp" readonly="" value="<?php echo $record['nrp']?>">
                                </div>
                                <div class="form-group">
                                    <label>Nama </label>
                                    <input type="text" class="form-control" name="nama" readonly="" value="<?php echo $record['nama']?>">
                                </div>
                                <div class="form-group">
                                    <label>Periode</label>
                                    <input type="text" class="form-control" name="periode" value="<?php echo $record['periode']?>">
                                </div>
                                <div class="form-group">
                                    <label>Gaji</label>
                                    <input type="text" class="form-control" name="gaji" value="<?php echo $record['gaji']?>">
                                </div>
                                <div class="form-group">
                                    <label>TMT</label>
                                    <input type="date" class="form-control" name="tmt" value="<?php echo $record['tmt']?>">
                                </div>
                               
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Edit</button> | 
                                <?php echo anchor('history/index/'.$record['nrp'],'Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->