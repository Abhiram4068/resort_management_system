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
    
    <!-- Embedded CSS Styles -->
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
                           
                            <?php
                            if(isset($_SESSION['email1'])){
                            ?>
                            <a href="viewbooking.php" class="bk-btn"> bookings</a>
                            <?php } else { ?>
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
                                <?php
                                if (isset($_SESSION['email1'])) {
                                ?>
                                <ul>
                                    <li><a href="./index.php">Home</a></li>
                                    <li class="active"><a href="viewbooking.php">View Bookings</a></li>
                                    <li><a href="rptbookingdate.php">DateWise Booking</a></li>
                                    <li><a href="">check In</a>
                                        <ul class="dropdown">
                                            <li><a href="./checkedindate.php">Checked In</a></li>
                                            <li><a href="./checkindate.php">To be Checked In</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">check Out</a>
                                        <ul class="dropdown">
                                            <li><a href="./checkedoutdate.php">Checked Out</a></li>
                                            <li><a href="./checkoutdate.php">To be Checked Out</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="logout.php">Log Out</a></li>
                                </ul>
                                <?php
                                } else {
                                ?>
                                <ul>
                                    <li><a href="login2.php">Log In</a></li>
                                    <li><a href="../guest_reg/registration.php">Sign Up</a></li>
                                </ul>
                                <?php
                                }
                                ?>
                            </nav>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

<?php
//session_start();
// require('../config/autoload.php'); 
// if(isset($_SESSION['email1'])) { 
//     include("bookingheaderlogout.php");
// } else {
//     include("bookingheader.php");
// }

include("dbcon.php");

$dao = new DataAccess();

$name = $_SESSION['hid'];

if (isset($_POST["payment"])) {
    echo "<script>location.href='payments.php' </script>";
    //header('location:booknewroom.php');
}

if (isset($_POST["purchase"])) {
    echo "<script>location.href='resorts.php' </script>";
    //header('location:displaycategory.php');
}

if (!isset($_SESSION['email1'])) {
    $current = $_SERVER['REQUEST_URI'];
    echo "<script> location.replace($current); </script>";
    $_SESSION['url'] = $current;  
    echo "<script> alert($current);</script>";
} else { 
    // Calculate total
    $sql = "SELECT SUM(total) AS t FROM book WHERE status = 1 AND userid = '$name'";
    $result = $conn->query($sql);
    
    // Check if the query executed successfully
    if ($result) {
        $row = $result->fetch_assoc();
        $total = $row["t"];
        $_SESSION['total'] = $total; 
    } else {
        // Query failed, handle the error
        echo "Error executing query: " . $conn->error;
        exit;
    }
?>

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section"  style="background-color:maroon; background-size: cover; background-position: center; padding: 50px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>BOOKINGS</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <!-- Breadcrumb Section End -->

<div class="container_gray_bg" id="home_feat_1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered" style="margin-top:100px;">
                    <thead>
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
                            <th>HOTEL</th>
                            <th>CATEGORY</th>
                            
                        </tr>
                    </thead>

                    <tbody style="font-size: 14px;">
                        <?php
                        // Modify the SQL to join with category and hotel tables
                        $sql = "
                            SELECT 
                                b.username,
                                b.userid,
                                b.room_no,
                                b.fees,
                                b.date,
                                b.datefrom,
                                b.todate,
                                b.days,
                                b.total,
                                h.hname,
                                c.cname
                              
                            FROM book AS b
                            LEFT JOIN category AS c ON b.cid = c.cid
                            LEFT JOIN hotel AS h ON b.hid = h.hid
                            WHERE b.hid = '$name' AND b.status = 2
                        ";

                        // Execute the query
                        $result = $conn->query($sql);

                        // Check if users were fetched successfully
                        if ($result->num_rows > 0) {
                            $srno = 1; // Initialize serial number
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>{$srno}</td> <!-- Display serial number -->
                                        <td>{$row['username']}</td>
                                        <td>{$row['userid']}</td>
                                        <td>{$row['room_no']}</td>
                                        <td>{$row['fees']}</td>
                                        <td>{$row['date']}</td>
                                        <td>{$row['datefrom']}</td>
                                        <td>{$row['todate']}</td>
                                        <td>{$row['days']}</td>
                                        <td>{$row['total']}</td>
                                        <td>{$row['hname']}</td>
                                        <td>{$row['cname']}</td>
                                        
                                    </tr>";          
                                $srno++; // Increment the serial number for each row
                            }
                        } else {
                            echo "<tr><td colspan='12' style='text-align: center;'>No bookings!!!.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>  
                <br><br><br><br><br><br>
            </div>    
        </div><!-- End row -->
    </div><!-- End container -->
</div><!-- End container_gray_bg -->

<?php } ?>
