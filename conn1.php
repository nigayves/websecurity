<?php 
if (isset($_POST['next'])) {
	$email=$_POST['mail'];
	$g=0;
	include("connection.php");
	$sql="select* from info where email=?";
$st= mysqli_stmt_init($con);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($st,"s",$email);
  mysqli_stmt_execute($st);
  $select=mysqli_stmt_get_result($st);
  while($row=mysqli_fetch_assoc($select)) {
    if($row['email']==$email)
    {
    $g=$g+1;
    $tokenemail=$row['email'];
}
  }
}
  if($g>=1){
	$toward=bin2hex(random_bytes(8));
	$jump=random_bytes(32);
	$url="http://localhost/ex/reset.php?toward=$toward";

	
     $sql="delete from preset where email=?";
     $st= mysqli_stmt_init($con);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($st,"s",$email);
  mysqli_stmt_execute($st);
}
$x="insert into preset(email,tvalue) values(?,?)";
$st= mysqli_stmt_init($con);
if (!mysqli_stmt_prepare($st,$x)) {
 echo "statement failed";
}
else{
	
  mysqli_stmt_bind_param($st,"ss",$email,$toward);
  mysqli_stmt_execute($st);
}

$from = 'nigayves@gmail.com';
$to = $email;
$subject = 'Reset password';
$message = 'Click on this link to reset password';
$message .= '<a href="'.$url.'';
$headers = 'From: ' . $from;
$headers .= 'Reply-To: ' . $from;
$headers .= 'Content-type:text/html';
mail($to, $subject, $message, $headers);
echo"Email sent! check your inbox";}
else{
	echo"Email not found";
}
}
?>