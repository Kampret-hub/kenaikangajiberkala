<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">Data Anggota Pensiun</h2>
                <?php echo anchor('anggota/insert','Tambah Data',array('class'=>'btn btn-danger btn-sm')) ?>
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
                                <th>Nama Lengkap</th>
                                <th>NRP / NIP </th>
                                <th>TTL</th>
                                <th>Alamat</th>
                                <th>Pangkat</th>
                                <th>Jabatan</th>
                                <th>Bagian</th>
                                <th>Ket</th>
                                <th>Golongan</th>
                                <th>Masa Kerja</th>
                                <th>Gaji</th>
                                <th>Agama </th>
                                <th>No Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($record1 as $r) { ?>
                            <tr class="">
                                <td><?php echo $no ?></td>
                                <td><?php echo $r->nama_lengkap ?></td>
                                <td><?php echo $r->nrp ?></td>
                                <td><?php echo $r->tmpt_lahir ?>, 
                                    <?php $sampeledate = ($r->t_lahir); 
                                        $converdate = date("d-m-Y", strtotime($sampeledate));
                                        echo $converdate;
                                    ?>
                                </td>
                                <td><?php echo $r->alamat ?></td>
                                <td><?php echo $r->pangkat ?></td>
                                <td><?php echo $r->jabatan ?></td>
                                <td><?php echo $r->bagian ?></td>
                                <td><?php echo $r->keterangan ?></td>
                                <td><?php echo $r->golongan ?></td>
                                <td><?php echo $r->masa_kerja ?></td>
                                <td><?php echo $r->gaji_pokok ?></td>
                                <td><?php echo $r->agama ?></td>
                                <td><?php echo $r->no_telp ?></td>
                                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-right " >
                                    <a href=" <?php echo base_url('anggota/edit/'.$r->nrp) ?>" class="btn btn-primary btn-small" style='margin-left: 5px;'><i class="fe fe-edit"></i>Edit</a>
                                    <a href="<?php echo base_url('anggota/delete/'.$r->nrp.'/'.$r->status)?>" class="btn btn-danger btn-small hapus" id="" ><i class="fe fe-trash"></i>Hapus</a>
                                </td>
                            </tr>
                        <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        jQuery(document).ready(function($){
            $('.hapus').on('click',function(e){
                e.preventDefault();
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
        });
    </script>
            

<!--onclick="return confirm('Anda yakin mau menghapus data ini ?')"--> 