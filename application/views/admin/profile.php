
<div class="alert alert-dismissible fade show">
  <strong>
    <?php echo $this->session->flashdata('msg')?>
  </strong>
  <button type="button" class="close" data-dismiss="alert" arial-label="Close">
    <span aria-hodden="true">&times;</span>
  </button>
</div>

<div class="card shadow" style="background-color: #0275d8;">
  <div class="card-body">
    <h3 class="page-title my-2">Profile</h3>
   </div>
</div>
<br>
    
<div class="row gutters-sm">
  <div class="col-md-4 mb-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex flex-column align-items-center text-center">
          <div class="avatar avatar-xl">
            <?php if($akun['foto'] == ''){ ?>
              <img style="height: 255px; width: 255px;" src="<?php echo base_url(); ?>./assets/avatars/face.png" class="avatar-img rounded-circle">
            <?php } else { ?>
              <img style="height: 255px; width: 255px;" src="<?php echo base_url().'/assets/avatars/'.$akun['foto']  ?>" class="avatar-img rounded-circle">
            <?php } ?>
          </div>
          <div class="mt-3">
            <h4 style="text-transform: uppercase;"><?php echo substr($member['nama_lengkap'],0,25); ?></h4>
              <p class="text-secondary mb-1">Admin</p>
              <hr>
              <a href=" <?php echo base_url('admin/profile/edit') ?>" class="btn btn-primary btn-small" style='margin-left: 5px;'><i class="fe fe-edit"></i> Edit Profile</a>
        </div>
      </div>
    </div>
  </div>
</div>

