<?php
// session_start() ;     
require 'koneksidb.php';
session_start();

if(isset($_POST['submit'])){
    $user = $_POST['username'] ;
    $pass1 = $_POST['password1'] ;
    $pass2 = $_POST['password2'] ;
    $daya = $_POST['daya'] ;
    $email = $_POST['email'];
    $foto = $_POST['foto'];

    

    $sisa_kwh = (mt_rand(3.4,99.9) + mt_rand(3.4,99.9) / 10);
    $total_daya = (mt_rand(3.4,99.9) + mt_rand(3.4,99.9) / 10);
    $rata2 = (mt_rand(3.4,99.9) + mt_rand(3.4,99.9) / 10);
    
    //cek form email dan password jika kosong dan cek password sama atau tidak di confirm password
    if(empty($user)){
        $_SESSION['error'] = "Username harus diisi";
        header("Location: register.php?error=Username harus diisi ");
        exit();
    }else if(empty($pass1)){
        $_SESSION['error'] = "Password masih kosong";
        header("Location: register.php?error=Password harus diisi");
        exit();
    }else if(empty($foto)){
        $_SESSION['error'] = "Password masih kosong";
        header("Location: register.php?error=Foto harus diisi");
        exit();
    }
    else if(($pass1 != $pass2)){
        $_SESSION['error'] = "Password tidak sesuai";
        header("Location: register.php?error=Password tidak sesuai");
        exit();
    }
    
    

    //cek jika username sudah digunakan
    $cek = mysqli_query($conn, "SELECT username FROM pengguna WHERE username = '$user'");
    if (mysqli_fetch_assoc($cek)){
        $_SESSION['error'] = "Username sudah digunakan";
        header("Location: register.php?error=username sudah digunakan");
        exit();
    }


    //cek jika email sudah digunakan
    $cek2 = mysqli_query($conn, "SELECT email FROM pengguna WHERE email = '$email'");
    if (mysqli_fetch_assoc($cek2)){
        $_SESSION['error'] = "Email sudah digunakan";
        header("Location: register.php?error=email sudah digunakan");
        exit();
    }

    

    //menambahkan user baru ke dalam database
    mysqli_query($conn, "INSERT INTO pengguna (username, email, password, daya, foto, sisa_kwh, total_kwh, rata)
                 VALUES('$user', '$email', '$pass1', '$daya', '$foto', '$sisa_kwh', '$total_daya', '$rata2')");
    $_SESSION['success'] = "Akun berhasil dibuat, silahkan login";
    header("Location: login.php");
    return mysqli_affected_rows($conn);
    exit();
} 
?>

