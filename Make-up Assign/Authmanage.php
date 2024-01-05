<?php
session_start();

if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'Administrator') {
    header("Location: login.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Authors</title>
</head>
<body>
    <h2>Manage Authors</h2>

    <!-- Add New Author Form -->
    <!-- See List of All Authors -->
    <!-- Update Author Details Form -->
    <!-- Delete Author Button -->
    <!-- Export Authors List Links -->

    <a href="dashboard.php">Back to Dashboard</a>
</body>
</html>
