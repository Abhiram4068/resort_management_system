<?php 



 require('../config/autoload.php'); 
include("header.php");

//session_start();
$elements=array(
        "hid"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array("hid"=>"Resort");

$rules=array(
    "hid"=>array("required"=>true,"minlength"=>1,"maxlength"=>30),
    
    
     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{
if($validator->validate($_POST))
{
 $_SESSION['hid']=$_POST['hid'];



//header('location:rptbookingdateview.php');
echo"<script >location.href = 'rptbookingdateview.php'</script>";
       
}

}


?>
<html>
<head>
</head>
<body>

 <form action="" method="POST" >
 


 <div class="row">
                    <div class="col-md-6">
Resort Name:

<?php
                    $options = $dao->createOptions('hname','hid',"hotel");
                    echo $form->dropDownList('hid',array('class'=>'form-control'),$options); ?>
<?= $validator->error('hid'); ?>

</div>
</div>





<button type="submit" name="btn_insert"  >Submit</button>
</form>


</body>

</html>