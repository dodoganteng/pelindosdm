
		<p> <a href="../index.php">Beranda</a></p>
		
		<h3>Edit Data Pelatihan</h3>
	<?php  
	include('../koneksi.php');

	$id_pelatihan = $_GET['id'];

	$show = mysqli_query($connect, "SELECT * FROM pelatihan WHERE ID_PELATIHAN='$id_pelatihan'");

	if (mysqli_num_rows($show) == 0) {

		echo '<script>window.history.back()</script>';
	} else{

		$data = mysqli_fetch_assoc($show);

	}

	?>


	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id_pelatihan" value="<?php echo $id; ?>">
		<table cellpadding="8" cellspacing="0" border="1">
		<tr>
			<td>ID Pelatihan</td>
			<td>:</td>
			<td><input type="text" name="id_pelatihan" required placeholder=<?php echo $data['ID_PELATIHAN'] ?> /> </td>
		</tr>
		<tr>
			<td>Nama Pelatihan</td>
			<td>:</td>
			<td> <input type="text" name="nama_pelatihan" size="200" required placeholder=<?php echo $data['NAMA_PELATIHAN'] ?> /> </td>
		</tr>
		<tr>
			<td>Bidang</td>
			<td>:</td>
			<td> <input type="text" name="id_bidang" required placeholder=<?php echo $data['ID_BIDANG'] ?>/> </td>
		</tr>
		<tr>
			<td>Tanggal Awal</td>
			<td>:</td>
			<td> <input type="text" name="tanggal_awal" required placeholder=<?php echo $data['TANGGAL_AWAL'] ?>> </td>
		</tr>
		<tr>
			<td>Tanggal Awal</td>
			<td>:</td>
			<td> <input type="text" name="tanggal_akhir" required placeholder=<?php echo $data['TANGGAL_AKHIR'] ?>> </td>
		</tr>
		
		<tr>
			<td>Ruangan</td>
			<td>:</td>
			<td> <input type="text" name="ruangan" size="40" required placeholder=<?php echo $data['RUANGAN'] ?> /> </td>
		</tr>
		<tr>
			<td>Lokasi</td>
			<td>:</td>
			<td> <input type="text" name="lokasi" size="30" required placeholder=<?php echo $data['LOKASI'] ?> /> </td>
		</tr>
		<tr>
			<td>Klasifikasi</td>
			<td>:</td>
			<td> <input type="text" name="klasifikasi" required placeholder=<?php echo $data['KLASIFIKASI'] ?>/> </td>
		</tr>
		<tr>
			<td>Vendor</td>
			<td>:</td>
			<td> <input type="text" name="vendor" required placeholder=<?php echo $data['VENDOR'] ?> /> </td>
		</tr>
		<tr>
			<td>Jumlah Hari</td>
			<td>:</td>
			<td> <input type="text" name="hari" required placeholder=<?php echo $data['HARI'] ?> /> </td>
		</tr>
		
		<tr>
			<td>Durasi</td>
			<td>:</td>
			<td> <input type="text" name="durasi" required placeholder=<?php echo $data['DURASI'] ?> /> </td>
		</tr>

		<tr>
			<td>Sertifikasi</td>
			<td>:</td>
			<td>
			<select name="sertifikasi" required placeholder=<?php echo $data['SERTIFIKASI'] ?> >
					<option value="">Pilih Jenis Sertifikasi</option>
					<option value="SERTIFIKASI">Sertifikasi</option>
					<option value="TIDAK">Non-Sertifikasi</option>
				</select>  </td>
		</tr>
		
		<tr>
			<td>Jumlah Peserta</td>
			<td>:</td>
			<td> <input type="text" name="jumlah_peserta" required placeholder=<?php echo $data['JUMLAH_PESERTA'] ?> /> </td>
		</tr>
		
		<tr>
			<td>Managerial</td>
			<td>:</td>
			<td>
			<select name="managerial" required >
					<option value="">Managerial/Non-Managerial</option>
					<option value="MANAGERIAL">Managerial</option>
					<option value="TIDAK">Non-Managerial</option>
				</select>  </td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td></td>
			<td><input type="submit" name="Ubah" value="Ubah"></td>
		</tr>
	</table>
</form>
</body>
</html>
	