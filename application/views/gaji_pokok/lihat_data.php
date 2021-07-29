<div class="row my-4"> 
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">Data Gaji Pokok</h2>
                <?php echo anchor('gaji_pokok/post','Tambah Data',array('class'=>'btn btn-danger btn-sm')) ?> 
            </div>
        </div>
    </div>
</div>

<div class="alert alert-dismissible fade show">
    <strong>
        <?php echo $this->session->flashdata('msg')?>
    </strong>
    <button type="button" class="close" data-dismiss="alert" arial-label="Close">
        <span aria-hodden="true">&times;</span>
    </button>
</div>
        
    <!-- Small table -->
<div class="row my-4">     
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">        
                <table class="table-striped table-bordered table-hover nowrap" id="dataTable-1" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>No.</th> 
                                <th>Kode GAPOK</th>
                                <th>Golongan</th>
                                <th>Masa Kerja</th>
                                <th>Gaji Pokok</th>
                                <th>Taraf</th>
                                <th>Pangkat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($record->result() as $r) { ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $r->kode_gapok ?></td>
                                <td><?php echo $r->golongan ?></td>
                                <td><?php echo $r->masa_kerja ?></td>
                                <td><?php echo $r->gaji ?></td>
                                <td><?php echo $r->taraf ?></td>
                                <td><?php echo $r->pangkat ?></td>
                                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <a href=" <?php echo base_url('gaji_pokok/edit/'.$r->id_gaji) ?>" class="btn btn-primary btn-small" style='margin-left: 5px;'><i class="fe fe-edit"></i>Edit</a>
                                    <a href="<?php echo base_url('gaji_pokok/delete/'.$r->id_gaji)?>" class="btn btn-danger btn-small hapus" id="hapus" ><i class="fe fe-trash"></i>Hapus</a>
                                  </div>
                                </td>
                                
                            </tr>
                        <?php $no++; } ?>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(".hapus").on("click", function(event){
        event.preventDefault();

        var getLink = $(this).attr('href');
                swal({
                        title: "Anda Yakin ?",
                        text: "Data Yang Sudah Dihapus Tidak Bisa Dikembalikan Lagi!",
                        type:  "warning",
                        html: true,
                        showCancelButton: true,

                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Ya, Hapus !",
                        showCancelButton: "Janagan Hapus!",
                        closeOnConfirm:    false,
                        closeOnCancel: false,
                        },function(isConfirm){
                            if (isConfirm) {
                                swal("Terhapus!", "Data berhasil dihapus." , "success");
                                window.location.href = getLink
                            }else{
                            {
                                swal("Cancelled","Data Tidak Jadi Dihapus :)", "error");
                            }
                        }
                    });
                return false;
            });
</script>      