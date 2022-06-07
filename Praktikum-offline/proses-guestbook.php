<?php

include("koneksi.php");

//cek apakah tombol daftar sudah di klik atau belum
if (isset($_POST['create'])) {

    //ambil data dari formulir
    $posted = $_POST['posted'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $message = $_POST['message'];

    //buat query
    $sql = "INSERT INTO guestbook (posted, name, email, address, city, message) VALUE ('$posted', '$name', '$email', '$address', '$city', '$message')";
    $query = mysqli_query($conn, $sql);

    //apakah query simpan berhasil?
    if ($query) {
        //kalau berhasil alihkan ke halaman index.php dengan status = sukses
        header('Location: cetak-guestbook.php?status=sukses');
    } else {
        //kalau gagal alihkan ke halaman index.php dengan status = gagal
        header('Location: beranda.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
