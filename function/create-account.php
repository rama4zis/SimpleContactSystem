<?php
require_once("connect_db.php");
session_start();
$host  = $_SERVER['HTTP_HOST'];
// die(printf($host));
// session_start();
// die(var_dump($_FILES));
// die(var_dump($_POST));
$name       =   $_POST["nama"];
$address    =   $_POST["alamat"];
$phone      =   $_POST["nomor-telepon"];
$mail       =   $_POST["email"];
$pass       =   $_POST["password"];
$birth      =   $_POST["tanggal-lahir"];
$status     =   $_POST["status"];
$work_address   =   $_POST["alamat-kantor"];

// duplicate email check 
$mail_check = mysqli_query($conn, "SELECT * FROM users WHERE user_mail = '$mail'");
// die(var_dump($mail_check->num_rows));
if($mail_check->num_rows > 0){
  $_SESSION['duplicate_mail'] = 1;
  header("Location: http://$host/index.php");
  exit();
}

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

// die();

// manual userid 
$data = mysqli_query($conn, "SELECT COUNT(user_id) as total FROM users");
$id = mysqli_fetch_assoc($data);
// die(var_dump( $id['total'] ));
$id_0 = $id['total'] + 1;
$uid = "U00" . $id_0;

// CEK ID DUPLIKAT 
$all_check = mysqli_query($conn, "SELECT COUNT(*) FROM users");
$check = mysqli_query($conn, "SELECT * FROM users WHERE user_id = '$uid'");
$all_check = $all_check->num_rows;
$check = $check->num_rows;
// die(var_dump($check));
// for($x = 0; $x < $all_check; $x++){
//   if($check > 0){
//     $id_0++;
//     echo $id_0;
//     $uid = "U00" . $id_0;
//     echo $uid . " > ";
//   }
// }
if ($check > 0) {
  // echo $uid;
  $new_id_0 = $id_0;
  for($x =0; $x < $check;){
    $new_id_0++;
    $new_uid = "U00" . $new_id_0;
    $new_check = mysqli_query($conn, "SELECT * FROM users WHERE user_id = '$new_uid'");
    echo "new id = " . $new_uid . " > ";
    // echo $new_check->num_rows;
    if($new_check->num_rows == 0){
      $x++;
      $uid = $new_uid;
    }
  }
}

// die(printf($uid));

$query = "INSERT INTO users (`user_id`, `user_name`, `user_address`, `user_phone`, `user_mail`, `user_password`, `user_birth`, `user_status`, `user_work`, `user_photo`) VALUES ('$uid', '$name', '$address', '$phone', '$mail', '$pass', '$birth', '$status', '$work_address', '$photo_final')";


if (mysqli_query($conn, $query)) {
  $_SESSION['create'] = 1;
  // sleep(3);
  header("Location: http://$host/index.php");
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

?>