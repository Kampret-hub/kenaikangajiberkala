
              <div class="card shadow">
                <div class="card-body">
                   <h2 class="mb-4 page-title my">Profile</h2>
                   <b> Saya > NRP / NIP :</b><i> <?php echo $user['nrp']; ?></i>
                </div>
              </div>
              <p>
                <div class="alert alert-dismissible fade show">
                    <strong>
                        <?php echo $this->session->flashdata('msg')?>
                    </strong>
                    <button type="button" class="close" data-dismiss="alert" arial-label="Close">
                        <span aria-hodden="true">&times;</span>
                    </button>
                </div>
            <div class="card shadow">
            <div class="card-body">
              <div class="row mt-3 align-items-center">
                <div class="col-md-3 text-center mb-5">
                  <div class="avatar avatar-xl">
                    <img src="<?php echo base_url(); ?>./assets/avatars/face.png" alt="..." class="avatar-img rounded-circle">
                  </div>
                  <br>
                  <a href=" <?php echo base_url('admin/profile/edit') ?>" class="btn btn-primary btn-small" style='margin-left: 5px;'><i class="fe fe-edit"></i>Edit Profile</a>
                </div>
                <div class="col">
                  <div class="row align-items-center">
                    <div class="col-md-6">
                      <h3 class="mb-1"><?php echo $user['nama_lengkap']; ?></h3>
                      <h4 class="mb-1">
                        <?php if($user['role_id'] == 1 ){ 
                            echo '<div class="">Admin</div>';
                          }elseif ($user['role_id'] == 2 ){ 
                            echo '<div class="">Anggota</div>';}?>
                      </h4>
                      <p class="small mb-3"><span class="badge badge-dark"></span></p>
                    </div>
                  </div>
                 

                  <div class="row">
                    <div class="col-md-12 mt-3">
                      <h5 class="mb-2">Biodata Pegawai</h5>
                      <hr>
                    </div>
                      <div class="col-2">
                        <p class="small">Tempat Tanggal lahir</p>
                        <p class="small">Umur</p>
                        <p class="small">Jenis Kelamin</p>
                        <p class="small">Agama</p>
                        <p class="small">Alamat</p>
                      </div>
                      <div class="col-4">
                        <p class="small">: <?php echo $member['tmpt_lahir'] ?> <?php echo $member['t_lahir'] ?> </p>
                        <p class="small">:
                          <?php $lahir    =new DateTime($member['t_lahir']);
                                $today        =new DateTime();
                                $umur = $today->diff($lahir);
                                echo $umur->y; echo " Tahun, "; echo $umur->m; echo " Bulan, dan "; echo $umur->d; echo " Hari";?>
                        </p>
                        <p class="small">: <?php echo $member['jk'] ?></p>
                        <p class="small">: <?php echo $member['agama'] ?></p>
                        <p class="small">: <?php echo $member['alamat'] ?></p>
                      </div>
                      <div class="col-2">
                        <p class="small">Pangkat</p>
                        <p class="small">Jabatan</p>
                        <p class="small">Bagian</p>
                        <p class="small">No Telepon</p>
                      </div>
                       <div class="col-4">
                        <p class="small">: <?php echo $member['pangkat'] ?></p>
                        <p class="small">: <?php echo $member['jabatan'] ?></p>
                        <p class="small">: <?php echo $member['bagian'] ?></p>
                        <p class="small">: <?php echo $member['no_telp'] ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br>

            
            <div class="row">
                   <table class="table table-striped table-bordered table-hover datatables" id="dataTable-1">
                     <div class="alert alert-dismissible fade show">
                       <thead style="border: 2px; solid black; border-collapse: collapse;">
                            <tr style="background-color: #0275d8;">
                              <th style="width: 100px;">Periode</th> 
                              <th style="width: 200px;">Masa Kerja</th>
                              <th style="width: 400px;">Tanggal Kenaikan gaji</th>
                              <th>Gaji Baru</th>
                            </tr>
                          </thead>
                          <?php $no=1; foreach ($history as $r) { ?>
                          <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $r->mkgg1 ?> <?php echo $r->mkgg2 ?></td>
                            <td><?php echo $r->tmtb ?></td>
                            <td><?php echo $r->gpb ?></td>
                          </tr>
                           <?php $no++; } ?>
                        </div>
                        
                   </table>
                </div>

