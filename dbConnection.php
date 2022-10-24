<?php 

$server = "us-cdbr-east-06.cleardb.net";
$user = "bb2644d05887cc";
$pass = "1855f1ec";
$database = "heroku_25e4815c793ac8c";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>