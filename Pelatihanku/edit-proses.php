<?php  
//mulai proses tambah data

//cek dahulu, jika tombol simpan di klik
if (isset($_POST['Ubah'])) {
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');

	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id_pelatihan	= $_POST['id_pelatihan'];
	$nama_pelatihan	= $_POST['nama_pelatihan'];
	$id_bidang		= $_POST['id_bidang'];
	$tanggal_awal	= $_POST['tanggal_awal'];
	$tanggal_akhir	= $_POST['tanggal_akhir'];
	$lokasi			= $_POST['lokasi'];
	$klasifikasi	= $_POST['klasifikasi'];
	$vendor			= $_POST['vendor'];
	
	//melakukan query dengan perintah UPDATE untuk memasukkan data ke database
	$connect=mysqli_connect("localhost","root","","rekapsdm");
	$input	= mysqli_query($connect, "UPDATE pelatihan SET id_pelatihan= '$id_pelatihan', nipp = '$nipp', nama_pelatihan = '$nama_pelatihan', id_bidang = '$id_bidang',tanggal_awal = '$tanggal_awal', tanggal_akhir = '$tanggal_akhir', lokasi = '$lokasi', klasifikasi = '$klasifikasi', vendor ='$vendor' WHERE  id_pelatihan = '$id_pelatihan'") or die (mysqli_error($conect));
	var_dump ($input);
	//jika query input sukses
	if ($input) {
		
		echo 'Data berhasil disimpan!';
		echo '<a href="../index.php">Kembali</a>';
	
	}else{	
		
		echo "Gagal menyimpan data! ";
		echo '<a href="../index.php">Kembali</a>';
	
	}

}else { //jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>