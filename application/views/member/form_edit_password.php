<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">Ganti Password</h2>
            </div>
         </div> 
     </div>
 </div>
 <span>
                <!-- /. ROW  -->
<div class="card shadow mb-4">
  
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <?php echo form_open('member/profile/ganti_password'); ?>
                         <div class="form-group mb-3 <?= form_error('password') ? 'has-error' : null?>">
                            <label for="" class="control-label">Masukan Password Baru</label>
                            <input type="hidden" class="form-control" name="nrp" value="<?php echo $password['nrp']?>">
                            <input type="text" class="form-control"  name="password">
                            <span class="help-block alert-danger alert-danger"><?= form_error('password')?></span>
                        </div>
                        <div class="form-group mb-3 <?= form_error('password2') ? 'has-error' : null?>">
                            <label for="" class="control-label">Masukan Password lagi</label>
                            <input type="text" class="form-control"  name="password2">
                            <span class="help-block alert-danger alert-danger"><?= form_error('password2')?></span>
                        </div>
                       
                                <span  style="margin-left: 15px;"><button type="submit" name="submit" value="Submit" id="submit" class="btn btn-primary btn-sm">Ganti Password</button></span>   
                                <span style="margin-left: 5px;" ><?php echo anchor('member/profile','Kembali',array('class'=>'btn btn-danger btn-sm' ))?></span>
                            </form>
                        </div>
                    </div><!-- /. PANEL  -->
                </div><!-- /. ROW  -->