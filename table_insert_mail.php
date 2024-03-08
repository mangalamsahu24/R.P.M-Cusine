<?php
include("connect.php");

if (isset($_POST['email'])) {
 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone =  $_POST['phone'];
    $date =  $_POST['date'];
    $time =  $_POST['time'];
    $people =  $_POST['people'];
    $msg =  $_POST['message'];

    $chksql = "SELECT * FROM `table_reservation` WHERE t_date='" . $date . "' && t_time='" . $time . "'";
    $chkres = mysqli_query($con, $chksql);

    if (mysqli_num_rows($chkres) == 0) {
        $sql = "INSERT INTO `table_reservation`(`t_name`, `t_email`, `t_phone`, `t_date`, `t_time`, `t_people`, `t_message`) VALUES ('$name', '$email', '$phone', '$date', '$time', '$people', '$msg')";

        $query = mysqli_query($con, $sql);

        if ($query == 1) {

            require 'PHPMailer-master/PHPMailerAutoload.php';
            $to = "sahumangalam24@gmail.com, $email";
            $subject = "This Email is generated from R.P.M.Cusine Table reservation form";
            $body = " There will be confirmation call on your phone no for table booking confirmation Email
            : " . $name . " Email Address: " . $email . " subject: " . $subject . "";
            if (mail($to, $subject, $body)) {

                // $mail = new PHPMailer;

                // //Tell PHPMailer to use SMTP
                // $mail->isSMTP();


                // $mail->SMTPDebug = 0;

                // //Ask for HTML-friendly debug output
                // $mail->Debugoutput = 'html';

                // //Set the hostname of the mail server
                // $mail->Host = 'p3plzcpnl469081.prod.phx3.secureserver.net';

                // //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
                // $mail->Port = 587;

                // //Set the encryption system to use - ssl (deprecated) or tls
                // $mail->SMTPSecure = 'tls';

                // //Whether to use SMTP authentication
                // $mail->SMTPAuth = true;

                // //Username to use for SMTP authentication - use full email address for gmail
                // $mail->Username = "thunderninja1521@skilllilregisters.in";

                // //Password to use for SMTP authentication
                // $mail->Password = "Ninja007@";

                // //Set who the message is to be sent from
                // $mail->setFrom('admin@rpmcusine.in', 'R.P.M.Cusine');

                // //Set an alternative reply-to address
                // $mail->addReplyTo('admin@rpmcusine.in', 'R.P.M.Cusine');

                // //Set who the message is to be sent to
                // $mail->addAddress($to, $mail->Username);
                // $mail->addAddress("contact@rpmcusine.in", $mail->Username);

                // //Set the subject line
                // $mail->Subject = $subject;
                // $mail->Body = $body;


                // //Replace the plain text body with one created manually
                // $mail->AltBody = 'enquiry email';

                // if ($mail->send()) {

                echo '<script type="text/JavaScript">     alert("Thank you for your Table reservation Request, we will contact to confirm the request with you very soon");window.location.href = "table.php"; </script>';
            } else {
                echo '<script type="text/JavaScript">     alert("Something went wrong. Try Again!"); window.location.href = "table.php";</script>';
            }
        } else {
            echo "<script>alert('pls entry again');window.location='table.php'</script>";
        }
    } else {
        echo "<script>alert('This time and date is already booked . pls select different time and date');window.location='table.php'</script>";
    }
} else {
    echo '<script type="text/JavaScript">     alert("Please Enter email correctly. Try Again!"); window.location.href = "table.php";</script>';
}