<<<<<<< HEAD
<div class="col-md-8">
  <div class="card mb-3">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-3">
         <h6 class="mb-0">Nama Lengkap</h6>
        </div>
          <div class="col-sm-9 text-secondary" style="text-transform: uppercase;">
            <?php echo $member['nama_lengkap'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
         <h6 class="mb-0">NRP / NIP</h6>
        </div>
          <div class="col-sm-9 text-secondary">
            <?php echo $member['nrp'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <h6 class="mb-0">Tempat, Tanggal Lahir</h6>
        </div>
        <div class="col-sm-9 text-secondary" style="text-transform:uppercase">
          <?php echo $member['tmpt_lahir'] ?>, <?php $sampeledate = ($member['t_lahir']); 
           $converdate = date("d-m-Y", strtotime($sampeledate));
           echo $converdate;
          ?>   
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <h6 class="mb-0">Umur</h6>
        </div>
        <div class="col-sm-9 text-secondary">
          <?php $lahir    =new DateTime($member['t_lahir']);
            $today        =new DateTime();
            $umur = $today->diff($lahir);
            echo $umur->y; echo " Tahun, "; echo $umur->m; echo " Bulan, dan "; echo $umur->d; echo " Hari";
          ?>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
         <h6 class="mb-0">Jenis Kelamin</h6>
        </div>
          <div class="col-sm-9 text-secondary">
                      <?php echo $member['jk'] ?>
        </div>
      </div>
      <hr>
        <div class="row">
          <div class="col-sm-3">
         <h6 class="mb-0">Agama</h6>
        </div>
          <div class="col-sm-9 text-secondary">
            <?php echo $member['agama'] ?>
        </div>
      </div>
      <hr>
        <div class="row">
          <div class="col-sm-3">
         <h6 class="mb-0">No Telepon</h6>
        </div>
          <div class="col-sm-9 text-secondary">
            <?php echo $member['no_telp'] ?>
        </div>
      </div>
      <hr>
        <div class="row">
          <div class="col-sm-3">
         <h6 class="mb-0">Alamat</h6>
        </div>
          <div class="col-sm-9 text-secondary">
            <?php echo $member['alamat'] ?>
        </div>
      </div>
    </div>
  </div>
</div>

    <div class="col-md-12">
      <div class="card mb-3">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6">
              <h6 class="mb-0">Pendidikan</h6>
            </div>
            <div class="col-sm-6 text-secondary"  style="text-transform: uppercase;">
              <?php echo $member['pendidikan']; ?>
            </div>
          </div>
          <hr>
            <div class="row">
              <div class="col-sm-6">
                <h6 class="mb-0">Pangkat</h6>
=======
            <div class="card shadow">
            <div class="card-body">
              <div class="row mt-3 align-items-center">
                <div class="col-md-3 text-center mb-5">
                  <div class="avatar avatar-xl">
                    <h3 class="mb-1" style="text-transform: uppercase;"><?php echo $member['nama_lengkap']; ?></h3>
                    <br>
                   
                    <?php if($akun['foto'] == ''){ ?>
                      <img src="<?php echo base_url(); ?>./assets/avatars/face.png" class="avatar-img rounded-circle">
                    <?php } else { ?>
                    <img src="<?php echo base_url().'/assets/avatars/'.$akun['foto']  ?>" class="avatar-img rounded-circle">
                  <?php } ?>
                  </div>
                  <br>
                  <a href=" <?php echo base_url('admin/profile/edit') ?>" class="btn btn-primary btn-small mb-2" style='margin-left: 5px;'><i class="fe fe-edit"></i> Edit Profile</a><br>
                   <!-- <a href=" <?php echo base_url('admin/profile/ganti_password') ?>" class="btn btn-info btn-small" style='margin-left: 5px;'><i class="fe fe-edit"></i> Ganti Password</a> -->
                </div>
                <div class="col">
                  <div class="row">
                      <div class="col-3">
                        <p><strong>Tempat Tanggal lahir</strong></p>
                        <p><strong>Umur</strong></p>
                        <p><strong>Jenis Kelamin</strong></p>
                        <p><strong>Agama</strong></p>
                        <p><strong>Alamat</strong></p>
                      </div>
                      <div class="col-3"   >
                        <p ><?php echo $member['tmpt_lahir'] ?>, <?php $sampeledate = ($member['t_lahir']); 
                                $converdate = date("d-m-Y", strtotime($sampeledate));
                                echo $converdate;
                                ?>   
                        </p>
                        <p >
                          <?php $lahir    =new DateTime($member['t_lahir']);
                                $today        =new DateTime();
                                $umur = $today->diff($lahir);
                                echo $umur->y; echo " Tahun, "; echo $umur->m; echo " Bulan, dan "; echo $umur->d; echo " Hari";?>
                        </p>
                        <p ><?php echo $member['jk'] ?></p>
                        <p ><?php echo $member['agama'] ?></p>
                        <p ><?php echo $member['alamat'] ?></p>
                      </div>
                      <div class="col-3"  >
                        <p><strong>Pendidikan</strong></p>
                        <p><strong>Pangkat</strong></p>
                        <p><strong>Bagian</strong></p>
                        <p><strong>Jabatan</strong></p>
                        <p><strong>No Telepon</strong></p>
                      </div>
                       <div class="col-3" >
                        <p ><?php echo $member['pendidikan'] ?></p>
                        <p ><?php echo $member['pangkat'] ?></p>
                        <p ><?php echo $member['bagian'] ?></p>
                        <p ><?php echo $member['jabatan'] ?></p>
                        <p ><?php echo $member['no_telp'] ?></p>
                      </div>
                    </div>
                  </div>
                </div>
>>>>>>> 1c01b978e3a8f87cf287e6f44a49344f5a0789f5
              </div>
              <div class="col-sm-6 text-secondary"  style="text-transform: uppercase;">
                 <?php echo $member['pangkat']; ?>
            </div>
          </div>
          <hr>
            <div class="row">
              <div class="col-sm-6">
                <h6 class="mb-0">Bagian</h6>
              </div>
              <div class="col-sm-6 text-secondary"  style="text-transform: uppercase;">
                 <?php echo $member['bagian']; ?>
              </div>
            </div>
          <hr>
            <div class="row">
              <div class="col-sm-6">
                <h6 class="mb-0">Jabatan</h6>
              </div>
            <div class="col-sm-6 text-secondary"  style="text-transform: uppercase;">
              <?php echo $member['jabatan']; ?>
          </div>
        </div>
        <hr>
            <div class="row">
              <div class="col-sm-6">
                <h6 class="mb-0">Keterangan</h6>
              </div>
            <div class="col-sm-6 text-secondary"  style="text-transform: uppercase;">
              <?php echo $member['keterangan']; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card shadow" style="background-color: #0275d8;">
   <div class="card-body">
      <h3 class="page-title my-2">Kenaikan Gaji Berkala</h3>
  </div>
</div>
<div class="row my-4">    
  <div class="col-md-12">
    <div class="card shadow">
      <div class="card-body">        
        <table class="table-striped table-bordered table-hover nowrap" id="dataTable-1" style="width: 100%;">
            <thead>
              <tr>
                <th style="width: 20px;">Periode</th> 
                <th style="width: 150px;">Masa Kerja</th>
                <th style="width: 200px;">Tanggal Kenaikan gaji</th>
                <th style="width: 200px;">Gaji Lama</th>
                <th style="width: 200px;">Gaji Baru</th>
                <th style="width: 20px;">Aksi</th>
              </tr>
            </thead>
            <?php $no=1; foreach ($history as $r) { ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $r->mkgg1 ?> <?php echo $r->mkgg2 ?></td>
              <td><?php echo $r->tmtb ?></td>
              <td><?php echo $r->gpl ?></td>
              <td><?php echo $r->gpb ?></td>
              <td>
                <a href="<?php echo base_url('admin/profile/lihat_cetak/'.$r->id)?>" class="btn btn-info btn-small" id="" ><i class="fe fe-eye"></i> Lihat</a>
              </td>
            </tr>
            <?php $no++; } ?>
        </table>
      </div>
    </div>
  </div>
</div>
<script src="<?php echo base_url(); ?>/assets/js/profil.js"></script>
