<?php
// require_once "login/controllerUserData.php"; 
include ("login/session.php");
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



    <!-- =======================================================
  * Template Name: Restaurantly - v3.7.0
  * Template URL: https://sahu.com/restaurantly-restaurant-template/
  * Author: sahu.com
  * License: https://sahu.com/license/
  ======================================================== -->
</head>
<style>
    body {
        font-family: "Merienda", sans-serif;
        background-image: radial-gradient(circle 610px at 5.2% 51.6%, #485563, #29323c);
    }

    .book-a-table .table-form {
        width: 100%;
        font-family: Playfair Display, serif;
    }

    .book-a-table .table-form .form-group {
        padding-bottom: 8px;
    }

    .book-a-table .table-form .validate {
        display: none;
        color: red;
        margin: 0 0 15px 0;
        font-weight: 400;
        font-size: 30px;
    }

    /* .book-a-table .table-form .loading {
        display: none;
        text-align: center;
        padding: 15px;
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
    } */

    .book-a-table .table-form input,
    .book-a-table .table-form select,
    .book-a-table .table-form textarea {
        font-family: "Merienda", sans-serif;
        border-radius: 10px;
        box-shadow: none;
        font-size: 15px;
        background: #485563;
        border-color: #625b4b;
        color: white;
    }

    .book-a-table .table-form input::-moz-placeholder,
    .book-a-table .table-form select::-moz-placeholder,
    .book-a-table .table-form textarea::-moz-placeholder {
        color: #e3c888;
    }

    .book-a-table .table-form input::placeholder,
    .book-a-table .table-form select::placeholder,
    .book-a-table .table-form textarea::placeholder {
        color: #e3c888;
        font-size: 17px;
        font-weight: 400;

    }

    .book-a-table .table-form input:focus,
    .book-a-table .table-form select:focus,
    .book-a-table .table-form textarea:focus {
        border-color: #cda45e;
    }

    .book-a-table .table-form input {
        height: 44px;
    }

    .book-a-table .table-form select {
        height: 44px;
    }


    .book-a-table .table-form textarea {
        padding: 10px 12px;
    }

    .book-a-table .table-form button[type=submit] {
        background: #cda45e;
        border: 0;
        padding: 10px 35px;
        color: #fff;
        transition: 0.4s;
        border-radius: 50px;
    }

    .book-a-table .table-form button[type=submit]:hover {
        background: #d3af71;
    }
</style>

<body>

    <?php include("nav.php"); ?>
    <main id="main">
        <section class="breadcrumbs" style="margin-top: 140px;">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Event Page</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Event Page</li>
                    </ol>
                </div>

            </div>
        </section>

        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2> main Events</h2>
                    <p>Organize Your Events in our Restaurant</p>
                </div>

                <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Birthday Parties</h3>
                                    <div class="price">
                                        <p><span>Rs 14.5k</span></p>
                                    </div>
                                    <p class="fst-italic">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                    <ul>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                        <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    </ul>
                                    <p>
                                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Private Parties</h3>
                                    <div class="price">
                                        <p><span>Rs 22.5k</span></p>
                                    </div>
                                    <p class="fst-italic">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                    <ul>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                        <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    </ul>
                                    <p>
                                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Custom Parties</h3>
                                    <div class="price">
                                        <p><span>Rs 8k</span></p>
                                    </div>
                                    <p class="fst-italic">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                    <ul>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                        <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    </ul>
                                    <p>
                                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Events Section -->
        <section id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Reservation</h2>
                    <p>Book a Event</p>
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

                    <form action="event_insert_mail.php" method="post" role="form" class="table-form" data-aos="fade-up" data-aos-delay="100" style="font-family: Merienda, sans-serif; font-weight: 2px">
                        <div class="row mt-3 g-2">
                            <div class="col-lg-4 col-md-4 form-group">
                                <label>* Your First Name :</label>
                                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Your First Name" required>
                            </div>
                            <div class="col-lg-4 col-md-4 form-group">
                                <label>* Your Lastname Name :</label>
                                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Your Last Name" required>
                            </div>
                            <div class="col-lg-4 col-md-6 form-group">
                                <label>* Your E-mail :</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                            <div class="col-lg-4 col-md-6 form-group">
                                <label>* Your Phone no :</label>
                                <input type="text" class="form-control" name="phone" id="mobile" placeholder="Your Phone" required>
                            </div>
                            <div class="col-lg-4 col-md-6 form-group">
                                <label for="date">* Reservation Date :</label>
                                <input style="color: #e3c888" type="date" name="date" class="form-control" id="date" placeholder="Date" required>
                            </div>
                            <div class="col-lg-4 col-md-6 form-group">
                                <label for="time">* Event Start Time :</label>
                                <input style="color: #e3c888" type="time" class="form-control" name="stime" id="time" required>
                            </div>
                            <div class="col-lg-4 col-md-6 form-group">
                                <label for="time">* Event End Time :</label>
                                <input style="color: #e3c888" type="time" class="form-control" name="etime" id="time" required>
                            </div>
                            <div class="col-lg-4 col-md-6 form-group">
                                <label>* No of people :</label>
                                <input type="number" class="form-control" name="people" id="people" placeholder="# of people" minlength="2" required>
                            </div>
                            <div class="col-lg-4 col-md-4 form-group">
                                <label>* Guest under 18 :</label>
                                <select class="form-control" id="child" name="child" required style="color: #e3c888">
                                    <option value="" selected hidden> Guest Under 18 </option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-4 form-group">
                                <label>* Event Type :</label>
                                <select class="form-control" id="event" name="event" style="color: #e3c888" required>
                                    <option value="" selected hidden> Event Type</option>
                                    <option value="Birthday party">Birthday party</option>
                                    <option value="Private Parties">Private Parties</option>
                                    <option value="Custom Parties">Custom Parties</option>
                                    <option value="Marrige">Marrige</option>
                                    <option value="">Other Events</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-4 form-group">
                                <label>Other Event :</label>
                                <input type="text" name="evento" class="form-control" id="evento" placeholder="Event Type">
                            </div>
                            <div class="col-lg-4 col-md-4 form-group">
                                <label>* Your budget :</label>
                                <input type="number" name="budget" class="form-control" id="budget" placeholder="your budget" required>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-6 ">
                                <div class="row ">
                                    <div class="form-group mt-3 ">
                                        <label>* Address :</label>
                                        <input type="text" class="form-control" name="street" id="street" placeholder="Street address">
                                    </div>
                                    <div class="col-md-6 form-group ">
                                        <label>* landmark :</label>
                                        <input type="text" name="landmark" class="form-control" id="landmark" placeholder="Landmark">
                                    </div>
                                    <div class="col-md-6 form-group ">
                                        <label>* State :</label>
                                        <input type="text" class="form-control" name="state" id="state" placeholder="Your state">
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-6 mt-5 mt-lg-0 ">

                                <div class="row ">
                                    <div class="form-group mt-3 ">
                                        <label>* Address2 :</label>
                                        <input type="text " class="form-control" name="address" id="address" placeholder="street Address2 ">
                                    </div>
                                    <div class="col-md-6 form-group ">
                                        <label>* City :</label>
                                        <input type="text " name="city" class="form-control" id="city" placeholder="Your Distric ">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>* Pincode :</label>
                                        <input type="number" class="form-control" name="pincode" id="pincode" placeholder="Your pincode">
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="form-group mt-3">
                            <label for="message">Note (optional):</label>
                            <textarea class="form-control" name="message" rows="2" placeholder="Requirement or Special Request"></textarea>
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
                                        <button type="submit">Book a Event</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="row ">
                                    <div class="col-md-6 form-group ">
                                        <button type="submit">Clear form</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <?php include("footer.html"); ?>


    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="event.js"></script>
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