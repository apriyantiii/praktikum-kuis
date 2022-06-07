<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guestbook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style-guestbook.css">
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
        <h2 class="alert alert-secondary text-center mt-7">GUESTBOOK</h2>
        <p class="alert text-center mt-8">Create your guestbook here!</p>
        <form method="POST" action="proses-guestbook.php">
            <div class="form-group">
                <div class="form-group">
                    <label>Tanggal Pengisian</label>
                    <input type="date" name="posted" class="form-control">
                </div>
            </div><br>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Lengkap Anda">
            </div><br>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda">
            </div><br>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="address" class="form-control" placeholder="Masukkan Alamat Lengkap Anda">
            </div><br>

            <div class="form-group">
                <label>Asal Kota</label>
                <input type="text" name="city" class="form-control" placeholder="Masukkan Kota Lengkap Anda">
            </div><br>

            <div class="form-group">
                <label>Pesan</label>
                <textarea type="textarea" name="message" class="form-control" placeholder="Masukkan Pesan dan Kesan Anda"></textarea>
            </div><br>

            <div class="d-grid">
                <button type="submit" name="create" class="btn btn-success btn-create">Create Guestbook</button>
            </div>
        </form>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>