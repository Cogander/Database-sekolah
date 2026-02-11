<?php
session_start();
include "config/koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");

if(mysqli_num_rows($query) > 0){
    $_SESSION['login'] = true;
    header("Location: dashboard.php");
} else {
    echo "Login Gagal!";
}
?>
