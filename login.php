<?php
// Memulai session
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    
    // Simulate login validation (you can add database validation here)
    if (!empty($username)) {
        // Store username in session
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit;
    } else {
        $error = "Please enter a valid username.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
</head>
<body>
    <h2>Login</h2>

    <?php if (isset($error)): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <input type="submit" value="Login">
    </form>
</body>
</html>
