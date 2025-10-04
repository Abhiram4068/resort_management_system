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
                        
                        <th>CId</th>
                        <th>Cname</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>WiFI</th>
                        <th>TV</th>
                        <th>Rate</th>
                        <th>Amenities</th>
                        <th>Long Description</th>
                        <th>EDIT/DELETE</th>
                     
                      
                    </tr>
<?php
    
    $actions=array(
    'edit'=>array('label'=>'Edit','link'=>'editcategory.php','params'=>array('id'=>'cid'),'attributes'=>array('class'=>'btn btn-success')),
    
    'delete'=>array('label'=>'Delete','link'=>'deletecategory.php','params'=>array('id'=>'cid'),'attributes'=>array('class'=>'btn btn-success'))
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('cid'),
'actions_td'=>false,
         'images'=>array(
                        'field'=>'cimage',
                        'path'=>'../uploads/',
                        'attributes'=>array('style'=>'width:100px;'))
        
    );

   
   $join=array();  
$fields=array('cid','cname','cimage','cdescription','cwifi','ctv','crate','camenities','clongdescription');

    $users=$dao->selectAsTable($fields,'category as s','status=1',$join,$actions,$config);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
            </div>    

            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
