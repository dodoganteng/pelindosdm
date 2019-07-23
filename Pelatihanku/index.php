<!DOCTYPE html>
<html>
<head>
		<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript"></script>
 
	<title> 
	</title>
</head>
<body>	
		<h2>Daftar Pelatihan</h2>
		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."> <br></br>

		<table cellpadding="14" cellspacing="0" border="1" id="myTable">
		<tr bgcolor="#CCCCCC">

			<th>ID Pelatihan</th>
			<th>Nama Pelatihan</th>
			<th>ID Bidang</th>
			<th>Tanggal Awal</th>
			<th>Tanggal Akhir</th>
			<th>Ruangan</th>
			<th>Lokasi</th>
			<th>Klasifikasi</th>
			<th>Vendor</th>
			<th>Hari</th>
			<th>Durasi</th>
			<th>Sertifikasi</th>
			<th>Jumlah Peserta</th>
			<th></th>
			
		</tr>
		<?php
		//include file koneksi ke database
		include ('../koneksi.php');

		$id_pelatihan = $_GET['id'];
			//query ke database dengan SELECT table Pegawai diurutkan berdasarkan ID_Pegawai Paling Kecil
			$query = mysqli_query($connect, "SELECT * FROM pelatihan ORDER BY ID_PELATIHAN ='$id_pelatihan'");

			//cek, apakah hasil query di atas mendapatkan hasil atau tidak (data kosong)
			if(mysqli_num_rows($query) == 0){ //ini artinya jika data hasil query di atas kosong

			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6"> Tidak ada data!</td></tr>';
			} else {	//else ini artinya jika data hasi query ada (data di database tidak kosong)

			//jika data tidak kosong, maka akan melakukan perulangan while
			$no = 1;	//membuat variabel $no untuk membuat no urut
			while($data = mysqli_fetch_assoc($query)) {	//perulangan while dengan membuat variabel $data yang akan mengambil data di database

				//menampilkan row dengan data di database
				echo '<tr>';
					echo '<td>'.$data['ID_PELATIHAN'].'</td>';
					echo '<td>'.$data['NAMA_PELATIHAN'].'</td>';
					echo '<td>'.$data['ID_BIDANG'].'</td>';
					echo '<td>'.$data['TANGGAL_AWAL'].'</td>';
					echo '<td>'.$data['TANGGAL_AKHIR'].'</td>';
					echo '<td>'.$data['RUANGAN'].'</td>';
					echo '<td>'.$data['LOKASI'].'</td>';
					echo '<td>'.$data['KLASIFIKASI'].'</td>';
					echo '<td>'.$data['VENDOR'].'</td>';
					echo '<td>'.$data['HARI'].'</td>';
					echo '<td>'.$data['DURASI'].'</td>';
					echo '<td>'.$data['SERTIFIKASI'].'</td>';
					echo '<td>'.$data['JUMLAH_PESERTA'].'</td>';
					echo '<td><a href="edit.php?id='.$data['ID_PELATIHAN'].'">Edit</a> / <a href="hapus.php?id='.$data['ID_PELATIHAN'].'"onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
				echo '</tr>';

				}	
			}
		?> 
	</table>
	<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
  	for (var j = 0; j < length; j++) {
    td = tr[i].getElementsByTagName("td")[j];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
        break;
      } else {
        tr[i].style.display = "none";
      	}
      	}
    } 
  }
}
</script>
</body>
</html>