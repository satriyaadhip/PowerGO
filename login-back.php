<?php
// session_start() ;    

require 'koneksidb.php';
session_start();

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

  

    $query_sql = "SELECT * FROM pengguna WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($conn, $query_sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // buat sisa kwh
        $se_kwh = mysqli_query($conn, "SELECT sisa_kwh FROM pengguna WHERE username = '$username'");
        $row = $se_kwh->fetch_assoc();
        $si = (float) $row['sisa_kwh'];
        $sika = sprintf("%.1f", $si);

        // buat total daya yang dipake
        $seto_kwh = mysqli_query($conn, "SELECT total_kwh FROM pengguna WHERE username = '$username'");
        $row2 = $seto_kwh->fetch_assoc();
        $st = (float) $row2['total_kwh'];
        $seto = sprintf("%.1f", $st);

        // buat rata-rata penggunaan
        $ra_kwh = mysqli_query($conn, "SELECT rata FROM pengguna WHERE username = '$username'");
        $row3 = $ra_kwh->fetch_assoc();
        $ra = (float) $row3['rata'];
        $rata = sprintf("%.1f", $ra);

        // buat ngambil daya
        $query_daya = "SELECT daya FROM pengguna where username = '$username'";
        $dayat = mysqli_query($conn, $query_daya);
        $row = $dayat->fetch_assoc();
        $daya = (int) $row['daya'];

        // buat ngambil foto
        $query_foto = "SELECT foto FROM pengguna where username = '$username'";
        $fd = mysqli_query($conn, "$query_foto");
        $row1 = $fd->fetch_assoc();
        $foto = $row1['foto'];


        $_SESSION['foto'] = $foto;
        $_SESSION['kwh'] = $sika;
        $_SESSION['total_kwh'] = $seto;
        $_SESSION['rata'] = $rata;
        $_SESSION['username'] = $username;
        $_SESSION['daya'] = $daya;
        header("Location: dashboard.php");
        exit();
    } else {
        if (empty($username)) {
            header("Location: login.php?error=Masukkan username terlebih dahulu");
            exit();
        } else if (empty($password)) {
            header("Location: login.php?error=Mohon masukkan password");
            exit();
        } else {
            header("Location: login.php?error=Username atau password salah!");
            exit();
        }
    }
}
