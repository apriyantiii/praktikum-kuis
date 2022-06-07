<?php
//perintah memuat isi koneksi.inc.php ke dalam file create-table.php 
include "koneksi.php";

//query untuk membuat tabel kontak 
$sql = "CREATE TABLE guestbook (
id INT (5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
posted DATE,
name VARCHAR(50),
email VARCHAR(75),
address VARCHAR(75),
city VARCHAR(75),
message LONGBLOB)";

//Mengecek apakah terjadi eror ketika pembuatan tabel
if (mysqli_query($conn, $sql)) {
    echo "New Record Succesfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//Menutup koneksi
mysqli_close($conn);
