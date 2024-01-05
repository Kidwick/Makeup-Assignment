<?php
session_start();


if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'Author') {
    header("Location: login.php");
    exit;
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    
    sendEmailNotification();
}

function sendEmailNotification() {
    $to = "admin@gmail.com";  
    $subject = "New Article Posted";
    $message = "A new article has been posted on the website.";

    
    $headers = "From: theweb@gmail.com" . "\r\n" .
               "Reply-To: theweb@gmail.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Use the mail() function to send the email
    mail($to, $subject, $message, $headers);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Articles</title>
</head>
<body>
    <h2>Manage Articles</h2>

    <!-- Add New Article Form -->
    <form method="post" action="">
        <!-- Your article form fields go here -->
        <input type="submit" name="submit" value="Submit">
    </form>

    <a href="Admndash.php">Return to Dashboard</a>
</body>
</html>

