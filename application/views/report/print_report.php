<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <table>
        <tr>
            <td align="center">
                <span style="font-size: 12px; font-weight: bold; line-height: 1.5;">KEPOLISIAN NEGARA REPUBLIK INDONESIA
                    <br>DAERAH JAWA BARAT
                    <br><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RESOR KARAWANG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
                    
                </span>
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td align="center">
                <p><br>
                    <img src="<?= base_url() ?>/assets/img/logo2.png"/></span><br>
                     <span style="font-size: 12px; font-weight: bold; line-height: 1.5;">PETIKAN </span>
                     <br><span style="font-size: 12px; font-weight: bold; line-height: 1; "><u style=""><?php echo $record['ket']; ?></u>
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
                <span style="font-size: 12px; font-weight:; line-height: 1.5;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berdasarkan Peraturan Pemerintah Republik Indonesia Nomor 24 Tahun 2013 tentang perubahan Kesembilanatas Peraturan Pemerintahan Nomor 29 Tahun 2001 tentang Peraturan Gaji Pokok Anggota Kepolisian Negara Republik Indonesia dan dengan telah dipenuhinya masa kerja dan syarat-syarat lain, bersama ini diberitahukan kepada :  

                </span>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <span style="font-size: 12px; font-weight:; line-height: 1.5;">
                    1. nama <span style="margin-left: 140px;">:</span> <?php echo $record['nama_lengkap']; ?>
                    <br>2. tanggal Lahir <span style="margin-left: 101px;">:</span> <?php echo $record['tmpt_lahir']; ?>, <?php echo $record['t_lahir']; ?>
                    <br>3. NRP / NIP <span style="margin-left: 114px;">:</span> <?php echo $record['NRP']; ?>
                    <br>4. pangkat <span style="margin-left: 127px;">:</span> <?php echo $record['pangkat']; ?> / <?php echo $record['golongan']; ?>
                    <br>5. kesatuan <span style="margin-left: 123px;">:</span> <?php echo $record['kesatuan']; ?>
                    <br>6. gaji pokok lama <span style="margin-left: 87px;">:</span> <?php echo $record['gpl']; ?>
                    <br><p>Diberikan Kenaikan Gaji Berkala sehingga memperoleh :</p>
                        7. gaji pokok baru <span style="margin-left: 88px;">:</span> <?php echo $record['gpb']; ?>
                    <br>8. masa kerja golongan gaji <span style="margin-left: 43px;">:</span> <?php echo $record['mkgg1']; ?> <?php echo $record['mkgg2']; ?>
                    <br>9. pangkat / golongan ruang <span style="margin-left: 41px;">:</span> <?php echo $record['pangkat']; ?> / <?php echo $record['golongan']; ?>
                    <br>10. TMT <span style="margin-left: 132px;">:</span> <?php echo $record['tmtb']; ?>
                    <br>11. Kep. pangkat / Spemb oleh <span style="margin-left: 27px;">:</span> <?php echo $record['kep_pangkat']; ?>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. nomor / tanggal <span style="margin-left: 69px;">:</span> <?php echo $record['tmtl']; ?>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. TMT <span style="margin-left: 119px;">:</span> <?php echo $record['tmtb']; ?>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c. masa kerja golongan <span style="margin-left: 45px;">:</span> <?php echo $record['mkg1']; ?> <?php echo $record['mkg2']; ?>
                    <br>12. KGB Berikutnya <span style="margin-left: 73px;">:</span> <?php echo $record['kgbb']; ?> / <?php echo $record['kgbb_thn']; ?>  <?php echo $record['kgbb_bln']; ?>
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
                <p><br>
                <span style="font-size: 12px; font-weight:; line-height: 1.5;">Di tetapkan di &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $record['diterapkan']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <br><u>pada tanggal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $record['padatanggal']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
                    <br>a.n KEPALA KEPOLISIAN RESOR KARAWANG
                    <br><span style="margin-left: 40%;">WAKA</span>
                    <br><span style="margin-left: 44%;">u.b</span>
                    <br><span style="margin-left: 32%;">KABAGSUMDA</span>
                    <p><br></p>
                        <u><span style=" margin-left: 40%; line-height: 1.5;"><?php echo $record['d_oleh']; ?></u></span>
                        <br><span style="font-size: 12px; margin-left: 15%;"><?php echo $record['sebagai']; ?> NRP <?php echo $record['nrp_p']; ?></span>
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