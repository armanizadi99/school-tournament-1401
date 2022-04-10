<?php
session_start();
setcookie('autologin_username', "", time()-1);
setcookie('autologin_password', "", time()-1);
session_unset();
session_destroy();
redirect("index.php");
?>