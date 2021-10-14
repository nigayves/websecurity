<?php
session_start();
require_once('connection.php');
if (isset($_POST['submit'])) {
  $email = $con->real_escape_string($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid Email format";
    }
$result ="SELECT count(*) FROM info WHERE email=?";
$stmt = $con->prepare($result);
$stmt->bind_param('s',$email);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
  if ($count==0) { 
   
      echo "Email not found";
    }
else{
    
$otp= mt_rand(1000000, 9999999);
$query = "UPDATE info SET code=? WHERE email=? ";
$stmti = $con->prepare($query);
$stmti->bind_param('is',$otp,$email);
$stmti->execute();
$stmti->close();
    $_SESSION['email'] = $email;
    $_SESSION['code'] = $otp;
    //$_SESSION['stat'] = $status;
    $to=$email;
    $from="From: nigayves@gmail.com";
    $subject="Verification Code";
    $message =$otp;
  
    $mailing = mail($to,$subject,$message,$from);

    header('location:code2.php');
    
  }
}


?>