<?php
session_start();

// Check if the Super_User is logged in, redirect to the login page if not
if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'Super User') {
    header("Location: login.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Other Users</title>
</head>
<body>
    <h2>Manage Other Users</h2>


    <a href="Admndash.php">Back to Dashboard</a>
</body>
</html>
