<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda">

<style>
    body {
        font-family: "Merienda", sans-serif;
    }
</style>
<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

        <div class="contact-info d-flex align-items-center">
            <!-- <i class="bi bi-phone d-flex align-items-center"><span></span></i> -->
            <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 23PM</span></i>
        </div>

        <!-- <div class="languages d-none d-md-flex align-items-center">
                <ul>
                    <li>En</li>
                    <li><a href="#">De</a></li>
                </ul>
            </div> -->
    </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between order-last">
        <a href="index.html"><img src="assets/img/lo.PNG" height="70px"></a>


        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        <?php $page = basename($_SERVER['PHP_SELF']); ?>

        <nav id="navbar" class="navbar order-last order-lg-0 or">
            <ul>
                <li class="dropdown"><a class="nav-link scrollto" style="font-size:17px;font-weight: 400;" href="index.php"><span>Home</span></a>
                    <ul>
                        <li><a class="nav-link scrollto" style="font-size:15px;font-weight: 200;" href="index.php#chefs">Chefs</a></li>
                        <li><a class="nav-link scrollto" style="font-size:15px;font-weight: 200;" href="index.php#specials">Specials</a></li>
                        <li><a class="nav-link scrollto" style="font-size:15px;font-weight: 200;" href="index.php#gallery">Gallery</a></li>
                    </ul>
                </li>
                <li></li>
                <li class="dropdown"><a class="nav-link scrollto" style="font-size:17px;font-weight: 400;" href="about.php"><span>About</span> </a>
                    <ul>
                        <li><a class="nav-link scrollto" style="font-size:15px;font-weight: 200;" href="about.php#about">About us</a></li>
                        <li><a class="nav-link scrollto" style="font-size:15px;font-weight: 200;" href="about.php#why">Why choose us</a></li>
                        <li><a class="nav-link scrollto" style="font-size:15px;font-weight: 200;" href="about.php#us">terms</a></li>
                    </ul>
                </li>
                <li>
                </li>
                <li><a class="nav-link scrollto" style="font-size:17px;font-weight: 400;" href="menu.php">Menu</a></li>
                <li class="dropdown"><a href="login/login.php" style="font-size:17px;font-weight: 400;"><span>Reservation</span> </a>
                    <ul>
                        <li><a class="nav-link scrollto" style="font-size: 15px;font-weight: 300;" href="table.php">Book a Table</a></li>
                        <li><a class="nav-link scrollto" style="font-size: 15px;font-weight: 300;" href="event.php">Event Booking</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" style="font-size:17px;font-weight: 400;" href="contact.php">Contact</a>
                </li>
                <!-- <?php
                // if (isset($_SESSION['type'])) {
                //     if ($_SESSION['type'] == 2) {
                ?>
                        <li class="dropdown"><a style="font-size:17px;font-weight: 400;" href=""><span>user</span></a>
                            <ul>
                                <li>
                                    <a class="nav-link scrollto <?php 
                                    // if ($page == '') : echo 'active';
                                    //                             endif; 
                                                                ?>" href="">Profile</a>
                                </li>

                                <li>
                                    <a class="nav-link scrollto <?php 
                                    // if ($page == 'logout.php') : echo 'active';
                                    //                             endif; 
                                                                ?>" href="login/logout.php">logout</a>
                                </li>
                            </ul>

                        </li>
                <?php
                //     }
                // } 
                ?> -->

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
        <?php
        if (isset($_SESSION['type'])) {
            if ($_SESSION['type'] == 2) {
        ?>
                <a href="login/logout.php" class="book-a-table-btn scrollto" style="font-size: 10px;">logout</a>
                
                <?php
            }
        } ?>
    <a href="login/register.php" class="book-a-table-btn scrollto">Register</a>
    </div>
</header>
<!-- End Header -->