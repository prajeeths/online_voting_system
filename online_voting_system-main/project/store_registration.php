<?php
require 'dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Prepare and execute the SQL query
    $sql = "INSERT INTO users (username, password, email) VALUES (:username, :password, :email)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['username' => $username, 'password' => $password, 'email' => $email]);

    // Check if the query was successful
    if ($stmt->rowCount() > 0) {
        echo "Registration successful!";
    } else {
        echo "Registration failed.";
    }
}
?>
