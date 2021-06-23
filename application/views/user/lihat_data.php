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
                                                echo '<div class="">User</div>';}?>
                                        <td><?php echo $r->date_created ?></td>                
                                        <!--<td><?php echo $r->last_login ?></td>-->
                                        <td class="center">
                                            <a href=" <?php echo base_url('user/edit/'.$r->user_id) ?>" class="btn btn-primary btn-small" ><i class="fe fe-edit"></i>Edit</a>
                                            <!--<a href="<?php echo base_url('user/delete/'.$r->user_id)?>" class="btn btn-danger btn-small remove" ><i class="fe fe-trash"></i>Hapus</a>-->
                                        </td>
                                    </tr>
                                <?php $no++; } ?>
                                </tbody>
                        </table>
                    </td>
                </tr>
                
 <!--<script type="text/javascript">
    $(".remove").click(function(e){
        e.preventDefault();
        const id = $(this).parents("tr").attr("id");
    
       swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel plx!",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
          $.ajax({
             url: 'user/delete/'+id,
             type: 'DELETE',
             error: function() {
                alert('Something is wrong');
             },
             success: function(data) {
                  $("#"+id).remove();
                  swal("Deleted!", "Your imaginary file has been deleted.", "success");
             }
          });
        } else {
          swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
      });
     
    });
    
</script>-->
       <!--<script type="text/javascript">

         $(".remove").click(function(e){
            e.preventDefault();
        const id = $(this).parents("tr").attr("id");

        });
           Swal({
              title: 'Apakah Anda Yakin?',
              text: "Data Anggota akan dihapus!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Hapus Data!'
            }).then((result) => {
              if (result.isConfirmed) {
                document.location.href = href;
              }
            })
       </script>-->