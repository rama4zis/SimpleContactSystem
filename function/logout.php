<?php 
include_once("connect_db.php");
session_start();
// session_destroy();
// remove all session variables
session_unset();

// destroy the session
session_destroy();
header("Location: http://$host/");

// var_dump($_SESSION);