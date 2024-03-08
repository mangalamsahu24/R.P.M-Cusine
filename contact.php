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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<style>
    body {
        background-image: radial-gradient(circle 610px at 5.2% 51.6%, #485563, #29323c);
    }

    .contact .contact-form {
        width: 100%;
        font-family: Playfair Display, serif;
    }

    .contact .contact-form .form-group {
        padding-bottom: 8px;
    }

    .contact .contact-form .validate {
        display: none;
        color: red;
        margin: 0 0 15px 0;
        font-weight: 400;
        font-size: 13px;
    }

    .contact .contact-form .loading {
        display: none;
        text-align: center;
        padding: 15px;
    }

    .contact .contact-form .loading:before {
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

    .contact .contact-form input,
    .contact .contact-form textarea {
        border-radius: 0;
        box-shadow: none;
        font-size: 14px;
        border-radius: 5px;

        background: #485563;
        border-color: #625b4b;
        color: white;
    }

    .contact .contact-form input::-moz-placeholder,
    .contact .contact-form textarea::-moz-placeholder {
        color: #a49b89;

    }

    .contact .contact-form input::placeholder,
    .contact .contact-form textarea::placeholder {
        color: #a49b89;
        font-size: 17px;
        font-weight: 400;

    }

    .contact .contact-form input:focus,
    .contact .contact-form textarea:focus {
        border-color: #cda45e;

    }

    .contact .contact-form input {
        height: 44px;
    }

    .contact .contact-form textarea {
        padding: 10px 12px;
    }

    .contact .contact-form button[type=submit] {
        background: #cda45e;
        border: 0;
        padding: 10px 35px;
        color: #fff;
        transition: 0.4s;
        border-radius: 50px;
    }

    .contact .contact-form button[type=submit]:hover {
        background: #d3af71;
    }
</style>

<body>

    <?php include("nav.php"); ?>

    <main id="main">
        <section class="breadcrumbs" style="margin-top: 140px;">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Contact Page</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Contact Page</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </div>
            </div>

            <div data-aos="fade-up">
                <iframe style="border:0; width: 100%; height: 350px;" src="https://maps.google.com/maps?q=Navunikabi,%20Fiji&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen></iframe>
            </div>

            <div class="container " data-aos="fade-up ">

                <div class="row mt-5 ">

                    <div class="col-lg-4 " data-aos="fade-up" data-aos-delay="100">
                        <div class="info ">
                            <div class="address ">
                                <i class="bi bi-geo-alt "></i>
                                <h4>Location:</h4>
                                <p> XYZ, AB 000000</p>
                            </div>

                            <div class="open-hours ">
                                <i class="bi bi-clock "></i>
                                <h4>Open Hours:</h4>
                                <p>
                                    Monday-Saturday:<br> 11:00 AM - 2300 PM
                                </p>
                            </div>

                            <div class="email ">
                                <i class="bi bi-envelope "></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone ">
                                <i class="bi bi-phone "></i>
                                <h4>Call:</h4>
                                <p>+0 0000 0000 0000</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0 ">

                        <form action="contact_insert_mail.php" method="post" role="form" class="contact-form" data-aos="fade-up" data-aos-delay="300" style="font-family: Merienda, sans-serif; font-weight: 2px">
                            <div class="row ">
                                <div class="col-md-6 form-group">
                                    <label>Your Name :</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0 ">
                                    <label>Your E-mail :</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3 ">
                                <label>Subject for contacting :</label>
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3 ">
                                <label>Any Message :</label>
                                <textarea class="form-control" name="message" id="message" rows="8" placeholder="Message" required></textarea>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main>

    <?php include("footer.html"); ?>

    <div id="preloader "></div>
    <a href="# " class="back-to-top d-flex align-items-center justify-content-center "><i class="bi bi-arrow-up-short "></i></a>

    <!-- Vendor JS Files -->
    <script src="contact.js"></script>
    <script src="assets/vendor/aos/aos.js "></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js "></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js "></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js "></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js "></script>
    <script src="assets/vendor/php-email-form/validate.js "></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js "></script>

</body>

</html>