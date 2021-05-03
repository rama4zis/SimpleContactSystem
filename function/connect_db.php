<?php
    $conn = mysqli_connect("localhost", "root", "", "contact_sys");
    $host  = $_SERVER['HTTP_HOST'];

    // Check connection
// if (mysqli_connect_errno()) {
//     echo "Failed to connect to MySQL: " . mysqli_connect_error();
//     exit();
// }else{
//     echo "done";
// }