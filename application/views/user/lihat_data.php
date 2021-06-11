<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">User Setup</h2>
                <?php echo anchor('user/post','Tambah Data',array('class'=>'btn btn-danger btn-sm')) ?>

                 <table class="table datatables" id="dataTable-1">
                        <thead>
                            <tr>
                                <th>No.</th> 
                                <th>Nama Lengkap</th>
                                <th>NRP / NIP Username</th>
                                <th>User Sistem</th>
                                <th>Date Created</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($record->result() as $r) { ?>
                            <tr class="">
                                <td><?php echo $no ?></td>
                                <td><?php echo $r->nama_lengkap ?></td>
                                <td><?php echo $r->username ?></td>
                                <td>
                            <?php if($r->role_id == 1 ){ 
                                 echo '<div class="">Admin</div>';
                                    }elseif ($r->role_id == 2 ){ 
                                        echo '<div class="">User</div>';}?>
                                <td><?php echo $r->date_created ?></td>                
                                <!--<td><?php echo $r->last_login ?></td>-->
                                <td class="center">
                                <?php echo anchor('user/edit/'.$r->user_id,'<span class="btn btn-info">Edit</span>'); ?> 
                                <?php echo anchor('user/delete/'.$r->user_id,'<span class="btn btn-danger">Hapus</span>'); ?>
                                </td>
                            </tr>
                        <?php $no++; } ?>
                        </tbody>
                </table>
            </td>
        </tr>
            