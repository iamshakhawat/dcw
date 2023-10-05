<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/admin/login.css">
    <link rel="stylesheet" href="../assets/fontawesome-free-5.15.4-web/css/all.min.css">

</head>

<body>

    <div class="container">
        <div class="row justify-content-center" style="height: 100vh;">
            <div class="col-lg-6 my-auto">
                <div class="card">
                    <form action="#" method="POST">
                        <h2 class="text-center">Admin Login</h2>
                        <hr class="mt-1">
                        <div class="form-group px-3 mb-3">
                            <label>Email:</label>
                            <div class="input-group">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text rounded-0" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                </div>
                                <input type="text" name="username" class="form-control rounded-0" placeholder="Username or Email">
                            </div>
                        </div>
                        <div class="form-group px-3 mb-3">
                            <label>Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i class="fa fa-key"></i></span>
                                </div>
                                <input type="text" name="username" class="form-control rounded-0" placeholder="Password">
                            </div>
                        </div>
                        <div class="px-3 d-flex justify-content-between align-items-center">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                            </div>
                            <a href="#" class=" text-decoration-none">Forget Password?</a>
                        </div>
                        <button type="submit" name="adminlogin" class="btn btn-primary btn-hover rounded-0 d-block  mx-auto my-3
                        ">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/admin/login.js"></script>
</body>

</html>