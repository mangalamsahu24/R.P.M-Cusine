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

    <!-- =======================================================
  * Template Name: Restaurantly - v3.7.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
    body .menu{
            background-image: radial-gradient( circle 610px at 5.2% 51.6%,  #485563, #29323c );
    }

    body .menu .row .menu-content .color{
        background-color: #485563;
    }
</style>
<body>
    <?php include("nav.php"); ?>

    <main id="main">
        <section class="breadcrumbs" style="margin-top: 140px;">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Menu Page</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>menu Page</li>
                    </ol>
                </div>

            </div>
        </section>

        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Menu</h2>
                    <p>Check Our Tasty Menu</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="menu-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-starters">Starters</li>
                            <li data-filter=".filter-salads">Salads</li>
                            <li data-filter=".filter-specialty">Specialty</li>
                        </ul>
                    </div>
                </div>

                <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-6 menu-item filter-starters">
                        <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#" class= "color">Lobster Bisque</a><span>Rs 595</span>
                        </div>
                        <div class="menu-ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-specialty">
                        <img src="assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#" class= "color">Bread Barrel</a><span>Rs 695</span>
                        </div>
                        <div class="menu-ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-starters">
                        <img src="assets/img/menu/cake.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#" class= "color">Crab Cake</a><span>Rs 795</span>
                        </div>
                        <div class="menu-ingredients">
                            A delicate crab cake served on a toasted roll with lettuce and tartar sauce
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-salads">
                        <img src="assets/img/menu/caesar.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#" class= "color">Caesar Selections</a><span>Rs 895</span>
                        </div>
                        <div class="menu-ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-specialty">
                        <img src="assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#" class= "color">Tuscan Grilled</a><span>Rs 995</span>
                        </div>
                        <div class="menu-ingredients">
                            Grilled chicken with provolone, artichoke hearts, and roasted red pesto
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-starters">
                        <img src="assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#" class= "color">Mozzarella Stick</a><span>Rs 495</span>
                        </div>
                        <div class="menu-ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-salads">
                        <img src="assets/img/menu/greek-salad.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#" class= "color">Greek Salad</a><span>Rs 995</span>
                        </div>
                        <div class="menu-ingredients">
                            Fresh spinach, crisp romaine, tomatoes, and Greek olives
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-salads">
                        <img src="assets/img/menu/spinach-salad.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#" class= "color">Spinach Salad</a><span>Rs 995</span>
                        </div>
                        <div class="menu-ingredients">
                            Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-specialty">
                        <img src="assets/img/menu/lobster-roll.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#" class= "color">Lobster Roll</a><span>Rs 195</span>
                        </div>
                        <div class="menu-ingredients">
                            Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Menu Section -->
    </main>

    <?php include("footer.html"); ?>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
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