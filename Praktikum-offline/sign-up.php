<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        .error {
            background: #F2DEDE;
            color: #A94442;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card login-form" <div class="card-body">
            <h2 class="card-title">Sign Up</h2>
            <h6 class="card-subtitle text-muted mb-3 fw-bold">Please Sign Up to acces this Website</h6>

            <form method="POST" action="simpan.php">
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <div class="mb-4">
                    <label for="nama" class="form-label">Nama Lengkap*</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap Anda">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address*</label>
                    <input type="textarea" name="address" class="form-control" id="address" placeholder="Tuliskan Alamat Lengkap Anda">
                </div>
                <div class="mb-4">
                    <label for="email" class="form-label">Email*</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Masukkan Email Anda">
                </div>
                <div class="mb-3">
                    <label for="homepage" class="form-label">Homepage*</label>
                    <input type="textarea" name="homepage" class="form-control" id="homepage" placeholder="Homepage">
                </div>
                <div class="mb-4">
                    <label for="username" class="form-label">Username*</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username Anda">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password*</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password min 8 karakter">
                </div>
                <div class="d-grid">
                    <button type="submit" name="submit" class="btn btn-success btn-login">Sign Up</button>
                </div>

            </form>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>