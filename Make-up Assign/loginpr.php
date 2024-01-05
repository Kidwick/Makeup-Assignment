<?php
session_start();
require_once 'Dbconnect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    if (($username === 'superuser' && $password === 'password') ||
        ($username === 'admin' && $password === 'adminpassword') ||
        ($username === 'author' && $password === 'authorpassword')) {

        $userType = ($username === 'superuser') ? 'Super_User' : (($username === 'admin') ? 'Administrator' : 'Author');
        $_SESSION['user_type'] = $userType;
        header("Location: Admndash.php");
        exit;
    } else {
        $_SESSION['login_error'] = 'Invalid username or password';
        header("Location: login.php");
        exit;
    }
} else {
    header("Location: login.php");
    exit;
}
?>
