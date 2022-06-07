<?php
//perintah memuat isi koneksi.inc.php ke dalam file create-table.php 
include "koneksi.php";

//Create database
$sql = "CREATE DATABASE myweb";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
