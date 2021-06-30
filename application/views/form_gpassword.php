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
                      <?php echo form_open('auth/ganti_password'); ?>
                      <div class="form-group">
                        <label for="inputPassword4">Password lama</label>
                        <input type="text" class="form-control" id="" value="">
                      </div>
                      <div class="form-group">
                        <label for="inputPassword5">Password baru</label>
                        <input type="password" class="form-control" id="" name="pw_baru">
                      </div>
                      <div class="form-group">
                        <label for="inputPassword6">Setujui password</label>
                        <input type="password" class="form-control" id="" name="cpw_baru">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <p class="mb-2">Persyaratan kata sandi</p>
                      <p class="small text-muted mb-2">Untuk membuat kata sandi baru, Anda harus memenuhi semua persyaratan berikut :</p>
                      <ul class="small text-muted pl-4 mb-0">
                        <li>Minimal 8 karakter</li>
                        <li>Setidaknya satu karakter khusus</li>
                        <li>Setidaknya ada satu nomor</li>
                        <li>Tidak boleh sama dengan kata sandi sebelumnya</li>
                      </ul>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
              </div> <!-- /.card-body -->
            </div> <!-- /.col-12 -->
          </div> <!-- .row -->