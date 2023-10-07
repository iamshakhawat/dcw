<?php
session_start();

if (isset($_SESSION['login']) || isset($_COOKIE['login'])) {
    header("location:dashboard.php");
}

header("location:login.php");
