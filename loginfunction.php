<?php
include("error.php");
include("redirect.php");
function login($silent)
{
$username="";
$password="";
$loginInfoExists=false;
if($silent)
{
if(isset($_COOKIE['autologin_username']) and isset($_COOKIE['autologin_password']))
{
$username=$_COOKIE['autologin_username'];
$password=$_COOKIE['autologin_password'];
$loginInfoExists=true;
}
}
else
{
if(isset($_POST['login_username']) and isset($_POST['login_password']))
{
$username=$_POST['login_username'];
$password=$_POST['login_password'];
$loginInfoExists=true;
}
}
if($loginInfoExists)
{
$con=mysqli_connect("localhost", "root", "", "forms");
if(mysqli_connect_errno())
{
if(!$silent)
echo error("connection to database server has faled", "login.html");
return false;
}
$query="select * from users;";
$qres=mysqli_query($con, $query);
if(mysqli_errno($con))
{
if(!$silent)
echo error("error in database selection. Message: ".mysqli_error($con), "login.html");
return false;
}
$verified=false;
while($row=mysqli_fetch_assoc($qres))
{
if($row['username']==$username)
{
if(password_verify($password, $row['passwordhash']))
{
$verified=true;
break;
}
}
}
if($verified)
{
if(!$silent)
{
setcookie('autologin_username', $username, time()+(24*3600*30));
setcookie('autologin_password', $password, time()+(24*3600*30));
redirect("dashboard.php");
}
$_SESSION['loggedin']="true";
$_SESSION['name']=$username;
return true;
}
else
{
echo error("No username and password combination found.", "login.html");
return false;
}
}
else
{
if($silent==false)
echo error("sorry, login information is not set", "login.html");
return false;
}
}
?>