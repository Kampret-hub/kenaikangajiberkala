<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title"><?php echo $title ?></h2>

                <!--<?php echo anchor('anggota/post','Tambah Data',array('class'=>'btn btn-danger btn-sm')) ?>-->
            
                 <table class="table datatables" id="dataTable-1">
                    <div class="alert alert-dismissible fade show">
                    <strong>
                        <?php echo $this->session->flashdata('msg')?>
                    </strong>
                    <button type="button" class="close" data-dismiss="alert" arial-label="Close">
                        <span aria-hodden="true">&times;</span>
                    </button>
                </div>
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
                            <?php $no=1; foreach ($record as $r) { ?>
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
                                    <a href=" <?php echo base_url('history/edit/'.$r->id) ?>" class="btn btn-primary btn-small" style='margin-left: 5px;'><i class="fe fe-edit"></i> Edit</a>
                                    <a href="<?php echo base_url('history/delete/'.$r->id)?>" class="btn btn-danger btn-small" id="" ><i class="fe fe-trash"></i> Hapus</a>
                                    <a href="<?php echo base_url('history/cetak/'.$r->id)?>" class="btn btn-info btn-small" id="" ><i class="fe fe-printer"></i> Cetak KGB</a>
                                  </div>
                                </td>
                                
                            </tr>
                        <?php $no++; } ?>
                        </tbody>
                </table>
            </td>
        </tr>
            <?php echo anchor('kgb',' Kembali',array('class'=>'btn btn-danger btn-sm fe fe-arrow-left'))?>
