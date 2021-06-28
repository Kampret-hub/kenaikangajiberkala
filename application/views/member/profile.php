
              <div class="card shadow">
                <div class="card-body">
                   <h2 class="mb-4 page-title">Profile</h2>
                   <b> Saya > NRP / NIP :</b><i> <?php echo $user['nrp']; ?></i>
                </div>
              </div>
           
            <div class="card shadow">
            <div class="card-body">
              <div class="row mt-5 align-items-center">
                <div class="col-md-3 text-center mb-5">
                  <div class="avatar avatar-xl">
                    <img src="<?php echo base_url(); ?>./assets/avatars/face.png" alt="..." class="avatar-img rounded-circle">
                  </div>
                  <br>
                  <span class="btn btn-danger"> <?php echo $user['nrp']; ?></span>
                </div>
                <div class="col" style="margin-bottom: 40px;">
                  <div class="row align-items-center">
                    <div class="col-md-6">
                      <h3 class="mb-1"><?php echo $user['nama_lengkap']; ?></h3>
                      <h4 class="mb-1">Anggota</h4>
                      <p class="small mb-3"><span class="badge badge-dark"></span></p>
                    </div>
                  </div>
                 

                  <div class="row">
                    <div class="col-md-12 mt-3">
                      <h5 class="mb-2">Biodata Pegawai</h5>
                      <hr>
                    </div>
                      <div class="col-2">
                        <p class="small">Jenis Kelamin</p>
                        <p class="small">Tempat Tanggal lahir</p>
                        <p class="small">Umur</p>
                      </div>
                      <div class="col-4">
                        <p class="small">: <?php echo $member->jk ?></p>
                        <p class="small">: <?php echo $member->tmpt_lahir ?> <?php echo $member->t_lahir ?> </p>
                        <p class="small">: </p>
                      </div>
                      <div class="col-2">
                        <p class="small">Agama</p>
                        <p class="small">Pangkat</p>
                        <p class="small">Bagian</p>
                      </div>
                       <div class="col-4">
                        <p class="small">: <?php echo $member->agama ?></p>
                        <p class="small">: <?php echo $member->pangkat ?></p>
                        <p class="small">: <?php echo $member->bagian ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br>
            
            <div class="row my-4">
                   <table class="table table-striped table-bordered table-hover datatables" id="dataTable-1">
                     <div class="alert alert-dismissible fade show">
                       <thead style="border: 2px; solid black; border-collapse: collapse;">
                            <tr style="background-color: #0275d8;">
                              <th>No.</th> 
                              <th>Periode</th>
                              <th>Tanggal Kenaikan gaji</th>
                              <th>Gaji Baru</th>
                            </tr>
                          </thead>
                         
                          <tr>
                          <td><?php echo $no=1; ?></td>
                          <td><?php echo $history->mkgg1 ?> <?php echo $history->mkgg2 ?></td>
                          <td><?php echo $history->tmtb ?></td>
                          <td><?php echo $history->gpb ?></td>
                          </tr>
                        </div>
                        
                   </table>
                </div>
