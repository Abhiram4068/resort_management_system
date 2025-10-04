<?php require('../config/autoload.php'); ?>
<?php
	

include("header.php");
$dao=new DataAccess();
$info=$dao->getData('*','category','cid='.$_GET['id']);
$file=new FileUpload();
$elements=array(
        "cname"=>$info[0]['cname'],"cimage"=>"","cdescription"=>$info[0]['cdescription'],"cwifi"=>$info[0]['cwifi'],"ctv"=>$info[0]['ctv'],"crate"=>$info[0]['crate'],"camenities"=>$info[0]['camenities'],"clongdescription"=>$info[0]['clongdescription']);

	$form = new FormAssist($elements,$_POST);

$labels=array('cname'=>"Category Name");

$rules=array(
    "cname"=>array("required"=>true,"minlength"=>3,"maxlength"=>100),
    "cdescription"=>array("required"=>true,"minlength"=>3,"maxlength"=>300),
    "cwifi"=>array("required"=>true,"minlength"=>3,"maxlength"=>100),
    "ctv"=>array("required"=>true,"minlength"=>3,"maxlength"=>100),
    "crate"=>array("required"=>true,"minlength"=>3,"maxlength"=>100),
    "camenities"=>array("required"=>true,"minlength"=>3,"maxlength"=>3000),
    "clongdescription"=>array("required"=>true,"minlength"=>3,"maxlength"=>3000)

     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_update"]))
{
if($validator->validate($_POST))
{

if(isset($_FILES['cimage']['name'])){
			if($fileName=$file->doUploadRandom($_FILES['cimage'],array('.jpg','.png','.jpeg'),100000,5,'../uploads'))
			{
				$flag=true;
					
			}
}
$data=array(

        'cname'=>$_POST['cname'],
          //'cimage'=>$_POST['cimage'],
          'cdescription'=>$_POST['cdescription'],
          'cwifi'=>$_POST['cwifi'],
          'ctv'=>$_POST['ctv'],
          'crate'=>$_POST['crate'],
          'camenities'=>$_POST['camenities'],
          'clongdescription'=>$_POST['clongdescription']
          
    );
  $condition='cid='.$_GET['id'];
if(isset($flag))
			{	$data['cimage']=$fileName;
		
			}
    

if($dao->update($data,'category',$condition))
    {
        $msg="Successfullly Updated";

    }
    else
        {$msg="Failed";} ?>

<span style="color:red;"><?php echo $msg; ?></span>

<?php
    
}


}


	
	
	
	
?>

<html>
<head>
	<style>
		.form{
		border:3px solid blue;
		}
	</style>
</head>
<body>


	<form action="" method="POST" enctype="multipart/form-data" >
 
<div class="row">
                    <div class="col-md-6">
 Category Name:

<?= $form->textBox('cname',array('class'=>'form-control')); ?>
<?= $validator->error('cname'); ?>

</div>
</div>


<div class="row">
                    <div class="col-md-6">
 Category Image:

 <?= $form->fileField('cimage',array('class'=>'form-control')); ?>

</div>
</div>


<div class="row">
                    <div class="col-md-6">
 Category Description:

<?= $form->textBox('cdescription',array('class'=>'form-control')); ?>
<?= $validator->error('cdescription'); ?>

</div>
</div>

 
<div class="row">
                    <div class="col-md-6">
WiFi availabilty:

<?= $form->textBox('cwifi',array('class'=>'form-control')); ?>
<?= $validator->error('cwifi'); ?>

</div>
</div>

 
<div class="row">
                    <div class="col-md-6">
TV availabilty:

<?= $form->textBox('ctv',array('class'=>'form-control')); ?>
<?= $validator->error('ctv'); ?>

</div>
</div>

 
<div class="row">
                    <div class="col-md-6">
 Category Rate:

<?= $form->textBox('crate',array('class'=>'form-control')); ?>
<?= $validator->error('crate'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
 Category Amenities:

<?= $form->textBox('camenities',array('class'=>'form-control')); ?>
<?= $validator->error('camenities'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
 Category Detailed Description:

<?= $form->textBox('clongdescription',array('class'=>'form-control')); ?>
<?= $validator->error('clongdescription'); ?>

</div>
</div>




<button type="submit" name="btn_update"  >UPDATE</button>
</form>

</body>
</html>