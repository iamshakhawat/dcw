<?php
require('../vendor/autoload.php');
session_start();

use App\classes\Auth;

$auth = new Auth();

if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $row = $auth->chcekToken($token)->num_rows;
    if ($row == 1) {
        $auth->updateToken($token);
        $_SESSION['newpass'] = $token;
        echo "<script>alert('Email verified Successfully');window.location = 'update_password.php'</script>";
    } else {
        echo "<script>alert('Invalid Token!')</script>";
    }
}
