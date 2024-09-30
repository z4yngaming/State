<?php
// Memulai session
session_start();

// Destroy semua sessions
session_unset();
session_destroy();

// Menghapus cookies dengan melakukan set expiration time mundur kebelakang
//setcookie('theme', '', time() - 3600, '/');

// Kembali ke login
header('Location: login.php');
exit;
?>
