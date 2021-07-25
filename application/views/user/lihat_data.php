<script href="<?php echo base_url() ?>js/sweetalert2.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>js/sweetalert2.min.css">
<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">User Setup</h2>
                <?php echo anchor('user/post','Tambah Data',array('class'=>'btn btn-danger btn-sm')) ?>
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
                         <table class="table table-striped table-bordered table-hover datatables" id="dataTable-1">
                                <thead style="border: 2px; solid black; border-collapse: collapse;">
                                    <tr style="background-color: #0275d8;">
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
                                    <tr id="<?php echo $r->user_id?>">
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $r->nama_lengkap ?></td>
                                        <td><?php echo $r->nrp ?></td>
                                        <td>
                                    <?php if($r->role_id == 1 ){ 
                                         echo '<div class="">Admin</div>';
                                            }elseif ($r->role_id == 2 ){ 
                                                echo '<div class="">Member</div>';}?>
                                        <td><?php echo $r->date_created ?></td>                
                                        <!--<td><?php echo $r->last_login ?></td>-->
                                        <td class="center">
                                            <a href=" <?php echo base_url('user/edit/'.$r->user_id) ?>" class="btn btn-primary btn-small" ><i class="fe fe-edit"></i>Edit</a>
                                            <!--<a href="<?php echo base_url('user/delete/'.$r->user_id)?>" class="btn btn-danger btn-small hapus" ><i class="fe fe-trash"></i>Hapus</a>-->
                                        </td>
                                    </tr>
                                <?php $no++; } ?>
                                </tbody>
                        </table>
                    </td>
                </tr>
                
 <!--<script type="text/javascript">
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
    </script>-->