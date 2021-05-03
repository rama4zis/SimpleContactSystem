<?php 
require_once("connect_db.php");
$uid = $_POST['contact_id'];
// $host  = $_SERVER['HTTP_HOST'];
$query = "DELETE FROM contacts WHERE contact_id = '$uid'";

// die(printf($host));
if(mysqli_query($conn, $query)){
    echo "rety";
    header("Location: http://$host/contact.php");
}else {
    echo "galga" . $uid;

}