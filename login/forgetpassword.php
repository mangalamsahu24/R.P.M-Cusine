<?php
$con = mysqli_connect('localhost', 'root', '',);
mysqli_select_db($con, 'userform');

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $email_check = "SELECT * FROM `user` WHERE email='" . $email . "' && name='" . $name . "'";
    $res = mysqli_query($con, $email_check);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        $password = $row['password'];
        $subject = "Forgoten password ";
        $message = "Your applied to forgot password So your password is $password";
        $sender = "From: rpmcusine247@gmail.com";
        if (mail($email, $subject, $message, $sender)) {
            echo '<script type="text/JavaScript"> alert("We have sent password to your email id");; window.location.href = "login.php";</script>';
            exit();
        }
    } else {
        echo '<script type="text/JavaScript"> alert("There is no member with this name and email");; window.location.href = "register.php";</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Template</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<style>
    body {
        background-image: radial-gradient(circle 610px at 5.2% 51.6%, #485563, #29323c);
    }

    .form-control {
        box-shadow: 5px 5px 5px 0 rgba(0, 0, 0.5, 0.6);
        transition: 0.5s;
        width: 100%;
    }

    .card {
        box-shadow: 10px 10px 15px 10px rgba(0, 0, 0.5, 0.6);
        transition: 0.5s;
        width: 100%;
    }

    .card:hover {
        box-shadow: 20px 28px 26px 0 rgba(0, 0, 0.5, 0.6);
    }

    .card .login-card-img {
        box-shadow: 5px 5px 5px 5px rgba(0, 0, 0.5, 0.6);
        transition: 0.5s;
        width: 100%;
    }

    .card .login-card-img:hover {
        box-shadow: 0 0 30px 20px rgba(0, 0, 0.5, 0.6);
    }

    .card .card-body button[type=submit] {
        background: #cda45e;
        border: 0;
        padding: 10px 35px;
        color: #fff;
        transition: 0.4s;
        border-radius: 50px;
    }

    .card .card-body button[type=submit]:hover {
        background: #d3af71;
    }
</style>

<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="col-xl-9  mx-auto justify-content-center form p-4">
                <div class="card" style="border-radius: 30px;">
                    <div class="row no-gutters">
                        <div class="col-md-6" style="font-family: Merienda, sans-serif; font-weight: 2px">
                            <div class="card-body">
                                <h2 class="text-center"><img src="../assets/img/favicon.png" alt="logo" class="logo" height="60px"></h2>
                                <h2 class="text-center" style="color: #e3c888">Forgot Password</h2>
                                <p class="text-center" style="color: #e3c888">Enter your name and email.</p>
                                <form action="forgetpassword.php" method="POST">
                                    <div class="form-group">
                                        <label for="name" class="sr-only">Name</label>
                                        <input class="form-control" type="name" name="name" id="name" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="sr-only">Email</label>
                                        <input class="form-control" type="email" name="email" id="email" placeholder="Email Address" required>
                                    </div>
                                    <div class="form-group"></div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-secondary form-control" name="submit">Submit</button>
                                    </div>
                                </form>
                                <p class="login-card-footer-text" style="font-size: 15px;">Don't have an account? <a href="register.php" class="text-reset">Register here</a></p>
                                <p>Have an account?<a href="login.php" class="text-reset">Login here</a></p>
                                <nav class="login-card-footer-nav">
                                    <a href="#!">Terms of use.</a>
                                    <a href="#!">Privacy policy</a>
                                </nav>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="../assets/img/rpmlogo.png" alt="login" class="login-card-img" style="border-radius: 30px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="register.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>