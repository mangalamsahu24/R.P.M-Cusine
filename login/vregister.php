<?php
session_start();

$con=mysqli_connect('localhost','root','',);
mysqli_select_db($con,'userform');

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($password !== $cpassword){
        echo '<script type="text/JavaScript"> alert("Confirm password not matched!");</script>';
    }
    $email_check = "SELECT * FROM `user` WHERE email='".$email."'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        echo '<script type="text/JavaScript"> alert("Email that you have entered is already exist!");; window.location.href = "register.php";</script>';
    }
    if(mysqli_num_rows($res) === 0){
        $type = 2;
        $insert_data = "INSERT INTO `user` (`name`, `email`, `password`, `type`)
                        values('$name', '$email', '$password', '$type')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){
            $subject = "Email Verified";
            $message = "Your are know verified. your password $password";
            $sender = "From: rpmcusine247@gmail.com";
            if(mail($email, $subject, $message, $sender)){
                $_SESSION['email'] = $email;
                header('location: credit.php');
                exit();
            }else{
                echo '<script type="text/JavaScript"> alert("Failed while sending code!");; window.location.href = "register.php";</script>';

            }
        }else{
            $errors['db-error'] = "";
            echo '<script type="text/JavaScript"> alert("Failed while inserting data into database!");; window.location.href = "register.php";</script>';

        }
    }
}
?>