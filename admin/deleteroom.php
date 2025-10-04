<?php	
include("dbcon.php");
$rid = $_GET['id'];
$sql = "update room set status=2 where rid=".$rid;

$conn->query($sql);

 header('location:viewroom.php');



?>