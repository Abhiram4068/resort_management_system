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
                                           
                                        </ul></li>
     <li><a href="../guest_reg/reg.php">Sign Up</a></li>
   <?php
} ?>
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
    <?php
    if(isset($_GET["id"]))
    {
        $id=$_GET["id"];
        $q = "select * from category where status = '1'";
        $info=$dao->query($q);

      


    }
    ?>


    <div class="breadcrumb-section"  style="background-color:maroon; background-size: cover; background-position: center; padding: 50px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2><?php echo $info[$id]["cname"];?></h2>
                        <div class="bt-option">
                            <a href="./index.php">Home</a>
                            <a href="./resorts.php">Resorts</a>
                            <a href="./rooms.php">Rooms</a>
                            <span>Rooms Details</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <br><br>
    <!-- Breadcrumb Section End --> 

    <!-- Room Details Section Begin -->



    <img src="<?php echo BASE_URL . 'uploads/' . $info[$id]['cimage']; ?>" alt="" style="margin-left:30px; margin-right:65px; width: 95%; height: 600px; object-fit: cover; border:2px solid maroon; padding: 1px;">    <br><br>

  
    <section class="room-details-section spad"  >
        <div class="container" >
            <div class="row" >
                <div class="col-lg-8" >
                    <div class="room-details-item" >
                        
                        <div class="rd-text">
                            <div class="rd-title">
                                <h3 style="color:maroon;font-weight:bold;"><?php echo $info[$id]["cname"];  ?></h3>
                                <div class="rdt-right">
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star-half_alt"></i>
                                    </div>
                                   
                                </div>
                            </div>
                            <h2>₹<?php echo $info[$id]["crate"];?><span>/pernight</span></h2>
                            
                            <span style="font-weight:bold;"><u>IN-Room Amenities:</u></span><br>
                                        <span><?php echo " ".$info[$id]["camenities"];?></span><br><br>
                                        
                            
                            <p><?php echo $info[$id]["clongdescription"];?></p>
                           
                        </div>
                    </div>
                   
                  
                
            </div>
        </div>
    </section>
        
    <!-- Room Details Section End -->

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