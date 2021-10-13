<?php
session_start();
include "connection.php";

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$username=$_POST["usename"];
$_SESSION['email']=$email;
$_SESSION['code']=$code;

$password=$_POST["pasword"];
	$cod= mt_rand(100000,999999);
	$stat="not verified";
	$sql="INSERT INTO info(fname,lname,email,username,password,code,status)values(?,?,?,?,?,?,?)";
$st=mysqli_stmt_init($con);
$to=$email;
    $from="From: nigayves@gmail.com";
    $subject="Verification Code";
    $message =$cod;
  
    $mailing = mail($to,$subject,$message,$from);
    


if(mysqli_stmt_prepare($st,$sql))
{
$salted="saltedsfgddgedgfgdfg".$password;//Salting
$saltsh=hash('sha1',$salted);
mysqli_stmt_bind_param($st,"sssssss",$fname,$lname,$email,$username,$saltsh,$cod,$stat);
mysqli_stmt_execute($st);
header("location:code.php");
}
else{

echo "error:".$sql."<br>".$con->error;

}



$con->close();
?>