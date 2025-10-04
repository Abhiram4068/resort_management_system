<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta http-equiv="X-UA-Compatible">
    <title>Booknow</title>
    <link rel="stylesheet" href="ui.css">
</head>

<body>

	<?php
session_start();

								
if(isset($_SESSION['email']))
{
	include("headerlogout.php");
}
else
{
	include("header.php");
}
		
?>
<?php 	
	
include("dbcon.php");

?>

<?php require('../config/autoload.php'); 

$iid = "";
$iname = "";
$name="";
$dao=new DataAccess();
?>



<?php
if(isset($_POST["btn_insert"])){
if(!isset($_SESSION['email']))
   {
	echo"<script >location.href = 'login1.php'</script>";
	   //header('location:login.php');
  }
  else

  {
	  $_SESSION['fdate']= $_POST["fromdate"];
	    $_SESSION['todate']= $_POST["todate"];
		$fdate=$_POST["fromdate"];
		$tdate=$_POST["todate"];
	 
	  $diff = (strtotime($tdate) - strtotime($fdate));
    $date_diff = abs(strtotime($tdate) - strtotime($fdate));
	  $years = floor($date_diff / (365*60*60*24));
		$months = floor(($date_diff - $years * 365*60*60*24) / (30*60*60*24));
	  
	  $days = floor(($date_diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
    //echo "<script> alert($days);</script> ";
    
    //echo "<script> alert($diff);</script> ";
	  if ($diff<0)
    {

      echo "<script> alert('Sorry! Please select proper Date');</script> ";
      echo"<script >location.href = 'datechoice.php'</script>";
    }
    
    if ($days==0)
	  {
		  $days=1;
  }
  
	  //$date1=date_diff($fdate,$tdate);
	  //echo $days;
	 $_SESSION['date2']=$days;
	 
	  	echo"<script >location.href = 'bookdiscat.php'</script>";
	  
  }}
?>
 
   

<form action="" method="POST" enctype="multipart/form-data">

 <div class="upper">
        <div class="upper-left">


            <h3>Booking Details</h3>
           
        <div class="content">
      <div class="upper-right">
            <div style="display: block;">
               
                   
                 
				<label for="fromdate">From date:</label><br>
				
                <input id="fromdate" name="fromdate" type="date" min="<?php echo date("Y-m-d"); ?>" style="margin-top: 8px;"><br>
                <label for="todate">To Date:</label><br>
                <input id="todate" name="todate" type="date" min="<?php echo date("Y-m-d"); ?>" style="margin-top: 8px;"><br>
		  </div>
                
                
            </div>
        </div>
  
   
        <div class="btn-grp">
                <button class="buttons" name="btn_insert" id="btn-1">Book</button>
              
        </div>
    </div>
    </form>
</body>

</html>