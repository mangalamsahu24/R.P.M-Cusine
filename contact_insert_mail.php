<?php
include("connect.php");

if (isset($_POST['email'])) {
    // Set connection variables

    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject =  $_POST['subject'];
    $msg =  $_POST['message'];

    $chksql = "SELECT * FROM `contact` WHERE c_name='" . $name . "' && c_email='" . $email . "' && c_subject='" . $subject . "' && c_message='" . $msg . "'";
    $chkres = mysqli_query($con, $chksql);

    if (mysqli_num_rows($chkres) == 0) {
        $sql = "INSERT INTO `contact`(`c_name`, `c_email`, `c_subject`, `c_message`) VALUES ('$name', '$email', '$subject', '$msg')";

        $query = mysqli_query($con, $sql);

        if ($query == 1) {

            require 'PHPMailer-master/PHPMailerAutoload.php';
            $to = "sahumangalam24@gmail.com, $email";
            $subject = "This Email is generated from R.P.M.Cusine contact form";
            $body = " <br>Email from: " . $name . "<br> Email Address: " . $email . "<br> subject: " . $subject . "<br><br>" . $msg . "<br><br>";
            if (mail($to, $subject, $body)) {


                echo '<script type="text/JavaScript">     alert("Thank you for your Message, we will be in touch with you very soon");window.location.href = "contact.php"; </script>';
            } else {

                echo '<script type="text/JavaScript">     alert("Something went wrong. Try Again!"); window.location.href = "contact.php";</script>';
            }
        } else {
            echo "<script>alert('pls entry again');window.location='contact.php'</script>";
        }
    } else {
        echo "<script>alert('This entry already exists');window.location='contact.php'</script>";
    }
}
