
     
            <div class="col-12">
              <div class="row">
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow border-0">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-users text-white mb-0"></i>
                          </span>
                        </div>
                        <div class="col pr-0">
                          <p class="small text-muted mb-0">Anggota Akif</p>
                          <span class="h3 mb-0">
                            <?php
                              $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('status', 'aktif');
                              echo $this->db->count_all_results();
                            ?>
                            </span>
                          <span class="small text-muted">Anggota</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow border-0">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-user-x text-white mb-0"></i>
                          </span>
                        </div>
                        <div class="col pr-0">
                          <p class="small text-muted mb-0">Anggota Keluar</p>
                          <span class="h3 mb-0"></span>
                          <span class="h3 mr-2 mb-0">
                            <?php
                              $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('status', 'keluar');
                              echo $this->db->count_all_results();
                            ?>           
                          </span>
                          <span class="small text-muted">Anggota</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow border-0">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-user-x text-white mb-0"></i>
                          </span>
                        </div>
                        <div class="col">
                          <p class="small text-muted mb-0">Anggota Pensiun</p>
                          <div class="row align-items-center no-gutters">
                            <div class="col-auto">
                              <span class="h3 mr-2 mb-0">
                                <?php
                                  $this->db->select('*');
                                  $this->db->from('anggota');
                                  $this->db->like('status', 'pensiun');
                                  echo $this->db->count_all_results();
                                ?>
                            </span>
                              <span class="small text-muted">Anggota</span>
                            </div>
                            <div class="col-md-12 col-lg">
                               <!--<div class="progress progress-sm mt-2" style="height:3px">
                               <div class="progress-bar bg-success" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>-->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow border-0">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-user-x text-white mb-0"></i>
                          </span>
                        </div>
                        <div class="col">
                          <p class="small text-muted mb-0">Anggota Meninggal</p>
                          <span class="h3 mr-2 mb-0">
                            <?php
                              $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('status', 'meninggal');
                              echo $this->db->count_all_results();
                            ?>
                            </span>
                          <span class="small text-muted">Anggota</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
               <!-- end section -->
                    
               <!--<div class="col-md-12 mb-4">
                  <div class="card shadow">
                    <div class="card-header">
                      <strong class="card-title mb-0">Bar Chart</strong>
                    </div>
                    <div class="card-body">
                      <canvas id="barChartjs" width="400" height="300"></canvas>
                    </div>
                  </div>
                </div> -->
