<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="with=device-width, initial-scale=1.0">
<title>Forgot password</title>

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
height: 300px;
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
                        
                        <form action="conn1.php" method="POST">
 
    <div><label align="center"><h3>Forgot password</label></div>
    <div><input name="mail" type="text" placeholder="Email "required>
  </div>
      <div><a href="reset.php"><input type="submit" name="next" value="Next"></span></div>
     <br> <a href="index.php">Back to login</div>
       
</center> 
</form>
</body>
</html>

