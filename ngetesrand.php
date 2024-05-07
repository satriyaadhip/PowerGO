<?php
require 'koneksidb.php';
session_start();
// Return current date from the remote server

// $id = $_SESSION['id_user'];


// $tes = mysqli_query($conn, "SELECT jenis FROM riwayat WHERE id_user = '$id'");
// $row=$tes->fetch_assoc();
// $st = $row['jenis'];
// $user = number_format($st, 1);
// echo $user;

// $sisa_kwh = number_format((rand(3.4, 99.9)), 1);

$sisa_kwh = mt_rand(3.4, 99.9) + mt_rand(3.4,99.9) / 10;

// $l = mt_rand(3.4,99.9) / 10;

// $t = $sisa_kwh + $l;

// $sisa_kwh = mt_rand(3.4,99.9) / 10;

// $sisa_kwh = count_decimals(mt_rand(3.4,99.9));

// echo $t;

echo $sisa_kwh;





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>
