<?php 

 require('../config/autoload.php'); 
include("header.php");

$file=new FileUpload();
$elements=array(
        "rno"=>"","rfloor"=>"","rrent"=>"","cid"=>"","hid"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('rno'=>"Room Number","rfloor"=>"Room Floor","rrent"=>"Room Rent" );

$rules=array(
    "rno"=>array("required"=>true,"minlength"=>1,"maxlength"=>30),
    "rfloor"=>array("required"=>true,"minlength"=>1,"maxlength"=>30),
    "rrent"=>array("required"=>true,"minlength"=>1,"maxlength"=>30),
    "cid"=>array("required"=>true,"minlength"=>1,"maxlength"=>30),
    "hid"=>array("required"=>true,"minlength"=>1,"maxlength"=>30)
    
     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{

if($validator->validate($_POST))
{
	
		

$data=array(

        'rno'=>$_POST['rno'],
        'rfloor'=>$_POST['rfloor'],
        'rrent'=>$_POST['rrent'],
        'cid'=>$_POST['cid'],
        'hid'=>$_POST['hid']
          
		
    );
  
    if($dao->insert($data,"room"))
    {
        echo "<script> alert('New record created successfully');</script> ";
header('location:room.php');
    }
    else
        {$msg="Registration failed";} ?>

<span style="color:red;"><?php echo $msg; ?></span>

<?php
}    
else
echo $file->errors();


}


?>
<html>
<head>
</head>
<body>

 <form action="" method="POST" enctype="multipart/form-data">
 
<div class="row">
                    <div class="col-md-6">
Room Number:

<?= $form->textBox('rno',array('class'=>'form-control')); ?>
<?= $validator->error('rno'); ?>

</div>
</div>


<div class="row">
                    <div class="col-md-6">
Room Floor:

<?= $form->textBox('rfloor',array('class'=>'form-control')); ?>
<?= $validator->error('rfloor'); ?>

</div>
</div>


<div class="row">
                    <div class="col-md-6">
Room Rent:

<?= $form->textBox('rrent',array('class'=>'form-control')); ?>
<?= $validator->error('rrent'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
Category Name:

<?php
                    $options = $dao->createOptions('cname','cid',"category");
                    echo $form->dropDownList('cid',array('class'=>'form-control'),$options); ?>
<?= $validator->error('cid'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
Hotel Name:

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


