<?php
require_once "koneksi.php";
$id_register = $_POST["id_reg"];
$username = $_POST["username"];
$alamat = $_POST["alamat"];
$email = $_POST["email"];
$tgllahir = $_POST["tgl_lahir"];
$nohp = $_POST["no_handphone"];
// echo $id_register;
$q = $database_connection ->prepare("UPDATE `data_pendaftar` SET `username`= ?, `alamat` = ?, `email` = ?, `Tanggal lahir` = ?, `nomor hp` = ? WHERE `data_pendaftar`.`id` = ?;");
$q->execute([$username, $alamat, $email, $tgllahir, $nohp, $id_register]);
header("location: ../halamanutama.php");
?>