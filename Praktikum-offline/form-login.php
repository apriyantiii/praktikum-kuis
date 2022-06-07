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
            <h2 class="card-title">Login</h2>
            <h6 class="card-subtitle text-muted mb-3 fw-bold">Please login to acces this Website</h6>
            <div class="card-body">
                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "gagal") {
                        echo "Login gagal! username dan password salah!";
                    } else if ($_GET['pesan'] == "logout") {
                        echo "Anda telah berhasil logout";
                    } else if ($_GET['pesan'] == "belum_login") {
                        echo "Anda harus login untuk mengakses halaman admin";
                    }
                }
                ?>
                <form method="POST" action="session-login.php">
                    <div class="mb-4">
                        <label for="username" class="form-label">Username*</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username Anda">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password*</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password min 8 karakter">
                    </div>
                    <div class="mb-5 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-success btn-login">Log In</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>