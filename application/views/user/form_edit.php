<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="mb-2 page-title">Edit Data User</h2>
                    </div>
                </div>
            </div>
        </div>

                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('user/edit'); ?>
                                <input type="hidden" value="<?php echo $record['user_id']?>" name="id">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" value="<?php echo $record['nama_lengkap']?>">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="nrp" value="<?php echo $record['nrp']?>">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control"  name="password" placeholder="password">
                                </div>
                                <div class="form-group">
                                    <label>User Sistem</label>
                                   <select type="option" class="form-control"  name="role_id" value="<?php echo $record['role_id']?>">
                                        <option >
                                            <?php if($record['role_id'] == 1 ){ 
                                         echo '<div class="">Admin</div>';
                                            }elseif ($record['role_id'] == 2 ){ 
                                                echo '<div class="">Member</div>';}?>
                                        </option>
                                        <option value="1">Admin</option>
                                        <option value="2">User</option>
                                    </select>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Edit</button> | 
                                <?php echo anchor('user','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->