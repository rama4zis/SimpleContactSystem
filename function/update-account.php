<?php
require_once("connect_db.php");
session_start();
$host  = $_SERVER['HTTP_HOST'];
// die(printf($host));
// session_start();
// die(var_dump($_FILES));
// die(var_dump($_POST));

$user_id = $_SESSION['user_id'];
$name       =   $_POST["nama"];
$address    =   $_POST["alamat"];
$phone      =   $_POST["nomor-telepon"];
$mail       =   $_POST["email"];
$pass       =   $_POST["password"];
$birth      =   $_POST["tanggal-lahir"];
$status     =   $_POST["status"];
$work_address   =   $_POST["alamat-kantor"];

if ($_FILES["photo"]["size"] > 0) {

  // FPhoto 
  $photo_name      =   $_FILES["photo"]["name"];
  $photo_type      =   $_FILES["photo"]["type"];
  $photo_tmp      =   $_FILES["photo"]["tmp_name"];
  $photo_size      =   $_FILES["photo"]["size"];

  $target_dir = "../images/uploads/";
  // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $upload = move_uploaded_file($photo_tmp, $target_dir . $mail . ".jpeg");

  if ($upload) {
    // echo "Upload berhasil!<br/>";
  } else {
    echo "Upload Gagal!";
  }

  $photo_final = $mail . ".jpeg";
}else {
  $photo_final = $_SESSION['user_photo'];
}
// die();

// manual userid 
$data = mysqli_query($conn, "SELECT COUNT(user_id) as total FROM users");
$id = mysqli_fetch_assoc($data);
// die(var_dump( $id['total'] ));
$id_0 = $id['total'] + 1;
$uid = "U00" . $id_0;

$query = "UPDATE users SET `user_name` = '$name', `user_password` = '$pass', `user_address` = '$address', `user_phone` = '$phone', `user_mail` = '$mail', `user_birth` = '$birth', `user_status` = '$status', `user_work` = '$work_address', `user_photo` = '$photo_final' WHERE `user_id` = '$user_id'";


if (mysqli_query($conn, $query)) {
  // remove all session variables
  // session_unset();

  // destroy the session
  session_destroy();
  session_start();

  $query = "SELECT * FROM users WHERE user_id = '$user_id' "; // cek


  $data = mysqli_query($conn, $query);
  $result = mysqli_num_rows($data);
  // var_dump($result);

  $datas = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE user_mail = '$mail'"));
  // die(var_dump($datas));


  $_SESSION['user_id']       =   $datas["user_id"];
  $_SESSION['user_name']    =   $datas["user_name"];
  $_SESSION['user_birth']      =   $datas["user_birth"];
  $_SESSION['user_address']       =   $datas["user_address"];
  $_SESSION['user_phone']       =   $datas["user_phone"];
  $_SESSION['user_mail']      =   $datas["user_mail"];
  $_SESSION['user_status']     =   $datas["user_status"];
  $_SESSION['user_work']   =   $datas["user_work"];
  $_SESSION['user_photo']   =   $datas["user_photo"];
  // die(print($host));
  header("Location: http://$host/profile.php");


  // require_once('connect_db.php');
  // session_start();

  // var_dump($_POST);

  // $mail = $_POST['mail'];
  // $pass = $_POST['pass'];
}
