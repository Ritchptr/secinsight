<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "secinsight";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
    die("Conection Failde! ".mysqli_connect_error() );
}

?>