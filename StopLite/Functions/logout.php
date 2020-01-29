<?php 

session_start();
include 'conn.php';

$user = $_SESSION['user'];
date_default_timezone_set('EST');
$date_l = date('Y-m-d h:i:s');
$last_u = mysqli_query($conn, "update user_index set last_u = '$date_l' where username = '$user'");
session_destroy();
header("location:../index.php");

?>