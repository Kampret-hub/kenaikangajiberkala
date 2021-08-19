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


<!-- Content Header (Page header)-->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     
            <div class="col-12">
              <div class="row">
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow border-0">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                            <i class="fas fa-2x  fa-user-check"></i>
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
                            <i class="fas fa-2x fa-user-times"></i>
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
                             <i class="fas fa-2x fa-user-clock"></i>
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
                             <i class="fas fa-2x  fa-user-shield"></i>
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
                
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><span class="fas fa-chart-bar"> Chart Pangkat</span></h3>

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
                <canvas id="chartPangkat"  height="100"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <div class="col-md-12">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><span class="fas fa-chart-bar"> Chart Pangkat ASN</span></h3>

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
                <canvas id="chartPangkatAsn"  height="100"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

           <div class="col-md-12">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title"><span class="fas fa-calendar-alt"> KGB 1 Bulan Kedepan</span></h3>

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
                <table id="example1" class="table table-bordered table-striped" style="width: 100%;">
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
                            <?php $no=1; foreach ($recordBulan as $r) { ?>
                            <tr class="">
                                <td><?php echo $no ?></td>
                                <td><?php echo $r->nrp ?></td>
                                <td><?php echo $r->nama ?></td>
                                <td><?php echo $r->mkg1  ?>  <?php echo $r->mkg2  ?></td>
                                <td><?php echo $r->gpb ?></td>
                                <td><?php echo $r->tmtb ?></td> 
                                <td><?php $sampeledate = ($r->kgbb); 
                                        $converdate = date("d/F/Y", strtotime($sampeledate));
                                        echo $converdate;
                                    ?> <?php echo $r->kgbb_thn?> <?php echo $r->kgbb_bln?></td>  
                                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <a href=" <?php echo base_url('kgb/edit/'.$r->id_kgb) ?>" class="btn btn-primary btn-small" style='margin-left: 5px;'><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?php echo base_url('history/index/'.$r->nrp)?>" class="btn btn-info btn-small" id="" ><i class="fa fa-archive"></i> History</a>
                                  </div>
                                </td>
                            </tr>
                        <?php $no++; } ?>
                        </tbody> 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <div class="col-md-12">
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title"><span class="fas fa-calendar-alt"> KGB 1 Tahun Kedepan</span></h3>

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
                <table id="example" class="table table-bordered table-striped" style="width: 100%;">
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
                            <?php $no=1; foreach ($recordTahun as $r) { ?>
                            <tr class="">
                                <td><?php echo $no ?></td>
                                <td><?php echo $r->nrp ?></td>
                                <td><?php echo $r->nama ?></td>
                                <td><?php echo $r->mkg1  ?>  <?php echo $r->mkg2  ?></td>
                                <td><?php echo $r->gpb ?></td>
                                <td><?php echo $r->tmtb ?></td> 
                                <td><?php $sampeledate = ($r->kgbb); 
                                        $converdate = date("d/F/Y", strtotime($sampeledate));
                                        echo $converdate;
                                    ?> <?php echo $r->kgbb_thn?> <?php echo $r->kgbb_bln?></td>  
                                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <a href=" <?php echo base_url('kgb/edit/'.$r->id_kgb) ?>" class="btn btn-primary btn-small" style='margin-left: 5px;'><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?php echo base_url('history/index/'.$r->nrp)?>" class="btn btn-info btn-small" id="" ><i class="fa fa-archive"></i> History</a>
                                  </div>
                                </td>
                            </tr>
                        <?php $no++; } ?>
                        </tbody> 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

                <script  src='<?php echo base_url(); ?>assets/plugins/chart.js/Chart.min.js'></script>
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


                <script  src='<?php echo base_url(); ?>assets/plugins/chart.js/Chart.min.js'></script>
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

