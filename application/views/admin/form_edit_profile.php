<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">Edit Data Profile</h2>
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
                    <?php echo form_open('admin/profile/edit'); ?>
                         <div class="form-group mb-3">
                            <label for="" class="control-label">NRP / NIP</label>
                            <input type="text" class="form-control" readonly="" name="nrp" value="<?php echo $member['nrp']?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="control-label">Nama Lengkap</label>
                            <input type="text" class="form-control" style="text-transform:uppercase" name="nama_lengkap" value="<?php echo $member['nama_lengkap']?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="control-label">Tempat Lahir</label>
                            <input type="text" class="form-control" style="text-transform:uppercase" name="tmpt_lahir" value="<?php echo $member['tmpt_lahir']?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="control-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="t_lahir" value="<?php echo $member['t_lahir']?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="control-label">Jenis Kelamin</label>
                                <select type="option" class="form-control"  name="jk">
                                    <option type="option" class="form-control"  name="agama" value="<?php echo $member['jk']; ?>"><?php echo $member['jk'];?></option>
                                         <!-- Ambil data di DB-->
                                        <?php foreach ($jk as $a) {
                                            echo "<option value='$a->nama_jk'>$a->nama_jk</option>"; 
                                        }?>
                                </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="" class="control-label">Agama</label>
                                <select  type="option" class="form-control"  name="agama">
                                    <option type="option" class="form-control"  name="agama" value="<?php echo $member['agama']; ?>"><?php echo $member['agama'];?></option>
                                        <!-- Ambil data di DB-->
                                       <?php foreach ($agama as $b) {
                                            echo "<option value='$b->nama_agama'>$b->nama_agama</option>"; 
                                        }?>
                                </select>
                        </div>
                        <div class="form-group mb-3">
                          <label for="" class="control-label">No Telepon</label>
                          <input type="text" name="no_telp" id="no_telp" class="form-control" onkeypress="return telp(event)" placeholder="Input No Telepon" value="<?php echo $member['no_telp']?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="control-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="<?php echo $member['alamat']?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="control-label">Pendidikan</label>
                                <select type="option" class="form-control"  name="pendidikan">
                                    <option type="option" class="form-control"  name="pendidikan" value="<?php echo $member['pendidikan']; ?>"><?php echo $member['pendidikan'];?></option>
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
                                <span  style="margin-left: 15px;"><button type="submit" name="submit" value="Submit" id="submit" class="btn btn-primary btn-sm">Edit</button></span>   
                                <span style="margin-left: 5px;" ><?php echo anchor('admin/profile','Kembali',array('class'=>'btn btn-danger btn-sm' ))?></span>
                            </form>
                        </div>
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