<?php
session_start();
//create csrf token
if(isset($_POST) & !empty($_POST)){
  if(isset($_POST['csrf_token'])){
    if($_POST['csrf_token'] == $_SESSION['csrf_token']){
      
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

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="with=device-width, initial-scale=1.0">
<title>Login</title>
<style>
  body{
    background:linear-gradient(#141e30,#243b55);
  }
.co{
margin: 70px auto;
width: 400px;
background-color: #f2f2f2;
background-position: center;
 background-size: cover;
 text-align: center;
 padding: 25px;
 margin-bottom: 120px;
height: 470px;
font-size: 15px;
  border: 1px solid #ccc;
  border-radius: 10px;
  padding-bottom: 10px;
}
.co h3{
font-family: 'Festive', cursive;
	 text-align: center;
color: teal;
}
.co p{
	font-family: segoe print;
color: ;
}
	body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
input[type=text], select, textarea {
  width: 300px;
  padding: 12px;
  color: black;
  border-radius: 25px;
  border: none;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  border-bottom: 1px solid #fff;
outline: none;
background: transparent;
}
input[type=password], select, textarea {
 width: 300px;
  padding: 12px;
  color: black;
  border-radius: 25px;
  border: none;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  border-bottom: 1px solid #fff;
outline: none;
background: transparent;
}
input[type=submit] {
	width: 300px;
  background-color: cornflowerblue;
  color: white;
  padding: 12px 20px;
  border: none;
    border-radius: 25px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: teal;
}
.container {
  border-radius: 5px;
   padding: 10px;
}
</style>
</head>

<body>
<center>
<section class="co"id="2">
<div class="contact-a">
<div class="container">
                        
                                                <form action="welcome.php" method="POST">
 
<div><label align="center"><h3>LOGIN</label></div>
<div><input name="username" type="text" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" placeholder="Username"required></div>
  <div><label for="password"></label></div>
    <div><input name="password" type="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" placeholder="Password"required> 
  </div>
      <div><input type="checkbox" name="remember" id="remember" >
    <label for="remember-me">Remember me</label><br><br><br>
  </div>
<div><input type="submit" name="Login" value="Signin"></span></div>
    <br align="right"><a href="forgot.php">Forgot Password?</a></h3></p>
    <br>You don't have an account?&nbsp&nbsp<a href="signup.php">Sign up</a>
    <input type ="hidden" name="csrf_token" value="<?php echo $token; ?>">
  </div>  

</center> 
</form>
</body>
</html>

