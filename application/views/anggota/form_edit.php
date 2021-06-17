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

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('anggota/edit'); ?>
                                <input type="hidden" value="<?php echo $record['id_anggota']?>" name="id_anggota">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $record['nama_lengkap']?>">
                                </div>
                                <div class="form-group">
                                    <label>NRP / NIP</label>
                                    <input type="text" class="form-control" name="nrp" value="<?php echo $record['nrp']?>">
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tmpt_lahir" value="<?php echo $record['tmpt_lahir']?>">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="t_lahir" value="<?php echo $record['t_lahir']?>">
                                </div>
                                <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select value="<?php echo $record['jk']?>" type="option" class="form-control"  name="jk">
                                    <option >-- Jenis Kelamin --</option>
                                    <option value="P">Pria</option>
                                    <option value="W">Wanita</option>
                                </select>
                                <div class="form-group">
                                <label>Agama</label>
                                <select value="<?php echo $record['agama']?>" type="option" class="form-control"  name="agama">
                                    <option >-- Agama --</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen Katholik">Kristen Katholik</option>
                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Kong Hu Chu">Kong Hu Chu</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" name="alamat" value="<?php echo $record['alamat']?>">
                                </div>
                                <div class="form-group">
                                    <label>Pendidikan</label>
                                    <input type="text" class="form-control" name="pendidikan" value="<?php echo $record['pendidikan']?>">
                                </div>
                                <div class="form-group">
                                    <label>Pangkat</label>
                                    <input type="text" class="form-control" name="pangkat" value="<?php echo $record['pangkat']?>">
                                </div>
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input type="text" class="form-control" name="jabatan" value="<?php echo $record['jabatan']?>">
                                </div>
                                <div class="form-group">
                                    <label>Bagian</label>
                                    <input type="text" class="form-control" name="bagian" value="<?php echo $record['bagian']?>">
                                </div>
                                <div class="form-group">
                                    <label>Golongan</label>
                                    <input type="text" class="form-control" name="golongan" value="<?php echo $record['golongan']?>">
                                </div>
                                <div class="form-group">
                                    <label>Masa Kerja</label>
                                    <input type="text" class="form-control" name="masa_kerja" value="<?php echo $record['masa_kerja']?>">
                                </div>
                                <div class="form-group">
                                    <label>Gaji Pokok</label>
                                    <input type="text" class="form-control" name="gaji_pokok" value="<?php echo $record['gaji_pokok']?>">
                                </div>
                                <div class="form-group">
                                <label>Status</label>
                                <select value="<?php echo $record['status']?>" type="option" class="form-control"  name="status">
                                    <option >-- status --</option>
                                    <option value="1">Aktif</option>
                                    <option value="0">Tidak Aktif</option>
                                </select>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm mt-3">Edit</button>   
                                <?php echo anchor('anggota','Kembali',array('class'=>'btn btn-danger btn-sm mt-3'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->