<?php
session_start();
require_once("../vendor/autoload.php");

use App\classes\Auth;

$auth = new Auth();

// Register Code Block
if (isset($_POST['action']) && $_POST['action'] == "regform") {
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
                $_SESSION['login'] = $email;
                setcookie("login", $email, time() + (86400 * 7));
                echo "login Success";
            } else {
                $_SESSION['login'] = $email;
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




// Forget Password
if (isset($_POST['action']) && $_POST['action'] == "resetpass") {
    $email = $_POST['email'];
    $token = md5(uniqid() . time() . rand(1, 10000) . uniqid());
    $row = $auth->checkEmail($email);
    if ($row == 1) {
        $subject = "Verify Your Email";
        $body = "
        Please verify your email Account by <a href='http://localhost/dcw/admin/verify.php?token=" . $token . "'>Click here</a><br>
            <a href='http://localhost/dcw/admin/verify.php?token=" . $token . "'>Click here</a>
        ";
        if (mail($email, $subject, $body)) {
            if ($auth->resetMail($email, $token)) {
                echo "check";
            } else {
                echo "Failed to reset email.";
            }
        } else {
            echo "Failed to reset email.";
        }
    } else {
        echo "You are not Registered!";
    }
}


// Update new password
if (isset($_POST['action']) && $_POST['action'] == "updatenewpass") {
    $password = $_POST['password'];
    $token = $_SESSION['newpass'];
    $password = password_hash($password, PASSWORD_BCRYPT);
    if ($auth->updatePassword($password, $token)) {
        echo "<script>alert('Password Update Successfully');window.location = 'login.php'</script>";
    } else {
        echo "<script>alert('Something went wrong..');window.location = 'login.php'</script>";
    }
}
