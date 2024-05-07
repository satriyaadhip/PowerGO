<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registrasi.css">
    <title>Login | PowerGO</title>
</head>

<body>
    <div class="container">
        <div class="kiri">
            <h2 class="judul">Edit profil</h2>
            <?php if (isset($_GET['error'])) { ?>
            <p class="error teks">
                <?php echo $_GET['error']; ?>
            </p>
            <?php } ?>
            <div class="signup-form">
                <form action="ubahdata_back.php" method="POST" class="register-form" id="register-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name" class="teks">Username</label>
                            <input type="text" name="username" id="username" class="input" placeholder="Masukkan Username">
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label for="password" class="teks">Password</label>
                        <input type="password" name="password1" id="password" class="input"
                            placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                        <label for="password" class="teks">Konfirmasi Password</label>
                        <input type="password" name="password2" id="password" class="input"
                            placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                        <label for="foto" class="teks">Foto Profil</label>
                        <input type="text" name="foto" id="foto" class="input"
                            placeholder="Masukkan URL">
                    </div>
                    <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit-btn" name="reset" id="reset" />
                            <input type="submit" class="submit-btn" name="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="kanan">
            <h1 class="powergo">PowerGO</h1>
        </div>

</html>