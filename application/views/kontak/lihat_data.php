<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/v4-shims.css">
<div class="row my-4"> 
    <!--  table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title my-2">Kontak</h2>
              <?php if($this->session->userdata('role_id')=== '1'):?>
                <?php echo anchor('kontak/setup/1',' Setup',array('class'=>'btn btn-primary btn-sm fe fe-settings')) ?>
                <?php endif?>
            </div>
        </div>
            <div class="alert alert-dismissible fade show">
                <strong><?php echo $this->session->flashdata('msg')?></strong>
                <button type="button" class="close" data-dismiss="alert" arial-label="Close">
                    <span aria-hodden="true">&times;</span>
                </button>
            </div>
            <p/>

           <div class="card shadow"  style="background-color: #0275d8;">
             <div class="card-body">         
                <div class="col-md-12">
                  <div class="row align-items-center">
                      <h4 class="my-1 page-title">BAG SDM POLRES KARAWANG</h4>
                  </div>
              </div>
             </div>
            </div>

            <div class="card shadow">
                <div class="card-body">       
                  <div class="row">
                      <div class="col-5" style="font-weight: bold;">
                        <p class="">Kabupaten / Kota</p>
                        <p class="">Alamat</p>
                        <p class="">No Telepon</p>
                        <p class="">Email</p>
                      </div>
                      <div class="col-7">
                        <p class=""><?php echo $record['kab']?></p>
                        <p class=""><i class="fa fa-map-marker-alt"></i> <?php echo $record['alamat']?></p>
                        <p class=""><?php echo $record['no_telp']?></p>
                        <p class=""><?php echo $record['email']?></p>
                      </div>
                  </div>
              </div>
          </div>
          <p/>
          <br/>

           <div class="card shadow"  style="background-color: #0275d8;">
             <div class="card-body">         
                <div class="col-md-12">
                  <div class="row align-items-center">
                      <h4 class="my-1 page-title">Kontak Anggota BAG SDM</h4>
                  </div>
              </div>
             </div>
            </div> 
           <div class="card shadow">
                <div class="card-body">  
                 <table class="table table-striped table-bordered table-hover datatables" id="dataTable-1">
                        <thead style="border: 2px; solid black; border-collapse: collapse;">
                            <tr style="background-color: #0275d8;">
                                <th>No.</th> 
                                 <th>NRP / NIP </th>
                                <th>Nama Lengkap</th>
                                <th>Jabatan</th>
                                <th>Bagian</th>
                                <th>No Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ((array)$record1 as $r) { ?>
                            <tr class="">
                                <td><?php echo $no ?></td>
                                <td><?php echo $r['nrp'] ?></td>
                                <td><?php echo $r['nama_lengkap'] ?></td>
                                <td><?php echo $r['jabatan'] ?></td>
                                <td><?php echo $r['bagian'] ?></td>
                                <td><?php echo $r['no_telp'] ?></td>
                                <td><button class="btn btn-sm more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                  </button>
                                  <div class="dropdown-menu" >
                                    <a href="<?php echo ('https://api.whatsapp.com/send?phone=+62'.$r['no_telp']) ?>" class="btn btn-info btn-small" style='margin-left: 5px;'><i class="fa fa-whatsapp"></i> Telepon</a>
                                    <?php if($this->session->userdata('role_id')=== '1'):?>
                                    <a href=" <?php echo base_url('anggota/edit/'.$r['nrp']) ?>" class="btn btn-primary btn-small" style='margin-left: 5px;'><i class="fa fa-edit"></i> Edit</a>
                                    <?php endif?>
                                </td>
                                 
                            </tr>
                        <?php $no++; } ?>
                        </tbody>
                </table>
            </div>
        </div>
     </div>
 </div>
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