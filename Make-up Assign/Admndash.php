<?php
session_start();

// Check if the user is logged in, redirect to the login page if not
if (!isset($_SESSION['user_type']) || ($_SESSION['user_type'] !== 'Super_User' && $_SESSION['user_type'] !== 'Administrator' && $_SESSION['user_type'] !== 'Author')) {
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['user_type']; ?>!</h2>

    <div>
        <?php if ($_SESSION['user_type'] === 'Super_User' || $_SESSION['user_type'] === 'Administrator'): ?>
            <a href="update_profile.php">Update Profile</a>
            <a href="manage_authors.php">Manage Authors</a>
        <?php endif; ?>
        <a href="view_articles.php">View Articles</a>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>


