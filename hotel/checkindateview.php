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
<style>
        /* Table Styles */
        .table {
            width: 100%;
            margin-top: 100px;
            border: 3px solid #000;
            border-collapse: collapse;
            font-size: 14px;
        }

        /* Table Header */
        .table thead {
            background-color: #333;
            color: #fff;
            font-weight: bold;
        }

        .table th, .table td {
            padding: 10px;
            text-align: center;
            border: 2px solid #000;
        }

        /* Styling the empty row message */
        .table td[colspan="12"] {
            text-align: center;
            font-style: italic;
            color: #666;
        }

        /* Table Body */
        .table tbody tr:hover {
            background-color: #f1f1f1; /* Add hover effect for rows */
        }

        /* Breadcrumb Section */
        .breadcrumb-section {
            background-color: maroon;
            background-size: cover;
            background-position: center;
            padding: 50px 0;
        }

        .breadcrumb-text h2 {
            color: #fff;
            font-weight: bold;
        }

        /* Additional margin for spacing */
        .container_gray_bg {
            margin-top: 50px;
        }

        /* Adjustments to the page for better overall alignment */
        .container {
            padding-left: 30px;
            padding-right: 30px;
        }

        /* Optional: Add responsiveness */
        @media (max-width: 768px) {
            .table th, .table td {
                padding: 8px;
                font-size: 12px;
            }

            .breadcrumb-text h2 {
                font-size: 20px;
            }
        }
    </style>

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
                            
                            <?php
                            if(isset($_SESSION['email1'])){
                            ?>
                            <a href="viewbooking.php" class="bk-btn"> bookings</a>
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
                                    <li><a href="viewbooking.php">View Bookings</a></li>
                                    <li><a href="rptbookingdate.php">DateWise Booking</a></li>
                                    <li  class="active"><a href="">check In</a>
                                    <ul class="dropdown">
                                            <li><a href="./checkedindate.php">Checked In</a></li>
                                            <li><a href="./checkindate.php">To be Checked In</a></li>
                                           
                                        </ul>
                                        </li>
                                    <li><a href="">check Out</a>
                                    <ul class="dropdown">
                                            <li><a href="./checkedoutdate.php">Checked Out</a></li>
                                            <li><a href="./checkoutdate.php">To be Checked Out</a></li>
                                           
                                        </ul></li>
                                    
                                    <?php

if (isset($_SESSION['email1'])) {
   
    ?>
    <li><a href="logout.php">Log Out</a></li>
    <?php
 } else {
    
     ?>
     <li><a href="../guest_reg/login.php">Log Out</a></li>
     <li><a href="../guest_reg/registration.php">Sign Up</a></li>
   <?php
}
?>


                                    
                                </ul>
                            </nav>
                           
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
                        <h2>CHECK-IN DATE</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <!-- Breadcrumb Section End -->





<?php 
// require('../config/autoload.php'); 
//  include("bookingheaderlogout.php");
// include("dbcon.php");
?>

<?php
//session_start();
$dao=new DataAccess();
$date1=$_SESSION['fdate'] ;
$date2=$_SESSION['fdate'] ;
$hid = $_SESSION['hid'];

	 
	   
	    ?>
       
       
       
       
 <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
            
            
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                        
                    <th>SR NO</th> <!-- Added Serial Number Column -->
                        <th>USER NAME</th>
                        <th>USER ID</th>
                        <th>ROOM NO</th>
                        <th>FEES</th>
                        <th>BOOKING DATE</th>
                        <th>FROM DATE</th>
                        <th>TO DATE</th>
                        <th>TOTAL DAYS</th>
                        <th>TOTAL PAID</th>
                        <th>ACTION</th>
                        
                     
                      
                      
                    </tr>
<?php
    
    $actions=array(
    
        'delete' => array('label' => 'CheckIn', 'link' => 'checkin.php', 'params' => array('id' => 'bookid'), 'attributes' => array('class' => 'btn btn-success'))
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('bookid')
        
        
    );

    $condition = "datefrom='" . $date1 . "' AND status=2 AND hid='" . $hid . "'";

   
   $join=array(
       
    );  
	$fields=array('bookid','username','userid','room_no','fees','date','datefrom','todate','days','total');

    $users=$dao->selectAsTable($fields,'book as c',$condition,$join,$actions,$config);
    
    echo $users;
                                     
    ?>

             
                </table>
            </div>    


        
<form action="" method="POST" enctype="multipart/form-data">
<?php 
if(isset($_POST['goback']))
{
    echo "<script>window.location.href='index.php';</script>";
}
?>
<button class="btn btn-success" type="submit"  name="goback" >Home</button>


</form>
</div>

            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->

