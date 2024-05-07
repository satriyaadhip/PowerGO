<?php
include "koneksidb.php";
session_start();

if(isset($_POST['submit'])){

$username = $_SESSION['username'];
$ud = mysqli_query($conn, "SELECT id_user FROM pengguna WHERE username = '$username'");
$row = $ud->fetch_assoc();
$id = (int) $row['id_user'];

mysqli_query($conn, "SET foreign_key_checks = 0");
mysqli_query($conn, "DELETE FROM pengguna WHERE id_user = '$id'");
mysqli_query($conn, "DELETE FROM riwayat WHERE id_user='$id'");
header("Location: landingpage.php");
return mysqli_affected_rows($conn);
exit();
}
?>