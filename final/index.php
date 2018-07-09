<!DOCTYPE html>
<html>
<head>
  <title>Website</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Cabin Sketch' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Cormorant Upright' rel='stylesheet'>
</head>
<body>
  <div id="header">
    <ul>
      <li><a href="#">About</a></li>
      <li><a href="#">Help Center</a></li>
      <li><a href="#">Status</a></li>
      <li><a href="#">Brand</a></li>
      <li><a href="#">Business</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Terms</a></li>
      <li><a href="signup.php">SignUp</a></li>
    </ul>
  </div>
  <center><div id="login">
 	<img src="image/index.png">
 	<center>
 		<form action = "loginconf.php" method = "post">
 			<label>UserName  :</label><input type = "text" name = "username" class = "box" required /><br /><br />
            <label>Password  :</label><input type = "password" name = "password" class = "box" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="input a password with at least 6 characters 1 number upercase and lower case letter" required /><br/><br />
            <input type = "submit" value = "login"/><br />
 		</form>
 	</center>
  </div></center>
</body>
</html>