<?php
session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);


$adminUsername = "admin";
$adminPassword = "admin123";

if ($username === $adminUsername && $password === md5($adminPassword)) {
    $_SESSION['aid'] = 1; 
    $_SESSION['admin_id'] = $username;
    $_SESSION['aname'] = "Admin"; 
    header("Location: admin_dashboard.php");
    exit();
} else {
    $_SESSION['error'] = "Invalid username or password";
    header("Location: admin_login.php");
    exit();
}
?>
