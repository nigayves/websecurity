
<?php
session_start();
if(!isset($_SESSION['k1'])){
	header('location:index.php');

}
 ?>

<?php

//create csrf token
if(isset($_POST) & !empty($_POST)){
  if(isset($_POST['csrf_token'])){
    if($_POST['csrf_token'] == $_SESSION['csrf_token']){
      //echo "CSRF Validation Success";
    }
    else {
      echo"CSRF Validation Failed.";
    }
  }
}
$token = md5(uniqid(rand(), true));
$_SESSION['csrf_token'] = $token;
$_SESSION['csrf_token_time'] = time();
?>

<?php 
if (!isset($_SESSION['k1'],$_SESSION['k2'])) {
   header("location:index.php");
}
$uname=$_SESSION['k1'];
$pwd=$_SESSION['k2'];

?>
<html>  
<head>  
  <title>  
        Dashboard
</title>  
</head>  
  
<body>  
<h1 align="center"><font color="teal">You are most welcomed here!!!</h1><br>  

<h3 align="center"><a href="logout.php">Click here to Logout</a> </h1>  
 <input type ="hidden" name="csrf_token" value="<?php echo $token; ?>">
</body>  
  </html>  