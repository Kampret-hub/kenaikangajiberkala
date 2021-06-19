<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">Anggota Masuk</h2>
            </div>
         </div> 
     </div>
 </div>
 <span>
  <script  src='<?php echo base_url(); ?>js/ajax.js'></script>
<form autocomplete="off">
 <div class="card shadow mb-4">
                <div class="card-header">
                  <strong class="card-title">Form Input</strong>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                        <?php echo form_open('anggota/post'); ?>
                      <div class="form-group mb-3">
                        <label for="" class="control-label">NRP / NIP Username</label>
                        <input type="text" name="title" id="title"  class="form-control" list="" placeholder="Input NRP / NIP">
                      </div>  
                      <div class="form-group mb-3">
                        <label for="" class="control-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" readonly="" placeholder="Input Nama lengkap">
                      </div>
                      <div class="form-group mb-3">
                        <label for="" class="control-label">Tempat Lahir</label>
                        <input type="text" name="tmpt_lahir" id="tmpt_lahir" class="form-control" readonly="" placeholder="Input Tempat Lahir">
                      </div>
                      <div class="form-group mb-3">
                        <label for="" class="control-label">Tanggal Lahir</label>
                        <input type="date" name="t_lahir" id="t_lahir" class="form-control" readonly="" placeholder="Input Tamggal Lahir">
                      </div>
                    </div> <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                        <label for="" class="control-label">Agama</label>
                        <input type="text" name="agama" id="agama" class="form-control" readonly="" placeholder="Agama">
                      </div>
                      <div class="form-group mb-3">
                        <label for="" class="control-label">Alamat</label>
                        <textarea type="text" name="alamat" id="alamat" class="form-control" readonly=""  placeholder="Input Alamat"></textarea>
                      </div>
                      <div class="form-group mb-3">
                        <label for="" class="control-label">Pendidikan</label>
                        <input type="text" class="form-control" name="pendidikan" id="pendidikan" readonly=""  placeholder="Input Pendidikan">
                      </div>
                      <div class="form-group mb-3">
                        <label for="" class="control-label">Pangkat</label>
                        <input type="text" class="form-control" name="pangkat" id="pangkat" readonly="" placeholder="Pangkat">
                      </div>
                    </div>
                  </div>
                </div>
</div>
</form> <!-- / .card -->

                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('kgb','Kembali',array('class'=>'btn btn-danger btn-sm'))?>   

<script>
  $(document).ready(function()
  {
    $("#title").autocomplete({
      source : "<?php echo site_url('anggota_masuk/get_autocomplete') ?>",

      select: function(event, ui){
        $('[name="title"]').val(ui.item.label);
        $('[name="nama_lengkap"]').val(ui.item.nama_lengkap);
        $('[name="tmpt_lahir"]').val(ui.item.t_lahir);
        $('[name="t_lahir"]').val(ui.item.t_lahir);
        $('[name="agama"]').val(ui.item.agama);
        $('[name="pangkat"]').val(ui.item.pangkat);

      }
    });
});
</script>
