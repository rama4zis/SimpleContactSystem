<?php
require_once("connect_db.php");
session_start();
$host  = $_SERVER['HTTP_HOST'];
// die(printf($host));
// session_start();
// die(var_dump($_FILES));
// die(var_dump($_POST));
$own        =   $_SESSION['user_id'];
$name       =   $_POST["nama"];
$address    =   $_POST["alamat"];
$phone      =   $_POST["nomor-telepon"];
$mail       =   $_POST["email"];
// $pass       =   $_POST["password"];
// $birth      =   $_POST["tanggal-lahir"];
// $status     =   $_POST["status"];
// $work_address   =   $_POST["alamat-kantor"];

// FPhoto 
$photo_name      =   $_FILES["photo"]["name"];
$photo_type      =   $_FILES["photo"]["type"];
$photo_tmp      =   $_FILES["photo"]["tmp_name"];
$photo_size      =   $_FILES["photo"]["size"];

if (!file_exists('../images/uploads/' . $own)) {
  mkdir('../images/uploads/' . $own, 0777, true);
}

$target_dir = "../images/uploads/" . $own . "/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);



// die();

// manual userid 
$data = mysqli_query($conn, "SELECT COUNT(contact_id) AS total FROM contacts");
$id = mysqli_fetch_assoc($data);
$id_0 = (int)$id['total'];
$id_0++;
// die(var_dump( $id_0 ));
$uid = "C00" . $id_0;
$photo_final = $uid . ".jpeg";

// CEK ID DUPLIKAT 
// $all_check = mysqli_query($conn, "SELECT COUNT(*) AS total FROM contacts");
// $all_check = mysqli_fetch_assoc($all_check);
$check = mysqli_query($conn, "SELECT COUNT(*) FROM contacts WHERE contact_id = '$uid'");
// $all_check = $all_check->num_rows;
$check = $check->num_rows;
// die(var_dump($check));
if ($check > 0) {
  // echo $uid;
  $new_id_0 = $id_0;
  for($x =0; $x < $check;){
    $new_id_0++;
    $new_uid = "C00" . $new_id_0;
    $new_check = mysqli_query($conn, "SELECT * FROM contacts WHERE contact_id = '$new_uid'");
    echo "new id = " . $new_uid . " > ";
    // echo $new_check->num_rows;
    if($new_check->num_rows == 0){
      $x++;
      $uid = $new_uid;
    }
  }
}

die(printf($uid));


$upload = move_uploaded_file($photo_tmp, $target_dir . $uid . ".jpeg");
if ($upload) {
  // echo "Upload berhasil!<br/>";
} else {
  echo "Upload Gagal!";
}

$query = "INSERT INTO contacts (`contact_id`, `user_id`, `contact_name`, `contact_address`, `contact_phone`, `contact_mail`, `contact_photo`) VALUES ('$uid', '$own', '$name', '$address', '$phone', '$mail', '$photo_final')";


if (mysqli_query($conn, $query)) {
  // echo "New record created successfully";
  // header("Location : $host/index.php");
?>
  <script>
    // alert("Create Account Successful");
    // setTimeout(function() {
    //   window.location.href = 'https://$host';
    // }, 5000);
  </script>
<?php
  //   $_SESSION['create'] = 1;
  // sleep(3);
  header("Location: http://$host/contact.php");
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

?>