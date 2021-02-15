<?php
require_once "koneksi.php";
$username = $_POST["username"];
$alamat = $_POST["alamat"];
$email = $_POST["email"];
$password = $_POST["password"];
$tgllahir = $_POST["tgl_lahir"];
$nohp = $_POST["no_handphone"];
// echo $id_register;
$q = $database_connection ->prepare("INSERT INTO `data_pendaftar` (`id`, `username`, `alamat`, `email`, `password`, `Tanggal lahir`, `nomor hp`) VALUES (NULL, ?, ?, ?, SHA1(?), ?, ?);");
$q->execute([$username, $alamat, $email, $password, $tgllahir, $nohp]);
header("location: ../login.php");
?>