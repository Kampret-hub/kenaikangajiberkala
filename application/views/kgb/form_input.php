

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
 
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('anggota/post'); ?>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama_lengkap" placeholder="nama lengkap">
                                </div>
                                <div class="form-group">
                                    <label>NRP / NIP Username</label>
                                    <input type="text" class="form-control" name="nrp" placeholder="nrp / nip username">
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempatlahir" placeholder="tempat lahir">
                                </div>
                                 <div class="form-group">
                                    <label>tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggallahir" placeholder="tanggal lahir">
                                </div>
                                 <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select type="option" class="form-control"  name="jk">
                                        <option >-- Jenis Kelamin --</option>
                                        <option value="P">Pria</option>
                                        <option value="W">Wanita</option>
                                    </select>
                                     <div class="form-group">
                                    <label>Agama</label>
                                    <select type="option" class="form-control"  name="agama">
                                        <option >-- Agama --</option>
                                        <option value="Islam">Islamn</option>
                                        <option value="Kristen Katholik">Kristen Katholik</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Kong Hu Chu">Kong Hu Chu</option>
                                    </select>
                                </div>
                                </div>
                                <diiv class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" name="alamat" placeholder="alamat">
                                </div>
                                <div class="form-group">
                                    <label>Pendidikan</label>
                                    <input type="text" class="form-control" name="pendidikan" placeholder="pendidikan">
                                </div>
                                <div class="form-group">
                                    <label>Pangkat</label>
                                    <input type="text" class="form-control" name="pangkat" placeholder="pangkat">
                                </div>
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input type="text" class="form-control" name="jabatan" placeholder="jabatan">
                                </div>
                                <div class="form-group">
                                    <label>Bagian</label>
                                    <input type="text" class="form-control" name="bagian" placeholder="bagian">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('anggota','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->