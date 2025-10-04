<?php require('../config/autoload.php'); ?>

<?php
$dao=new DataAccess();
?>
<?php include('header.php'); ?>

    
    <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                        
                        <th>hid</th>
                        <th>Resort Name</th>
                        <th>Resort Image</th>
                        <th>Resort Address</th>
                        <th>Resort Contact NO.</th>
                        <th>Resort decription</th>
                        <th>Receptionist email</th>
                        <th>EDIT/DELETE</th>
                     
                      
                    </tr>
<?php
    
    $actions=array(
    'edit'=>array('label'=>'Edit','link'=>'edithotel.php','params'=>array('id'=>'hid'),'attributes'=>array('class'=>'btn btn-success')),
    
    'delete'=>array('label'=>'Delete','link'=>'deletehotel.php','params'=>array('id'=>'hid'),'attributes'=>array('class'=>'btn btn-success'))
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('hid'),
'actions_td'=>false,
         'images'=>array(
                        'field'=>'himage',
                        'path'=>'../uploads/',
                        'attributes'=>array('style'=>'width:100px;'))
        
    );

   
   $join=array();  
$fields=array('hid','hname','himage','haddress','hcontact','hdescription','email');

    $users=$dao->selectAsTable($fields,'hotel as s','status=1',$join,$actions,$config);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
            </div>    

            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
