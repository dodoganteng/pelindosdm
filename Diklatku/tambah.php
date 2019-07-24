<?php
	include('../koneksi.php');
	?>
		<p> <a href="../index.php">Beranda</a> </p>
		
		<h3>Tambah Data Diklat</h3>
	
	<form method="post" action="simpan_data.php">
		<table cellpadding="9" cellspacing="0" border="1">
			<!-- <tr>
				<td>ID Pegawai</td>
				<td>:</td>
				<td> <input type="text" name="id_pegawai" required/> </td>
			</tr> -->
		<tr>
			<td>ID Pelatihan</td>
			<td>:</td>
			<td> 
			<select name="id_pelatihan" required>
			<?php 
			$diklat = mysqli_query($connect,"SELECT ID_PELATIHAN FROM pelatihan ORDER BY ID_PELATIHAN");
			while($result = mysqli_fetch_assoc($diklat)) { 
				
			
			?>

				<option value="<?php echo $result["ID_PELATIHAN"]?>"><?php echo $result["ID_PELATIHAN"] ?></option>
					
			<?php } ?>
				</select>   </td>
		</tr>
		<tr>
			<td>Bidang</td>
			<td>:</td>
			<td> <select name="bidang" required>
			<?php 
			$bidang = mysqli_query($connect,"SELECT * FROM bidang");
			while($result = mysqli_fetch_assoc($bidang)){
			?>

				<option value="<?php echo $result["BIDANG"]?>"><?php echo $result["BIDANG"] ?></option>
					
					<?php } ?>
				</select>  
			</td>
		</tr>
		
		<tr>
			<td>NIPP</td>
			<td>:</td>
			<td> <input type="text" name="nipp" required/> </td>
		</tr>
		<tr>
			<td>Nama Pegawai</td>
			<td>:</td>
			<td> <input type="text" name="nama_pegawai" size="40" required/> </td>
		</tr>
		<tr>
			<td>Lokasi Pegawai</td>
			<td>:</td>
			<td> <input type="text" name="lokasi_pegawai" size="20" required/> </td>
		</tr>
		<tr>
			<td>Substansi</td>
			<td>:</td>
			<td> <input type="text" name="substansi" size="30" required/> </td>
		</tr>
		<tr>
			<td>Kelas Jabatan</td>
			<td>:</td>
			<td> <select name="kelas_jabatan" required>
			<?php 
			$kj = mysqli_query($connect,"SELECT KELAS_JABATAN FROM diklat");
			for ($i=0; $i <19 ; $i++) { 
				
			
			?>

				<option value="<?php echo $i?>"><?php echo $i ?></option>
					
			<?php } ?>
				</select>  
			</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td> <select name="jenis_kelamin" required/>
					<option value="">Pilih Jenis Kelamin</option>
					<option value="L">L</option>
					<option value="P">P</option>
				</select>  
			</td>
		</tr>
		<tr>
			<td>Durasi</td>
			<td>:</td>
			<td> <input type="text" name="durasi" required/> </td>
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