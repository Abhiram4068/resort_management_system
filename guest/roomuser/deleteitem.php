

<?php	
include("dbcon.php");
$cartid = $_GET['id'];
$sql = "delete from cart where cartid=".$cartid;

$conn->query($sql);

 header('location:viewcart.php');



?>

