<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">Data Pangkat</h2>
                <!--<?php echo anchor('anggota/post','Tambah Data',array('class'=>'btn btn-danger btn-sm')) ?>-->

                 <table class="table table-striped table-bordered table-hover datatables col-md-6" id="dataTable-1">
                        <thead style="border: 2px; solid black; border-collapse: collapse;">
                            <tr style="background-color: #0275d8;">
                                <th>No.</th> 
                                <th>Taraf</th>
                                <th>Nama Pangkat</th>
                                <!--<th>Aksi</th>-->
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($record->result() as $r) { ?>
                            <tr class="">
                                <td class="col-sm-1"><?php echo $no ?></td>
                                <td><?php echo $r->taraf ?></td>
                                <td><?php echo $r->nama_pangkat ?></td>
                                <!--<td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href=""><?php echo anchor('anggota/edit/'.$r->id_anggota,'<span class="btn">  Edit</span>'); ?></a>
                                    <a class="dropdown-item" href=""><?php echo anchor('anggota/delete/'.$r->id_anggota,'<span class="btn">  Hapus</span>'); ?></a>
                                  </div>
                                </td>-->
                                
                            </tr>
                        <?php $no++; } ?>
                        </tbody>
                </table>
            </td>
        </tr>
            