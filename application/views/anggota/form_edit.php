<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">Edit Data anggota</h2>
            </div>
         </div> 
     </div>
 </div>
 <span>
                <!-- /. ROW  -->
<div class="card shadow mb-4">
    <div class="card-header">
        <strong class="card-title">Form Edit</strong>
    </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <?php echo form_open('anggota/edit'); ?>
                        <div class="form-group mb-3">
                            <label for="" class="control-label">NRP / NIP</label>
                            <input type="text" class="form-control" readonly="" name="nrp" value="<?php echo $record['nrp']?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="control-label">Nama Lengkap</label>
                            <input type="text" class="form-control" style="text-transform:uppercase" name="nama_lengkap" value="<?php echo $record['nama_lengkap']?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="control-label">Tempat Lahir</label>
                            <input type="text" class="form-control" style="text-transform:uppercase" name="tmpt_lahir" value="<?php echo $record['tmpt_lahir']?>">
                        </div>
                        <div class="form-group mb-3 <?= form_error('t_lahir') ? 'has-error' : null?> ">
                        <label for="date-input1" class="control-label">Tanggal Lahir</label>
                        <div class="input-group">
                            <input type="text" class="form-control drgpicker" name="t_lahir" id="date-input1" placeholder="Input Tanggal Lahir" value="<?php echo $record['t_lahir']?>" aria-describedby="button-addon2">
                            <span class="help-block alert-danger"><?= form_error('t_lahir')?></span>
                          <div class="input-group-append">
                              <div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16"></span></div>
                          </div>
                        </div>
                  </div>
                        <div class="form-group mb-3">
                            <label for="" class="control-label">Jenis Kelamin</label>
                                <select type="option" class="form-control"  name="jk">
                                    <option type="option" class="form-control"  name="jk" value="<?php echo $record['jk']; ?>"><?php echo $record['jk'];?></option>
                                         <!-- Ambil data di DB-->
                                        <?php foreach ($jk as $a) {
                                            echo "<option value='$a->nama_jk'>$a->nama_jk</option>"; 
                                        }?>
                                </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="control-label">Agama</label>
                                <select  type="option" class="form-control"  name="agama">
                                    <option type="option" class="form-control"  name="agama" value="<?php echo $record['agama']; ?>"><?php echo $record['agama'];?></option>
                                        <!-- Ambil data di DB-->
                                       <?php foreach ($agama as $b) {
                                            echo "<option value='$b->nama_agama'>$b->nama_agama</option>"; 
                                        }?>
                                </select>
                        </div>
                        <div class="form-group mb-3">
                          <label for="" class="control-label">No Telepon</label>
                          <input type="text" name="no_telp" id="no_telp" class="form-control" onkeypress="return telp(event)" placeholder="Input No Telepon" value="<?php echo $record['no_telp']?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="control-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="<?php echo $record['alamat']?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="control-label">Pendidikan</label>
                            <select type="option" class="form-control"  name="pendidikan">
                                    <option type="option" class="form-control"  name="pendidikan" value="<?php echo $record['pendidikan']; ?>"><?php echo $record['pendidikan'];?></option>
                                          <option value=""></option>
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
                        </div>
            </div>
            <div class="col-md-6">
                        <div class="form-group mb-3">
                             <label for="" class="control-label">Pangkat</label>
                                <select  type="option" class="form-control"  name="pangkat">
                                    <option type="option" class="form-control"  name="pangkat" value="<?php echo $record['pangkat']; ?>"><?php echo $record['pangkat'];?></option>
                                        <!-- Ambil data di DB-->
                                       <?php foreach ($pangkat as $c) {
                                            echo "<option value='$c->nama_pangkat'>$c->nama_pangkat</option>"; 
                                        }?>
                                </select>
                        </div>
                        <div class="form-group mb-3">
                             <label for="" class="control-label">Bagian</label>
                                <select  type="option" class="form-control"  name="bagian">
                                    <option type="option" class="form-control"  name="bagian" value="<?php echo $record['bagian']; ?>"><?php echo $record['bagian'];?></option>
                                        <!-- Ambil data di DB-->
                                       <?php foreach ($bagian as $c) {
                                            echo "<option value='$c->nama_bagian'>$c->nama_bagian</option>"; 
                                        }?>
                                </select>
                        </div>
                        <div class="form-group mb-3">
                             <label for="" class="control-label">Jabatan</label>
                                <select  type="option" class="form-control"  name="jabatan">
                                    <option type="option" class="form-control"  name="jabatan" value="<?php echo $record['jabatan']; ?>"><?php echo $record['jabatan'];?></option>
                                        <!-- Ambil data di DB-->
                                       <?php foreach ($jabatan as $c) {
                                            echo "<option value='$c->nama_jabatan'>$c->nama_jabatan</option>"; 
                                        }?>
                                </select>
                        </div>
                        <div class="form-group mb-3">
                             <label for="" class="control-label">Kode Golongan</label> 
                                <input  type="option" class="form-control"  id="title"  name="" ></input>                                    
                        </div>
                        <div class="form-group mb-3">
                             <label for="" class="control-label">Golongan</label> 
                                <input  type="text" readonly="" class="form-control"  id="golongan"  name="golongan" value="<?php echo $record['golongan']; ?>"></input>
                        </div>
                        <div class="form-group mb-3">
                            <div class="form-group mb-3">
                             <label for="" class="control-label">Masa kerja</label>
                                <input type="text" readonly="" class="form-control" id="masa_kerja" name="masa_kerja" value="<?php echo $record['masa_kerja']; ?>">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                             <label for="" class="control-label">Gaji pokok</label>
                                <input type="text" readonly="" class="form-control" id="gaji_pokok" name="gaji_pokok" value="<?php echo $record['gaji_pokok']; ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="control-label">Status Pegawai</label>
                                <select type="option" class="form-control"  name="stat_pegawai">
                                        <option value="<?php echo $record['stat_pegawai'];?>"><?php echo $record['stat_pegawai'];?></option>
                                        <option value="POLRI">POLRI</option>
                                        <option value="ASN">ASN</option>
                                </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="control-label">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" value="<?php echo $record['keterangan']?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="control-label">Status</label>
                                <select type="option" class="form-control"  name="status">
                                        <option value="<?php echo $record['status'];?>"><?php echo $record['status'];?></option>
                                        <option value="aktif">Aktif</option>
                                        <option value="keluar">keluar</option>
                                        <option value="meninggal">meninggal</option>
                                        <option value="pensiun">pensiun</option>
                                </select>
                        </div>
            </div>
                                <span  style="margin-left: 15px;"><button type="submit" name="submit" value="Submit" id="submit" class="btn btn-primary btn-sm">Edit</button></span>   
                                <span style="margin-left: 5px;" ><?php echo anchor('anggota/index/'.$record['status'],'Kembali',array('class'=>'btn btn-danger btn-sm' ))?></span>
                            </form>
                        </div>
                    </div><!-- /. PANEL  -->
                </div><!-- /. ROW  -->


<script>
  $(document).ready(function()
  {
    $("#title").autocomplete({
      source : "<?php echo site_url('anggota/get_autocomplete') ?>",

      select: function(event, ui){
        $('[name="title"]').val(ui.item.label);
        $('[name="golongan"]').val(ui.item.golongan);
        $('[name="masa_kerja"]').val(ui.item.masa_kerja);
        $('[name="gaji_pokok"]').val(ui.item.gaji_pokok);
      }
    });
});
</script>

<script type="text/javascript">
    function telp(event) {
            var angka = (event.which) ? event.which : event.keyCode
            if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
                return false;
            return true;
        }
</script>