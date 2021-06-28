<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title"><?php echo $title ?></h2>
            </div>
         </div> 
     </div>
 </div>
 <span>
 <div class="card shadow mb-4">
    <div class="card-header">
        <strong class="card-title">Form Edit</strong>
    </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                                <?php echo form_open('history/edit'); ?>
                                <input type="hidden" value="<?php echo $record['id']?>" name="id">
                                <div class="form-group">
                                    <label>NRP</label>
                                    <input type="text" class="form-control" name="nrp" readonly="" value="<?php echo $record['nrp']?>">
                                </div>
                                <div class="form-group">
                                    <label>Nama </label>
                                    <input type="text" class="form-control" name="nama" readonly="" value="<?php echo $record['nama']?>">
                                </div>
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
                            <br> 
                            </div>
                            <div class="col-md-6">
                            <div class="card col-md-12">
                                     <label style="margin-top : 5px;">Gaji Pokok Baru</label>
                                     <div class="form-row" >
                                        <div class="col-md-3 mb-3">
                                            <input  type="option" class="form-control"  id="title2"  name="" placeholder="Input Kode Gaji" >
                                        </div>
                                        <div class="col-md-9 mb-3">
                                            <input type="text" class="form-control"  id="gpb" name="gpb" value="<?php echo $record['gpb']; ?>">
                                        </div>
                                    </div>
                            </div>
                            <div class="form-group">
                                    <label style="margin-top : 5px;">TMT</label>
                                    <input type="date" class="form-control" name="tmtb" value="<?php echo $record['tmtb']?>">
                                </div>
                        </div>
                                <span  style="margin-left: 15px;"><button type="submit" name="submit" class="btn btn-primary btn-sm">Edit</button></span>
                                <span  style="margin-left: 5px;"><?php echo anchor('history/index/'.$record['nrp'],'Kembali',array('class'=>'btn btn-danger btn-sm'))?></span>
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
    $("#title2").autocomplete({
      source : "<?php echo site_url('kgb/get_autocomplete') ?>",

      select: function(event, ui){
        $('[name="title2"]').val(ui.item.label);
        $('[name="gpb"]').val(ui.item.gaji_pokok);
      }
    });
});
</script>