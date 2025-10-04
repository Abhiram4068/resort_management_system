

<?php	
include("dbcon.php");
$cartid = $_GET['id'];
$sql = "delete from book where bookid=".$cartid;

$conn->query($sql);

 header('location:cancelbooking.php');



?>

