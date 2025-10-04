
<script>
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}
</script>

<?php  
 session_start();
include("dbcon.php");
?>
<div class="row">
 <div class="col-md-12">
 <div class="table-responsive">
                                <table border="1"  id="printTable" style="width:100%" >
                                    <thead>
                          <center> HIRE YOUR ROOM</center>
                           <center> ANGAMALY </center>
                            <tr>
                             <th style="text-align:left">BillNo.1</th>
                               <th colspan="2" style="text-align:left"></th>
                              <th style="text-align:left" >Date:<?php echo  date("Y/m/d"); ?></th>
                            </tr>
                           <tr>
                        <th>ROOM NUMBER</th>
                        <th>RENT</th>
                        
			<th>DAYS</th>
<th>AMOUNT</th>
</tr>
                      
                                    </thead>
                                    <tbody>
                                   
 <?php
$name=$_SESSION['email'] ;

 

$sql = "SELECT * FROM cart WHERE status=1 and userid='$name'";
$result = $conn->query($sql);


	
	
	
	


if ($result->num_rows > 0) {


 // output data of each row
    while($row = $result->fetch_assoc()) {
		
		
      echo "<tr> <td> "  . $row["room_no"]. "</td> <td>"  . $row["fees"]. "</td> <td>" . $row["days"]. "</td>  <td>" . $row["total"]. "</td>  </tr>";
		//echo "<tr> <td colspan='3'  style='text-align:right'>BALANCE:</td><td> ", $balance, "</td></tr>";
	  
	    
}
}


 ?>

 <?php
// $sql123 = "select sum(total) as t from cart where status=1 and  userid='$name'";
//$result123 = $conn->query($sql123);
	//   $row = $result123->fetch_assoc();
	//   $total=$row["t"];
	 //   echo "<tr> <td colspan='3'  style='text-align:right'>Total:</td><td> ", $total, "</td></tr>";
	   ?>
       




</table>



<?php
$sql11 =" UPDATE cart SET status=2 WHERE status=1 and userid='$name'" ;

if ($conn->query($sql11) === TRUE) {
	echo "<script> alert('Payment Sucessfull!');</script> ";
	 
	
	 }
	 ?>
     <br /><br />

<input type="button" onclick="printData();" value="PRINT"  />

<a href="displaycategory.php">HOME</a>
</div>
</div>
</div>

</form>




