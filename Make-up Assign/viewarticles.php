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
    <title>View Articles</title>
</head>
<body>
    <h2>View Articles</h2>

    <!-- Display the last 6 posted Articles in descending order by article_created_date -->

    <a href="Admndash.php">Retun to Dashboard</a>
</body>
</html>
