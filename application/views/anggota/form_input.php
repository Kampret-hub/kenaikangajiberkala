<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">Tambah Data anggota</h2>
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
              <?php echo form_open('anggota/insert'); ?>
                  <div class="form-group mb-3">
                    <label for="" class="control-label">NRP / NIP Username</label>
                    <input type="text" name="nrp" id="nrp"  class="form-control" list="" placeholder="Input NRP / NIP">
                  </div>  
                  <div class="form-group mb-3">
                    <label for="" class="control-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"  placeholder="Input Nama lengkap">
                  </div>
                  <div class="form-group mb-3">
                    <label for="" class="control-label">Tempat Lahir</label>
                    <input type="text" name="tmpt_lahir" id="tmpt_lahir" class="form-control"  placeholder="Input Tempat Lahir">
                  </div>
                  <div class="form-group mb-3">
                    <label for="" class="control-label">Tanggal Lahir</label>
                    <input type="date" name="t_lahir" id="t_lahir" class="form-control"  placeholder="Input Tamggal Lahir">
                  </div>
          
                  <div class="form-group mb-3">
                      <label for="" class="control-label">Agama</label>
                      <select type="option" class="form-control"  name="agama">
                        <!-- Ambil data di DB-->
                        <?php foreach ($agama as $b) {
                            echo "<option value='$b->nama_agama'>$b->nama_agama</option>"; 
                        }?>
                      </select>
                  </div>
          </div> <!-- /.col -->
          <div class="col-md-6">
                  <div class="form-group mb-3">
                      <label>Jenis Kelamin</label>
                      <select type="option" class="form-control"  name="jk">
                         <!-- Ambil data di DB-->
                         <?php foreach ($jk as $a) {
                          echo "<option value='$a->nama_jk'>$a->nama_jk</option>"; 
                        }?>
                      </select>
                  </div>
                  <div class="form-group mb-3">
                      <label for="" class="control-label">Alamat</label>
                      <textarea type="text" name="alamat" id="alamat" class="form-control"   placeholder="Input Alamat"></textarea>
                  </div>
                  <div class="form-group mb-3">
                      <label for="" class="control-label">Pendidikan</label>
                      <input type="text" class="form-control" name="pendidikan" id="pendidikan"   placeholder="Input Pendidikan">
                  </div>
                  <div class="form-group mb-3">
                       <label for="" class="control-label">Pangkat</label>
                                <select  type="option" class="form-control"  name="pangkat">
                                    <option type="option" class="form-control"  name="pangkat" ></option>
                                        <!-- Ambil data di DB-->
                                       <?php foreach ($pangkat as $c) {
                                            echo "<option value='$c->nama_pangkat'>$c->nama_pangkat</option>"; 
                                        }?>
                                </select>          
                  </div>
          </div>
                              <span  style="margin-left: 15px;"><button type="submit" name="submit" value="Submit" id="submit" class="btn btn-primary btn-sm">Simpan</button></span>   
                              <span style="margin-left: 5px;" ><?php echo anchor('anggota','Kembali',array('class'=>'btn btn-danger btn-sm' ))?></span>
          </form>
      </div><!-- /. PANEL  -->
</div><!-- /. ROW  -->
