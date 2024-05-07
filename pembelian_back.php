<?php
require 'koneksidb.php';
session_start();


if(isset($_POST['submit'])){
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];

    $_SESSION['jumlah'] = $jumlah;
    $_SESSION['harga'] = $harga;

    header("Location: ngetespembayaran.php");
    exit();
}
?>