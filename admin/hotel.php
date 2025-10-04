<?php 

 require('../config/autoload.php'); 
include("header.php");

$file=new FileUpload();
$elements=array(
        "hname"=>"","himage"=>"","haddress"=>"","hcontact"=>"","hdescription"=>"","email"=>"","password"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();
$labels=array('hname'=>"Hotel Name","himage"=>"Hotel Image","haddress"=>"Hotel address","hcontact"=>"Contact Number","email"=>"Receptionist Email","password"=>"Receptionist Password" );

$rules=array(
    "hname"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
    "himage"=>array("filerequired"=>true),
    "haddress"=>array("required"=>true,"minlength"=>3,"maxlength"=>100),
    "hcontact"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
    "hdescription"=>array("required"=>true,"minlength"=>3,"maxlength"=>200),
    "email"=>array("required"=>true,"minlength"=>3,"maxlength"=>200),
    "password"=>array("required"=>true,"minlength"=>3,"maxlength"=>200)

);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{

if($validator->validate($_POST))

    {
	
        if($fileName=$file->doUploadRandom($_FILES['himage'],array('.jpg','.png','.jpeg','.webp'),100000,1,'../uploads'))
                {


$data=array(

    'hname'=>$_POST['hname'],        
    'himage'=>$fileName,
    'haddress'=>$_POST['haddress'],
    'hcontact'=>$_POST['hcontact'],
    'hdescription'=>$_POST['hdescription'],
    'email'=>$_POST['email'],
    'password'=>$_POST['password']
        
         
    );
  
    if($dao->insert($data,"hotel"))
    {
        echo "<script> alert('New record created successfully');</script> ";
header('location:hotel.php');


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

<?= $form->textBox('hname',array('class'=>'form-control')); ?>
<?= $validator->error('hname'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
IMAGE:

<?= $form->fileField('himage',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('himage'); ?></span>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
Address:

<?= $form->textBox('haddress',array('class'=>'form-control')); ?>
<?= $validator->error('haddress'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
Conatct no:

<?= $form->textBox('hcontact',array('class'=>'form-control')); ?>
<?= $validator->error('hcontact'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
Description:

<?= $form->textBox('hdescription',array('class'=>'form-control')); ?>
<?= $validator->error('hdescription'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
Receptionist Email:

<?= $form->textBox('email',array('class'=>'form-control')); ?>
<?= $validator->error('email'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
                    Receptionist Password:

<?= $form->textBox('password',array('class'=>'form-control')); ?>
<?= $validator->error('password'); ?>

</div>
</div>



<button type="submit" name="btn_insert"  >Submit</button>
</form>


</body>

</html>
