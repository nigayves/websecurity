<?php
session_start();
include "connection.php";


$email=$_POST["email"];

$_SESSION['email']=$email;
$cod= mt_rand(100000,999999);
	$sql="SELECT * FROM info WHERE code=?";;

$to=$email;
    $from="From: nigayves@gmail.com";
    $subject="Verification Code";
    $message =$cod;
  
    $mailing = mail($to,$subject,$message,$from);
    

header("location:index.php");



$con->close();
?>