<?php
require 'conf/koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];


$query_sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";


$result = mysqli_query($koneksi, $query_sql);

if($email=="admin@gmail.com"&& $password=="admin"){
    header("Location: iniadmin_copy.php");
}else{
    session_start();
    $_SESSION['email']=$email;
    header("Location: ../Tugasbesar/donasi.php");
}
?>