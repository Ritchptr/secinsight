<?php

require "./config/database.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if(mysqli_query($conn, $query)){
    header("Location: ./views/auth/login.php");
}else{
    echo "Gagal" . mysqli_errno($conn);
}


?>