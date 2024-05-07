<?php
require 'koneksidb.php';
session_start();

$id = $_SESSION['id_user'];
?>

<!doctype html>
<html lang="en">

<head>
  <title>Sidebar 01</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/dashboard.css">

</head>

<body>

  <div class="wrapper d-flex align-items-stretch">
  <nav class="navbar-profil" id="sidebar">
      <!-- da -->
      <a href="profil.php">
        <div class="profil">
          <div class="pp-profil"><img src="<?php echo $_SESSION['foto']?>" alt=""></div>
          <div class="info-profil">
            <h5 class="judul-profil">
              <?php echo $_SESSION['username']; ?>
            </h5>
            <p class="teks-hitam">
            <?php echo $_SESSION['daya']; ?> VA
            </p>
          </div>
        </div>
      </a>
      <div class="p-4 pt-5">
        <ul class="list-unstyled components mb-5">
          <li>
            <a href="dashboard.php">Home</a>
          </li>
          <li>
            <a href="pembelian.php">Pembelian</a>
          </li>
          <li class="active">
            <a href="riwayat.php">Riwayat</a>
          </li>
          <li>
            <a href="informasi.php">Informasi</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

          <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
              <span>
                <center>Dashboard</center>
              </span>
              <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pembayaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pembelian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Riwayat</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Informasi</a>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
      <h2 class="mb-4">Riwayat Pembayaran</h2>
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">Tanggal Pembayaran</th>
            <th scope="col">Waktu Pembayaran</th>
            <th scope="col">Golongan</th>
            <th scope="col">Metode</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $var = "select * from riwayat where id_user = '$id' ";
          $hasil = $conn->query($var);
          if ($hasil->num_rows > 0) {
            while ($baris = $hasil->fetch_assoc()) {
              $tgl = $baris['tanggal'];
              $wkt = $baris['waktu'];
              $jns = $baris['jenis'];
              $mtd = $baris['metode'];
              $tal = $baris['total'];
              echo"<tr>
                    <th>$tgl</th>
                    <td>$wkt</td>
                    <td>$jns</td>
                    <td>$mtd</td>
                    <td>$tal</td>
                  </tr>";
            }
          } else {
            echo "gagal";
          }
          ?>
        </tbody>


      </table>
    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>