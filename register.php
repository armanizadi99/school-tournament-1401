<?php
include('error.php');
if(!isset($_POST['singup_email']) or empty($_POST['singup_email']) or !isset($_POST['singup_username']) or empty($_POST['singup_username']) or !isset($_POST['singup_password']) or empty($_POST['singup_password']))
exit(error("Empty required field. Please  make sure that required fields are all  filled .", "register.html"));
$singup_email = $_POST["singup_email"];
$singup_username = $_POST["singup_username"];
$singup_password = $_POST["singup_password"];
//check for password,  email and username length and throw  an error if  they've Went beyond the database limit here.
if(strlen($singup_email)>255)
exit(error("Sorry, Email address couldn't be longer than  255 characters", "register.html"));
if(strlen($singup_username)>50)
exit(error("Sorry, Username couldn't be longer than  50 characters", "register.html"));
if(strlen($singup_password)>40)
exit(error("Sorry, Password couldn't be longer than  40 characters", "register.html"));
//check for   correctness of email structure here.
if(filter_var($singup_email, FILTER_VALIDATE_EMAIL)==false)
exit(error("Invalid email address structure", "register.html"));
mysqli_report(MYSQLI_REPORT_OFF);
$con=mysqli_connect('localhost', 'root', '', 'forms');
$query="insert into users(username, email, passwordhash) values('".$singup_username."', '".$singup_email."', '".password_hash($singup_password, PASSWORD_BCRYPT)."');";
$qres=mysqli_query($con, $query);
echo mysqli_error($con);
//throw  an error if any database error occurred here.
//send email verification code here.
mysqli_close($con);
?>