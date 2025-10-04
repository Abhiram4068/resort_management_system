<?php	
include("dbcon.php");
$hid = $_GET['id'];
$sql = "update hotel set status=2 where hid=".$hid;

$conn->query($sql);

 header('location:viewhotel.php');



?>