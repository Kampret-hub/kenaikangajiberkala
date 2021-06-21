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
                            <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $record['nama_lengkap']?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="control-label">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tmpt_lahir" value="<?php echo $record['tmpt_lahir']?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="control-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="t_lahir" value="<?php echo $record['t_lahir']?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="control-label">Jenis Kelamin</label>
                                <select type="option" class="form-control"  name="jk">
                                    <option type="option" class="form-control"  name="agama" value="<?php echo $record['jk']; ?>"><?php echo $record['jk'];?></option>
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
                            <label for="" class="control-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="<?php echo $record['alamat']?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="control-label">Pendidikan</label>
                            <input type="text" class="form-control" name="pendidikan" value="<?php echo $record['pendidikan']?>">
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
                             <label for="" class="control-label">Golongan</label>
                                <select  type="option" class="form-control"  name="golongan">
                                    <option type="option" class="form-control"  name="golongan" value="<?php echo $record['golongan']; ?>"><?php echo $record['golongan'];?></option>
                                        <!-- Ambil data di DB-->
                                       <?php foreach ($golongan as $a ) {
                                            echo "<option value='$a->nama_golongan $a->pangkat'>$a->nama_golongan $a->pangkat</option>"; 
                                        }?>
                                </select>
                        </div>
                        <div class="form-group mb-3">
                            <div class="form-group mb-3">
                             <label for="" class="control-label">Masa kerja</label>
                                <select  type="option" class="form-control"  name="masa_kerja">
                                    <option type="option" class="form-control"  name="masa_kerja" value="<?php echo $record['masa_kerja']; ?>"><?php echo $record['masa_kerja'];?></option>
                                        <!-- Ambil data di DB-->
                                       <?php foreach ($gaji_pokok as $c) {
                                            echo "<option value='$c->masa_kerja'>$c->masa_kerja</option>"; 
                                        }?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                             <label for="" class="control-label">Gaji pokok</label>
                                <select  type="option" class="form-control"  name="gaji_pokok">
                                    <option type="option" class="form-control"  name="gaji_pokok" value="<?php echo $record['gaji_pokok']; ?>"><?php echo $record['gaji_pokok'];?></option>
                                        <!-- Ambil data di DB-->
                                       <?php foreach ($gaji_pokok as $c) {
                                            echo "<option value='$c->gaji'>$c->gaji</option>"; 
                                        }?>
                                </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="control-label">Status</label>
                                <select type="option" class="form-control"  name="status">
                                        <option value="<?php echo $record['status'];?>"><?php echo $record['status'];?></option>
                                        <option value="1">Aktif</option>
                                        <option value="0">Tidak Aktif</option>
                                </select>
                        </div>
            </div>
                                <span  style="margin-left: 15px;"><button type="submit" name="submit" value="Submit" id="submit" class="btn btn-primary btn-sm">Edit</button></span>   
                                <span style="margin-left: 5px;" ><?php echo anchor('anggota','Kembali',array('class'=>'btn btn-danger btn-sm' ))?></span>
                            </form>
                        </div>
                    </div><!-- /. PANEL  -->
                </div><!-- /. ROW  -->

                <!--<script type="text/javascript">
$(document).ready(function(){
  $('#EditAnggota').on('submit',function(e) {  
  $.ajax({
      url:'index.php/anggota', //nama action script php sobat
      data:$(this).serialize(),
      type:'POST',
      closeOnConfirm: false,
      closeOnCancel: false,
      success:function(data){
        console.log(data);
     swal("Success!", "Message sent!", "success");
      },
      error:function(data){
     swal("Oops...", "Something went wrong :(", "error");
      }
    });
    e.preventDefault(); 
  });
});
</script>-->