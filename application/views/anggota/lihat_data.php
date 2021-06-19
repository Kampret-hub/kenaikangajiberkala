<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">Data Anggota Aktif</h2>
                <?php echo anchor('anggota/insert','Tambah Data',array('class'=>'btn btn-danger btn-sm')) ?>

                 <table class="table datatables" id="dataTable-1">
                        <thead>
                            <tr>
                                <th>No.</th> 
                                 <th>NRP / NIP </th>
                                <th>Nama Lengkap</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Agama </th>
                                <th>Alamat</th>
                                <th>Pendidikan</th>
                                <th>Pangkat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($record->result() as $r) { ?>
                            <tr class="">
                                <td><?php echo $no ?></td>
                                <td><?php echo $r->nrp ?></td>
                                <td><?php echo $r->nama_lengkap ?></td>
                                <td><?php echo $r->tmpt_lahir ?></td>
                                <td><?php echo $r->t_lahir ?></td>
                                <td><?php echo $r->agama ?></td>
                                <td><?php echo $r->alamat ?></td>
                                <td><?php echo $r->pendidikan ?></td>
                                <td><?php echo $r->pangkat ?></td>
                                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-right " >
                                    <a href=" <?php echo base_url('anggota/edit/'.$r->nrp) ?>" class="btn btn-primary btn-small" style='margin-left: 5px;'><i class="fe fe-edit"></i>Edit</a>
                                    <a href="<?php echo base_url('anggota/delete/'.$r->nrp)?>" class="btn btn-danger btn-small" ><i class="fe fe-trash"></i>Hapus</a>
                                </td>
                                
                            </tr>
                        <?php $no++; } ?>
                        </tbody>
                </table>
            </td>
        </tr>
            