

<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">Tambah Data KGB</h2>
            </div>
         </div> 
     </div>
 </div>
 <span>

                <div class="card shadow mb-4">
                <div class="card-header">
                  <strong class="card-title">Form Input</strong>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                        <?php echo form_open('anggota/post'); ?>
                      <div class="form-group mb-3">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="" id="" placeholder="Input Nama lengkap">
                      </div>
                      <div class="form-group mb-3">
                        <label for="">NRP / NIP Username</label>
                        <input type="text" id="" name="" class="form-control" placeholder="Input NRP / NIP">
                      </div>
                      <div class="form-group mb-3">
                        <label for="">Gaji Pokok Lama</label>
                        <input type="text" id="" name="" class="form-control" placeholder="Input Gaji Pokok Lama">
                      </div>
                      <div class="form-group mb-3">
                        <label for="">Gaji Pokok Baru</label>
                        <input type="text" id="" class="form-control" placeholder="Input Gaji Pokok Baru">
                      </div>
                    </div> <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                        <label for="">TMT Lama</label>
                        <input type="text" id="" class="form-control" placeholder="Input TMT Lama">
                        <!--<span class="help-block"><small>A block of help text that breaks onto a new line.</small></span>-->
                      </div>
                      <div class="form-group mb-3">
                        <label for="">TMT Baru</label>
                        <input type="text" id="" class="form-control"  placeholder="Input TMT Baru">
                      </div>
                      <div class="form-group mb-3">
                        <label for="">NO SK</label>
                        <input type="text" class="form-control" id="example-disable"  placeholder="Input No Sk">
                      </div>
                      <div class="form-group mb-3">
                        <label for="">KGB Berikutnya</label>
                        <input type="text" class="form-control" class="form-control-plaintext" id="example-static" placeholder="KGB Berikutnya">
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- / .card -->

                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('kgb','Kembali',array('class'=>'btn btn-danger btn-sm'))?>