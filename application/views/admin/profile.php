
<div class="content-header">
  <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0">Profil</h1>
      </div><!-- /.col -->
      </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

<br>
<div class="alert alert-dismissible fade show">
  <strong>
    <?php echo $this->session->flashdata('msg')?>
  </strong>
  <button type="button" class="close" data-dismiss="alert" arial-label="Close">
    <span aria-hodden="true">&times;</span>
  </button>
</div>


<div class="col-12">
  <div class="row">
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

<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><span class="fas fa-chart-bar"> Kenaikan Gaji Berkala</span></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="" data-source-selector="#card-refresh-content" data-load-on-init="false">
                    <i class="fas fa-sync-alt"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="maximize">
                    <i class="fas fa-expand"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover" style="width: 100%;">
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
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>