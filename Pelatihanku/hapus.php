<?php  
//mulai proses tambah data
include('../koneksi.php');

//cek dahulu, apakah benar URL sudah ada GET id_pegawai -> hapus.php?id=id_pegawai
if (isset($_GET['id'])) {
	
	
	//include atau memasukkan file koneksi ke database

	//mebuat variabel $id_pegawai bernili dari URL GET id_pegawai -> hapus.php?id_pegawai=id
	$id_pelatihan	= $_GET['id'];

	//cek ke database apakah ada data pegawai dengan id_pegawai='$id_pegawai'
	$cek	= mysqli_query($connect, "SELECT * from pelatihan WHERE ID_PELATIHAN='$id_pelatihan'");
	
	//jika data pegawai tidak ada
	if (mysqli_num_rows($cek) == 0) {
		
		//redirect atau dikembalikan ke halaman awal
		echo '<script>window.history.back()</script>';
	
	}else{	
		
		$del =mysqli_query($connect, "DELETE FROM pelatihan WHERE id_pelatihan='$id_pelatihan'");
		
		if($del){
		
		echo "Data berhasil dihapus! ";
		echo '<a href=../index.php>Kembali</a>';
	
		}else{	
		
		echo "Gagal menghapus data! ";
		echo '<a href=../index.php>Kembali</a>';
	
		}

	}
}
?>