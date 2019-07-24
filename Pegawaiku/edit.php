	
		<p> <a href="../index.php">Beranda</a> </p>
		
		<h3>Edit Data Pegawai</h3>
	<?php  
	include('../koneksi.php');

	$id_pegawai = $_GET['id'];

	$show = mysqli_query($connect, "SELECT * FROM pegawai WHERE ID_PEGAWAI='$id_pegawai'");

	if (mysqli_num_rows($show) == 0) {

		echo '<script>window.history.back()</script>';
	} else{

		$data = mysqli_fetch_assoc($show);

	}

	?>


	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id_pegawai" value="<?php echo $id; ?>">
		<table cellpadding="7" cellspacing="0" border="1">
		<tr>
			<td>ID Pegawai</td>
			<td>:</td>
			<td><input type="text" name="id_pegawai" required placeholder=<?php 
			echo $data['ID_PEGAWAI'] ?> /> </td>
		</tr>
		<tr>
			<td>NIPP</td>
			<td>:</td>
			<td> <input type="text" name="nipp" required placeholder=<?php 
			echo $data['NIPP'] ?> /> </td>
		</tr>
		<tr>
			<td>Nama Pegawai</td>
			<td>:</td>
			<td> <input type="text" name="nama_pegawai" size="40" required placeholder=<?php 
			echo $data['NAMA_PEGAWAI'] ?> /> </td>
		</tr>
		<tr>
			<td>Lokasi Pegawai</td>
			<td>:</td>
			<td> <input type="text" name="lokasi_pegawai" size="20" required placeholder=<?php 
			echo $data['LOKASI_PEGAWAI'] ?>/> </td>
		</tr>
		<tr>
			<td>Seksi / Sub</td>
			<td>:</td>
			<td> <input type="text" name="seksi" size="30" required placeholder=<?php 
			echo $data['SEKSI'] ?> /> </td>
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
			<td> <select name="jenis_kelamin" required placeholder=<?php 
			echo $data['JENIS_KELAMIN'] ?>>
					<option value="">Pilih Jenis Kelamin</option>
					<option value="L">L</option>
					<option value="P">P</option>
				</select>  
			</td>
		</tr>
			<td>&nbsp;</td>
			<td></td>
			<td><input type="submit" name="Ubah" value="Ubah"></td>
		</tr>
	</table>
</form>
</body>
</html>
	