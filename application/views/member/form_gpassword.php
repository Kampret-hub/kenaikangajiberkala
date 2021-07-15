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
        <div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
                  <div class="row mb-4">
                    <div class="col-md-6">
                      <?php echo form_open('member/profile/ganti_password'); ?>
                      <div class="form-group mb-3 <?= form_error('password') ? 'has-error' : null?>">
                            <label for="" class="control-label">Masukan Password Baru</label>
                            <input type="hidden" class="form-control" name="nrp" value="<?php echo $password['nrp']?>">
                            <input type="password" class="form-control" name="password" value="<?= set_value('password')?>">
                            <span class="help-block alert-danger alert-danger"><?= form_error('password')?></span>
                        </div>
                        <div class="form-group mb-3 <?= form_error('cpw_baru') ? 'has-error' : null?>">
                            <label for="" class="control-label">Konfirmasi Password Baru</label>
                            <input type="password" class="form-control"  name="cpw_baru" value="<?= set_value('cpw_baru')?>">
                            <span class="help-block alert-danger alert-danger"><?= form_error('cpw_baru')?></span>
                        </div>
                    </div>
                    <!--<div class="col-md-6">
                      <p class="mb-2">Persyaratan kata sandi</p>
                      <p class="small text-muted mb-2">Untuk membuat kata sandi baru, Anda harus memenuhi semua persyaratan berikut :</p>
                      <ul class="small text-muted pl-4 mb-0">
                        <li>Minimal 8 karakter</li>
                        <li>Setidaknya satu karakter khusus</li>
                        <li>Setidaknya ada satu nomor</li>
                        <li>Tidak boleh sama dengan kata sandi sebelumnya</li>
                      </ul>
                    </div>-->
                  </div>
                  <button type="submit" class="btn btn-primary">Ganti Password</button>
                   <?php echo anchor('member/profile',' Kembali',array('class'=>'btn btn-danger'))?>
                </form>
              </div> <!-- /.card-body -->
            </div> <!-- /.col-12 -->
          </div> <!-- .row -->