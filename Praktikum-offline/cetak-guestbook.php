<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style-guestbook.css">
    <title>Cetak Guestbook</title>
</head>

<body>
    <header>
        <h3 class="alert alert-secondary text-center">
            <p class="text-danger">Cetak Guest Book</p>
        </h3>
    </header>

    <nav>
        <a href="form-guestbook.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table class="table table-striped" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal Pengisian</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Asal Kota</th>
                <th>Pesan</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM guestbook";
            $query = mysqli_query($conn, $sql);

            while ($tamu = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $tamu['id'] . "</td>";
                echo "<td>" . $tamu['posted'] . "</td>";
                echo "<td>" . $tamu['name'] . "</td>";
                echo "<td>" . $tamu['email'] . "</td>";
                echo "<td>" . $tamu['address'] . "</td>";
                echo "<td>" . $tamu['city'] . "</td>";
                echo "<td>" . $tamu['message'] . "</td>";

                echo "<td>";
                echo "<a href='edit-guestbook.php?id=" . $tamu['id'] . "'>Edit</a> | ";
                echo "<a href='delete-guestbook.php?id=" . $tamu['id'] . "'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <p>Total : <?php echo mysqli_num_rows($query) ?></p>
    <a href="beranda.php"><button type="button" class="btn btn-secondary">Back to Home</button></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>