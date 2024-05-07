<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>    

    <!-- Main css -->
    <link rel="stylesheet" href="./Registrasi/css/style.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="login/images/latar.jpg" alt="">
                </div>
                <?php if (isset($_GET['error'])) { ?>
     		    <p class="error"><?php echo $_GET['error']; ?></p>
     	        <?php } ?>
                <h2>registrasi</h2>
                <div class="signup-form">
                    <form action="registrasi1.php" method="POST" class="register-form" id="register-form" >
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">username :</label>
                                <input type="text" name="username" id="username"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">Golongan daya :</label>
                                <div class="form-select">
                                    <select name="daya" id="daya" >
                                        <option value=450>450VA</option>
                                        <option value=900>900VA</option>
                                        <option value=1300>1300VA</option>
                                        <option value=2200>2200VA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="email" name="email" id="email" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="password" name="password1"  />
                        </div>
                        <div class="form-group">
                            <label for="password">Konfirmasi Password :</label>
                            <input type="password" name="password2"  />
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" class="submit" name="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

   
</body>
</html>