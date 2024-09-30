<?php
// Memulai session
session_start();

// check login nggak
if (!isset($_SESSION['username'])) {
    //kalau nggak login masuk ke login dulu
    header('Location: login.php'); 
    exit;
}

// ambil preferensi user dari cookies
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'default';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Coba States</title>
    <style>
        body {
            background-color: <?php echo ($theme === 'dark') ? '#333' : '#fff'; ?>;
            color: <?php echo ($theme === 'dark') ? '#fff' : '#000'; ?>;
        }
    </style>
</head>
<body>
    <h1>Halo, <?php echo $_SESSION['username']; ?>!</h1>
    <p>Ini adalah halaman dashboard.</p>

    <form method="post" action="set_theme.php">
        <label for="theme">Pilih tema:</label>
        <select name="theme" id="theme">
            <option value="default" <?php echo ($theme === 'default') ? 'selected' : ''; ?>>Default</option>
            <option value="dark" <?php echo ($theme === 'dark') ? 'selected' : ''; ?>>Dark</option>
        </select>
        <input type="submit" value="Simpan Tema">
    </form>

    <a href="logout.php">Logout</a>
</body>
</html>
