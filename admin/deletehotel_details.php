<?php	
include("dbcon.php");
$cid = $_GET['id'];
$sql = "update hotel_details set status=2 where hid=".$cid;

$conn->query($sql);

 header('location:viewhotel_details.php');



?>