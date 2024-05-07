<?php
require 'koneksidb.php';
session_start();



$username = $_SESSION['username'];
$id = $_SESSION['id_user'];

// buat ngambil email
$ud = mysqli_query($conn, "SELECT email FROM pengguna WHERE username = '$username'");
$row1 = $ud->fetch_assoc();
$email = $row1['email'];

// buat ngambil jenis daya
$ad= mysqli_query($conn, "SELECT daya FROM pengguna WHERE username = '$username'");
$row2 = $ad->fetch_assoc();
$jd = (int) $row2['daya'];



// buat tanggal pengisian terakhir

$query_tanggal = "SELECT max(tanggal) FROM riwayat where id_user = '$id'";
    $fd = mysqli_query($conn, "$query_tanggal");
    $row1 = $fd->fetch_assoc();
    $tanggal = $row1['max(tanggal)'];


$ud = mysqli_query($conn, "SELECT id_user FROM pengguna WHERE username = '$username'");
$row = $ud->fetch_assoc();
$id = (int) $row['id_user'];

$_SESSION['id_user'] = $id;
?>

<!doctype html>
<html lang="en">

<head>
   <title>Profil | PowerGO</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/pembayaran.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <!-- <link rel="stylesheet" href="css/style2.css"> -->

</head>

<body>

   <div class="wrapper d-flex align-items-stretch">
      <nav class="navbar-profil" id="sidebar">
         <!-- da -->
         <h2 class="judul-profil">
            Profil
         </h2>
         <div class="p-4 pt-5">
            <ul class="list-unstyled components mb-5">
               <li>
                  <a href="dashboard.php">Home</a>
               <li>
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
      <div id="content">

         <!-- backendnya ini ya bang -->
         <section id="projects" class="section-bottom">
            <div>
               <div class="text-center masa">
                  <img src="<?php echo $_SESSION['foto']?>" alt="" class="gambar-profil">
                  <div class="project-content">
                     <h4 class="nama-profil">
                        <?php echo $_SESSION['username']; ?>
                     </h4>
                     <p class="teks">
                        <?php echo $email ?>
                     </p>
                     <p class="teks">
                        <?php echo $_SESSION['daya']; ?> VA
                     </p>
                     <div class="row justify-content-center">
                        <div class="col-sm-4 col-md-3 tombol-akun">
                           <form action="logout.php" method="POST">
                              <div class="form-submit">
                                 <input type="submit" class="hapus" name="submit" value="Logout" />
                              </div>
                           </form>
                        </div>
                        <div class="col-sm-4 col-md-3 tombol-akun">
                           <form action="edit-profil.php" method="POST">
                              <div class="form-submit">
                                 <input type="submit" class="edit" name="submit" value="Edit profil" />
                              </div>
                           </form>
                        </div>
                        <div class="col-sm-4 col-md-3 tombol-akun">
                           <form action="konfirmasi-hapus.php" method="POST">
                              <div class="form-submit">
                                 <input type="submit" class="edit" name="submit" value="Hapus data" />
                              </div>
                           </form>
                        </div>
                        <!-- <a href="hapus-data.php" class="teks">
                           Hapus akun?
                        </a> -->
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="section bg-grey info-kartu" id="feature">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <div class="text-center feature-block">
                        <img src="images/mini-icon_dashboard1.png" class="gambar" alt="">
                        <h2 class="info-meteran">
                           <?php 
                                  $seto_kwh = mysqli_query($conn, "SELECT sisa_kwh FROM pengguna WHERE username = '$username'");
                                  $row2=$seto_kwh->fetch_assoc();
                                  $st = $row2['sisa_kwh'];
                                  $seto = number_format($st,1);
                                  echo $seto;
                                  ?> kWh
                        </h2>
                        <p class="teks">Sisa kWh saat  ini</p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <div class="text-center feature-block">
                        <img src="images/mini-icon_dashboard2.png" class="gambar" alt="dash-2">
                        <h2 class="info-meteran">
                           <?php
                             echo $_SESSION['total_kwh'] 
                             ?> W
                        </h2>
                        <p class="teks">Total daya yang digunakan</p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <div class="text-center feature-block">
                        <img src="images/mini-icon_dashboard3.png" class="gambar" alt="dash-3">
                        <h2 class="info-meteran">
                           <?php echo $_SESSION['rata'] ?> Wh
                        </h2>
                        <p class="teks">Rata-rata penggunaan kWh</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <div class="text-center feature-block">
                        <img src="images/mini-icon_dashboard4.png" class="gambar" alt="dash-3">
                        <h2 class="info-meteran">
                           <?php echo $tanggal ?>
                        </h2>
                        <p class="teks">Pengisian listrik terakhir</p>
                     </div>
                  </div>
               </div> <!-- / .container -->
         </section>
      </div>

      <!-- <h2>
               <center>Metode Pembayaran</center>
            </h2>
            <div class="kolomgede">
               <div class="kolomsedang">
                  <div class="kolom1 kolom-radius">
                     <img src="images/icon_pembayaran1.png" alt="">
                     <div class="tulisan">

                     </div>
                     <input type="submit" class="tombol" value="Kartu kredit">
                  </div>
                  <div class="kolom2">
                     <img src="images/icon_pembayaran2.png" alt="">
                     <div class="tulisan">

                     </div>
                     <input type="submit" class="tombol" value="Transfer">
                  </div>
               </div>
               <div class="kolomsedang">
                  <div class="kolom3">
                     <img src="images/icon_pembayaran3.png" alt="">
                     <div class="tulisan">

                     </div>
                     <input type="submit" class="tombol" value="Virtual account">
                  </div>
                  <div class="kolom4">
                     <img src="images/icon_pembayaran4.png" alt="">
                     <div class="tulisan">
                     </div>
                     <input type="submit" class="tombol" value="Bayar di gerai">
                  </div>

               </div>
            </div> -->

   </div>
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
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
</body>

</html>