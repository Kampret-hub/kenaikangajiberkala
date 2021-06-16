<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">History KGB</h2>
                <!--<?php echo anchor('anggota/post','Tambah Data',array('class'=>'btn btn-danger btn-sm')) ?>-->

                 <table class="table datatables" id="dataTable-1">
                        <thead>
                            <tr>
                                <th>No.</th> 
                                <th>Nrp</th>
                                <th>Nama</th>
                                <th>Periode</th>
                                <th>Gaji</th>
                                <th>TMT</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($record->result() as $r) { ?>
                            <tr class="">
                                <td><?php echo $no ?></td>
                                <td><?php echo $r->nrp ?></td>
                                 <td><?php echo $r->nama ?></td>
                                <td><?php echo $r->periode ?></td>
                                <td><?php echo $r->gaji ?></td>
                                <td><?php echo $r->tmt ?></td>
                                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <!--<a class="dropdown-item" href=""><?php echo anchor('kgb/edit/'.$r->id_kgb,'<span class="btn">  <span>Edit</span>'); ?></a>
                                    <a class="dropdown-item" href=""><?php echo anchor('kgb/history/'.$r->nrp,'<span class="btn">  History</span>'); ?></a>-->
                                  </div>
                                </td>
                                
                            </tr>
                        <?php $no++; } ?>
                        </tbody>
                </table>
            </td>
        </tr>
            <?php echo anchor('kgb',' Kembali',array('class'=>'btn btn-danger btn-sm fe fe-skip-back'))?>
