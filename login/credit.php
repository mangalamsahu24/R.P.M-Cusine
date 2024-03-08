<?php
session_start();

$con = mysqli_connect('localhost', 'root', '',);
mysqli_select_db($con, 'userform');

$email = $_SESSION['email'];
if($email == false){
  header('Location: login.php');
}
if (isset($_POST['name'])) {
	$name = $_POST['name'];
	$card = $_POST['card'];
	$expired = $_POST['expired'];
	$cvv = $_POST['cvv'];
    $email_check = "SELECT * FROM `credit` WHERE card_no='".$card."'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        echo '<script type="text/JavaScript"> alert("Card and Name that you have entered is already exist!"); window.location.href = "register.php";</script>';
    }else{
	$sql = mysqli_query($con, "INSERT INTO `credit`(`email`, `card_no`, `cardh_name`, `exp_date`, `cvv`) VALUES ('$email', '$card', '$name', '$expired', '$cvv')");
	echo '<script type="text/JavaScript">alert("card Added successfuly"); window.location.href = "login.php";</script>';
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
                                <h2 class="text-center" style="color: #e3c888">Credit Details</h2>
                                <p class="icons" style="height: 50px;"> <img src="https://img.icons8.com/color/48/000000/visa.png" style="height: 50px;" /> <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" style="height: 50px;" /> <img src="https://img.icons8.com/color/48/000000/maestro.png" style="height: 50px;" /> </p>

                                <form action="credit.php" method="POST" autocomplete="">
                                    <div class="form-group">
                                        <label for="card" class="sr-only">Card Number:</label>
                                        <input class="form-control" type="text" name="card" id="cr_no" placeholder="0000 0000 0000 0000" minlength="19" maxlength="19" required>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="holder" class="sr-only">Cardholder's name:</label>
                                        <input class="form-control" type="text" name="name" placeholder="Cardholder's name:" required>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4 form-group">
                                            <span>Expiry date:</span>
                                            <input type="text" class="form-control" name="expired"id="exp" placeholder="MM/YY" minlength="5" maxlength="5">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <span>CVV:</span>
                                            <input type="text" class="form-control" name="cvv"  placeholder="&#9679;&#9679;&#9679;" minlength="3" maxlength="3">
                                        </div>
                                    </div>
                                    <input type="checkbox" id="save_card" class="align-left"> <label for="save_card">Save card details to credit</label>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-secondary form-control" name="Register">Register</button>
                                    </div>
                                </form>
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
        </div>
    </main>
    <script>
        //For Card Number formatted input
        var cardNum = document.getElementById('cr_no');
        cardNum.onkeyup = function(e) {
            if (this.value == this.lastValue) return;
            var caretPosition = this.selectionStart;
            var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
            var parts = [];

            for (var i = 0, len = sanitizedValue.length; i < len; i += 4) {
                parts.push(sanitizedValue.substring(i, i + 4));
            }
            for (var i = caretPosition - 1; i >= 0; i--) {
                var c = this.value[i];
                if (c < '0' || c > '9') {
                    caretPosition--;
                }
            }
            caretPosition += Math.floor(caretPosition / 4);

            this.value = this.lastValue = parts.join('-');
            this.selectionStart = this.selectionEnd = caretPosition;
        }

        //For Date formatted input
        var expDate = document.getElementById('exp');
        expDate.onkeyup = function(e) {
            if (this.value == this.lastValue) return;
            var caretPosition = this.selectionStart;
            var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
            var parts = [];

            for (var i = 0, len = sanitizedValue.length; i < len; i += 2) {
                parts.push(sanitizedValue.substring(i, i + 2));
            }
            for (var i = caretPosition - 1; i >= 0; i--) {
                var c = this.value[i];
                if (c < '0' || c > '9') {
                    caretPosition--;
                }
            }
            caretPosition += Math.floor(caretPosition / 2);

            this.value = this.lastValue = parts.join('/');
            this.selectionStart = this.selectionEnd = caretPosition;
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>