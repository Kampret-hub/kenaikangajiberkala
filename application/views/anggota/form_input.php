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
                  <div class="form-group mb-3 <?= form_error('nrp') ? 'has-error' : null?> ">
                    <label for="" class="control-label">NRP / NIP Username</label>
                    <input type="text" name="nrp" id="nrp"  class="form-control"  placeholder="Input NRP / NIP" value="<?= set_value('nrp')?>">
                     <span class="help-block alert-danger"><?= form_error('nrp')?></span>
                  </div>  
                 <div class="form-group mb-3 <?= form_error('nama_lengkap') ? 'has-error' : null?> ">
                    <label for="" class="control-label">Nama Lengkap</label>
                    <input type="text" class="form-control" style="text-transform:uppercase" name="nama_lengkap" id="nama_lengkap"  placeholder="Input Nama lengkap" value="<?= set_value('nama_lengkap')?>" >
                     <span class="help-block alert-danger"><?= form_error('nama_lengkap')?></span>
                  </div>
                 <div class="form-group mb-3 <?= form_error('tmpt_lahir') ? 'has-error' : null?> ">
                    <label for="" class="control-label">Tempat Lahir</label>
                    <input type="text" class="form-control" style="text-transform:uppercase" name="tmpt_lahir" id="tmpt_lahir" placeholder="Input Tempat Lahir" value="<?= set_value('tmpt_lahir')?>">
                     <span class="help-block alert-danger"><?= form_error('tmpt_lahir')?></span>
                  </div>
                  <div class="form-group mb-3 <?= form_error('t_lahir') ? 'has-error' : null?> ">
                        <label for="date-input1" class="control-label">Tanggal Lahir</label>
                        <div class="input-group">
                            <input type="text" class="form-control drgpicker" name="t_lahir" id="date-input1" placeholder="Input Tanggal Lahir" value="<?= set_value('t_lahir')?>" aria-describedby="button-addon2">
                            <span class="help-block alert-danger"><?= form_error('t_lahir')?></span>
                          <div class="input-group-append">
                              <div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16"></span></div>
                          </div>
                        </div>
                  </div>
                  <div class="form-group mb-3 <?= form_error('jk') ? 'has-error' : null?> ">
                       <label for="" class="control-label">Jenis Kelamin</label>
                                <select  type="option" class="form-control"  name="jk">
                                    <option type="option" class="form-control"  name="jk" value="<?= set_value('jk')?>"><?= set_value('jk')?></option>
                                        <!-- Ambil data di DB-->
                                       <?php foreach ($jk as $c) {
                                            echo "<option value='$c->nama_jk'>$c->nama_jk</option>"; 
                                        }?>
                                </select> 
                                <span class="help-block alert-danger"><?= form_error('jk')?></span>         
                  </div>
                  <div class="form-group mb-3 <?= form_error('agama') ? 'has-error' : null?> ">
                       <label for="" class="control-label">Agama</label>
                                <select  type="option" class="form-control"  name="agama">
                                    <option type="option" class="form-control"  name="agama" value="<?= set_value('agama')?>"><?= set_value('agama')?></option>
                                        <!-- Ambil data di DB-->
                                       <?php foreach ($agama as $c) {
                                            echo "<option value='$c->nama_agama'>$c->nama_agama</option>"; 
                                        }?>
                                </select> 
                                 <span class="help-block alert-danger"><?= form_error('agama')?></span>         
                  </div>
                 <div class="form-group mb-3 <?= form_error('no_telp') ? 'has-error' : null?> ">
                      <label for="" class="control-label">No Telepon</label>
                      <input type="text" name="no_telp" id="no_telp" class="form-control" onkeypress="return telp(event)" placeholder="Input No Telepon" value="<?= set_value('no_telp')?>"></input>
                       <span class="help-block alert-danger"><?= form_error('no_telp')?></span>
                  </div>
                  </div> <!-- /.col -->
              <div class="col-md-6">
                 <div class="form-group mb-3 <?= form_error('alamat') ? 'has-error' : null?> ">
                      <label for="" class="control-label">Alamat</label>
                      <textarea type="text" name="alamat" id="alamat" class="form-control"   placeholder="Input Alamat" value="<?= set_value('alamat')?>"></textarea>
                      <span class="help-block alert-danger"><?= form_error('alamat')?></span> 
                  </div>
                 <div class="form-group mb-3 <?= form_error('pendidikan') ? 'has-error' : null?> ">
                      <label for="" class="control-label">Pendidikan</label>
                      <select type="option" class="form-control"  name="pendidikan">
                                    <option type="option" class="form-control"  name="pendidikan" value="<?= set_value('pendidikan')?>"><?= set_value('pendidikan')?></option>
                                         <option value="SD">SD</option>
                                         <option value="SMP">SMP</option>
                                         <option value="SMA">SMA</option>
                                         <option value="SMK">SMK</option>
                                         <option value="D1">D1</option>
                                         <option value="D2">D2</option>
                                         <option value="D3">D3</option>
                                         <option value="S1">S1</option>
                                         <option value="S2">S2</option>
                                         <option value="S3">S3</option>
                                </select>
                      <span class="help-block alert-danger"><?= form_error('pendidikan')?></span> 
                  </div>
                  <div class="form-group mb-3 <?= form_error('pangkat') ? 'has-error' : null?> ">
                       <label for="" class="control-label">Pangkat</label>
                                <select  type="option" class="form-control"  name="pangkat">
                                    <option type="option" class="form-control"  name="pangkat" value="<?= set_value('pangkat')?>"><?= set_value('pangkat')?></option>
                                        <!-- Ambil data di DB-->
                                       <?php foreach ($pangkat as $c) {
                                            echo "<option value='$c->nama_pangkat'>$c->nama_pangkat</option>"; 
                                        }?>
                                </select> 
                                 <span class="help-block alert-danger"><?= form_error('pangkat')?></span>         
                  </div>
                  <div class="form-group mb-3 <?= form_error('bagian') ? 'has-error' : null?> ">
                       <label for="" class="control-label">Bagian</label>
                                <select  type="option" class="form-control"  name="bagian">
                                    <option type="option" class="form-control"  name="bagian" value="<?= set_value('bagian')?>"><?= set_value('bagian')?></option>
                                        <!-- Ambil data di DB-->
                                       <?php foreach ($bagian as $c) {
                                            echo "<option value='$c->nama_bagian'>$c->nama_bagian</option>"; 
                                        }?>
                                </select> 
                                 <span class="help-block alert-danger"><?= form_error('bagian')?></span>         
                  </div>
                  <div class="form-group mb-3 <?= form_error('jabatan') ? 'has-error' : null?> ">
                       <label for="" class="control-label">Jabatan</label>
                                <select  type="option" class="form-control"  name="jabatan">
                                    <option type="option" class="form-control"  name="jabatan" value="<?= set_value('jabatan')?>"><?= set_value('jabatan')?></option>
                                        <!-- Ambil data di DB-->
                                       <?php foreach ($jabatan as $c) {
                                            echo "<option value='$c->nama_jabatan'>$c->nama_jabatan</option>"; 
                                        }?>
                                </select> 
                                 <span class="help-block alert-danger"><?= form_error('jabatan')?></span>         
                  </div>
                  <div class="form-group mb-3 <?= form_error('keterangan') ? 'has-error' : null?> ">
                            <label for="" class="control-label">Keterangan</label>
                                <select type="option" class="form-control"  name="keterangan">
                                        <option type="option" class="form-control"  name="keterangan" value="<?= set_value('keterangan')?>"><?= set_value('keterangan')?></option>
                                        <option value="POLRI">POLRI</option>
                                        <option value="ASN">ASN</option>
                                </select>
                                <span class="help-block alert-danger"><?= form_error('keterangan')?></span>
                        </div>
                 <div class="form-group mb-3> ">
                            <label for="" class="control-label">Status</label>
                                <select type="option" class="form-control"  name="status">
                                        <option value="aktif">Aktif</option>
                                </select>
                  </div>
          </div>
                              <span  style="margin-left: 15px;"><button type="submit" name="submit" value="Submit" id="submit" class="btn btn-primary btn-sm">Simpan</button></span>   
                              <span style="margin-left: 5px;" ><?php echo anchor('anggota/index/aktif','Kembali',array('class'=>'btn btn-danger btn-sm' ))?></span>
          </form>
      </div><!-- /. PANEL  -->
</div><!-- /. ROW  -->
<script type="text/javascript">
    function telp(event) {
            var angka = (event.which) ? event.which : event.keyCode
            if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
                return false;
            return true;
        }
</script>
