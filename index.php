<?php
session_start();
include("loginfunction.php");
if(isset($_COOKIE['autologin_username']) and !isset($_SESSION['loggedin']))
login(true);
if(isset($_SESSION['loggedin']))
redirect("dashboard.php");
else
redirect("mainpage.php");
foreach($_COOKIE as $key=>$value)
{
echo "<br>".$key.": ".$value;
}

?>