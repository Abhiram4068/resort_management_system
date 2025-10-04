
<?php require('../config/autoload.php'); ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>chic Retreat</title>

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
                                <a href="../guest_reg/login2.php" class="bk-btn">book now</a>
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
                                    <li class="active"><a href="./index.php">Home</a></li>
                                    <li><a href="./about-us.php">About Us</a></li>
                                    <li><a href="./resorts.php">Resorts</a></li>
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



     <li><a href="#">Log In</a>
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

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

  


<style>.hs-item {
    position: absolute; /* Maintain absolute positioning */
    bottom: 0; /* Align to the bottom */
    left: 0; /* Align to the left */
    right: 0; /* Stretch to the right */
    height: 400px; /* Set height to 100% of the container */
    background-image: url('img/gallery/queenbed.jpeg'); /* Use background image */
    background-size: cover; /* Cover the entire div */
    background-position: bottom center; /* Show the bottom part */
}
</style>

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>Luxury Living</h1>
                        <p>Discover A Brand Luxurious Hotel</p>
                        <a href="gallery.php" class="primary-btn" style="border:none;">Discover Now</a>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/gallery/resort3.jpeg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-3.jpg"></div>
        </div>
    </section>
    <!-- Hero Section End -->

    <br><br><br><br>

     <!-- Breadcrumb Section Begin -->
     <div class="breadcrumb-section" style="background-size: cover; background-position: center; padding: 40px 0;">        
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                    <h2  style="color: maroon;text-align:center;">Experience Luxury At Our Hotel!!!</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p style="text-align: center; margin: 0 auto; width: 70%; opacity: 1;">
    Discover modern elegance at Chic Retreat, a luxurious getaway in Kerala. Our boutique resort offers refined comfort, nestled near popular attractions and the city’s vibrant center. Relax in our stylish rooms and suites, featuring upscale amenities and 24-hour room service. Indulge in delicious cuisine at our on-site restaurant, rejuvenate at our spa, unwind by the outdoor pool, or stay active in our fitness center. Our versatile venues provide the perfect setting for intimate gatherings, social events, and weddings, enhanced by our exceptional catering and services.
</p><br><br><br>



    <!-- Breadcrumb Section End -->



<!-- Room Details Section Begin -->


<h2  style="color: maroon;text-align:center;">ROOMS & SUITS</h2><br><br>

    <!-- Hero Section Begin -->
    <section class="hero-section" >
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1></h1>
                        <p></p>
                        <a href="gallery.php" class="primary-btn" style="border:none;"> </a>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="hero-slider owl-carousel" style="height:700px;">
            <div class="hs-item set-bg" style="position: absolute;" data-setbg="img/gallery/queenbed.jpeg"></div>
            <div class="hs-item set-bg" data-setbg="img/gallery/presidentialsuite.jpeg"></div>
            <div class="hs-item set-bg" data-setbg="img/gallery/kingbed.jpeg"></div>
            
        </div>
        
    </section>
    <a href=""><p style="color:black;">view rooms</p></a>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    


    <h2  style="color: maroon;text-align:center;">OUR AMENITIES</h2><br><br>
    <section class="blog-section blog-page spad" >
        <div class="container" >
            <div class="row" >
            <div class="col-lg-4 col-md-6">
                    <div class="blog-item set-bg" data-setbg="img/dining/dining2.jpeg">
                        <div class="bi-text">
                            <span class="b-tag"><a href="gallery.php#dining" style="color:white;">Dining</span></a>
                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-item set-bg" data-setbg="img/meetings/meeting2.jpeg">
                        <div class="bi-text">
                            <span class="b-tag"><a href="gallery.php#meetings" style="color:white;">Meetings</span></a>
                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-item set-bg" data-setbg="img/fitness/fitness2.jpeg">
                        <div class="bi-text">
                            <span class="b-tag"><a href="gallery.php#fitness" style="color:white;">fitness</span></a>
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
   

    
    
     

   

    

    
    <!-- Footer Section Begin -->
     <br><br><br><br><br><br>
    <footer class="footer-section" >
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