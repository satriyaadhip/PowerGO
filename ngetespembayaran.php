<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
  <title>Sidebar 01</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/pembayaran.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="css/style2.css"> -->

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
                <center>Pembayaran</center>
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
      <div class="container">
        <form action="pembayaran_back.php" method="POST">
          <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card card1">
                <img src="images/icon_pembayaran1.png" class="card-img-top gambar" alt="Kredit Card" />
                <div class="card-body">
                  <h5 class="card-title">Kartu Kredit</h5>
                  <p class="card-text">
                    <input type="submit" value="Kartu Kredit" class="tombol" name="klik">
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card card2">
                <img src="images/icon_pembayaran2.png" class="card-img-top gambar" />
                <div class="card-body">
                  <h5 class="card-title">Transfer</h5>
                  <p class="card-text">
                  <p class="card-text">
                    <input type="submit" value="Transfer" class="tombol" name="klik">
                  </p>
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card card3">
                <img src="images/icon_pembayaran3.png" class="card-img-top gambar" />
                <div class="card-body">
                  <h5 class="card-title">Virtual Account</h5>
                  <p class="card-text">
                  <p class="card-text">
                    <input type="submit" value="Virtual Account" class="tombol" name="klik">
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card card4">
                <img src="images/icon_pembayaran4.png" class="card-img-top gambar" />
                <div class="card-body">
                  <h5 class="card-title">Bayar di Gerai</h5>
                  <p class="card-text">
                    <input type="submit" value="pilih" class="tombol" name="klik">
                  </p>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  </div>

  <!-- Menu kwh -->

  </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>