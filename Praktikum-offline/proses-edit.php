<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if (isset($_POST['edit'])) {

    // ambil data dari formulir
    $id = $_POST['id'];
    $posted = $_POST['posted'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $message = $_POST['message'];

    // buat query update
    $sql = "UPDATE guestbook SET posted='$posted', name='$name', email='$email', address='$address', city='$city', message='$message' WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    // apakah query update berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman list-tamu.php
        header('Location: cetak-guestbook.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan..." . mysqli_error($conn));
    }
} else {
    die("Akses dilarang...");
}
