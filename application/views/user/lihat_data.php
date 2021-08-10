<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">User Setup</h2>
                <?php echo anchor('user/post','Tambah Data',array('class'=>'btn btn-danger btn-sm')) ?>
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
                                <th>NRP / NIP Username</th>
                                <th>User Sistem</th>
                                <th>Status</th>
                                <th>Date Created</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($record->result() as $r) { ?>
                            <tr id="<?php echo $r->user_id?>">
                                <td><?php echo $no ?></td>
                                <td style="text-transform: uppercase;"><?php echo $r->nama_lengkap ?></td>
                                <td><?php echo $r->nrp ?></td>
                                <td>
                                    <?php if($r->role_id == 1 ){ 
                                         echo '<div class="">Admin</div>';
                                            }elseif ($r->role_id == 2 ){ 
                                                echo '<div class="">Member</div>';}?>
                                </td>
                                <td>
                                    <?php if($r->status == 0 ){ 
                                         echo '<div class="">Tidak Aktif</div>';
                                            }elseif ($r->status == 1 ){ 
                                                echo '<div class="">Aktif</div>';}?>
                                </td>
                                <td><?php echo $r->date_created ?></td>
                                <td class="center">
                                    <a href=" <?php echo base_url('user/edit/'.$r->user_id) ?>" class="btn btn-primary btn-small" ><i class="fe fe-edit"></i>Edit</a>
                                </td>
                            </tr>
                            <?php $no++; } ?>
                        </tbody>
                </table>
            </div>
        </div>
     </div>
 </div>