<?php 

 require('../config/autoload.php'); 
include("header.php");

$file=new FileUpload();
$elements=array(
        "cname"=>"","cimage"=>"","cdescription"=>"","cwifi"=>"","ctv"=>"","crate"=>"","camenities"=>"","clongdescription"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('cname'=>"category Name","cimage"=>"category Image",'cdescription'=>"category description",'cwifi'=>"wifi availabilty",'ctv'=>"tv availabilty",'crate'=>"category rate","camenities"=>"category Amenities","clongdescription"=>"category Description");

$rules=array(
    "cname"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
    
"cimage"=> array('filerequired'=>true),
"cdescription"=>array("required"=>true,"minlength"=>3,"maxlength"=>200),
"cwifi"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
"ctv"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
"crate"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
"camenities"=>array("required"=>true,"minlength"=>3,"maxlength"=>300),
"clongdescription"=>array("required"=>true,"minlength"=>3,"maxlength"=>3000)
     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{

if($validator->validate($_POST))
{
	
if($fileName=$file->doUploadRandom($_FILES['cimage'],array('.jpg','.png','.jpeg','.webp'),100000,1,'../uploads'))
		{

$data=array(

        'cname'=>$_POST['cname'],
        
          'cimage'=>$fileName,
          'cdescription'=>$_POST['cdescription'],
          'cwifi'=>$_POST['cwifi'],
          'ctv'=>$_POST['ctv'],
          'crate'=>$_POST['crate'],
          'camenities'=>$_POST['camenities'],
          'clongdescription'=>$_POST['clongdescription']
		
    );
  
    if($dao->insert($data,"category"))
    {
        echo "<script> alert('New record created successfully');</script> ";
header('location:category.php');
    }
    else
        {$msg="Registration failed";} ?>

<span style="color:red;"><?php echo $msg; ?></span>

<?php
    
}
else
echo $file->errors();
}

}


?>
<html>
<head>
</head>
<body>

 <form action="" method="POST" enctype="multipart/form-data">
 
<div class="row">
                    <div class="col-md-6">
Name:

<?= $form->textBox('cname',array('class'=>'form-control')); ?>
<?= $validator->error('cname'); ?>

</div>
</div>



<div class="row">
                    <div class="col-md-6">
IMAGE:

<?= $form->fileField('cimage',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('cimage'); ?></span>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
DESCRIPTION:

<?= $form->textBox('cdescription',array('class'=>'form-control')); ?>
<?= $validator->error('cdescription'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
WiFi:

<?= $form->textBox('cwifi',array('class'=>'form-control')); ?>
<?= $validator->error('cwifi'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
TV:

<?= $form->textBox('ctv',array('class'=>'form-control')); ?>
<?= $validator->error('ctv'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
RATE:

<?= $form->textBox('crate',array('class'=>'form-control')); ?>
<?= $validator->error('crate'); ?>

</div>
</div>
 
<div class="row">
                    <div class="col-md-6">
AMENITIES:

<?= $form->textBox('camenities',array('class'=>'form-control')); ?>
<?= $validator->error('camenities'); ?>

</div>
</div>


<div class="row">
                    <div class="col-md-6">
DETAILED DESCRIPTION:

<?= $form->textBox('clongdescription',array('class'=>'form-control')); ?>
<?= $validator->error('clongdescription'); ?>

</div>
</div>






<button type="submit" name="btn_insert"  >Submit</button>
</form>


</body>

</html>


