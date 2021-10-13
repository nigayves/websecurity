<?php 
if (isset($_POST['try'])) {
	$toward=$_POST['toward'];
  $g=0;
	$password=$_POST['pass'];
	$password1=$_POST['pass1'];
	
	 if ($password!=$password1) {
    echo "<script>alert('Password don't match try again!')";
  header("location:reset.php?toward=$toward");
echo '</script>';
}
	require "connection.php";
$sql="select* from preset where tvalue=?";
$st= mysqli_stmt_init($con);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo "Statement failure";
}
else{
  mysqli_stmt_bind_param($st,"s",$toward);
  mysqli_stmt_execute($st);
  $don=mysqli_stmt_get_result($st);
  while($row=mysqli_fetch_assoc($don)) {
    if($row['tvalue']==$toward)
    {
    $g=$g+1;
    $tamal=$row['email'];
}
  }
  if ($g<1) {
 echo "Try again to resubmit".$toward;
  }
  else
  {
$sql="select* from preset where email=?";
$st= mysqli_stmt_init($con);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo "Statement failure";
}
else{
  mysqli_stmt_bind_param($st,"s",$tamal);
  mysqli_stmt_execute($st);
  $don=mysqli_stmt_get_result($st);
  if (!$row=mysqli_fetch_assoc($don)) {
  	echo "There is an error!";
  }
  else
  {
  $sql="UPDATE info set password=? where email=?";
  $st= mysqli_stmt_init($con);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo "Statement failure";
}
else{
	$hash1=sha1($password1);
  mysqli_stmt_bind_param($st,"ss",$hash1,$tamal);
  mysqli_stmt_execute($st);
$sql="delete from preset where email=?";
     $st= mysqli_stmt_init($con);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($st,"s",$tamal);
  mysqli_stmt_execute($st);
  header("location:index.php");
}	
  }
 	}
}
}}}
else
{
	header("location:index.php");
}
?>