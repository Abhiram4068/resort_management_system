<!DOCTYPE html>
<html lang="en">
<head>
<?php include("dbcon.php"); 
session_start();
?>
	<script type="text/javascript">
function validations()
{
 var  name = document.getElementById("Cname");
if(name.value=="")
{
 alert("Enter Card Holder Name...");
name.focus();
return false;
}
	
	
	 var  name = document.getElementById("date");
if(name.value=="")
{
 alert("Enter Card Month");
name.focus();
return false;
}
	
	 var  name = document.getElementById("Cyy");
if(name.value=="")
{
 alert("Enter Card Year");
name.focus();
return false;
}

		 var  name = document.getElementById("verification");
if(name.value=="")
{
 alert("Enter Card CVV / CVC");
name.focus();
return false;
}
	
var  name = document.getElementById("cardnumber");
if(name.value=="")
{
 alert("Enter Card Number");
name.focus();
return false;
}
	
var  name = document.getElementById("add");
if(name.value=="")


}
	
	
	</script>
	
  <meta charset="UTF-8">
  <title>Payments</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link rel="stylesheet" href="payment/style.css">
<meta name="robots" content="noindex,follow" />
</head>
<body>


<?php
if(isset($_POST["next"]))
{
	
	 header('location:printbill.php');
	
 }


	
//onSubmit="return validations()" 
?>
	<form action=""  method="POST" onSubmit="return validations();"   enctype="multipart/form-data">
  <div class="checkout-panel">
    <div class="panel-body">
		<br><br>
		<?php $name=$_SESSION['email'] ;
		 echo $name;
		?>
		<br>
      <h2 class="title">Checkout</h2>

      <div class="progress-bar">
        <div class="step active"></div>
        <div class="step active"></div>
        <div class="step"></div>
        <div class="step"></div>
      </div>
   <?php
		//session_start();
		
		
		 ?>


      <div class="payment-method">
        <label for="card" class="method card">
     
		 
          <div class="card-logos">
            <img src="payment/img/visa_logo.png"/>
            <img src="payment/img/mastercard_logo.png"/>
          </div>
<?php 
//session_start();
$amt= $_SESSION['total'];
  $name=$_SESSION['email'] ;
			
			
			
?>
          <div class="radio-input">
            <input id="card" type="radio" name="payment">
            Pay Rs.<?php echo $amt;?> with credit card
          </div>
        </label>

        <label for="paypal" class="method paypal">
          <img src="payment/img/paypal_logo.png"/>
          <div class="radio-input">
            <input id="paypal" type="radio" name="payment">
             Pay Rs.<?php echo $amt;?> with pay pal
          </div>
        </label>
      </div>

      <div class="input-fields">
        <div class="column-1">
          <label for="cardholder">Cardholder's Name</label>
          <input type="text" input onkeypress="return /[a-z]/i.test(event.key)"  name="Cname" id="Cname" />

          <div class="small-inputs">
            <div>
              <label for="date">Valid thru</label>
              <input type="text" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" maxlength="2" min="1" max="12" id="date" name="Cmm" placeholder="MM " /> 
	      <input type="text" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" maxlength="4" id="Cyy" placeholder= "YY" />

            </div>



            <div>
              <label for="verification">CVV / CVC *</label>
              <input type="password" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" maxlength="3" name="cvv" id="verification"/>
            </div>
          </div>

        </div>
		  
		  
		  
        <div class="column-2">
			
          <label for="cardnumber">Card Number</label>
          <input type="text" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" maxlength="16" type="number" name="Cnum"id="cardnumber"/>

          <span class="info">* CVV or CVC is the card security code, unique three digits number on the back of your card separate from its number.</span>

	

        </div>
      </div>
    </div>

    <div class="panel-footer">
      <button class="btn back-btn">Back</button>
     <button  type="submit" class="btn next-btn"  name="next" >Next Step</button>
		
		
    </div>
  </div>
	</form>
	
	
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="payment/script.js"></script>
  
</body>
</html>