
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
					<option value="">Pilih Bidang</option>
					<option value="B000">BELUM MENGIKUTI</option>
					<option value="B001">SDM</option>
					<option value="B002">HSSE</option>
					<option value="B003">BIRO PERENCANAAN</option>
					<option value="B004">CHANGE MANAGEMENT</option>
					<option value="B005">OPERASIONAL</option>
					<option value="B006">HUMAS</option>
					<option value="B007">PJUM</option>
					<option value="B008">HCM</option>
					<option value="B009">FI</option>
					<option value="B010">CO</option>
					<option value="B011">PBJ</option>
					<option value="B012">SPPI</option>
					<option value="B013">SPI</option>
					<option value="B014">PM</option>
					<option value="B015">MARKETING</option>
					<option value="B016">KEUANGAN</option>
					<option value="B017">SMMR</option>
					<option value="B018">HUKUM / LEGAL</option>
					<option value="B019">TEKNIK</option>
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
			<td> <input type="text" name="sertifikasi" required/> </td>
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