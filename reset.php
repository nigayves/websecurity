<!DOCTYPE html>
<html lang="en"><head>
<meta name="viewport" content="with=device-width, initial-scale=1.0">
<title>Reset password</title>

<style>
  body{
    background:linear-gradient(#141e30,#243b55);
  }
.co{
margin: 120px auto;
width: 400px;
background-color: #f2f2f2;
background-position: center;
 background-size: cover;
 text-align: center;
 padding: 25px;
 margin-bottom: 120px;
height: 350px;
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

<div><label align="center"><h3>Reset password</label></div>

      <?php 
      $toward=$_GET['toward'];
      if(empty($toward))
{
  echo"Request didn't validated";
}else
{
     ?>
                <form action="rp.php" method="POST">

    <input type="hidden"name="toward"value="<?php echo $toward; ?>">
    <div><input name="pass" type="password" placeholder="New password"pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[^a-zA-Z0-9]).{8,}" title="Must contain number,special character,uppercase letter,lowercase letter and at least 8 or more characters"required ></div>
    
   <div><input name="pass1" type="password" placeholder="Confirm password"pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[^a-zA-Z0-9]).{8,}" title="Must contain number,special character,uppercase letter,lowercase letter and at least 8 or more characters"required></div>
  <div><input type="submit" name="try" value="Next"></span></div>

</center> 
</form>
</body>
</html>

<?php 
}
?>
