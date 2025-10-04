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
                        <th>Hotel Description ID</th>
                        <th>Hotel Image</th>
                        <th>Dining Image</th>
                        <th>Room Image </th>
                        <th>Hotel Description</th>
                        <th>Hotel Address</th>
                        <th>Hotel Location</th>
                        <th>Hotel ID</th>
                        <th>EDIT/DELETE</th>

                    </tr>

<?php
$actions = array(
    'delete' => array('label' => 'Delete', 'link'=>'deletehotel_details.php', 'params' => array('id' => 'hdid'), 'attributes' => array('class' => 'btn btn-danger'))
);

$config = array(
    'srno' => true,
    'hiddenfields' => array('hdid'),
    'actions_td' => false,
    'images'=>array(array(
                        'field'=>'hdimage',
                        'path'=>'../uploads/',
                        'attributes'=>array('style'=>'width:100px;')),
                        array(
                            'field'=>'hddining',
                            'path'=>'../uploads/',
                            'attributes'=>array('style'=>'width:100px;')),
                            array(
                                'field'=>'hdroom',
                                'path'=>'../uploads/',
                                'attributes'=>array('style'=>'width:100px;'))),
    
  
);

$join = array();  
$fields = array('hdid', 'hdimage', 'hddining', 'hdroom','hddescription','hdaddress','hdlocation','hid');

$rooms = $dao->selectAsTable($fields, 'hotel_details as r', 'status=1', $join, $actions, $config);

echo $rooms;
?>

                </table>
            </div>    
        </div><!-- End row -->
    </div><!-- End container -->
</div><!-- End container_gray_bg -->
