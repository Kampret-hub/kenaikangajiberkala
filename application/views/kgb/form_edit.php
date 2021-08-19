<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">Edit Data KGB</h2>
            </div>
         </div> 
     </div>
 </div>
 <span>
  <!-- /. ROW  -->
<div class="card shadow mb-4">
    <div class="card-header">
        <strong class="card-title">Form Edit</strong>
    </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                                <?php echo form_open('kgb/edit'); ?>
                                <input type="hidden" value="<?php echo $record['id_kgb']?>" name="id_kgb">
                                <div class="form-group mb-3">
                                    <label>Keterangan SK KGB</label>
                                        <select type="option" class="form-control"  name="ket">
                                            <option type="option" class="form-control"  name="ket" value="<?php echo $record['ket']?>"><?php echo $record['ket']?></option>
                                            <option value="SURAT PEMBERITAHUAN">Surat Pemberitahuan</option>
                                            <option value="KEPUTUSAN">Keputusan</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label>Nomor KGB</label>
                                    <input type="text" class="form-control" name="nomor_kgb" value="<?php echo $record['nomor_kgb']?>">
                                </div>
                                <div class="form-group">
                                    <label>Nrp</label>
                                    <input type="text" class="form-control" name="nrp" readonly="" value="<?php echo $record['nrp']?>">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama" readonly="" value="<?php echo $record['nama']?>">
                                </div>
                                <div class="form-group">
                                    <label>Kesatuan</label>
                                    <input type="text" class="form-control" name="kesatuan" value="<?php echo $record['kesatuan']?>">
                                </div>
                                <div class="card col-md-12">
                                     <label class="control-label" style="margin-top: 5px;">Gaji Pokok Lama</label>
                                     <div class="form-row">
                                         <div class="col-md-3 mb-3">
                                            <input  type="option" class="form-control"  id="title"  name="" placeholder="Input Kode Gaji" >
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <input type="text" class="form-control"  id="pangkat" name="pangkat" placeholder="Pangkat" readonly="">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control"  id="gpl" name="gpl" value="<?php echo $record['gpl']; ?>" readonly="">
                                        </div>
                                     </div>
                                     <label class="control-label">Gaji Pokok Baru</label>
                                     <div class="form-row" >
                                        <div class="col-md-3 mb-3">
                                            <input  type="option" class="form-control"  id="title2"  name="" placeholder="Input Kode Gaji" >
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <input  type="option" class="form-control"  id="pangkat2"  name="pangkat2" placeholder="Pangkat" readonly="" >
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control"  id="gpb" name="gpb" value="<?php echo $record['gpb']; ?>" readonly="">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="card col-md-12">
                                <label class="control-label" style="margin-top: 5px;">Masa Kerja Golongan Gaji (baru)</label>
                                <div class="form-row">
                                    <label style="margin-top : 5px;"> Tahun :</label>
                                    <div class="col-md-3 mb-3">
                                        <select type="option" class="form-control"  name="mkgg1">
                                            <option type="option" class="form-control"  name="mkgg1" value="<?php echo $record['mkgg1']?>"><?php echo $record['mkgg1']?></option>
                                            <option value="0TH">0 TH</option>
                                            <option value="1TH">1 TH</option>
                                            <option value="2TH">2 TH</option>
                                            <option value="3TH">3 TH</option>
                                            <option value="4TH">4 TH</option>
                                            <option value="5TH">5 TH</option>
											<option value="6TH">6 TH</option>
											<option value="7TH">7 TH</option>
											<option value="8TH">8 TH</option>
											<option value="9TH">9 TH</option>
											<option value="10TH">10 TH</option>
											<option value="11TH">11 TH</option>
											<option value="12TH">12 TH</option>
											<option value="13TH">13 TH</option>
											<option value="14TH">14 TH</option>
											<option value="15TH">15 TH</option>
											<option value="16TH">16 TH</option>
											<option value="17TH">17 TH</option>
											<option value="18TH">18 TH</option>
											<option value="19TH">19 TH</option>
											<option value="20TH">20 TH</option>
											<option value="21TH">21 TH</option>
											<option value="22TH">22 TH</option>
											<option value="23TH">23 TH</option>
											<option value="24TH">24 TH</option>
											<option value="25TH">25 TH</option>
											<option value="26TH">26 TH</option>
											<option value="27TH">27 TH</option>
											<option value="28TH">28 TH</option>
											<option value="29TH">29 TH</option>
											<option value="30TH">30 TH</option>
											<option value="31TH">31 TH</option>
                                            <option value="32TH">32 TH</option>
											<option value="GAJI TERTINGGI">GAJI TERTINGGI</option>
                                        </select>
                                    </div>
                                    <label style="margin-top : 5px;"> Bulan :</label>
                                    <div class="col-md-3 mb-3">
                                        <select type="option" class="form-control"  name="mkgg2">
                                            <option type="option" class="form-control"  name="mkgg2" value="<?php echo $record['mkgg2']?>"><?php echo $record['mkgg2']?></option>
                                            <hr>
                                            <option value=" "></option>
                                            <option value="0BL">0 BL</option>
                                            <option value="1BL">1 BL</option>
                                            <option value="2BL">2 BL</option>
                                            <option value="3BL">3 BL</option>
                                            <option value="4BL">4 BL</option>
                                            <option value="5BL">5 BL</option>
											<option value="6BL">6 BL</option>
											<option value="7BL">7 BL</option>
											<option value="8BL">8 BL</option>
											<option value="9BL">9 BL</option>
											<option value="10BL">10 BL</option>
											<option value="11BL">11 BL</option>
											<option value="12BL">12 BL</option>
                                        </select>
                                    </div>
                                </div>
                                <label>Masa Kerja Golongan (lama)</label>
                                <div class="form-row">
                                    <label style="margin-top : 5px;"> Tahun :</label>
                                    <div class="col-md-3 mb-3">
                                        <select type="option" class="form-control"  name="mkg1">
                                            <option type="option" class="form-control"  name="mkg1" value="<?php echo $record['mkg1']?>"><?php echo $record['mkg1']?></option>
                                            <hr>
                                            <option value="0TH">0 TH</option>
                                            <option value="1TH">1 TH</option>
                                            <option value="2TH">2 TH</option>
                                            <option value="3TH">3 TH</option>
                                            <option value="4TH">4 TH</option>
                                            <option value="5TH">5 TH</option>
                                            <option value="6TH">6 TH</option>
                                            <option value="7TH">7 TH</option>
                                            <option value="8TH">8 TH</option>
                                            <option value="9TH">9 TH</option>
                                            <option value="10TH">10 TH</option>
                                            <option value="11TH">11 TH</option>
                                            <option value="12TH">12 TH</option>
                                            <option value="13TH">13 TH</option>
                                            <option value="14TH">14 TH</option>
                                            <option value="15TH">15 TH</option>
                                            <option value="16TH">16 TH</option>
                                            <option value="17TH">17 TH</option>
                                            <option value="18TH">18 TH</option>
                                            <option value="19TH">19 TH</option>
                                            <option value="20TH">20 TH</option>
                                            <option value="21TH">21 TH</option>
                                            <option value="22TH">22 TH</option>
                                            <option value="23TH">23 TH</option>
                                            <option value="24TH">24 TH</option>
                                            <option value="25TH">25 TH</option>
                                            <option value="26TH">26 TH</option>
                                            <option value="27TH">27 TH</option>
                                            <option value="28TH">28 TH</option>
                                            <option value="29TH">29 TH</option>
                                            <option value="30TH">30 TH</option>
                                            <option value="31TH">31 TH</option>
                                            <option value="32TH">32 TH</option>
                                            <option value="GAJI TERTINGGI">GAJI TERTINGGI</option>
                                        </select>
                                    </div>
                                    <label style="margin-top : 5px;"> Bulan :</label>
                                    <div class="col-md-3 mb-3">
                                        <select type="option" class="form-control"  name="mkg2">
                                            <option type="option" class="form-control"  name="mkg2" value="<?php echo $record['mkg2']?>"><?php echo $record['mkg2']?></option>
                                            <hr>
                                            <option value=" "></option>
                                            <option value="0BL">0 BL</option>
                                            <option value="1BL">1 BL</option>
                                            <option value="2BL">2 BL</option>
                                            <option value="3BL">3 BL</option>
                                            <option value="4BL">4 BL</option>
                                            <option value="5BL">5 BL</option>
                                            <option value="6BL">6 BL</option>
                                            <option value="7BL">7 BL</option>
                                            <option value="8BL">8 BL</option>
                                            <option value="9BL">9 BL</option>
                                            <option value="10BL">10 BL</option>
                                            <option value="11BL">11 BL</option>
                                            <option value="12BL">12 BL</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card col-md-12">
                                <div class="form-group">
                                    <label for="date-input1" class="control-label" style="margin-top: 5px;">TMT Lama</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/ name="tmtl" value="<?php echo $record['tmtl']?>">
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="date-input1" class="control-label" style="margin-top: 5px;">TMT Baru</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/ name="tmtb" value="<?php echo $record['tmtb']?>">
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kep. Pangkat / Spemb oleh</label>
                                    <input type="text" class="form-control" name="kep.pangkat" value="<?php echo $record['kep_pangkat']?>">
                                </div>
                                <div class="form-group">
                                    <label>Nomor / Tanggal</label>
                                    <span class="small text-muted"> (Contoh input : KEP/1486/XII/2019, 13 DESEMBER 2021)</span>
                                    <input type="text" class="form-control" name="no_tgl" value="<?php echo $record['no_tgl']?>">
                                </div>
                                <div class="form-group">
                                    <label>KGB Berikutnya</label>
                                    <span class="small text-muted"> (Input dengan format Tahun/Bulan/Tanggal. Contoh : 2021/01/01)</span>
                                    <input type="text" class="form-control" name="kgbb" value="<?php $sampeledate = ($record['kgbb']); 
                                $converdate = date("Y/m/d", strtotime($sampeledate));
                                echo $converdate;
                                ?>"><br>
                                    <div class="form-row">
                                    <label style="margin-top : 5px; margin-left: 5px;"> Tahun :</label>
                                    <div class="col-md-3 mb-3">
                                        <select type="option" class="form-control"  name="kgbb_thn">
                                            <option type="option" class="form-control"  name="kgbb_thn" value="<?php echo $record['kgbb_thn']?>"><?php echo $record['kgbb_thn']?></option>
                                            <hr>
                                            <option value=""></option>
                                            <option value="0TH">0 TH</option>
                                            <option value="1TH">1 TH</option>
                                            <option value="2TH">2 TH</option>
                                            <option value="3TH">3 TH</option>
                                            <option value="4TH">4 TH</option>
                                            <option value="5TH">5 TH</option>
                                            <option value="6TH">6 TH</option>
                                            <option value="7TH">7 TH</option>
                                            <option value="8TH">8 TH</option>
                                            <option value="9TH">9 TH</option>
                                            <option value="10TH">10 TH</option>
                                            <option value="11TH">11 TH</option>
                                            <option value="12TH">12 TH</option>
                                            <option value="13TH">13 TH</option>
                                            <option value="14TH">14 TH</option>
                                            <option value="15TH">15 TH</option>
                                            <option value="16TH">16 TH</option>
                                            <option value="17TH">17 TH</option>
                                            <option value="18TH">18 TH</option>
                                            <option value="19TH">19 TH</option>
                                            <option value="20TH">20 TH</option>
                                            <option value="21TH">21 TH</option>
                                            <option value="22TH">22 TH</option>
                                            <option value="23TH">23 TH</option>
                                            <option value="24TH">24 TH</option>
                                            <option value="25TH">25 TH</option>
                                            <option value="26TH">26 TH</option>
                                            <option value="27TH">27 TH</option>
                                            <option value="28TH">28 TH</option>
                                            <option value="29TH">29 TH</option>
                                            <option value="30TH">30 TH</option>
                                            <option value="31TH">31 TH</option>
                                            <option value="32TH">32 TH</option>
                                            <option value="GAJI TERTINGGI">GAJI TERTINGGI</option>
                                        </select>
                                    </div>
                                    <label style="margin-top : 5px;"> Bulan :</label>
                                    <div class="col-md-3 mb-3">
                                        <select type="option" class="form-control"  name="kgbb_bln">
                                            <option type="option" class="form-control"  name="kgbb_bln" value="<?php echo $record['kgbb_bln']?>"><?php echo $record['kgbb_bln']?></option>
                                            <hr>
                                            <option value=" "></option>
                                            <option value=""></option>
                                            <option value="0BL">0 BL</option>
                                            <option value="1BL">1 BL</option>
                                            <option value="2BL">2 BL</option>
                                            <option value="3BL">3 BL</option>
                                            <option value="4BL">4 BL</option>
                                            <option value="5BL">5 BL</option>
                                            <option value="6BL">6 BL</option>
                                            <option value="7BL">7 BL</option>
                                            <option value="8BL">8 BL</option>
                                            <option value="9BL">9 BL</option>
                                            <option value="10BL">10 BL</option>
                                            <option value="11BL">11 BL</option>
                                            <option value="12BL">12 BL</option>
                                        </select>
                                    </div>
                                     <div class="card col-md-12" style="margin-top: 20px;">
                                         <label class="control-label" style="margin-top: 5px;">Diterapkan Di :</label>
                                         <span class="small text-muted"> (Disi dengan KAB persetujuan KGB)</span>
                                         <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <input type="text" class="form-control" name="diterapkan" value="<?php echo $record['diterapkan']?>" >
                                            </div>
                                         </div>
                                        <div class="form-group">
                                            <label for="date-input1" class="control-label" style="margin-top: 5px;">Pada Tanggal :</label>
                                            <span class="small text-muted"> (Tanggal keluar persetujuan KGB)</span>
                                            <div class="input-group">
                                                <input type="text" class="form-control drgpicker" name="padatanggal" value="<?php echo $record['padatanggal']?>">
                                                <div class="input-group-append">
                                                  <div class="input-group-text" id="button-addon-date"><span class="fas fe-calendar fe-16"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <label class="control-label">Di setujui oleh : </label>
                                         <div class="form-row" >
                                            <div class="col-md-12 mb-3">
                                                <input type="text" class="form-control" id="title3" name="d_oleh" value="<?php echo $record['d_oleh']?>">
                                            </div>
                                        </div>
                                        <label class="control-label">Sebagai :</label>
                                         <div class="form-row" >
                                            <div class="col-md-12 mb-3">
                                                <input type="text" class="form-control" id="sebagai" name="sebagai" readonly="" value="<?php echo $record['sebagai']?>">
                                            </div>
                                        </div>
                                        <label class="control-label">NRP Persetujuan :</label>
                                         <div class="form-row" >
                                            <div class="col-md-12 mb-3">
                                                <input type="text" class="form-control" id="nrp_p" name="nrp_p" readonly="" value="<?php echo $record['nrp_p']?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                               </div>
                               <span  style="margin: 15px;"><button type="submit" name="submit" class="btn btn-primary btn-sm">Edit</button></span> 
                                <span style="margin-top: 15px;"><?php echo anchor('kgb','Kembali',array('class'=>'btn btn-danger btn-sm'))?></span>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->

<script>
  $(document).ready(function()
  {
    $("#title").autocomplete({
      source : "<?php echo site_url('kgb/get_autocomplete') ?>",

      select: function(event, ui){
        $('[name="title"]').val(ui.item.label);
        $('[name="gpl"]').val(ui.item.gaji_pokok);
        $('[name="pangkat"]').val(ui.item.pangkat);
      }
    });
});
</script>

<script>
  $(document).ready(function()
  {
    $("#title2").autocomplete({
      source : "<?php echo site_url('kgb/get_autocomplete') ?>",

      select: function(event, ui){
        $('[name="title2"]').val(ui.item.label);
        $('[name="gpb"]').val(ui.item.gaji_pokok);
        $('[name="pangkat2"]').val(ui.item.pangkat);
      }
    });
});
</script>

<script>
  $(document).ready(function()
  {
    $("#title3").autocomplete({
      source : "<?php echo site_url('kgb/get_autonama') ?>",

      select: function(event, ui){
        $('[name="title3"]').val(ui.item.label);
        $('[name="nrp_p"]').val(ui.item.nrp);
        $('[name="sebagai"]').val(ui.item.pangkat);
      }
    });
});
</script>