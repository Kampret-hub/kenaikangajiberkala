<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">Data Golongan</h2>
              <?php echo anchor('golongan/post','Tambah Data',array('class'=>'btn btn-danger btn-sm')) ?>


                 <table class="table table-striped table-bordered table-hover datatables col-md-6" id="dataTable-1">
                        <thead style="border: 2px; solid black; border-collapse: collapse; ">
                            <tr style="background-color: #0275d8; ">
                                <th>No.</th> 
                                <th>Golongan</th>
                                <th>Pangkat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($record->result() as $r) { ?>
                            <tr class="">
                                <td class="col-sm-1"><?php echo $no ?></td>
                                <td><?php echo $r->kode_golongan ?></td>
                                <td><?php echo $r->pangkat ?></td>
                                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <a href=" <?php echo base_url('golongan/edit/'.$r->id_golongan) ?>" class="btn btn-primary btn-small" style='margin-left: 5px;'><i class="fe fe-edit"></i>Edit</a>
                                    <a href="<?php echo base_url('golongan/delete/'.$r->id_golongan)?>" class="btn btn-danger btn-small hapus" id="" ><i class="fe fe-trash"></i>Hapus</a>
                                  </div>
                                  </div>
                                </td>
                                
                            </tr>
                        <?php $no++; } ?>
                        </tbody>
                </table>
            </td>
        </tr>
            