<!DOCTYPE html>
<html lang="zxx">
<?php require('../config/autoload.php'); ?>
<?php
$dao=new DataAccess();



?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chic retreat</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon search-switch">
            <i class="icon_search"></i>
        </div>
        <div class="header-configure-area">
            <div class="language-option">
                <img src="img/flag.jpg" alt="">
                <span>EN <i class="fa fa-angle-down"></i></span>
                <div class="flag-dropdown">
                    <ul>
                        <li><a href="#">Zi</a></li>
                        <li><a href="#">Fr</a></li>
                    </ul>
                </div>
            </div>
            <a href="#" class="bk-btn">Booking Now</a>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./rooms.html">Rooms</a></li>
                <li><a href="./about-us.html">About Us</a></li>
                <li><a href="./pages.html">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./room-details.html">Room Details</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                        <li><a href="#">Family Room</a></li>
                        <li><a href="#">Premium Room</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">News</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> (12) 345 67890</li>
            <li><i class="fa fa-envelope"></i> info.colorlib@gmail.com</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
 <header class="header-section" style="background-color: white; color: white;">
            <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> +7736 299 405</li>
                            <li><i class="fa fa-envelope"></i> chicRetreat@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <a href="resorts.php" class="bk-btn">Book Now</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="./index.php">
                                <img src="img/name.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li ><a href="./index.php">Home</a></li>
                                    <li><a href="./about-us.php">About Us</a></li>
                                    <li class="active"><a href="./resorts.php">Resorts</a></li>
                                    <li><a href="./gallery.php">Gallery</a></li>
                                    <li><a href="./pages.php">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="./room-details.php">Room Details</a></li>
                                            <li><a href="./blog-details.php">Blog Details</a></li>
                                            <li><a href="#">Family Room</a></li>
                                            <li><a href="#">Premium Room</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="./contact.php">Contact</a></li>
                                    <li><a href="../guest_reg/login.php">Log In</a></li>
                                    <li><a href="../guest_reg/regestration.php">Sign Up</a></li>
                                </ul>
                            </nav>
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->




    <!-- Breadcrumb Section Begin -->
     <?php
     if(isset($_GET["hid"]))
     {
        $hid=$_GET["hid"];
     }?>
    <div class="breadcrumb-section"  style="background-color:maroon; background-size: cover; background-position: center; padding: 50px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Booking</h2>
                        <div class="bt-option">
                            <a href="./index.php">Home</a>
                            <a href="./resorts.php">Resorts</a>
                            <a href="./rooms.php">Rooms</a>
                            <span>Booking</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <!-- Breadcrumb Section End -->

    <!-- Room Details Section Begin -->
    <!-- Room Details Section Begin -->
<section class="room-details-section spad" style="margin-left: 2px; margin-right: 50px; margin-bottom: 60px; margin-top: 60px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="room-booking" style="padding: 20px; border: 1px solid maroon; border-radius: 0px; background-color: #f9f9f9;">
                    <h3 style="text-align: center; margin-bottom: 20px; color:maroon; font-weight:bold;">Your Reservation</h3><br>
                    <form action="#" style="display: flex; flex-wrap: wrap; gap: 15px; align-items: flex-end;">
                        <div class="check-date" style="flex: 1; min-width: 200px;">
                            <label for="date-in">Check In Date:</label>
                            <input type="text" class="date-input" id="date-in" style="width: 100%; padding: 10px; border-radius: 0px; border: 1px solid maroon;">
                        </div>
                        <div class="check-date" style="flex: 1; min-width: 200px;">
                            <label for="date-out">Check Out:</label>
                            <input type="text" class="date-input" id="date-out" style="width: 100%; padding: 10px; border-radius: 0px; border: 1px solid maroon;">
                        </div>
                        <div class="check-date" style="flex: 1; min-width: 200px;">
                            <label for="date-out">Check Out:</label>
                            <input type="text" class="date-input" id="date-out" style="width: 100%; padding: 10px; border-radius: 0px; border: 1px solid maroon;">
                        </div>
                        <div class="check-date" style="flex: 1; min-width: 200px;">
                            <label for="date-out">Check Out:</label>
                            <input type="text" class="date-input" id="date-out" style="width: 100%; padding: 10px; border-radius: 0px; border: 1px solid maroon;">
                        </div>
                        <div class="select-option" style="flex: 1; min-width: 200px;">
                            <label for="guest">Guests:</label>
                            <select id="guest" style="width: 100%; padding: 10px; border-radius: 0px; border: 1px solid maroon;">
                                <option value="3 Adults">3 Adults</option>
                                <option value="2 Adults">2 Adults</option>
                                <option value="1 Adult">1 Adult</option>
                            </select>
                        </div>
                        <div class="select-option" style="flex: 1; min-width: 200px;">
                            <label for="room">Room:</label>
                            <select id="room" style="width: 100%; padding: 10px; border-radius: px; border: 1px solid maroon;">
                                <option value="1 Room">1 Room</option>
                                <option value="2 Rooms">2 Rooms</option>
                                <option value="3 Rooms">3 Rooms</option>
                            </select>
                        </div>
                        <div style="flex: 1; min-width: 200px;">
                            <button type="submit" style="width: 100%; padding: 10px; background-color: maroon; color: white; border: none; border-radius: 0px; cursor: pointer; text-transform: uppercase;">Check Availability</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Room Details Section End -->

 
    <!-- Room Details Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#">
                                    <img src="img/footer-logo.png" alt="">
                                </a>
                            </div>
                            <p>We inspire and reach millions of travelers<br /> across 90 local websites</p>
                            <div class="fa-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contact Us</h6>
                            <ul>
                                <li>(12) 345 67890</li>
                                <li>info.colorlib@gmail.com</li>
                                <li>856 Cordia Extension Apt. 356, Lake, United State</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6>New latest</h6>
                            <p>Get the latest updates and offers.</p>
                            <form action="#" class="fn-form">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Environmental Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="co-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>