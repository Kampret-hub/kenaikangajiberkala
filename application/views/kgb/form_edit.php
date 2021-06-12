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
                                    <label>ID anggota</label>
                                    <input type="text" class="form-control" name="id" readonly="" value="<?php echo $record['id_anggota']?>">
                                </div>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" value="<?php echo $record['nama_lengkap']?>">
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
                                    <input type="text" class="form-control" name="jk" value="<?php echo $record['jk']?>">
                                </div>
                                <div class="form-group">
                                    <label>Agama</label>
                                    <input type="text" class="form-control" name="agama" value="<?php echo $record['agama']?>">
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
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Edit</button> | 
                                <?php echo anchor('anggota','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->