<?php
include "connection.php";
$uname=$_POST['username'];
$pwd=$_POST['password'];
$salted="saltedsfgddgedgfgdfg".$pwd;
$saltsh=hash('sha1',$salted);
$t=0;
session_start();
if (isset($_SESSION['user'])) {
	} 
$f=mysqli_query($con,"select * from info where username='$uname'");
while ($p=mysqli_fetch_array($f)) {
	if ($uname==$p['username'] and $saltsh==$p['password']) {
		$t=1;
		$h=$p['username'];
		$b=$p['password'];
	}
}
if ($t==1) {
		$query = "SELECT * FROM info WHERE username='$uname' AND status='verified' ";
    $stmt = $con->prepare($query);
    if($stmt->execute()){
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;
  }

  if($num_rows > 0){

	header("location:new.php");
$_SESSION['k1']=$h;
$_SESSION['k2']=$b;
if(!empty($_POST['remember'])){
	setcookie("username",$_POST["username"],time()+ 3600);
	setcookie("password",$_POST["password"],time()+ 3600);
	echo "<p align='center'>Cookies saved successfully";
}}
else
{header("location:login2.php");}}
else{
	echo "<script>alert('Wrong username or password!')</script>";
 	echo "<script>location.href='index.php'</script>";
 }
?>

