<div class="row my-4"> 
    <!--  table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">Kontak</h2>
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
                      <h4 class="my-1 page-title">BAGSUMDA POLRES KARAWANG</h4>
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
                        <p class=""><i class="fe fe-map-pin"></i> <?php echo $record['alamat']?></p>
                        <p class=""><?php echo $record['no_telp']?></p>
                        <p class=""><?php echo $record['email']?></p>
                      </div>
                  </div>
              </div>
          </div>

          
                  <!--<table class="table table-borderless table-hover">
                    <thead>
                      <tr>
                        <th>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="all2">
                            <label class="custom-control-label" for="all2"></label>
                          </div>
                        </th>
                        <th>ID</th>
                        <th>User</th>
                        <th>Company</th>
                        <th>Country</th>
                        <th>Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                </table>-->

                <!--<p><?php  $this->db->select('bagian');
                $this->db->where('bagian', 'BAGSUMDA');
                $query = $this->db->get('anggota');
                $data = array_shift($query->result_array());
                          echo ($data['bagian']);
                          ?>              
                </p>-->