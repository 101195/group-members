<!DOCTYPE html>
<html>
<head>
  <title>Website</title>
  <link rel="stylesheet" type="text/css" href="css/signup.css">
  <link href='https://fonts.googleapis.com/css?family=Cabin Sketch' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Cormorant Upright' rel='stylesheet'>
</head>
<body>
  <div id="container">
  <div id="top">
    <form action="index.php" method="POST">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="index.php">Return</a></li>
    </ul>
  </form>
  </div>
  <div id="signin">
     <div id="signin2">
      <form action="insert.php" method="POST" >
      Username: <input type="text" name="username" id="username"><br>
      FirstName: <input type="text" name="firstname" id="firstname"><br>
      LastName: <input type="text" name="lastname" id="lastname"><br>
      Email : <input type="text" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
      Password: <input type="password" name="password" id="password"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="input a password with at least 6 characters 1 number upercase and lower case letter" required><br>
      Agree terms and condition: <input type="checkbox" name="rememberme" value="1"><br>
      <input type="submit" name="submit" value="SIGNUP"><br>
     </form>
       
     </div>
  </div>
  <div id="header">
    
  </div>
  </div>
  <script src="js/index.js"></script>
</body>
</html>