<?php
require 'koneksidb.php';
session_start();

$username = $_SESSION['username'];

$ud = mysqli_query($conn, "SELECT id_user FROM pengguna WHERE username = '$username'");
$row = $ud->fetch_assoc();
$id = (int) $row['id_user'];

$_SESSION['id_user'] = $id;
?>

<!doctype html>
<html lang="en">

<head>
  <title>Dashboard | PowerGO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/pembelian.css">
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
          <li class="active">
            <a href="pembelian.php">Pembelian</a>
          </li>
          <li>
            <a href="riwayat.php">Riwayat</a>
          </li>
          <li>
            <a href="informasi.php">Informasi</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Page Content  -->

    <div id="content" class="p-4 p-md-2">
      <div class="main-container">
        <div class="utama-pembelian">
          <h1 class="judul-dashboard">Pembelian</h1>
        </div>

        <!-- end bagan 3 -->
      </div>
      <section class="section" id="pricing">
        <!-- Content -->
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 text-center">
            </div>
          </div> <!-- / .row -->
          <div class="row justify-content-center text-center">
            <div class="col-lg-3 col-sm-6 col-md-6">
              <div class="pricing-box">
                <h5 class="judul-profil">Ekonomi</h3>
                <div class="price-block">
                  <h2 class="judul-profil"><small>Rp</small>50.000,00</h2>
                  <p class="teks-hitam">33.1 kWh</p>
                  <img src="images/icon_pembelian1.png" class="gambar-pembelian" alt="aditkere">
                  <form action="pembelian_back.php" method="POST">
                    <input type="hidden" name="jumlah" value=33.1 />
                    <input type="hidden" name="harga" value="Rp 50.000,00,-" />
                    <input type="submit" value="Pilih" type="submit" name="submit"
                      class="btn btn-outline-dark btn-circled tombol-pilih" />
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
              <div class="pricing-box">
                <h5 class="judul-profil">Standar</h5>
                <div class="price-block">
                  <h2 class="judul-profil"><small>Rp</small>100.000,00</h2>
                  <p class="teks-hitam">73.3 kWh</p>
                  <img src="images/icon_pembelian2.png" class="gambar-pembelian" alt="aditkere">
                  <form action="pembelian_back.php" method="POST">
                    <input type="hidden" name="jumlah" value=73.3 />
                    <input type="hidden" name="harga" value="Rp 100.000,00,-" />
                    <input type="submit" value="Pilih" type="submit" name="submit"
                      class="btn btn-outline-dark btn-circled tombol-pilih" />
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
              <div class="pricing-box">
                <h5 class="judul-profil">Sultan</h5>
                <div class="price-block">
                  <h2 class="judul-profil"><small>Rp</small>500.000,00</h2>
                  <p class="teks-hitam">386.2 kWh</p>
                  <img src="images/icon_pembelian3.png" class="gambar-pembelian" alt="aditkere">
                  <form action="pembelian_back.php" method="POST">
                    <input type="hidden" name="jumlah" value=386.2 />
                    <input type="hidden" name="harga" value="Rp 500.000,00,-" />
                    <input type="submit" value="Pilih" type="submit" name="submit"
                      class="btn btn-outline-dark btn-circled tombol-pilih" />
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
              <div class="pricing-box">
                <h5 class="judul-profil">Sahabat PowerGO</h3>
                <div class="price-block">
                  <h2 class="judul-profil"><small>Rp</small>1.000.000,00</h2>
                  <p class="teks-hitam">659.7 kWh</p>
                  <img src="images/icon_pembelian4.png" class="gambar-pembelian" alt="aditkere">
                  <form action="pembelian_back.php" method="POST">
                    <input type="hidden" name="jumlah" value=659.7 />
                    <input type="hidden" name="harga" value="Rp 50.000,00,-" />
                    <input type="submit" value="Pilih" type="submit" name="submit"
                      class="btn btn-outline-dark btn-circled tombol-pilih" />
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

  </div>
</body>

</html>