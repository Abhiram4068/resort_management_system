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
                <!-- <li><a href="./pages.html">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./room-details.html">Room Details</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                        <li><a href="#">Family Room</a></li>
                        <li><a href="#">Premium Room</a></li>
                    </ul>
                </li> -->
                <li><a href="./blog.html">News</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <!-- <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div> -->
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
                            <!-- <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div> -->
                            <?php
                            if(isset($_SESSION['email'])){
                            ?>
                            <a href="viewbooking.php" class="bk-btn">your bookings</a>
                            <?php }else{ ?>
                                <a href="../guest_reg/login.php" class="bk-btn">book now</a>
                                <?php } ?>
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
                                    <li><a href="./index.php">Home</a></li>
                                    <li><a href="./about-us.php">About Us</a></li>
                                    <li  class="active"><a href="./rooms.php">Rooms</a></li>
                                    <li><a href="./gallery.php">Gallery</a></li>
                                    <!-- <li><a href="./pages.php">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="./room-details.php">Room Details</a></li>
                                            <li><a href="./blog-details.php">Blog Details</a></li>
                                            <li><a href="#">Family Room</a></li>
                                            <li><a href="#">Premium Room</a></li>
                                        </ul>
                                    </li> -->
                                   
                                    <li><a href="./contact.php">Contact</a></li>
                                    <?php

if (isset($_SESSION['email'])) {
   
    ?>
    <li><a href="logout.php">Log Out</a></li>
    <?php
 } else {
    
     ?>
     <li><a href="../guest_reg/login.php">Log In</a>
     <ul class="dropdown">
                                            <li><a href="../hotel/login2.php">Receptionist Login</a></li>
                                            <li><a href="../guest_reg/login2.php">Guest Login</a></li>
                                           
                                        </ul>
    </li>
     <li><a href="../guest_reg/reg.php">Sign Up</a></li>
   <?php
}
?>


                                    
                                </ul>
                            </nav>
                            <!-- <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->




    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section"  style="background-color:maroon; background-size: cover; background-position: center; padding: 50px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Our Rooms</h2>
                        <div class="bt-option">
                            <a href="./index.php">Home</a>
                            <a href="./resorts.php">Resorts</a>
                            <span>Rooms</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <!-- Breadcrumb Section End -->

    <style>
/* Hover effect for the room card */
.room-item {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.room-item:hover {
    transform: scale(1.03);
    box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.6); /* More prominent black shadow */
}

/* Hover effect for the buttons */
.primary-btn {
    transition: background-color 0.3s ease, color 0.3s ease;
}

.primary-btn:hover {
    background-color: maroon;
    color: white;
}
</style>

<!-- Rooms Section Begin -->
<?php  

if(isset($_GET["hid"]))
{
    $_SESSION['hid']=$_GET['hid'];
}else{
    $_SESSION['hid']=$_SESSION['hid'];
}
?>
<br><br>
<section class="rooms-section spad" style="background-size: cover;">
    <div class="container">
        <div class="row d-flex flex-wrap">
            <?php
            $q = "SELECT * FROM category WHERE status = 1";
            $info = $dao->query($q);
            $i = 0;
            while ($i < count($info)) {
                $k=$i+1;
            ?>
            <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
                <div class="room-item" style="box-shadow: -8px 8px 15px rgba(0, 0, 0, 0.15); flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="<?php echo BASE_URL . 'uploads/' . $info[$i]['cimage']; ?>" alt="" style="width: 100%; height: 250px; object-fit: cover;">
                    <div class="ri-text" style="flex-grow: 1; padding: 20px;">
                        <h4 style="font-weight: bold; color: maroon;"><?php echo $k.".".$info[$i]['cname']; ?></h4>

                        <div class="d-flex mb-3">
                            <small class="border-end me-3 pe-3" style="margin-right: 15px;"><i class="fa fa-check" style="color:maroon;"></i>Most booked</small>
                            <small style="margin-right: 15px;"><i class="fa fa-wifi" style="color:maroon;"></i> <?php echo $info[$i]["cwifi"]; ?></small>
                            <small style="margin-right: 15px;"><i class="fa fa-television" style="color:maroon;"></i><?php echo $info[$i]["ctv"]; ?></small>
                            <small><i class="fa fa-coffee" style="color:maroon;"></i>Dining</small>
                        </div>

                        <h3>₹<?php echo $info[$i]["crate"]; ?><span>/pernight</span></h3>
                        <p style="font-weight: bold; color: #666;"><?php echo $info[$i]['cdescription']; ?></p>
                    </div>
                    <div class="room-btns d-flex justify-content-between" style="padding: 20px;">
                        <a href="room_details.php?id=<?php echo $i?>" class="primary-btn" style="background-color: white; color: maroon; padding: 10px 20px; text-decoration: none;">More Details</a>
                        
                        <a href="datechoice.php?cid=<?= $info[$i]["cid"]?>" class="primary-btn" style="background-color: white; color: maroon; padding: 10px 20px; text-decoration: none;">Book Now</a>
                    </div>
                </div>
            </div>
            <?php   
                $i++;
            }
            ?>
        </div>
    </div>
</section>
<!-- Rooms Section End -->



    <!-- Footer Section Begin -->
    <br><br><br>
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                        <div class="ft-contact">
                                <a href="index.php">
                                <h6>Chic retreat</h6>
                                </a>
                            </div>
                            <p>"Experience luxury and tranquility, your perfect getaway awaits."</p>
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
                                <li>+7736 299 405</li>
                                <li>chicRetreat@gmail.com</li>
                                <li>Kakkanad,Kochi - 682504</li>
                                <li>Kerala, India</li>
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