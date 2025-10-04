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
                                
                                    <?php

if (isset($_SESSION['email1'])) {
   
    ?>
    <ul>
                                    <li ><a href="./index.php">Home</a></li>
                                    <li><a href="viewbooking.php">View Bookings</a></li>
                                    <li><a href="rptbookingdate.php">DateWise Booking</a></li>
                                    <li ><a href="">check In</a>
                                    <ul class="dropdown">
                                            <li><a href="./checkedindate.php">Checked In</a></li>
                                            <li><a href="./checkindate.php">To be Checked In</a></li>
                                           
                                        </ul>
                                        </li>
                                    <li class="active"> <a href="">check Out</a>
                                    <ul class="dropdown">
                                            <li><a href="./checkedoutdate.php">Checked Out</a></li>
                                            <li><a href="./checkoutdate.php">To be Checked Out</a></li>
                                           
                                        </ul></li>
                                    
    <li><a href="logout.php">Log Out</a></li>
    <?php
 } else { 
  
   
     ?>
    
     <li><a href="login2.php">Log In</a></li>
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
                        <h2>CHECK-OUT DATE </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <!-- Breadcrumb Section End -->


<?php 



 //require('../config/autoload.php'); 
 //include("bookingheaderlogout.php");

//session_start();
$elements=array(
        "fdate"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array("fdate"=>"from Date");

$rules=array(
    
    "fdate"=>array('required'=>true,'date'=>array('from'=>'today','to'=>'+30 days 12 am')),
    
 

     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{
if($validator->validate($_POST))
{
 $_SESSION['fdate']=$_POST['fdate'];


 echo"<script >location.href = 'checkedoutdateview.php'</script>";
//header('location:checkindateview.php');
       
}

}


?>
<html>
<head>
</head>
<body>

 <form action="" method="POST" >
 


<div class="row">
                    <div class="col-md-6">
From Date:
<?= $form->inputBox('fdate',array('class'=>'form-control'),"date") ?>
<span style="color:red;"><?= $validator->error('fdate'); ?></span>


</div>
</div>





<button type="submit" name="btn_insert"  >Submit</button>
</form>


</body>

</html>