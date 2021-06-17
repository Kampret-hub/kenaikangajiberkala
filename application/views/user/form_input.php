                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            <small>Tambah Data User</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('user/post'); ?>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" placeholder="nama lengkap">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="username">
                                </div>
                                <div class="form-group">
                                    <label>Bagian</label>
                                    <select type="option" class="form-control"  name="bagian">
                                        <option >-- Bagian --</option>
                                        <option value="1">Admin</option>
                                        <option value="3">User</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control"  name="password" placeholder="password">
                                </div>
                                 <input type="hidden" name="date" value="<?php echo date("Y-m-d"); ?>">
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('user','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->

               