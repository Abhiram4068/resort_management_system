<?php
//session_start();
require('../config/autoload.php'); 
if(isset($_SESSION['email'])) { 
    include("logoutheader.php");
} else {
    include("loginheader.php");
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
<div class="breadcrumb-section" style="background-color:maroon; background-size: cover; background-position: center; padding: 50px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>CART DETAILS</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->
<div class="container_gray_bg" id="home_feat_1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <table border="1" class="table" style="margin-top:100px;">
                    <tr>
                        <th>BOOK ID</th>
                        <th>USER ID</th>
                        <th>USER NAME</th>
                        <th>ROOM NO</th>
                        <th>FEES</th>
                       
                        <th>BOOKING DATE</th>
                        <th>FROM DATE</th>
                        <th>TO DATE</th>
                        <th>TOTAL DAYS</th>
                        <th>TOTAL</th>
                        
                        <th>DELETE</th>
                    </tr>

                    <?php
                    // Actions for table rows
                    $actions = array(
                        'delete' => array('label' => 'Delete', 'link' => 'deleteitem.php', 'params' => array('id' => 'bookid'), 'attributes' => array('class' => 'btn btn-success'))
                    );

                    // Configurations for the table
                    $config = array(
                        'srno' => true,
                        'hiddenfields' => array('bookid')
                    );

                    $condition = "userid='" . $name . "' AND status = 1";

                    $fields = array('bookid', 'userid','username', 'room_no', 'fees', 'date', 'datefrom', 'todate', 'days', 'total');

                    // Get booking data from the database
                    $users = $dao->selectAsTable($fields, 'book AS c', $condition, array(), $actions, $config);

                    // Check if users were fetched successfully
                    if ($users) {
                        echo $users;
                    } else {
                        echo "<tr><td colspan='5'>No items found in your cart.</td></tr>";
                    }
                    ?>

                </table>
            </div>    

            <div class="row">
                <div class="col-md-3">
                    TOTAL AMOUNT:
                    <input type="text" class="form-control" value="<?php echo $total; ?>" readonly name="total"/>
                </div>

                <form action="" method="POST" enctype="multipart/form-data">
                    <button class="btn btn-success" type="submit" name="purchase">Book New Room</button>
                    <button class="btn btn-success" type="submit" style="margin-right: 2px;" name="payment">Payment</button>
                </form>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</div><!-- End container_gray_bg -->

<?php } ?>
