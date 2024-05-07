<?php
require 'koneksidb.php';
session_start();


if(isset($_POST['klik'])){
    // ngambil value dari bagan pembelian 
    $metode = $_POST['klik'];

    //session buat ngambil username 
    $username = $_SESSION['username'];

    // nge-catet waktu dan tanggal ketika pengguna melakukan pembayaran 
    date_default_timezone_set('Asia/Jakarta');
    $date = date('d-m-y');
    $time = date('h:i');

    $j = $_SESSION['jumlah'];
    $h = $_SESSION['harga'];

    $id = $_SESSION['id_user'];

    //hasil transaksi dimasukan ke dalam database
    mysqli_query($conn, "INSERT INTO riwayat (id_user, tanggal, waktu, jenis, metode,total)
                 VALUES('$id','$date', '$time', '$j', '$metode', '$h')");
    



    //mengupdate database pengguna (sisa kwh)
    $seto_kwh = mysqli_query($conn, "SELECT sisa_kwh FROM pengguna WHERE username = '$username'");
    $row2=$seto_kwh->fetch_assoc();
    $st = $row2['sisa_kwh'];
    $seto = number_format($st,1);
    $final_sisa = $j+$seto;
   


    mysqli_query($conn, "UPDATE pengguna SET sisa_kwh='$final_sisa' WHERE username = '$username' ");
    header("Location: riwayat.php");
    exit();

}
?>