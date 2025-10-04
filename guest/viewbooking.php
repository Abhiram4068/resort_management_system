<?php
//session_start();
require('../config/autoload.php'); 
if(isset($_SESSION['email'])) { 
    include("bookingheaderlogout.php");
} else {
    include("bookingheader.php");
}

include("dbcon.php");

$dao = new DataAccess();

$name = $_SESSION['email'];

if (isset($_POST["payment"])) {
    echo "<script>location.href='payments.php' </script>";
    //header('location:booknewroom.php');
}

if (isset($_POST["purchase"])) {
    echo "<script>location.href='resorts.php' </script>";
    //header('location:displaycategory.php');
}

if (!isset($_SESSION['email'])) {
    $current = $_SERVER['REQUEST_URI'];
    echo "<script> location.replace($current); </script>";
    $_SESSION['url'] = $current;  
    echo "<script> alert($current);</script>";
} else { 
    // Calculate total
    $sql = "SELECT SUM(total) AS t FROM book WHERE status = 1 AND userid = '$name'";
    $result = $conn->query($sql);
    
    // Check if the query executed successfully
    if ($result) {
        $row = $result->fetch_assoc();
        $total = $row["t"];
        $_SESSION['total'] = $total; 
    } else {
        // Query failed, handle the error
        echo "Error executing query: " . $conn->error;
        exit;
    }
?>

 <!-- Breadcrumb Section Begin -->
 <div class="breadcrumb-section"  style="background-color:maroon; background-size: cover; background-position: center; padding: 50px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Your Bookings</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <!-- Breadcrumb Section End -->
<div class="container_gray_bg" id="home_feat_1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <table border="2"  class="table" style="margin-top:100px;">
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
                        <th>HOTEL</th>
                        <th>CATEGORY</th>
                        
                    </tr>

                    <?php
                    // Modify the SQL to join with category and hotel tables
                    $sql = "
                        SELECT 
                            b.username,
                            b.userid,
                            b.room_no,
                            b.fees,
                            b.date,
                            b.datefrom,
                            b.todate,
                            b.days,
                            b.total,
                            h.hname,
                            c.cname
                            
                        FROM book AS b
                        LEFT JOIN category AS c ON b.cid = c.cid
                        LEFT JOIN hotel AS h ON b.hid = h.hid
                        WHERE b.userid = '$name' AND b.status = 2
                    ";

                    // Execute the query
                    $result = $conn->query($sql);

                    // Check if users were fetched successfully
                    if ($result->num_rows > 0) {
                        $srno = 1; // Initialize serial number
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$srno}</td> <!-- Display serial number -->
                                    <td>{$row['username']}</td>
                                    <td>{$row['userid']}</td>
                                    <td>{$row['room_no']}</td>
                                    <td>{$row['fees']}</td>
                                    <td>{$row['date']}</td>
                                    <td>{$row['datefrom']}</td>
                                    <td>{$row['todate']}</td>
                                    <td>{$row['days']}</td>
                                    <td>{$row['total']}</td>
                                    <td>{$row['hname']}</td>
                                    <td>{$row['cname']}</td>
                                  
                                  </tr>";          
                            $srno++; // Increment the serial number for each row
                        }
                    } else {
                        echo "<tr><td colspan='12'>You haven't made any bookings!!!.</td></tr>";
                    }
                    ?>

                </table>  <br><br><br><br><br><br>
            </div>    


        </div><!-- End row -->
    </div><!-- End container -->
</div><!-- End container_gray_bg -->

<?php } ?>
