<style type="text/css">
        .btn-circle.btn-xs {
            width: 20px;
            height: 20px;
            padding: 5px 0px;
            border-radius: 10px;
            font-size: 8px;
            text-align: center;
            position: absolute;
            right: 10px;
            color: white;
        }
</style>
     
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
                      <button class="btn btn-xs btn-circle btn-warning" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fe fe-minus"></i></button>
                    </div>
                    <div class="collapse" id="collapseExample">
                      <div class="card-body">
                        <canvas id="chartPangkat"  height="100"></canvas>
                      </div>
                  </div>
                  </div>
                </div>


                <div class="col-md-12 mb-4">
                  <div class="card shadow">
                    <div class="card-header">
                      <strong class="card-title mb-0"><i class="fe fe-bar-chart"></i>Chart Pangkat ASN</strong>
                      <a class="btn btn-xs btn-circle btn-warning" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fe fe-minus"></i></a>
                    </div>
                    <div class="collapse" id="collapseExample2">
                      <div class="card-body">
                        <canvas id="chartPangkatAsn"  height="100"></canvas>
                      </div>
                  </div>
                  </div>
                </div>

                 <div class="col-md-12 mb-4">
                  <div class="card shadow">
                    <div class="card-header">
                      <strong class="card-title mb-0"><i class="fe fe-calendar"></i> KGB 1 Bulan Kedepan (ini masih manual ada di controller c_admin, masalahnya range waktu sekarang ke bulan depan)</strong>
                      <a class="btn btn-xs btn-circle btn-warning" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fe fe-minus"></i></a>
                    </div>
                    <div class="collapse" id="collapseExample3">
                      <div class="card-body">
                        <div class="row my-4">     
                          <div class="col-md-12">
                        <table class="table-striped table-bordered table-hover nowrap" id="dataTable-1" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>No.</th> 
                                <th>Nrp</th>
                                <th>Nama</th>
                                <th>Masa Kerja gol</th>
                                <th>Gaji Pokok Baru</th>
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
                                <td><?php echo $r->mkg1  ?>  <?php echo $r->mkg2  ?></td>
                                <td><?php echo $r->gpb ?></td>
                                <td><?php echo $r->tmtb ?></td> 
                                <td><?php echo $r->kgbb ?> <?php echo $r->kgbb_thn?> <?php echo $r->kgbb_bln?></td>  
                                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <a href=" <?php echo base_url('kgb/edit/'.$r->id_kgb) ?>" class="btn btn-primary btn-small" style='margin-left: 5px;'><i class="fe fe-edit"></i> Edit</a>
                                    <a href="<?php echo base_url('history/index/'.$r->nrp)?>" class="btn btn-info btn-small" id="" ><i class="fe fe-archive"></i> History</a>
                                  </div>
                                </td>
                            </tr>
                        <?php $no++; } ?>
                        </tbody> 
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="col-md-12 mb-4">
                  <div class="card shadow">
                    <div class="card-header">
                      <strong class="card-title mb-0"><i class="fe fe-calendar"></i> KGB 1 Tahun Kedepan (sama cuman 1 tahun kedepan)</strong>
                      <a class="btn btn-xs btn-circle btn-warning" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fe fe-minus"></i></a>
                    </div>
                    <div class="collapse" id="collapseExample4">
                      <div class="card-body">
                        <div class="row my-4">        
                        <table class="table-striped table-bordered table-hover nowrap" style="width: 100%;">
                        <thead>
                            <tr>
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
                            <tr class="">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                  </button>
                                </td>
                            </tr>
                        </tbody> 
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                <script  src='<?php echo base_url(); ?>assets/js/custom.js'></script>
                 <script type="text/javascript">
                  var ctx = document.getElementById("chartPangkat").getContext('2d');
                  var chartPangkat = new Chart(ctx,{
                    type: 'bar',
                    data: {
                      labels: ["BRIPDA", "BRIPTU", "BRIGADIR", "BRIPKA", "AIPDA", "AIPTU", "IPDA", "IPTU", "AKP", "KOMPOL", "AKBP", "KBP"],
                      datasets:[{
                        label: '',
                        data: [

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
                              $this->db->like('pangkat', 'AKBP');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('status', 'aktif');
                              $this->db->like('pangkat', 'KBP');
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
                          'rgba(75, 192, 192 , 0.2)'
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
                          'rgba(75, 192, 192 , 1)'
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


 <script  src='<?php echo base_url(); ?>assets/js/custom.js'></script>
                 <script type="text/javascript">
                  var ctx = document.getElementById("chartPangkatAsn").getContext('2d');
                  var chartPangkat = new Chart(ctx,{
                    type: 'bar',
                    data: {
                      labels: ["JURU MUDA", "JURU MUDA TK I", "JURU", "JURU TK I", "PENGDA", "PENGDA TK I", "PENGATUR" , "PENGATUR TK I", "PENDA", "PENDA TK I", "PENATA", "PENATA TK I", "PEMBINA", "PEMBINA TK I", "PEMBINA UTAMA MUDA", "PEMBINA UTAMA MADYA", "PEMBINA UTAMA"],
                      datasets:[{
                        label: '',
                        data: [
                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('pangkat', 'JURU MUDA');
                              $this->db->like('status', 'aktif');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('pangkat', 'JURU MUDA TK I');
                              $this->db->like('status', 'aktif');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('pangkat', 'JURU');
                              $this->db->like('status', 'aktif');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('pangkat', 'JURU TK I');
                              $this->db->like('status', 'aktif');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('pangkat', 'PENGDA');
                              $this->db->like('status', 'aktif');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('pangkat', 'PENGDA TK I');
                              $this->db->like('status', 'aktif');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('pangkat', 'PENGATUR');
                              $this->db->like('status', 'aktif');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('pangkat', 'PENGATUR TK I');
                              $this->db->like('status', 'aktif');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('pangkat', 'PENDA');
                              $this->db->like('status', 'aktif');
                              echo $this->db->count_all_results();?>,

                               <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('pangkat', 'PENDA TK I');
                              $this->db->like('status', 'aktif');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('pangkat', 'PENATA');
                              $this->db->like('status', 'aktif');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('pangkat', 'PENATA TK I');
                              $this->db->like('status', 'aktif');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('pangkat', 'PEMBINA');
                              $this->db->like('status', 'aktif');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('pangkat', 'PEMBINA TK I');
                              $this->db->like('status', 'aktif');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('pangkat', '"PEMBINA UTAMA MUDA');
                              $this->db->like('status', 'aktif');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('pangkat', '"PEMBINA UTAMA MADYA');
                              $this->db->like('status', 'aktif');
                              echo $this->db->count_all_results();?>,

                              <?php $this->db->select('*');
                              $this->db->from('anggota');
                              $this->db->like('pangkat', '"PEMBINA UTAMA');
                              $this->db->like('status', 'aktif');
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
                          'rgba(255, 99, 132 , 1)'
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

