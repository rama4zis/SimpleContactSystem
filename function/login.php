<?php
require_once('connect_db.php');
session_start();

// var_dump($_POST);

$mail = $_POST['mail'];
$pass = $_POST['pass'];

$query = "SELECT * FROM users WHERE user_mail = '$mail' AND user_password = '$pass'"; // cek


$data = mysqli_query($conn, $query);
$result = mysqli_num_rows($data);
// var_dump($result);

$datas = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE user_mail = '$mail'"));
// die(var_dump($datas));

if ($result > 0) {
    $_SESSION['user_id']       =   $datas["user_id"];
    $_SESSION['user_name']    =   $datas["user_name"];
    $_SESSION['user_birth']      =   $datas["user_birth"];
    $_SESSION['user_address']       =   $datas["user_address"];
    $_SESSION['user_phone']       =   $datas["user_phone"];
    $_SESSION['user_mail']      =   $datas["user_mail"];
    $_SESSION['user_status']     =   $datas["user_status"];
    $_SESSION['user_work']   =   $datas["user_work"];
    $_SESSION['user_photo']   =   $datas["user_photo"];
    $_SESSION['user_password'] = $datas['user_password'];
    // die(print($host));
    header("Location: http://$host/profile.php");
}else{
    header("Location: http://$host/index.php");
}
