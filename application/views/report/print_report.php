<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="card-body">
    
         <?php echo form_open('report/lihat_data'); ?>
            <div class="row">
               
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td>1. Nama </td>
                            <td><strong><?php echo $record['nama_lengkap']; ?></strong></td>
                        </tr>
                         <tr>
                            <td>2. Tanggal Lahir </td>
                            <td><strong><?php echo $record['TTL']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>3. NIP </td>
                            <td><strong><?php echo $record['NRP']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>4. pangkar/ golongan ruang </td>
                            <td><strong><?php echo $record['PG']; ?></strong></td>
                        </tr>
                        <tr> 
                            <td>5. kesatuan </td>
                            <td><strong>ini belum ada di db</strong></td>
                        </tr>
                        <tr>
                            <td>6. gaji pokok lama </td>
                            <td><strong><?php echo $record['tmtl']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>7. gaji pokok baru </td>
                            <td><strong><?php echo $record['tmtb']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>8. masa kerja golongan gaji </td>
                            <td><strong><?php echo $record['mkgg2']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>9. pangkar / golongan rung </td>
                            <td><strong><?php echo $record['PG']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>10. TMT </td>
                            <td><strong><?php echo $record['tmtb']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>11. kep pangkat / Spemb oleh </td>
                            <td><strong>belum ada di db</strong></td>
                        </tr>
                        <tr>
                            <td>a. nomor tanggal </td>
                            <td><strong>belum ada di db</strong></td>
                        </tr>
                        <tr>
                            <td>b. TMT </td>
                            <td><strong><?php echo $record['tmtl']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>c. masa kerja golongan </td>
                            <td><strong><?php echo $record['mkgg1']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>12. KGB berikutnya </td>
                            <td><strong><?php echo $record['kgbb']; ?></strong></td>
                        </tr>
                       
                     
                    </table>
                   
                </div>
            </div>
       
      </div>

	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>