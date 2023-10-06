<?php
session_start();
setcookie("login", "", time() - (86400 * 7));
session_destroy();
header("location:login.php");
