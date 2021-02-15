<?php
session_start();
if (isset($_SESSION['username']) === false) { // cek session apakah kosong(belum login) maka alihkan ke login
    header('Location: login.php');
}
?>