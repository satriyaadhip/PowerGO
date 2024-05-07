<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login_coba.css">
    <title>Login | PowerGO</title>
</head>

<body>
    <div class="container">
        <div class="kiri">
            <div class="judul">
                <h1>Login</h1>
            </div>
            <div class="space"></div>
            <div class="login">
                <form action="login-back.php" method="post">
                    <div class="form-group first">
                        <label for="username" class="teks">Username</label>
                        <input type="text" name="username" class="input" placeholder="Masukkan email Anda" id="username">
                    </div>
                    <div class="form-group last">
                        <label for="password" class="teks">Password</label>
                        <input type="password" name="password" class="input" placeholder="Masukkan Password" id="password">
                    </div>
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <div class="login-submit">
                        <input type="submit" name="submit" value="Login" class="submit-btn">
                    </div>
                </form>
            </div>
            <div class="register">
                <span class="teks daftar">Belum memiliki akun? <a href="register.php" class="daftar">Daftar sekarang!</a></span>
            </div>
        </div>
    </div>
    <div class="kanan">
        <h1 class="powergo">PowerGO</h1>
    </div>

</html>