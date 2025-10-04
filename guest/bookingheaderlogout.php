<!DOCTYPE html>
<html lang="zxx">

<head>
	<?php 
	//session_start();
	
	?>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>chic Retreat </title>

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
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/chocolat.css" type="text/css" media="screen">
<link href="assets/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="assets/css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="assets/css/jquery-ui.css" />
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="assets/js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
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
        <div class="search-icon  search-switch">
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
                   
                       
                    </ul>
                </li>
                <li><a href="./blog.html">News</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        
		
		

 <h7 class="title-w3-agileits title-black-wthree"><?php // echo $name."gfyfghf" ?></h7>


		
		
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> 8921663791</li>
            <li><i class="fa fa-envelope"></i> <?php // echo $name ?></li>
        </ul>
		<?php  ?>
    </div>
	
	
	
	
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
							<?php 
	
		
if(isset($_SESSION['email']))
{ 	
   
$name=$_SESSION['email'];
	
	
?>
                          
                            <li><i class="fa fa-envelope"></i> <?php echo $name ?></li>
                            <li><i class="fa fa-envelope"></i> chicRetreat@gmail.com</li>

                        </ul>
						<?php }?>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                           
                            <!-- <a href="logout.php" class="bk-btn">Log out</a> -->
                          
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
                        <img src="img/name.jpg" alt="">
                                
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                            <div style="text-align: center; position: relative;">
    <ul style="display: inline-block; list-style: none; padding: 0; margin: 0; transform: translateX(-20%);">
        <li style="display: inline; margin: 0 15px;"><a href="index.php">Home</a></li>
        <li style="display: inline; margin: 0 15px;"><a href="resorts.php">Book Now</a></li>
        <li style="display: inline; margin: 0 15px;"><a href="viewbooking.php">Your Bookings</a></li>
        <li style="display: inline; margin: 0 15px;"><a href="cancelbooking.php">Cancel Booking</a></li>
    </ul>
</div>

                            </nav>
                            <div class="nav-right search-switch">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
	<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
	
