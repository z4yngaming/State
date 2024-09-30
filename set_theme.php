<?php
// Memulai session
session_start();

// Check udah login apa belum
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

// Check apakah udah kirim POST isi theme
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['theme'])) {
    $theme = $_POST['theme'];
    
    // Set cookies untuk 7 HARI
    setcookie('theme', $theme, time() + (7 * 24 * 60 * 60), '/');
    
    header('Location: index.php');
    exit;
}
?>
