<?php
	include('../koneksi.php');
	?>
		<p> <a href="../index.php">Beranda</a> </p>
		
		<h3>Tambah Data Pelatihan</h3>
	
	<form method="post" action="simpan_data.php">
		<table cellpadding="13" cellspacing="0" border="1">
		<tr>
			<td>ID Pelatihan</td>
			<td>:</td>
			<td><input type="text" name="id_pelatihan" required /> </td>
		</tr>
		<tr>
			<td>Nama Pelatihan</td>
			<td>:</td>
			<td> <input type="text" name="nama_pelatihan" size="200" required /> </td>
		</tr>
		<tr>
			<td>Bidang</td>
			<td>:</td>
			
			<td> <select name="id_bidang" required>
			<?php 
			$bidang = mysqli_query($connect,"SELECT * FROM bidang");
			while($result = mysqli_fetch_assoc($bidang)){
			?>

				<option value="<?php echo $result["ID_BIDANG"]?>"><?php echo $result["BIDANG"] ?></option>
					
					<?php } ?>
				</select>  
			</td>
		</tr>
		
		<tr>
			<td>Tanggal Awal</td>
			<td>:</td>
			<td> <input type="text" name="tanggal_awal" required /> </td>
		</tr>
		<tr>
			<td>Tanggal Akhir</td>
			<td>:</td>
			<td> <input type="text" name="tanggal_akhir" required /> </td>
		</tr>
		<tr>
			<td>Ruangan</td>
			<td>:</td>
			<td> <input type="text" name="ruangan" size="40" required /> </td>
		</tr>
		<tr>
			<td>Lokasi</td>
			<td>:</td>
			<td> <input type="text" name="lokasi" size="30" required /> </td>
		</tr>
		<tr>
			<td>Klasifikasi</td>
			<td>:</td>
			<td> <select name="Klasifikasi" required/>
					<option value="">Pilih Jenis Klasifikasi</option>
					<option value="INHOUSE">INHOUSE</option>
					<option value="EXHOUSE">EXHOUSE</option>
				</select>  
			</td>
		</tr>
		<tr>
			<td>Vendor</td>
			<td>:</td>
			<td> <input type="text" name="vendor" required /> </td>
		</tr>

		<tr>
			<td>Jumlah Hari</td>
			<td>:</td>
			<td> <input type="text" name="hari" required/> </td>
		</tr>
		
		<tr>
			<td>Durasi</td>
			<td>:</td>
			<td> <input type="text" name="durasi" required/> </td>
		</tr>

		<tr>
			<td>Sertifikasi</td>
			<td>:</td>
			<td>
			<select name="sertifikasi" required/>
					<option value="">Pilih Jenis Sertifikasi</option>
					<option value="SERTIFIKASI">Sertifikasi</option>
					<option value="TIDAK">Non-Sertifikasi</option>
				</select>  </td>
		</tr>
		

		<tr>
			<td>Jumlah Peserta</td>
			<td>:</td>
			<td> <input type="text" name="jumlah_peserta" required/> </td>
		</tr>
		
		<tr>
			<td>&nbsp;</td>
			<td></td>
			<td><input type="submit" name="tambah" value="Tambah"/></td>
		</tr>
	</table>
</form>
</body>
</html>