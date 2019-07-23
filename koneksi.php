<<<<<<< HEAD
<?php // Ganti sama punyamu bro,
$server		= "localhost";
$username	= "root";
$password	= "";
$name	= "rekapsdm";

$connect	= mysqli_connect($server, $username, $password) or die("Koneksi ke database gagal");
$select_db	= mysqli_select_db($connect, $name) or die("Tidak ada database yang dipilih");
=======
<?php // Ganti sama punyamu bro,
$server		= "localhost";
$username	= "root";
$password	= "";
$name	= "rekapsdm";

$connect	= mysqli_connect($server, $username, $password) or die("Koneksi ke database gagal");
$select_db	= mysqli_select_db($connect, $name) or die("Tidak ada database yang dipilih");
>>>>>>> 40bb249c1a9a0d9c5a5b14c29cf9c510e03ae1db
