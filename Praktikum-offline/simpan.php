<?php
//perintah memuat isi koneksi.php ke dalam file login.php 
include "koneksi.php";
if (isset($_POST['nama']) && isset($_POST['address']) && isset($_POST['email']) && isset($_POST['homepage']) && isset($_POST['username']) && isset($_POST['password'])) {
    // function validate($data)
    // {
    //     $data = trim($data); //menghapus karakter atau spasi pada string
    //     $data = stripslashes($data); //menghapus atau menghilangkan karakter backslash
    //     $data = htmlspecialchars($data); //mengkonversi karakter tertentu menjadi karakter html
    //     return $data;
    // }
    // $nama = validate($_POST['nama']);
    // $address = validate($_POST['address']);
    // $email = validate($_POST['email']);
    // $homepage = validate($_POST['homepage']);
    // $username = validate($_POST['username']);
    // $email = validate($_POST['password']);

    // if (empty($nama)) {
    //     header("Location: login.php?error=Nama tidak boleh kosong");
    //     exit();
    // } else if (empty($address)) {
    //     header("Location: login.php?error=Address tidak boleh kosong");
    //     exit();
    // } else if (empty($email)) {
    //     header("Location: login.php?error=Email tidak boleh kosong");
    //     exit();
    // } else if (empty($homepage)) {
    //     header("Location: login.php?error=Homepage tidak boleh kosong");
    //     exit();
    // } else if (empty($username)) {
    //     header("Location: login.php?error=Username tidak boleh kosong");
    //     exit();
    // } else if (empty($password)) {
    //     header("Location: login.php?error=Password tidak boleh kosong");
    //     exit();
    // } else {
    //ambil data dari form form-login.php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $homepage = $_POST['homepage'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        //query insert data formulir ke dalam database
        $sql = "INSERT user set name='$nama', address='$address', email='$email', homepage='$homepage', username='$username', password='$password'";
        $query = mysqli_query($conn, $sql);

        //mengecek apakah query berhasil di insert
        if ($query) {
            //jika berhasil maka akan dialihkan ke halaman form-login.php
            header('location: form-login.php?');
        } else {
            //jika gagal tampilkan pesan
            die("Gagal menyimpan perubahan..." . mysqli_error($conn));
        }
    } else {
        die("Akses dilarang...");
    }
}
// } else {
// header("Location: sign-up.php");
//     exit();
// }
