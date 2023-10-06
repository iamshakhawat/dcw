<?php
session_start();
require_once("../vendor/autoload.php");

use App\classes\Auth;

$auth = new Auth();

// Register Code Block
if (isset($_POST) && $_POST['action'] == "regform") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_BCRYPT);
    $photo_name = $_FILES['photo']['name'];
    $photo_tmp_name = $_FILES['photo']['tmp_name'];
    $photo_name = explode(".", $photo_name);
    $photo_name = end($photo_name);
    $photo = uniqid() . time() . "." . $photo_name;

    if ($auth->checkEmail($email) === 0) {
        $result = $auth->adminRegister($name, $email, $password, $photo);
        if ($result) {
            move_uploaded_file($photo_tmp_name, "img/$photo");
            echo "Registration Successful!";
        } else {
            echo "Registration Failed!";
        }
    } else {
        echo "You are already Registered!";
    }
}



// Login Code Block
if (isset($_POST['action']) && $_POST['action'] == "loginform") {
    $email = $_POST['email'];
    $password = $_POST["password"];
    $remember = false;

    if (isset($_POST['remember'])) {
        $remember = $_POST["remember"];
    }

    $row = $auth->checkEmail($email);
    if ($row === 1) {
        $dbpass = $auth->getRow($email)['password'];
        if (password_verify($password, $dbpass)) {
            if ($remember == "on") {
                $_SESSION['loggedin'] = $email;
                setcookie("login", $email, time() + (86400 * 7));
                echo "login Success";
            } else {
                $_SESSION['loggedin'] = $email;
                echo "login Success";
            }
        } else {
            echo "Incorrect Password!";
        }
    } else {
        // echo "Email Not Exist!";
        echo "Wrong Information";
    }
}
