<?php
require_once 'koneksi.php';

try{
$sql = 'SELECT * FROM `data_pendaftar` ORDER BY `id` ASC';
$q = $database_connection -> query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
}catch(PDOException $e){
    die("Tidak bisa membuaka database $database_name :" . $e->getMessage());
}

?>