<?php require('../config/autoload.php'); ?>
<?php
	

include("header.php");
$dao=new DataAccess();
$info=$dao->getData('*','hotel','hid='.$_GET['id']);
$file=new FileUpload();
$elements=array(
        "hname"=>$info[0]['hname'],"himage"=>"","haddress"=>$info[0]['haddress'],"hcontact"=>$info[0]['hcontact'],"hdescription"=>$info[0]['hdescription'],"email"=>$info[0]['email'],"password"=>$info[0]['password']);

	$form = new FormAssist($elements,$_POST);

$labels=array('sname'=>"Hotel Name","haddress"=>"Hotel Address","hcontact"=>"Hotel Contact","hdescription"=>"Hotel decription","email"=>"Receptionist email","password"=>"Receptionist password");

$rules=array(
    "hname"=>array("required"=>true,"minlength"=>3,"maxlength"=>100),
    "haddress"=>array("required"=>true,"minlength"=>3,"maxlength"=>100),
    "hcontact"=>array("required"=>true,"minlength"=>3,"maxlength"=>100),
    "hdescription"=>array("required"=>true,"minlength"=>3,"maxlength"=>200),
    "email"=>array("required"=>true,"minlength"=>3,"maxlength"=>200),
    "password"=>array("required"=>true,"minlength"=>3,"maxlength"=>200)

     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_update"]))
{
if($validator->validate($_POST))
{

if(isset($_FILES['himage']['name'])){
			if($fileName=$file->doUploadRandom($_FILES['himage'],array('.jpg','.png','.jpeg'),100000,5,'../uploads'))
			{
				$flag=true;
					
			}
}
$data=array(

        'hname'=>$_POST['hname'],
        'haddress'=>$_POST['haddress'],
          'hcontact'=>$_POST['hcontact'],
          'hdescription'=>$_POST['hdescription'],
          'email'=>$_POST['email'],
          'password'=>$_POST['password']
          //'himage'=>$_POST['himage'],
    );
  $condition='hid='.$_GET['id'];
if(isset($flag))
			{	$data['himage']=$fileName;
		
			}
    

if($dao->update($data,'hotel',$condition))
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
 Hotel Name:

<?= $form->textBox('hname',array('class'=>'form-control')); ?>
<?= $validator->error('hname'); ?>

</div>
</div>


<div class="row">
                    <div class="col-md-6">
 Hotel Image:

 <?= $form->fileField('himage',array('class'=>'form-control')); ?>

</div>
</div>


<div class="row">
                    <div class="col-md-6">
Hotel Address:

<?= $form->textBox('haddress',array('class'=>'form-control')); ?>
<?= $validator->error('haddress'); ?>

</div>
</div>


<div class="row">
                    <div class="col-md-6">
Hotel Contact:

<?= $form->textBox('hcontact',array('class'=>'form-control')); ?>
<?= $validator->error('hcontact'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
Hotel Description:

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


<button type="submit" name="btn_update"  >UPDATE</button>
</form>

</body>
</html>