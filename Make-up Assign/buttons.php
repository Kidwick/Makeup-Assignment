<?php
session_start();

if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'Super_User') {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super User Dashboard</title>
</head>
<body>
    <h2>Welcome, Super_User!</h2>

    <div>
        <a href="profileupdate.php">Update Profile</a>
        <a href="usermanage.php">Manage Other Users</a>
        <a href="viewarticles.php">View Articles</a>
        <a href="Logout.php">Logout</a>
    </div>
</body>
</html>
