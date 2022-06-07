<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Beranda</title>
</head>

<body>
    <h2 class="alert alert-secondary text-center mt-3">SELAMAT DATANG</h2>
    <!-- cek apakah sudah login -->
    <?php
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:form-login.php?pesan=belum_login");
    }
    ?>

    <h4 class="alert text-center">Halo, <?php echo $_SESSION['username']; ?></h4>
    <p class="alert text-center">Yeayy welcome back at <?php
                                                        echo " " . date("l");
                                                        $tanggal = Date(" d-m-Y");
                                                        echo "$tanggal";
                                                        echo " " . date("h:i:sa ");
                                                        ?></p>

    <br />
    <br />
    <a href="logout.php"><button type="button" class="btn btn-danger">Log Out</button></a>
    <a href="form-guestbook.php"><button type="button" class="btn btn-secondary">Input Guest Book</button></a>
    <a href="cetak-guestbook.php"><button type="button" class="btn btn-info">Lihat Guest Book</button></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>