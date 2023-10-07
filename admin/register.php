<?php
session_start();

if (isset($_SESSION['login']) || isset($_COOKIE['login'])) {
    header("location:dashboard.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Register</title>
    <link rel="shortcut icon" href="../assets/image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/admin/register.css">
    <link rel="stylesheet" href="../assets/fontawesome-free-5.15.4-web/css/all.min.css">

</head>

<body>

    <div class="container">
        <div class="row justify-content-center" style="height: 100vh;">
            <div class="col-lg-6 my-auto">
                <div class="card shadow">
                    <form method="POST" action="./action.php" id="regform" class="p-3" enctype="multipart/form-data">
                        <h2 class="text-center">Admin Register</h2>
                        <hr class="mt-1">
                        <div class="form-group px-3 mb-3">
                            <label>Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text rounded-0" id="basic-addon1"><i class="fa fa-user"></i></span>
                                </div>
                                <input required type="text" name="name" class="form-control rounded-0" placeholder="Enter your Name">
                            </div>
                        </div>
                        <div class="form-group px-3 mb-3">
                            <label>Email:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i class="fa fa-envelope"></i></span>
                                </div>
                                <input required type="email" name="email" class="form-control rounded-0" placeholder="Enter your Email">
                            </div>
                        </div>
                        <div class="form-group px-3 mb-3">
                            <label>Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i class="fa fa-key"></i></span>
                                </div>
                                <input required type="password" name="password" class="form-control rounded-0" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group px-3 mb-3">
                            <lable>Photo:</lable>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input required type="file" accept=".jpg,.png,.jpeg" class="custom-file-input" name="photo" id="photo" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 clearfix ">
                            <div class="float-right">
                                <p>Already have a account? <a href="../admin/login.php" class=" text-decoration-none">Login</a></p>
                            </div>
                        </div>
                        <button type="submit" name="adminlogin" class="btn mt-3 btn-outline-success rounded-0 d-block  mx-auto my-3 regBtn
                        ">Register</button>

                        <div class="result">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/admin/register.js"></script>

    <script>
        $('input[type="file"]').change(function(e) {
            $('.custom-file-label').html("Choose file");
            var fileName = e.target.files[0].name;
            if (fileName) {
                $('.custom-file-label').html(fileName);
            }
        });
    </script>

</body>

</html>