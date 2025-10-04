<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta http-equiv="X-UA-Compatible">
    <title>Booknow</title>
    <link rel="stylesheet" href="ui.css">
    
    <script>
function showtotal() {
//alert(str);
	  var fees=document.getElementById("fees").value;  
	  var advance=document.getElementById("advance").value; 
	  //var datefrom=document.getElementById("datefrom").value;
	 // var todate=document.getElementById("todate").value;
// 	  var balance=fees-advance; 
//	  var total=todate-datefrom;
	
	
	
	const date1 = new Date(datefrom);
const date2 = new Date(todate);
const diffTime = Math.abs(date2 - date1);
const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 
var diffdays=2;
var	tot= (fees*(diffDays+1));
	var b=tot-advance;
	
	  //alert(diffDays);
	document.getElementById("total").value = tot;
	document.getElementById("balance").value = b;
	document.getElementById("days").value = diffDays;
	
}
</script>
    
</head>
<style>
    .text-con{
        color:maroon;
        font-weight: bold;
    }
</style>
<body><?php
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


<?php 

$iid = "";
$iname = "";
$name="";
$dao=new DataAccess();



?>



<?php
if(isset($_POST["btn_insert"]))
{
if(!isset($_SESSION['email']))
   {
	//header('location:../guest_reg/login.php');
	echo"<script >location.href = '../guest_reg/login.php'</script>";

  }
  else
  {
$name=$_SESSION['email'];
$_SESSION['fname']=$_POST['fname'];
 $fname=$_POST['fname'];
$itid = $_SESSION['cid'];
$hid = $_SESSION['hid'];
$rid = $_POST['ctime'];
 $q1="select * from room where rno=".$rid ;

$info1=$dao->query($q1);
$iname=$info1[0]["rno"];
//$itemname = $iname;
$rrent = $info1[0]["rrent"];;
//$advance = $_POST["advance"];
//$_SESSION['advance']=$advance;	  
$status=1;
$date1=date('Y-m-d',time());
$datefrom = $_POST["fromdate"];
$todate = $_POST["todate"];
//$balance=$_POST["balance"];	
$diffDays= $_SESSION['date2'];	  
$_SESSION['days']=$diffDays;
 
$total=$diffDays*$rrent;

$sql = "INSERT INTO book (userid,username,room_no,fees,status,date,datefrom,todate,days,total,cid,hid) VALUES ('$name','$fname','$rid','$rrent','$status','$date1','$datefrom','$todate','$diffDays','$total','$itid','$hid')";

$conn->query($sql);
	  
	  
	echo $sql;
 //header('location:viewcart.php');
echo"<script >location.href = 'viewcart.php'</script>";
}}

?>


<?php
$dao=new DataAccess();
?>

<?php	
$iid=$_SESSION['cid']; 
$hid=$_SESSION['hid'];



$q="select * from category where cid=".$iid ;

$info=$dao->query($q);
$cname=$info[0]["cname"];
$rent=$info[0]["crent"];
$fromdate=$_SESSION['fdate'];
$todate=$_SESSION['todate'];
$tdate=$_SESSION['date2'];
$total=$rent*$tdate;
$_SESSION['total']=$total;
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
                        <h2>Booking Details</h2>
                        <div class="bt-option">
                            <!-- <a href="./index.php">Home</a>
                            <a href="./resorts.php">Resorts</a>
                            <a href="./rooms.php">Rooms</a>
                            <span>Booking</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    
    <!-- Breadcrumb Section End -->
 <form action="" method="POST" enctype="multipart/form-data">
    <div class="upper" style="background-color:#f9f9f9;  border: 1.5px solid maroon; padding:3px 3px 3px 3px">
        
        <!-- Left Section: Room Image -->
        <div class="upper-left" style="text-align: center;">
            <?php 
            if (isset($_SESSION['email'])) {
                $fromdate = $_SESSION['fdate'];
                $todate = $_SESSION['todate'];
                $tdate = $_SESSION['date2'];
                $name = $_SESSION['email'];
            }
            ?>
            <!-- <h3>ROOM Details</h3> -->
            <img 
                src="<?php echo BASE_URL . "uploads/" . $info[0]["cimage"]; ?>" 
                alt="Room Image" 
                class="img-responsive" 
                style="padding-top:49px;max-width: 100%; height: 100%; margin-bottom: 15px; border-radius: 0px; box-shadow: 0px 4px 8px rgba(0,0,0,0.1);" 
            />
        </div>

        <!-- Right Section: Room Info and Form -->
        <div class="upper-right">
            <div class="content">
                <!-- <h3>Details</h3> -->
                <div style="display: block;" class="text-con">

                <label for="fees">Name:</label><br>
                <input id="name" name="fname" type="text" placeholder="Your Name"  style="margin-top: 8px; width: 100%; padding: 10px; border-radius: 5px; border: 1px solid maroon;"><br>

                    <!-- Rent Per Day -->
                    <label for="fees">Rent Per Day:</label><br>
                    <input id="fees" name="fees" type="text" value="<?php echo $info[0]["crent"]; ?>" readonly style="margin-top: 8px; width: 100%; padding: 10px; border-radius: 5px; border: 1px solid maroon;"><br>

                    <!-- From Date -->
                    <label for="fromdate">From Date:</label><br>
                    <input id="fromdate" name="fromdate" type="text" value="<?php echo $fromdate; ?>" style="margin-top: 8px; width: 100%; padding: 10px; border-radius: 5px; border: 1px solid maroon;"><br>

                    <!-- To Date -->
                    <label for="todate">To Date:</label><br>
                    <input id="todate" name="todate" type="text" value="<?php echo $todate; ?>" style="margin-top: 8px; width: 100%; padding: 10px; border-radius: 5px; border: 1px solid maroon;"><br>
                    
                    <!-- Hidden Days Field -->
                    <input id="days" name="days" type="hidden" readonly style="margin-top: 8px;"><br>

                    <!-- Total Rent -->
                    <label for="total">Total:</label><br>
                    <input id="total" name="total" type="text" value="<?php echo $total; ?>" readonly style="margin-top: 8px; width: 100%; padding: 10px; border-radius: 5px; border: 1px solid maroon;"><br>

                    <!-- Room Selection Dropdown -->
                    <label for="ctime">Select Room:</label><br>
                    <select name="ctime" id="ctimei" style="margin-top: 8px; width: 100%; padding: 10px; border-radius: 5px; border: 1px solid maroon;">
                        <option>-Select-</option>
                        <?php
                        $sql = "SELECT * FROM room WHERE cid = '$iid' AND hid = '$hid'";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row["rno"] . "'>" . $row["rno"] . "</option>";
                        }
                        ?>
                    </select><br>
                    
  
    
                </div>
            </div>
        </div>
    </div>

    <!-- Submit Button -->
    <div style="text-align: center; margin-top: 20px; margin-left: 10px;">
    <center><button class="buttons" name="btn_insert" id="btn-1" 
            style="text-align: center; padding: 5px 5px; 
                   background-color: maroon; color: white; 
                   border: none; border-radius: 5px; 
                   cursor: pointer; font-size: 16px; 
                   width: 350px;">PROCEED</button></center>
</div><br><br>
</form>

</body>
<?php //include("footer.php");?>
</html>