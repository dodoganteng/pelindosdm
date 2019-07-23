<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Menu Diklatku
  </title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <h2>Diklatku</h2>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>

      </ul>
    </div>
  </nav>
  <br></br>
<div class="col-12">
    <a id="pegawaipelindo" class="btn btn-primary btn-lg active" tabindex="-1" role="button" aria-disabled="true">Daftar
      Pegawai</a>

    <a id="pelatihanpelindo" class="btn btn-primary btn-lg active" tabindex="-1" role="button"
      aria-disabled="true">Daftar Pelatihan</a>

    <a id="diklatpelindo" class="btn btn-primary btn-lg active" tabindex="-1" role="button" aria-disabled="true">Data
      Diklat</a>

    <div class="btn-group" role="button">
      <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        Bidang
      </button>
      <div class="dropdown-menu">

        <a id="klikBELUM" class="dropdown-item">BELUM MENGIKUTI</a>
        <a id="klikSDM" class="dropdown-item">SDM</a>
        <a id="klikHSSE" class="dropdown-item">HSSE</a>
        <a id="klikBIRO" class="dropdown-item">BIRO PERENCANAAN</a>
        <a id="klikCM" class="dropdown-item">CHANGE MANAGEMENT</a>
        <a id="klikOPERASIONAL" class="dropdown-item">OPERASIONAL</a>
        <a id="klikHUMAS" class="dropdown-item">HUMAS</a>
        <a id="klikPJUM" class="dropdown-item">PJUM</a>
        <a id="klikHCM" class="dropdown-item">HCM</a>
        <a id="klikFI" class="dropdown-item">FI</a>
        <a id="klikCO" class="dropdown-item">CO</a>
        <a id="klikPBJ" class="dropdown-item">PBJ</a>
        <a id="klikSPPI" class="dropdown-item">SPPI</a>
        <a id="klikSPI" class="dropdown-item">SPI</a>
        <a id="klikPM" class="dropdown-item">PM</a>
        <a id="klikMARKETING" class="dropdown-item">MARKETING</a>
        <a id="klikKEUANGAN" class="dropdown-item">KEUANGAN</a>
        <a id="klikSMMR" class="dropdown-item">SMMR</a>
        <a id="klikHUKUM" class="dropdown-item">HUKUM/LEGAL</a>
        <a id="klikTEKNIK" class="dropdown-item">TEKNIK</a>
      </div>
      <div class="btn-group" role="button">
        <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          Tambah
        </button>
        <div class="dropdown-menu">
          <a href="Pegawaiku/tambah.php" id="klikTPegawai" class="dropdown-item">TAMBAH PEGAWAI</a>
          <a href="Diklatku/tambah.php" id="klikTDiklat" class="dropdown-item">TAMBAH DIKLAT</a>
          <a href="Pelatihanku/tambah.php" id="klikTPelatihan" class="dropdown-item">TAMBAH PELATIHAN</a>
        </div>
      </div>
    </div>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."> <br></br>
  </div>