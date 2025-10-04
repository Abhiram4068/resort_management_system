<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta http-equiv="X-UA-Compatible">
    <title>Booknow</title>
    <link rel="stylesheet" href="css2/bootstrap.min.css">
    <link rel="stylesheet" href="ui.css">
</head>

<body>

	<?php


	
	require('../config/autoload.php'); 		


	if(isset($_SESSION['email'])) {
	    
		include("logoutheader.php");
	} else {
		include("loginheader.php");
	}
	?>
	
	<?php  
	
	include("dbcon.php");
	?>

	<?php 

	$iid = "";
	$iname = "";
	$name="";
	$dao = new DataAccess();
	?>
<!-- Breadcrumb Section Begin -->
<?php
    //  if(isset($_GET["hid"]))
    //  {
    //     $hid=$_GET["hid"];
    //  }?>
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
	<?php
	
	$_SESSION['cid'] = $_GET['cid'];
   
	$hid = $_SESSION['hid'];


	if(isset($_POST["btn_insert"])){
		
		if(!isset($_SESSION['email'])) {
			
			echo "<script>location.href = '../guest_reg/login2.php'</script>";
		} else {
			
			$_SESSION['fdate'] = $_POST["fromdate"];
			$_SESSION['todate'] = $_POST["todate"];
			$fdate = $_POST["fromdate"];
			$tdate = $_POST["todate"];


			$diff = (strtotime($tdate) - strtotime($fdate));
			$date_diff = abs(strtotime($tdate) - strtotime($fdate));
			$years = floor($date_diff / (365 * 60 * 60 * 24));
			$months = floor(($date_diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
			$days = floor(($date_diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

		
			if ($diff < 0) {
				echo "<script> alert('Sorry! Please select proper Date');</script>";
				echo "<script>location.href = 'datechoice.php'</script>";
			}


			if ($days == 0) {
				$days = 1;
			}

			$_SESSION['date2'] = $days;

		
			echo "<script>location.href = 'booknewroom.php'</script>";
		}
	}
	?>
	

<form action="" method="POST" enctype="multipart/form-data">
    <section class="room-details-section spad" style="margin-left: 2px; margin-right: 50px; margin-bottom: 60px; margin-top: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="room-booking" style="padding: 20px; border: 1px solid maroon; border-radius: 0px; background-color: #f9f9f9;">
                        <h3 style="text-align: center; margin-bottom: 20px; color: maroon; font-weight: bold;">Booking Details</h3><br>
                        <form action="#" style="display: flex; flex-wrap: wrap; gap: 15px; align-items: flex-end;">
                            <!-- From Date -->
                            <div class="check-date" style="flex: 1; min-width: 250px;">
                                <label for="fromdate">From Date:</label>
                                <input id="fromdate" name="fromdate" type="date" min="<?php echo date("Y-m-d"); ?>" style="width: 100%; padding: 10px; border-radius: 0px; border: 1px solid maroon;">
                            </div>
                            
                            <!-- To Date -->
                            <div class="check-date" style="flex: 1; min-width: 250px;">
                                <label for="todate">To Date:</label>
                                <input id="todate" name="todate" type="date" min="<?php echo date("Y-m-d"); ?>" style="width: 100%; padding: 10px; border-radius: 0px; border: 1px solid maroon;">
                            </div>
                            
                            <!-- Book Button -->
                            <div style="flex: 1; min-width: 200px;">
                                <?php
                                if(isset($_SESSION['email'])){?>
                                <br><button type="submit" name="btn_insert" style="width: 100%; padding: 10px; background-color: maroon; color: white; border: none; border-radius: 0px; cursor: pointer; text-transform: uppercase;">Check Availability & Proceed</button>
                                <?php } else {  ?>
                                    <br><button type="submit" name="btn_insert" style="width: 100%; padding: 10px; background-color: maroon; color: white; border: none; border-radius: 0px; cursor: pointer; text-transform: uppercase;">Login To Proceed</button>
                                    <?php } ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>


</body>

</html>
