<?php
  

  $link = mysqli_connect("localhost", "root", "", "signup");

 

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

 

// Escape user inputs for security
if (isset($_POST['submit'])) {
    # code...
$username = mysqli_real_escape_string($link, $_REQUEST['username']);

$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);

$lastname = mysqli_real_escape_string($link, $_REQUEST['lastname']);

$email = mysqli_real_escape_string($link, $_REQUEST['email']);

$password = mysqli_real_escape_string($link, $_REQUEST['password']);

$password_encrypted = password_hash($password, PASSWORD_BCRYPT);


} 

// attempt insert query execution

$sql = "INSERT INTO users (username,firstname, lastname, email, password) VALUES ('$username', '$firstname', '$lastname', '$email', '$password')";



if(mysqli_query($link, $sql)){

    echo "Records added successfully.";
    header("location: mainpage.php");

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

 

// close connection


?>