<?php 
require('../config/autoload.php'); 
include("header.php");	?>
<?php 
include("dbcon.php");
?>

<?php
//session_start();
$dao=new DataAccess();
   $date1=$_SESSION['hid'] ;
 $date2=$_SESSION['hid'] ;
   if(isset($_POST["purchase"]))
{
     header('location:hotel.php');
}

	 
	   
	    ?>
       
       
       
       
 <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
            
            <H1><center> BOOKING DETAILS </center> </H1>
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                        
                    <th>SR NO</th> <!-- Added Serial Number Column -->
                        <th>USER NAME</th>
                        <th>USER ID</th>
                        <th>ROOM NO</th>
                        <th>FEES</th>
                        <th>BOOKING DATE</th>
                        <th>FROM DATE</th>
                        <th>TO DATE</th>
                        <th>TOTAL DAYS</th>
                        <th>TOTAL PAID</th>
                     
                      
                      
                    </tr>
<?php
    
    $actions=array(
    
    
    
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('bid')
        
        
    );

   $condition="hid='".$date1."' and status=2";
   
   $join=array(
       
    );  
	$fields=array('username','userid','room_no','fees','date','datefrom','todate','days','total');

    $users=$dao->selectAsTable($fields,'book as c',$condition,$join,$actions,$config);
    
    echo $users;
                                     
    ?>

             
                </table>
            </div>    


        
<form action="" method="POST" enctype="multipart/form-data">

<button class="btn btn-success" type="submit"  name="purchase" >Home</button>


</form>
</div>

            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->

