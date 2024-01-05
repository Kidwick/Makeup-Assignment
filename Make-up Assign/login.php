<?php
session_start();

// Check if the Super_User is already logged in, redirect to dashboard if true
if (isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'Super_User') {
    header("Location: Admndash.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    
    <?php
    // Display error message if login fails
    if (isset($_SESSION['login_error'])) {
        echo "<p style='color: red;'>{$_SESSION['login_error']}</p>";
        unset($_SESSION['login_error']);
    }
    ?>

    <form action="login_process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
