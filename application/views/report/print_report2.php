<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <table width="100%">
        <tr>
            <td align="margin-left">
                <span style="font-size: 12px; font-weight: bold; line-height: 1.5;">KEPOLISIAN NEGARA REPUBLIK INDONESIA
                    <br><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        DAERAH JAWA BARAT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
                   <br>
                </span>
            </td>
        </tr>
        
    </table>
    <table style="width: 100%;">
        <tr>
            <td align="center">
                <p><br>
                    <img src="<?= base_url() ?>/assets/img/logo2.png"/></span><br>
                     <span style="font-size: 12px; font-weight: bold; line-height: 1.5; margin-left: 5px ;"> PETIKAN </span>
                     <br><span style="font-size: 12px; font-weight: bold; line-height: 1; "><u style="">SURAT PEMBERITAHUAN</u>
                    <br><b class="text-center">NOMOR : <?php echo $record['nomor_kgb']; ?>
                    <br>
                 </span>
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td align="center">
                <span style="font-size: 12px; font-weight: bold; line-height: 1.5;">Tentang
                    <br><u>KENAIKAN GAJI BERKALA</u>
                </span>
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td align="justify">
                <span style="font-size: 12px; font-weight:; line-height: 1.5;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berdasarkan Peraturan Pemerintah Republik Indonesia Nomor 15 Tahun 2019 tentang perubahan Kesembilan atas Peraturan Pemerintahan Nomor 7 Tahun 1997 tentang Peraturan Gaji Pegawai Negri Sipil Kepolisian Negara Republik Indonesia dan dengan telah dipenuhinya masa kerja dan syarat-syarat lain, bersama ini diberitahukan kepada :  
                </span>
            </td>
        </tr>
    </table>
    <table>
        <tr> 
            <td style="margin-left: 10px">
                <span style="font-size: 12px; font-weight:; line-height: 1.5;">
                    1. nama <span style="margin-left: 140px;">:</span> <?php echo $record['nama_lengkap']; ?>
                    <br>2. tanggal Lahir <span style="margin-left: 101px;">:</span> <?php echo $record['tmpt_lahir']; ?>, <?php $sampeledate = ($record['t_lahir']); 
                                $converdate = date("d-m-Y", strtotime($sampeledate));
                                echo $converdate;
                                ?>  
                    <br>3. NIP <span style="margin-left: 146px;">:</span> <?php echo $record['NRP']; ?>
                    <br>4. pangkat <span style="margin-left: 127px;">:</span> <?php echo $record['pangkat']; ?> / <?php echo $record['golongan']; ?>
                    <br>5. kesatuan <span style="margin-left: 123px;">:</span> <?php echo $record['kesatuan']; ?>
                    <br>6. gaji pokok lama <span style="margin-left: 87px;">:</span> <?php echo $record['gpl']; ?>
                    <br><p>Diberikan Kenaikan Gaji Berkala sehingga memperoleh :</p>
                        7. gaji pokok baru <span style="margin-left: 88px;">:</span> <?php echo $record['gpb']; ?>
                    <br>8. masa kerja golongan gaji <span style="margin-left: 43px;">:</span> <?php echo $record['mkgg1']; ?> <?php echo $record['mkgg2']; ?>
                    <br>9. pangkat / golongan ruang <span style="margin-left: 41px;">:</span> <?php echo $record['pangkat']; ?> / <?php echo $record['golongan']; ?>
                    <br>10. TMT <span style="margin-left: 132px;">:</span> <?php $sampeledate = ($record['tmtb']); 
                                $converdate = date("d-m-Y", strtotime($sampeledate));
                                echo $converdate;
                                ?>  
                    <br>11. Kep. pangkat / Spemb oleh <span style="margin-left: 27px;">:</span> <?php echo $record['kep_pangkat']; ?>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. nomor / tanggal <span style="margin-left: 70px;">:</span> <?php $sampeledate = ($record['tmtl']); 
                                $converdate = date("d-m-Y", strtotime($sampeledate));
                                echo $converdate;
                                ?>  
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. TMT <span style="margin-left: 120px;">:</span> <?php $sampeledate = ($record['tmtb']); 
                                $converdate = date("d-m-Y", strtotime($sampeledate));
                                echo $converdate;
                                ?>  
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c. masa kerja golongan <span style="margin-left: 47px;">:</span> <?php echo $record['mkg1']; ?> <?php echo $record['mkg2']; ?>
                    <br>12. KGB Berikutnya <span style="margin-left: 76px;">:</span> <?php echo $record['kgbb']; ?> <?php echo $record['kgbb_thn']; ?>  <?php echo $record['kgbb_bln']; ?>
                    <br><p>Keterangan</p>
                    1. &nbsp;&nbsp;Surat pemberitahuan ini disampaikan kepada yang bersangkutan untuk dapat dipergunakan seperlunya.
                    <br>2. &nbsp;&nbsp;Apabila di kemudian hari ternyata terdapat kekeliruan dalam surat keputusan ini, akan diadakan pembetulan sebagaimana mestinya.
                </span>
            </td>
        </tr>
    </table>
    <br>
    <table>
    <table align="right" >
        <tr>
            <td>
                <span style="font-size: 12px; font-weight:; line-height: 1.5;">Di tetapkan di &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $record['diterapkan']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <br><u>pada tanggal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php $sampeledate = ($record['padatanggal']); 
                                $converdate = date("d F Y", strtotime($sampeledate));
                                echo $converdate;
                                ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
                    <br>a.n KEPALA KEPOLISIAN DAERAH JAWA BARAT
                    <br><span style="margin-left: 35%;">KARO SDM</span>
                    <p><br></p>
                        <u><span style="font-size: 12px; margin-left: 28%;" class="text-center"><?php echo $record['d_oleh']; ?></span></u>
                        <br><span style="font-size: 12px; margin-left: 26%;" class="text-center"><?php echo $record['sebagai']; ?> NRP <?php echo $record['nrp_p']; ?></span>
                </span>
            </td>
        </tr>
    </table>
	
            </div>
       
      </div>

	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>