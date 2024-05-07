<?php
require 'koneksidb.php';
session_start();

$id = $_SESSION['id_user'];


if(isset($_POST['submit'])){
    $user = $_POST['username'] ;
    $pass1 = $_POST['password1'] ;
    $pass2 = $_POST['password2'] ;
    $email = $_POST['email'];
    $foto = $_POST['foto'];


    if(empty($user)){
        $_SESSION['error'] = "Username harus diisi";
        header("Location: edit-profil.php?error=Username harus diisi ");
        exit();
    }else if(empty($pass1)){
        $_SESSION['error'] = "Password masih kosong";
        header("Location: edit-profil.php?error=Password harus diisi");
        exit();
    }else if(empty($foto)){
        $_SESSION['error'] = "Password masih kosong";
        header("Location: edit-profil.php?error=Foto harus diisi");
        exit();
    }

    $cek = mysqli_query($conn, "SELECT username FROM pengguna WHERE username = '$user'");
    if (mysqli_fetch_assoc($cek)){
        $_SESSION['error'] = "Username sudah digunakan";
        header("Location: edit-profil.php?error=username sudah digunakan");
        exit();
    }
    else if(($pass1 != $pass2)){
        $_SESSION['error'] = "Password tidak sesuai";
        header("Location: edit-profil.php?error=password tidak sesuai");
        exit();
    }

    // apabila berhasil lewat tes username dan password
    mysqli_query($conn, "UPDATE pengguna SET username = '$user', password = '$pass1', foto = '$foto' WHERE id_user = '$id'");
    $_SESSION['username'] = $user;

    // buat ngambil foto
    $query_foto = "SELECT foto FROM pengguna where username = '$user'";
    $fd = mysqli_query($conn, "$query_foto");
    $row1 = $fd->fetch_assoc();
    $foto = $row1['foto'];
    $_SESSION['foto'] = $foto;
    // end of ngambil foto
    
    header("Location: profil.php");
    return mysqli_affected_rows($conn);
}
?>