<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title"><?php echo $title ?></h2>

                <!--<?php echo anchor('anggota/post','Tambah Data',array('class'=>'btn btn-danger btn-sm')) ?>-->
            
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
                                <th>Nrp</th>
                                <th>Nama</th>
                                 <th>Masa Kerja gol.Gaji</th>
                                <th>Masa Kerja gol</th>
                                <th>Gaji Pokok Lama</th>
                                <th>Gaji Pokok Baru</th>
                                <th>TMT Lama</th>
                                <th>TMT Baru</th>
                                <th>KGB Berikutnya</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($record as $r) { ?>
                            <tr class="">
                                <td><?php echo $no ?></td>
                                <td><?php echo $r->nrp ?></td>
                                <td><?php echo $r->nama ?></td>
                                <td><?php echo $r->mkgg1  ?>  <?php echo $r->mkgg2  ?></td>
                                <td><?php echo $r->mkg1  ?>  <?php echo $r->mkg2  ?></td>
                                <td><?php echo $r->gpl ?></td>
                                <td><?php echo $r->gpb ?></td>
                                <td>
                                    <?php $sampeledate = ($r->tmtl); 
                                        $converdate = date("d-m-Y", strtotime($sampeledate));
                                        echo $converdate;
                                    ?>
                                </td>  
                                <td>
                                    <?php $sampeledate = ($r->tmtb); 
                                        $converdate = date("d-m-Y", strtotime($sampeledate));
                                        echo $converdate;
                                    ?>
                                </td>  
                                <td><?php echo $r->kgbb ?></td>  
                                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <a href=" <?php echo base_url('history/edit/'.$r->id) ?>" class="btn btn-primary btn-small" style='margin-left: 5px;'><i class="fe fe-edit"></i> Edit</a>
                                     <a href="<?php echo base_url('history/delete/'.$r->id.'/'.$r->nrp)?>" class="btn btn-danger btn-small hapus" id="" ><i class="fe fe-trash"></i>Hapus</a>
                                    <!--<a href="<?php echo base_url('history/pdf/'.$r->id)?>" class="btn btn-info btn-small" id="" ><i class="fe fe-printer"></i> Cetak KGB</a>-->
                                    <!--<a href="<?php echo anchor('history/pdf/'.$record['NRP'],'Export Pdf',array('class'=>'btn btn-danger btn-sm')) ?>" ></a>-->
                                    
                                  </div>
                                </td>
                                
                            </tr>
                        <?php $no++; } ?>
                        </tbody>
                </table>
            </td>
        </tr>
            <?php echo anchor('kgb',' Kembali',array('class'=>'btn btn-danger btn-sm'))?>

<script type="text/javascript">
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
    </script>
