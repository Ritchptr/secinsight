<?php

session_start();

require "./config/database.php";

$username = $_POST['username'];
$password = $_POST['password'];

$check = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");

if(mysqli_num_rows($check) === 1){
    $result = mysqli_fetch_assoc($check);
}

if(password_verify($password, $result['password'])){
    $_SESSION['user'] = $result;
    header("Location: ../views/dashboard/index.php");
    exit;
}

?>