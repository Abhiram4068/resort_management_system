

<?php	
include("dbcon.php");
$cartid = $_GET['id'];
$sql = "update  book set status=4 where bookid=".$cartid;

$conn->query($sql);

 header('location:checkindateview.php');



?>

