<?php  
//mulai proses tambah data
include('../koneksi.php');

//cek dahulu, jika tombol tambah di klik
if (isset($_POST['tambah'])) {
	
	//include atau memasukkan file koneksi ke database

	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id_pelatihan	= $_POST['id_pelatihan'];
	$nama_pelatihan	= $_POST['nama_pelatihan'];
	$id_bidang		= $_POST['id_bidang'];
	$tanggal_awal	= $_POST['tanggal_awal'];
	$tanggal_akhir	= $_POST['tanggal_akhir'];
	$ruangan		= $_POST['ruangan'];
	$lokasi			= $_POST['lokasi'];
	$klasifikasi	= $_POST['klasifikasi'];
	$vendor			= $_POST['vendor'];
	$hari			= $_POST['hari'];
	$durasi			= $_POST['durasi'];
	$sertifikasi	= $_POST['sertifikasi'];
	$jumlah_peserta = $_POST['jumlah_peserta'];

	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$connect= mysqli_connect("localhost","root","","rekapsdm");
	$input	= mysqli_query($connect, "INSERT INTO pelatihan (ID_PELATIHAN,NAMA_PELATIHAN,ID_BIDANG,TANGGAL_AWAL,TANGGAL_AKHIR,RUANGAN,LOKASI,KLASIFIKASI,VENDOR,HARI,DURASI,SERTIFIKASI,JUMLAH_PESERTA) VALUES('$id_pelatihan','$nama_pelatihan','$id_bidang','$tanggal_awal','$tanggal_akhir','$ruangan','$lokasi','$klasifikasi','$vendor','$hari','$durasi','sertifikasi','jumlah_peserta')") or die (mysqli_error($connect));
	var_dump($input);
	//jika query input sukses
	if ($input) {
		
		echo "Data berhasil ditambahkan! ";
		echo '<a href=tambah.php>Kembali</a>';
	
	}else{	
		
		echo "Gagal menambahkan data! ";
		echo '<a href=tambah.php>Kembali</a>';
	}
}
?>