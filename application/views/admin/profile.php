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
                   <h3 class="mb-2 page-title my">Profile Admin</h3>
                   <strong> Saya > NRP / NIP :<i> <?php echo $member['nrp']; ?></i></strong>
                </div>
              </div>
                

            <div class="card shadow">
            <div class="card-body">
              <div class="row mt-3 align-items-center">
                <div class="col-md-3 text-center mb-5">
                  <div class="avatar avatar-xl">
                    <h3 class="mb-1" style="text-transform: uppercase;"><?php echo $member['nama_lengkap']; ?></h3>
                    <br>
                    <img src="<?php echo base_url(); ?>./assets/avatars/face.png" alt="..." class="avatar-img rounded-circle">
                  </div>
                  <br>
                  <a href=" <?php echo base_url('admin/profile/edit') ?>" class="btn btn-primary btn-small mb-2" style='margin-left: 5px;'><i class="fe fe-edit"></i> Edit Profile</a><br>
                   <a href=" <?php echo base_url('admin/profile/ganti_password') ?>" class="btn btn-info btn-small" style='margin-left: 5px;'><i class="fe fe-edit"></i> Ganti Password</a>
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
              </div>
            </div>
            <br>

            
            <div class="card shadow" style="background-color: #0275d8;">
                <div class="card-body">
                   <h3 class="page-title my-2">Kenaikan Gaji Berkala</h3>
                </div>
              </div>
                  <div class="card shadow">
                    <div class="card-body">
                     <table class="table table-striped table-bordered table-hover datatables" id="dataTable-1">
                     <div class="alert alert-dismissible fade show">
                       <thead style="border: 2px; solid black; border-collapse: collapse;">
                            <tr style="background-color: #0275d8; ">
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
                        </div>
                   </table>
                </div>
              </div>
            </div>
          </div>

