<?php  
include('../koneksi.php');
//mulai proses tambah data
echo $_POST['nipp'];
//cek dahulu, jika tombol tambah di klik
if (isset($_POST['tambah'])) {
	
	//include atau memasukkan file koneksi ke database

	//jika tombol tambah benar di klik maka lanjut prosesnya
	// $id_pegawai		= $_POST['id_pegawai'];
	$nipp			= $_POST['nipp'];
	$nama_pegawai	= $_POST['nama_pegawai'];
	$lokasi_pegawai	= $_POST['lokasi_pegawai'];
	$seksi			= $_POST['seksi'];
	$kelas_jabatan	= $_POST['kelas_jabatan'];
	$jenis_kelamin	= $_POST['jenis_kelamin'];

	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input	= mysqli_query($connect,"INSERT INTO pegawai (ID_PEGAWAI,NIPP,NAMA_PEGAWAI,LOKASI_PEGAWAI,SEKSI,KELAS_JABATAN,JENIS_KELAMIN) VALUES(NULL,'$nipp','$nama_pegawai','$lokasi_pegawai','$seksi',$kelas_jabatan,'$jenis_kelamin')") or die (mysqli_error($connect));
	var_dump($input);
	//jika query input sukses
	if ($input) {
		
		echo "Data berhasil ditambahkan! ";
		echo '<a href=tambah.php>Kembali</a>';
	
	}else{	
		
		echo "Gagal menambahkan data! ";
		echo '<a href=tambah.php>Kembali</a>';
	
	}

}else { //jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>