<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Hapus Akun?</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pembayaran.css">
</head>

<body>
    <div class="position-absolute top-50 start-50 translate-middle">
        <h1 class="judul"></h1>Yakin akan menghapus akun Anda?</h1>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-6 tombol-akun">
                <form action="hapus-data.php" method="POST">
                    <div class="form-submit">
                        <input type="submit" class="edit" name="submit" value="Iya" />
                    </div>
                </form>
            </div>
            <div class="col-sm-6 col-md-6 tombol-akun">
                <form action="profil.php" method="POST">
                    <div class="form-submit">
                        <input type="submit" class="edit" name="submit" value="Tidak" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>