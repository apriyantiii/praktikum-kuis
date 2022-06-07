<?php
//perintah memuat isi koneksi.inc.php ke dalam file create-table.php 
include "koneksi.php";

//query untuk membuat tabel kontak 
$sql = "CREATE TABLE user (
id INT (5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50),
address VARCHAR(50),
email VARCHAR(50),
homepage VARCHAR(50),
username VARCHAR(25),
password VARCHAR(25))";

//Mengecek apakah terjadi eror ketika pembuatan tabel
if (mysqli_query($conn, $sql)) {
    echo "New Record Succesfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//Menutup koneksi
mysqli_close($conn);
