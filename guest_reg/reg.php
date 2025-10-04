<?php require('../config/autoload.php'); ?>

<?php
$dao = new DataAccess();
$rules = array(
    'regfname' => array('required' => true),
    'reglname' => array('required' => true),
    'regaddress' => array('required' => true),
    'rcontact' => array('required' => true),
    'remail' => array('required' => true),
    'rpassword' => array('required' => true),
    'cpassword' => array('required' => true, 'compare' => array('comparewith' => 'rpassword', 'operator' => '=')),
);

$labels = array(
    'regfname' => 'First Name',
    'reglname' => 'Last Name',
    'regaddress' => 'Address',
    'rcontact' => 'Contact',
    'remail' => 'Email',
    'rpassword' => 'Password',
    'cpassword' => 'Confirm Password',
);

$validator = new FormValidator($rules);
$elements = array(
    'regfname' => '',
    'reglname' => '',
    'regaddress' => '',
    'rcontact' => '',
    'remail' => '',
    'rpassword' => '',
    'cpassword' => '',
);

$form = new FormAssist($elements, $_POST);

if (isset($_POST['signup'])) {
    if ($validator->validate($_POST)) {
        $data = array(
            'regfname' => $_POST['regfname'],
            'reglname' => $_POST['reglname'],
            'regaddress' => $_POST['regaddress'],
            'rcontact' => $_POST['rcontact'],
            'remail' => $_POST['remail'],
            'rpassword' => $_POST['rpassword'],
        );
        $table = 'registration';
        if ($dao->insert($data, $table)) {
            echo "<script>alert('Registration Successful');</script>";
        } else {
            echo "<script>alert('Something went wrong');</script>";
        }
    }
}

if (isset($_POST['goback'])) {
 
    header('Location: ../guest/index.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 100%;
            max-width: 500px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        input {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input:focus {
            border-color: #3498db;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
            outline: none;
        }
        .form-button {
            text-align: center;
        }
        .form-button input {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background: #3498db;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .form-button input:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Registration</h1>
    <form method="POST" class="register-form">
        <label>First Name</label>
        <?php echo $form->textBox('regfname'); ?>
        <?php echo $validator->error('regfname'); ?>

        <label>Last Name</label>
        <?php echo $form->textBox('reglname'); ?>
        <?php echo $validator->error('reglname'); ?>

        <label>Address</label>
        <?php echo $form->textBox('regaddress'); ?>
        <?php echo $validator->error('regaddress'); ?>

        <label>Contact</label>
        <?php echo $form->textBox('rcontact'); ?>
        <?php echo $validator->error('rcontact'); ?>

        <label>Email</label>
        <?php echo $form->textBox('remail'); ?>
        <?php echo $validator->error('remail'); ?>

        <label>Password</label>
        <?php echo $form->passwordBox('rpassword'); ?>
        <?php echo $validator->error('rpassword'); ?>

        <label>Confirm Password</label>
        <?php echo $form->passwordBox('cpassword'); ?>
        <?php echo $validator->error('cpassword'); ?>

        <div class="form-button">
            <input type="submit" name="signup" value="Register">
        </div>
        <div class="form-button">
            <input type="submit" name="goback" value="Go Back">
        </div>
    </form>
</div>

</body>
</html>
