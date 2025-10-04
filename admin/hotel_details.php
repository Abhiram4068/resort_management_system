<?php 

 require('../config/autoload.php'); 
include("header.php");

$file=new FileUpload();
$elements=array(
        "hdimage"=>"","hddining"=>"","hdroom"=>"","hddescription"=>"","hdaddress"=>"","hdlocation"=>"","hid"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();
$labels=array('hdimage'=>"Hotel Name","hddining"=>"Hotel Dining Image","hdroom"=>"Hotel Room Image","hddescription"=>"Hotel Detailed description","hdaddress"=>"Hotel Address","hdlocation"=>"Hotel location","hid"=>"Hotel Name" );

$rules=array(
    
    "hdimage"=>array("filerequired"=>true),
    "hddining"=>array("filerequired"=>true),
    "hdroom"=>array("filerequired"=>true),
    "hddescription"=>array("required"=>true,"minlength"=>3,"maxlength"=>1000),
    "hdaddress"=>array("required"=>true,"minlength"=>3,"maxlength"=>3000),
    "hdlocation"=>array("required"=>true,"minlength"=>3,"maxlength"=>2000),
    "hid"=>array("required"=>true,"minlength"=>1,"maxlength"=>30)

);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{

if($validator->validate($_POST))

    {
	
        if($fileName1=$file->doUploadRandom($_FILES['hdimage'],array('.jpg','.png','.jpeg','.webp'),100000,1,'../uploads'))
                {
                    if($fileName2=$file->doUploadRandom($_FILES['hddining'],array('.jpg','.png','.jpeg','.webp'),100000,1,'../uploads'))
                    {
                        if($fileName3=$file->doUploadRandom($_FILES['hdroom'],array('.jpg','.png','.jpeg','.webp'),100000,1,'../uploads'))
                    {


$data=array(

          
    'hdimage'=>$fileName1,
    'hddining'=>$fileName2,
    'hdroom'=>$fileName3,
    'hddescription'=>$_POST['hddescription'],
    'hdaddress'=>$_POST['hdaddress'],
    'hdlocation'=>$_POST['hdlocation'],
    'hid'=>$_POST['hid']
        
         
    );
  
    if($dao->insert($data,"hotel_details"))
    {
        echo "<script> alert('New record created successfully');</script> ";
header('location:hotel_details.php');


    }
    else
        {$msg="Registration failed";} ?>

<span style="color:red;"><?php echo $msg; ?></span>

<?php
    
                    }
                }

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
HOTEL NAME:
<?php
                    $options = $dao->createOptions('hname','hid',"hotel");
                    echo $form->dropDownList('hid',array('class'=>'form-control'),$options); ?>
<?= $validator->error('hid'); ?>

</div>
</div>
 <div class="row">
                    <div class="col-md-6">
HOTEL IMAGE:

<?= $form->fileField('hdimage',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('hdimage'); ?></span>

</div>
</div>
 <div class="row">
                    <div class="col-md-6">
DINING IMAGE:

<?= $form->fileField('hddining',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('hddining'); ?></span>

</div> 
</div>

<div class="row">
                    <div class="col-md-6">
ROOM IMAGE:

<?= $form->fileField('hdroom',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('hdroom'); ?></span>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
DESCRIPTION:

<?= $form->textBox('hddescription',array('class'=>'form-control')); ?>
<?= $validator->error('hddescription'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
ADDRESS:

<?= $form->textBox('hdaddress',array('class'=>'form-control')); ?>
<?= $validator->error('hdaddress'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
LOCATION:

<?= $form->textBox('hdlocation',array('class'=>'form-control')); ?>
<?= $validator->error('hdlocation'); ?>

</div>
</div>




<button type="submit" name="btn_insert"  >Submit</button>
</form>


</body>

</html>
