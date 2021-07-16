<div class="row my-4">
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              <h2 class="my-2 page-title"><?php echo $title ?></h2>
                <div class="col">
                    <div class="row">
                        <div class="col-md-4 my-2">
                            <h6>POLRI</h6>
                            <?php echo anchor('report/print_data/'.$record['NRP'],' Print',array('class'=>'btn btn-info btn-sm fe fe-printer')) ?>
                            <?php echo anchor('report/export_pdf/'.$record['NRP'],' Export Pdf',array('class'=>'btn btn-danger btn-sm fe fe-clipboard')) ?>
                        </div>
                        <div class="col-md-4 my-2">
                            <h6>ASN</h6>
                            <?php echo anchor('report/print_data2/'.$record['NRP'],' Print',array('class'=>'btn btn-info btn-sm fe fe-printer')) ?>
                            <?php echo anchor('report/export_pdf2/'.$record['NRP'],' Export Pdf',array('class'=>'btn btn-danger btn-sm fe fe-clipboard')) ?>
                            <?php echo form_open('report/lihat_data'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td>1. Keterangan SK KGB </td>
                            <td><strong><?php echo $record['ket']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>2. Nomor KGB </td>
                            <td><strong><?php echo $record['nomor_kgb']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>3. Nama </td>
                            <td><strong><?php echo $record['nama_lengkap']; ?></strong></td>
                        </tr>
                         <tr>
                            <td>4. Tanggal Lahir </td>
                            <td><strong><?php echo $record['tmpt_lahir']; ?>, <?php $sampeledate = ($record['t_lahir']); 
                                $converdate = date("d-m-Y", strtotime($sampeledate));
                                echo $converdate;
                                ?>  </strong></td>
                        </tr>
                        <tr>
                            <td>5. NIP </td>
                            <td><strong><?php echo $record['NRP']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>6. pangkar/ golongan ruang </td>
                            <td><strong><?php echo $record['pangkat']; ?> / <?php echo $record['golongan']; ?></strong></td>
                        </tr>
                        <tr> 
                            <td>7. kesatuan </td>
                            <td><strong><?php echo $record['kesatuan']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>8. gaji pokok lama </td>
                            <td><strong><?php echo $record['gpl']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>9. gaji pokok baru </td>
                            <td><strong><?php echo $record['gpb']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>10. masa kerja golongan gaji </td>
                            <td><strong><?php echo $record['mkgg1']; ?> <?php echo $record['mkgg2']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>1. pangkar / golongan ruang </td>
                            <td><strong><?php echo $record['pangkat']; ?> / <?php echo $record['golongan']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>12. TMT </td>
                            <td><strong><?php $sampeledate = ($record['tmtb']); 
                                $converdate = date("d-m-Y", strtotime($sampeledate));
                                echo $converdate;
                                ?>  </strong></td>
                        </tr>
                        <tr>
                            <td>13. Kep pangkat / Spemb oleh </td>
                            <td><strong><?php echo $record['kep_pangkat']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>&#160;&#160;&#160;&#160;&#160;&#160;a. nomor / tanggal </td>
                            <td><strong><?php echo $record['no_tgl']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>&#160;&#160;&#160;&#160;&#160;&#160;b. TMT </td>
                            <td><strong><?php $sampeledate = ($record['tmtl']); 
                                $converdate = date("d-m-Y", strtotime($sampeledate));
                                echo $converdate;
                                ?>  </strong></td>
                        </tr>
                        <tr>
                            <td>&#160;&#160;&#160;&#160;&#160;&#160;c. masa kerja golongan </td>
                            <td><strong><?php echo $record['mkg1']; ?> <?php echo $record['mkg2']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>14. KGB berikutnya </td>
                            <td><strong><?php echo $record['kgbb']; ?> <?php echo $record['kgbb_thn']; ?>  <?php echo $record['kgbb_bln']; ?></strong></td>
                        </tr>
                        <br>
                        <br>
                        <tr>
                            <td>Ditetapkan Di : </td>
                            <td><strong><?php echo $record['diterapkan']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>Pada Tanggal : </td>
                            <td><strong>
                                <?php $sampeledate = ($record['padatanggal']); 
                                $converdate = date("d F Y", strtotime($sampeledate));
                                echo $converdate;
                                ?>    
                        </strong></td>
                        </tr>
                        <tr>
                            <td>Di setujui oleh : </td>
                            <td><strong><?php echo $record['d_oleh']; ?>&#160;|&#160;Sebagai : <?php echo $record['sebagai']; ?>&#160;|&#160;NRP : <?php echo $record['nrp_p']; ?></strong></td>
                        </tr>
                    </table>
                </div>
            </div>
      </div>
      <!-- <?php var_dump($record['NRP']); ?> -->
    </td>
</tr>
 <?php echo anchor('report',' Kembali',array('class'=>'btn btn-danger btn-sm '))?>