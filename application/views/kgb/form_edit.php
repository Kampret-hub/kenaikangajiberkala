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
                                <div class="form-group">
                                    <label>Nrp</label>
                                    <input type="text" class="form-control" name="nrp" readonly="" value="<?php echo $record['nrp']?>">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama" readonly="" value="<?php echo $record['nama']?>">
                                </div>
                                <div class="form-group">
                                    <label>Gaji Pokok Lama</label>
                                    <input type="text" class="form-control" name="gpl" value="<?php echo $record['gpl']?>">
                                </div>
                                <div class="form-group">
                                    <label>Gaji Pokok Baru</label>
                                    <input type="text" class="form-control" name="gpb" value="<?php echo $record['gpb']?>">
                                </div>
                                <label>Mkgg</label>
                                <div class="form-row">
                                    <label style="margin-top : 5px;"> Tahun :</label>
                                    <div class="col-md-3 mb-3">
                                        <select type="option" class="form-control"  name="mkgg1">
                                            <option type="option" class="form-control"  name="mkgg1" value="<?php echo $record['mkgg1']?>"><?php echo $record['mkgg1']?></option>
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
                                        </select>
                                    </div>
                                    <label style="margin-top : 5px;"> Bulan :</label>
                                    <div class="col-md-3 mb-3">
                                        <select type="option" class="form-control"  name="mkgg2">
                                            <option type="option" class="form-control"  name="mkgg2" value="<?php echo $record['mkgg2']?>"><?php echo $record['mkgg2']?></option>
                                            <hr>
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>TMT Lama</label>
                                    <input type="date" class="form-control" name="tmtl" value="<?php echo $record['tmtl']?>">
                                </div>
                                <div class="form-group">
                                    <label>TMT baru</label>
                                    <input type="date" class="form-control" name="tmtb" value="<?php echo $record['tmtb']?>">
                                </div>
                                <div class="form-group">
                                    <label>nosk</label>
                                    <input type="text" class="form-control" name="nosk" value="<?php echo $record['nosk']?>">
                                </div>
                                <div class="form-group">
                                    <label>kgbb</label>
                                    <input type="text" class="form-control" name="kgbb" value="<?php echo $record['kgbb']?>">
                                </div>
                               </div>
                               <span  style="margin-left: 15px;"><button type="submit" name="submit" class="btn btn-primary btn-sm">Edit</button></span> 
                                <span style="margin-left: 5px; "><?php echo anchor('kgb','Kembali',array('class'=>'btn btn-danger btn-sm'))?></span>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->