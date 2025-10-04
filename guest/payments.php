<!DOCTYPE html>
<html lang="en">
<head>
<?php include("dbcon.php"); 
session_start();
?>
<script type="text/javascript">
function validations() {
  var name = document.getElementById("Cname");
  if (name.value.trim() === "") {
    alert("Enter Card Holder Name...");
    name.focus();
    return false;
  }

  var month = document.getElementById("date");
  if (month.value.trim() === "" || isNaN(month.value) || month.value < 1 || month.value > 12) {
    alert("Enter a valid Card Month (1-12)");
    month.focus();
    return false;
  }

  var year = document.getElementById("Cyy");
  if (year.value.trim() === "" || isNaN(year.value) || year.value.length !== 4 || year.value < new Date().getFullYear()) {
    alert("Enter a valid Card Year (e.g., 2025)");
    year.focus();
    return false;
  }

  var cvv = document.getElementById("verification");
  if (cvv.value.trim() === "" || isNaN(cvv.value) || cvv.value.length !== 3) {
    alert("Enter a valid 3-digit CVV / CVC");
    cvv.focus();
    return false;
  }

  var cardNumber = document.getElementById("cardnumber");
  if (cardNumber.value.trim() === "" || isNaN(cardNumber.value) || cardNumber.value.length !== 16) {
    alert("Enter a valid 16-digit Card Number");
    cardNumber.focus();
    return false;
  }

  var visaCard = document.getElementById("card");
  var payPal = document.getElementById("paypal");
  if (!visaCard.checked && !payPal.checked) {
    alert("Please select a payment method: Visa/Mastercard or PayPal");
    return false;
  }

  return true;
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
?>

<form action="" method="POST" onSubmit="return validations();" enctype="multipart/form-data">
  <div class="checkout-panel">
    <div class="panel-body">
        <br><br>
        <?php $fname = $_SESSION['fname']; 
        echo $fname;
        ?>
        <br>
        <h2 class="title">Checkout</h2>

        <div class="progress-bar">
            <div class="step active"></div>
            <div class="step active"></div>
            <div class="step"></div>
            <div class="step"></div>
        </div>

        <div class="payment-method">
            <label for="card" class="method card">
                <div class="card-logos">
                    <img src="payment/img/visa_logo.png"/>
                    <img src="payment/img/mastercard_logo.png"/>
                </div>
                <?php 
                $amt = $_SESSION['total'];
                ?>
                <div class="radio-input">
                    <input id="card" type="radio" name="payment">
                    Pay Rs.<?php echo $amt; ?> with credit card
                </div>
            </label>

            <label for="paypal" class="method paypal">
                <img src="payment/img/paypal_logo.png"/>
                <div class="radio-input">
                    <input id="paypal" type="radio" name="payment">
                    Pay Rs.<?php echo $amt; ?> with PayPal
                </div>
            </label>
        </div>

        <div class="input-fields">
            <div class="column-1">
                <label for="cardholder">Cardholder's Name</label>
                <input type="text" onkeypress="return /[a-z]/i.test(event.key)" name="Cname" id="Cname" />

                <div class="small-inputs">
                    <div>
                        <label for="date">Valid thru</label>
                        <input type="text" onkeypress="return /[0-9]/.test(event.key)" maxlength="2" id="date" name="Cmm" placeholder="MM" />
                        <input type="text" onkeypress="return /[0-9]/.test(event.key)" maxlength="4" id="Cyy" name="Cyy" placeholder="YY" />
                    </div>

                    <div>
                        <label for="verification">CVV / CVC *</label>
                        <input type="password" onkeypress="return /[0-9]/.test(event.key)" maxlength="3" name="cvv" id="verification" />
                    </div>
                </div>
            </div>

            <div class="column-2">
                <label for="cardnumber">Card Number</label>
                <input type="text" onkeypress="return /[0-9]/.test(event.key)" maxlength="16" name="Cnum" id="cardnumber" />

                <span class="info">* CVV or CVC is the card security code, unique three digits number on the back of your card separate from its number.</span>
            </div>
        </div>
    </div>

    <div class="panel-footer">
        <button class="btn back-btn">Back</button>
        <button type="submit" class="btn next-btn" name="next">Next Step</button>
    </div>
  </div>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="payment/script.js"></script>

</body>
</html>
