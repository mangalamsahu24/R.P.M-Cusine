
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
        box-shadow: 10px 10px 10px 0 rgba(0, 0, 0.5, 0.6);
        transition: 0.5s;
        width: 100%;
    }

    .card:hover {
        box-shadow: 20px 28px 26px 0 rgba(0, 0, 0.5, 0.6);
    }

    .card .login-card-img{
        box-shadow: 5px 5px 5px 0 rgba(0, 0, 0.5, 0.6);
        transition: 0.5s;
        width: 100%;
    }

    .card .login-card-img:hover {
        box-shadow: 20px 28px 26px 0 rgba(0, 0, 0.5, 0.6);
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
                        <div class="col-md-6">
                            <img src="../assets/img/rpmlogo.png" alt="login" class="login-card-img" style="border-radius: 30px;">
                        </div>
                        <div class="col-md-6" style="font-family: Merienda, sans-serif; font-weight: 2px">
                            <div class="card-body">
                                <h2 class="text-center"><img src="../assets/img/favicon.png" alt="logo" class="logo" height="60px"></h2>
                                <h2 class="text-center" style="color: #e3c888">Login Form</h2>
                                <p class="text-center" style="color: #e3c888">Login with your email and password.</p>
                                <form action="verify.php" method="POST">
                                    <div class="form-group">
                                        <label for="email" class="sr-only">Email</label>
                                        <input class="form-control" type="email" name="email" id="email" placeholder="Email Address" required >
                                    </div>
                                    <div class="row" style="opacity: 0.75;text-align: center;font-size: 10px">
                                        &nbsp;<div class="col-xs-10"><input type="checkbox" name="show_password" id="show_password" onclick="myFunction()" class="" style="accent-color: #e3c888;">&nbsp;&nbsp;Show password</div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="password" class="sr-only">Password</label>
                                        <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
                                    </div>
                                    <div class="link forget-pass text-left"><a href="forgetpassword.php">Forgot password?</a></div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-secondary form-control" name="login">Login</button>
                                    </div>
                                    <script>
                                        function myFunction() {
                                            var checkBox = document.getElementById("show_password");
                                            var pword = document.getElementById("password");
                                            if (checkBox.checked == true) {
                                                pword.type = "text";
                                            } else {
                                                pword.type = "password";
                                            }
                                        }
                                    </script>
                                </form>
                                <p class="login-card-footer-text" style="font-size: 15px;">Don't have an account? <a href="register.php" class="text-reset">Register here</a></p>
                                <nav class="login-card-footer-nav">
                                    <a href="#!">Terms of use.</a>
                                    <a href="#!">Privacy policy</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        $('#email').keyup(function() {
            $('span.error-keyup-7').remove();
            var inputVal = $(this).val();
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,8})?$/;
            if (!emailReg.test(inputVal)) {
                $(this).after('<span class="error error-keyup-7" style="color:red;font-family: Merienda, sans-serif; font-weight: 2px;font-size: 13px;">Invalid Email Format.</span>');
            }
        });
        $('#password').keyup(function() {
            $('span.error-keyup-8').remove();
            var inputVal = $(this).val();
            var emailReg = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
            if (!emailReg.test(inputVal)) {
                $(this).after('<span class="error error-keyup-8" style="color:red;font-family: Merienda, sans-serif; font-weight: 2px;font-size: 13px;">Password Should be strong.</span>');
            }
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>