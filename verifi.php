<?php
session_start();
require_once('connection.php');

if (isset($_POST['submit'])) {
    $email=$_SESSION['email'];
    $code=$_POST['code'];

   $que = "SELECT * FROM info WHERE code=?";
    $stt = $con->prepare($que);
    $stt->bind_param('i',$code);
    if($stt->execute()){
    $result = $stt->get_result();
    $num_rows = $result->num_rows;
  }
  if($num_rows > 0){
      $que = "UPDATE info SET status='verified' WHERE email=? ";
  $stmti = $con->prepare($que);
$stmti->bind_param('s',$email);
$stmti->execute();
$stmti->close();
echo"<script>alert('Email verified')</script>";
header('location:index.php');

    }
  else{
    echo"Invalid activation code";
  }

  }
?>