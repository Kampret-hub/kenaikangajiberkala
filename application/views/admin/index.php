
     
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
                    
               <div class="col-md-12 mb-4">
                  <div class="card shadow">
                    <div class="card-header">
                      <strong class="card-title mb-0"><i class="fe fe-bar-chart"></i>Chart Pangkat</strong>
                    </div>
                    <div class="card-body">
                      <canvas id="chartPangkat"  height="100"></canvas>
                    </div>
                  </div>
                </div>

                <script  src='<?php echo base_url(); ?>assets/js/custom.js'></script>
                 <script type="text/javascript">
                  var ctx = document.getElementById("chartPangkat").getContext('2d');
                  var chartPangkat = new Chart(ctx,{
                    type: 'bar',
                    data: {
                      labels: ["BHARADA", "BHARATU", "BHARAKA", "ABRIPDA", "ABRIPTU", "ABRIPKA", "BRIPDA", "BRIPTU", "BRIGADIR", "BRIPKA", "AIPDA", "AIPTU", "IPDA", "IPTU", "AKP", "KOMPOL", "KBP", "AKBP", "BRIGJEN", "IRJEN", "KOMJEN", "JENDRAL"],
                      datasets:[{
                        label: '',
                        data: [
                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('pangkat', 'BHARADA');
                              $this->db->like('status', 'aktif');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('pangkat', 'BHARATU');
                              $this->db->like('status', 'aktif');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                               $this->db->like('status', 'aktif');
                              $this->db->like('pangkat', 'BHARAKA');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('status', 'aktif');
                              $this->db->like('pangkat', 'ABRIPDA');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('status', 'aktif');
                              $this->db->like('pangkat', 'ABRIPTU');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('status', 'aktif');
                              $this->db->like('pangkat', 'ABRIPKA');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('status', 'aktif');
                              $this->db->like('pangkat', 'BRIPDA');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('status', 'aktif');
                              $this->db->like('pangkat', 'BRIPTU');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('status', 'aktif');
                              $this->db->like('pangkat', 'BRIGADIR');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('status', 'aktif');
                              $this->db->like('pangkat', 'BRIPKA');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('status', 'aktif');
                              $this->db->like('pangkat', 'AIPDA');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('status', 'aktif');
                              $this->db->like('pangkat', 'AIPTU');
                              echo $this->db->count_all_results();?>,
                            
                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('status', 'aktif');
                              $this->db->like('pangkat', 'IPDA');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('status', 'aktif');
                              $this->db->like('pangkat', 'IPTU');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('status', 'aktif');
                              $this->db->like('pangkat', 'AKP');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('status', 'aktif');
                              $this->db->like('pangkat', 'KOMPOL');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('status', 'aktif');
                              $this->db->like('pangkat', 'KBP');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('status', 'aktif');
                              $this->db->like('pangkat', 'AKBP');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('status', 'aktif');
                              $this->db->like('pangkat', 'BRIGJEN');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('status', 'aktif');
                              $this->db->like('pangkat', 'IRJEN');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('status', 'aktif');
                              $this->db->like('pangkat', 'KOMJEN');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('status', 'aktif');
                              $this->db->like('pangkat', 'JENDRAL');
                              echo $this->db->count_all_results();?>
                        ],
                        backgroundColor: [
                          'rgba(255, 99, 132 , 0.2)',
                          'rgba(54, 162, 235 , 0.2)',
                          'rgba(255, 206, 86 , 0.2)',
                          'rgba(75, 192, 192 , 0.2)',
                          'rgba(80, 99, 132 , 0.2)',
                          'rgba(54, 162, 235 , 0.2)',
                          'rgba(255, 206, 86 , 0.2)',
                          'rgba(75, 192, 192 , 0.2)',
                          'rgba(255, 99, 132 , 0.2)',
                          'rgba(54, 162, 235 , 0.2)',
                          'rgba(255, 206, 86 , 0.2)',
                          'rgba(75, 192, 192 , 0.2)',
                          'rgba(255, 99, 132 , 0.2)',
                          'rgba(54, 162, 235 , 0.2)',
                          'rgba(255, 206, 86 , 0.2)',
                          'rgba(75, 192, 192 , 0.2)',
                          'rgba(255, 99, 132 , 0.2)',
                          'rgba(54, 162, 235 , 0.2)',
                          'rgba(255, 206, 86 , 0.2)',
                          'rgba(255, 99, 132 , 0.2)',
                          'rgba(54, 162, 235 , 0.2)',
                          'rgba(255, 99, 132 , 0.2)'
                        ],
                        borderColor: [
                          'rgba(255, 99, 132 , 1)',
                          'rgba(54, 162, 235 , 1)',
                          'rgba(255, 206, 86 , 1)',
                          'rgba(75, 192, 192 , 1)',
                          'rgba(80, 99, 132 , 1)',
                          'rgba(54, 162, 235 , 1)',
                          'rgba(255, 206, 86 , 1)',
                          'rgba(75, 192, 192 , 1)',
                          'rgba(255, 99, 132 , 1)',
                          'rgba(54, 162, 235 , 1)',
                          'rgba(255, 206, 86 , 1)',
                          'rgba(75, 192, 192 , 1)',
                          'rgba(255, 99, 132 , 1)',
                          'rgba(54, 162, 235 , 1)',
                          'rgba(255, 206, 86 , 1)',
                          'rgba(75, 192, 192 , 1)',
                          'rgba(255, 99, 132 , 1)',
                          'rgba(54, 162, 235 , 1)',
                          'rgba(255, 206, 86 , 1)',
                          'rgba(255, 99, 132 , 1)',
                          'rgba(54, 162, 235 , 1)',
                          'rgba(255, 206, 86 , 1)'
                        ],
                        borderWidth: 1
                      }]
                    },
                    options:{
                      scales:{
                        yAxes: [{
                          ticks: {
                            beginAtZero:true
                          }
                        }]
                      }
                    }
                  });                  
                </script>

