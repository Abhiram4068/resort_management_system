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

<?php require('../config/autoload.php'); 
include("dbcon.php"); ?>
<?php
$dao=new DataAccess();



?>









				 <h3 class="title-w3-agileits title-black-wthree"></h3>
						<div class="priceing-table-main">
            <?php
		
							
							
//							           
//			$cid=$_GET['id']; 
//			 $q="select * from tbl_bus where cid=".$cid ;
//
//$info=$dao->query($q);
//
			//$i=0;          
			$cid=$_GET['id']; 
							$fromdate=$_SESSION['fdate'];
							
	                   $todate=$_SESSION['todate'];
			 $sql1="select * from subcat where type_id=".$cid." and  room_id not in (select b.room_id from cart as b where (('$fromdate' between datefrom and todate)or('$fromdate' <= datefrom))and(('$todate' between datefrom and todate)or('$todate' >=todate))and status=2)";

 $result = $conn->query($sql1);
 if ($result->num_rows <= 0) {
	 
	 echo "<script> alert('Sorry No Rooms    Select Another Category');</script> ";
	 
	 echo"<script >location.href = 'bookdiscat.php'</script>";
 }
			
			
			
			

			              
			 $q="select * from subcat where type_id=".$cid." and  room_id not in (select b.room_id from cart as b where (('$fromdate' between datefrom and todate)or('$fromdate' <= datefrom))and(('$todate' between datefrom and todate)or('$todate' >=todate))and status=2)";

							//echo($q);
$info=$dao->query($q);
$d=count($info);
//echo "<script> alert($d);</script> ";

if (count($info)==1)
{
		//echo "<script> alert(count($info));</script> ";
		//echo"<script >location.href = 'bookdiscat.php'</script>";
	
	}

			$i=0;          
			
 ?>
							
							
							
							









<div class="site-section">
      
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h3 class="title-w3-agileits title-black-wthree">ROOMS</h3>
						<div class="priceing-table-main">
            
          </div>
        </div>
        <div class="row">
			
			
			
			
			
			
			
			
			<?php
                 while($i<count($info))
			
{ $s=$info[$i]["simage"];
		?>		 <div class="col-md-3 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img style="width:300; height:300" src=<?php echo BASE_URL."upload/".$info[$i]["simage"]; ?> alt=" " class="img-responsive" />
							<?php /*?> <h4>Deluxe Room</h4><?php */?>
                              <h4><?php echo $info[$i]["room_no"]?></h4> 
							
                             
						</div>
						<div class="price-gd-bottom">
							   <div class="price-list">
									<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>

								     </ul>
							</div>
							<div class="price-selet">
                            
			<a href="booknewroom.php?id=<?= $info[$i]["room_id"]?>" >BOOK</a>
							</div>
						</div>
					</div>
				</div>
				<?php 
				$i++;
				} ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	
		<?php include("footer.php");	?>
	