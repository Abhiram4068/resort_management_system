<?php require('../config/autoload.php'); ?>

<?php
$dao = new DataAccess();
?>
<?php include('header.php'); ?>

<div class="container_gray_bg" id="home_feat_1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table border="1" class="table" style="margin-top:100px;">
                    <tr>
                        <th>Room ID</th>
                        <th>Room Number</th>
                        <th>Floor</th>
                        <th>Rent</th>
                        <th>Category ID</th>
                        <th>Hotel ID</th>
                        <th>EDIT/DELETE</th>
                    </tr>

<?php
$actions = array(
    'edit' => array('label' => 'Edit', 'link' => 'editroom.php', 'params' => array('id' => 'rid'), 'attributes' => array('class' => 'btn btn-success')),
    'delete' => array('label' => 'Delete', 'link' => 'deleteroom.php', 'params' => array('id' => 'rid'), 'attributes' => array('class' => 'btn btn-danger'))
);

$config = array(
    'srno' => true,
    'hiddenfields' => array('rid'),
    'actions_td' => false
);

$join = array();  
$fields = array('rid', 'rno', 'rfloor', 'rrent', 'cid', 'hid');

$rooms = $dao->selectAsTable($fields, 'room as r', 'status=1', $join, $actions, $config);

echo $rooms;
?>

                </table>
            </div>    
        </div><!-- End row -->
    </div><!-- End container -->
</div><!-- End container_gray_bg -->
