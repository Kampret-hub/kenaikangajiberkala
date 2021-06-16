<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">Histori KGB</h2>

                 <table class="table datatables" id="dataTable-1">
                        <thead>
                            <tr>
                                <th>No.</th> 
                                <th>Nrp</th>
                                <th>Nama</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; 
                            foreach ($record->result() as $r) { ?>
                            <tr class="">
                                <td><?php echo $no ?></td>
                                <td><?php echo $r->nrp ?></td>
                                 <td><?php echo $r->nama ?></td>
                                <td><?php echo $r->gpl ?></td>
                               
                                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href=""><?php echo anchor('kgb/edit/'.$r->id_kgb,'<span class="btn">  Edit</span>'); ?></a>
                                    <a class="dropdown-item" href=""><?php echo anchor('kgb/history/'.$r->nrp,'<span class="btn">  History</span>'); ?></a>
                                  </div>
                                </td>
                                
                            </tr>
                        <?php $no++; } ?>
                        </tbody>
                </table>
            </td>
        </tr>
            