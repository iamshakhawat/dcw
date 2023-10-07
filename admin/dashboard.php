<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="../assets/image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/admin/register.css">
    <link rel="stylesheet" href="../assets/fontawesome-free-5.15.4-web/css/all.min.css">

</head>

<body>

    <div class="container">
        <div class="row">
            <?php
            if (mail("shakhawat9083@gmail.com", "Testing purpose", "Hey What'sapp")) {
                echo "Send Success";
            } else {
                echo "failed";
            }

            ?>
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/admin/register.js"></script>


</body>

</html>