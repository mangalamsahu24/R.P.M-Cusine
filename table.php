<?php
//  require_once "login/controllerUserData.php"; 
include("login/session.php");
if (isset($_SESSION['type'])) {
    if ($_SESSION['type'] == 2) {
    } else {
        echo "<script>alert('access unavilable');window.location='login/login.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Restaurantly Bootstrap Template - Inner Page</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<style>
    body {
        background-image: radial-gradient(circle 610px at 5.2% 51.6%, #485563, #29323c);
    }

    .book-a-table .table-form {
        width: 100%;
        font-family: Playfair Display, serif;
    }

    .book-a-table .table-form .form-group {
        padding-bottom: 8px;
    }

    .book-a-table .table-form .loading:before {
        content: "";
        display: inline-block;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        margin: 0 10px -6px 0;
        border: 3px solid #cda45e;
        border-top-color: #1a1814;
        -webkit-animation: animate-loading 1s linear infinite;
        animation: animate-loading 1s linear infinite;
    }

    .book-a-table .table-form input,
    .book-a-table .table-form textarea {
        border-radius: 10px;
        box-shadow: none;
        font-size: 14px;
        background: #485563;
        border-color: #625b4b;
        color: white;
        font-family: "Merienda", sans-serif;
    }

    .book-a-table .table-form input::-moz-placeholder,
    .book-a-table .table-form textarea::-moz-placeholder {
        color: #e3c888;
    }

    .book-a-table .table-form input::placeholder,
    .book-a-table .table-form textarea::placeholder {
        color: #e3c888;
        font-size: 17px;
        font-weight: 400;

    }

    .book-a-table .table-form input:focus,
    .book-a-table .table-form textarea:focus {
        border-color: #cda45e;
    }

    .book-a-table .table-form input {
        height: 44px;
    }

    .book-a-table .table-form textarea {
        padding: 10px 12px;
    }

    .book-a-table .table-form button {
        background: #cda45e;
        border: 0;
        padding: 10px 35px;
        color: #fff;
        transition: 0.4s;
        border-radius: 50px;
    }

    .book-a-table .table-form button:hover {
        background: #d3af71;
    }
</style>

<body>

    <?php include("nav.php"); ?>
    <main id="main">
        <section class="breadcrumbs" style="margin-top: 140px;">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Table Reservation Page</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Table Page</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- ======= Book A Table Section ======= -->
        <section id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Reservation</h2>
                    <p>Book a Table</p>
                </div>
                <?php
        if (isset($_SESSION['type'])) {
            if ($_SESSION['type'] == 2) {
        ?>
                <a href="" class="book-a-table scrollto" style="font-size: 20px;"><?php echo $_SESSION['email'];?></a>
                
                <?php
            }
        } ?>
                <div class="col-xl-10  mx-auto justify-content-center form p-4">

                    <form action="table_insert_mail.php" method="post" role="form" name="tableform" class="table-form" data-aos="fade-up" data-aos-delay="100" style="font-family: Merienda, sans-serif; font-weight: 2px">
                        <div class="row mt-3 g-2">
                            <div class="col-lg-4 col-md-4  ">
                                <label>* Your Full Name :</label>
                                <input type="text" name="name" class="form-control name" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-lg-4 col-md-6  ">
                                <label for="email">* Your E-mail :</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                            <div class="col-lg-4 col-md-6 ">
                                <label for="mobile">* Your Phone no :</label>
                                <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Your mobile No" minlength="1000000000">
                            </div>
                            <div class="col-lg-4 col-md-6 form-group">
                                <label for="date">* Reservation Date :</label>
                                <input style="color: #e3c888" type="date" name="date" class="form-control" id="date" placeholder="Date" required>
                                <script>
                                    var a_date = document.getElementById("date");
                                    // console.log(a_date);
                                    var cur_date = new Date();
                                    var cyear = cur_date.getFullYear();
                                    var cmonth = cur_date.getMonth() + 1;
                                    var cdate = cur_date.getDate();
                                    if (cmonth < 10) {
                                        if (cdate < 10) {
                                            var cmonth = "0" + cmonth;
                                            var cdate = "0" + cdate;
                                            var c_day = cyear + "-" + cmonth + "-" + cdate;
                                            var dateControl = a_date;
                                            dateControl.value = c_day;
                                            // console.log(c_day);
                                        } else {
                                            var cmonth = "0" + cmonth;
                                            var c_day = cyear + "-" + cmonth + "-" + cdate;
                                            var dateControl = a_date;
                                            dateControl.value = c_day;
                                            // console.log(c_day);
                                        }
                                    } else {
                                        if (cdate < 10) {
                                            var cdate = "0" + cdate;
                                            var c_day = cyear + "-" + cmonth + "-" + cdate;
                                            var dateControl = a_date;
                                            dateControl.value = c_day;
                                            // console.log(c_day);
                                        } else {
                                            var c_day = cyear + "-" + cmonth + "-" + cdate;
                                            var dateControl = a_date;
                                            dateControl.value = c_day;
                                            // console.log(c_day);
                                        }
                                    }
                                </script>
                            </div>
                            <div class="col-lg-4 col-md-6 form-group">
                                <label for="time">* Reservation Time :</label>
                                <input style="color: #e3c888" type="time" class="form-control" name="time" id="time" placeholder="Reservation Time" required>
                            </div>
                            <div class="col-lg-4 col-md-6 form-group">
                                <label for="people">* No of people (children included) :</label>
                                <input type="number" class="form-control" name="people" id="people" placeholder="# of people" minlength="1" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="message">Note (optional):</label>
                            <textarea class="form-control" name="message" id="message" rows="2" placeholder="Requirement or Special Request"></textarea>
                        </div>
                        <div class="mb-3 col-lg-1 col-md-1 form-check">
                        </div>
                        <div class="row">
                            <div class="mb-3 col-lg-1 col-md-1 form-check">
                                <input type="checkbox" class="check-input" style="color:black" required>
                            </div>
                            <div class="col-lg-11 col-md-11 form-group">
                                <h9 style="font-size: 13px;">* I hereby agree the terms and conditions from the about page and understand that the cancellation fees will not be refundable if the Table reserved cancellation or no-show</h9>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                        </div>

                        <div class="row  ">

                            <div class="col-lg-6 ">
                                <div class="row ">
                                    <div class="col-md-6 form-group ">
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0 ">
                                        <button type="submit">Book a Table</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                            <script>
                                function fun() {
                                    location.reload();
                                }
                            </script>
                                <div class="row ">
                                    <div class="col-md-6 form-group ">
                                        <button type="reset" onclick="fun()">Clear form</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Book A Table Section -->

    </main>

    <?php include("footer.html"); ?>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="table.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>