<div class="row my-4"> 
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">Data Gaji Pokok</h2>
                <?php echo anchor('gaji_pokok/post','Tambah Data',array('class'=>'btn btn-danger btn-sm')) ?>

                 <table class="table table-striped table-bordered table-hover datatables" id="dataTable-1">
                    <div class="alert alert-dismissible fade show">
                        <strong>
                            <?php echo $this->session->flashdata('msg')?>
                        </strong>
                        <button type="button" class="close" data-dismiss="alert" arial-label="Close">
                            <span aria-hodden="true">&times;</span>
                        </button>
                    </div>
                        <thead style="border: 2px; solid black; border-collapse: collapse;">
                            <tr style="background-color: #0275d8;">
                                <th>No.</th> 
                                <th>Kode GAPOK</th>
                                <th>Gaji Pokok</th>
                                <th>Masa Kerja</th>
                                <th>Golongan</th>
                                <th>Taraf</th>
                                <th>Pangkat</th>
                                <th>Aksi</th>

                                <!--<th>Aksi</th>-->
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($record->result() as $r) { ?>
                            <tr class="">
                                <td><?php echo $no ?></td>
                                <td><?php echo $r->kode_gapok ?></td>
                                <td><?php echo $r->gaji ?></td>
                                <td><?php echo $r->masa_kerja ?></td>
                                <td><?php echo $r->golongan ?></td>
                                <td><?php echo $r->taraf ?></td>
                                <td><?php echo $r->pangkat ?></td>
                                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <a href=" <?php echo base_url('gaji_pokok/edit/'.$r->id_gaji) ?>" class="btn btn-primary btn-small" style='margin-left: 5px;'><i class="fe fe-edit"></i>Edit</a>
                                    <a href="<?php echo base_url('gaji_pokok/delete/'.$r->id_gaji)?>" class="btn btn-danger btn-small hapus" id="" ><i class="fe fe-trash"></i>Hapus</a>
                                  </div>
                                </td>
                                
                            </tr>
                        <?php $no++; } ?>
                        </tbody>
                </table>
            </td>
        </tr>
            