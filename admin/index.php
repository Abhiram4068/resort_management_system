<?php
require('../config/autoload.php');

$dao = new DataAccess();
$rules = array(
    'username' => array('required' => true),
    'password' => array('required' => true)
);

$validator = new formValidator($rules);

// Initialize session variable for login
if (!isset($_SESSION['email3'])) {
    $_SESSION['email3'] = null;
}

if (isset($_POST['signin'])) {
    if ($validator->validate($_POST)) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Hardcoded credentials for validation (Replace with database validation in production)
        if ($username === "admin" && $password === "1234") {
            $_SESSION['email3'] = $username; // Valid login
            echo "<script>alert('Login Successful');</script>";
            echo "<script>location.replace('hotel.php')</script>";
        } else {
            $_SESSION['email3'] = null; // Clear invalid session
            echo "<script>alert('Invalid username or password');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Log In</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="registration/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="registration/css/style.css">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: white;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }

        .form-title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 4px;
            transition: border 0.3s;
        }

        .form-group input:focus {
            border-color: #3498db;
        }

        .error {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }

        .form-submit {
            width: 100%;
            padding: 12px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
        }

        .form-submit:hover {
            background-color: #2980b9;
        }

        .signup-image-link {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #666;
            text-decoration: none;
            font-size: 14px;
        }

        .signup-image-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="main">
    <!-- Sign In Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-form">
                    <h2 class="form-title">Admin Log In</h2>
                    <form method="POST" id="login-form">
                        <div class="form-group">
                            <input type="text" name="username" placeholder="Username" required>
                            <div class="error"><?php echo $validator->error('username'); ?></div>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" required>
                            <div class="error"><?php echo $validator->error('password'); ?></div>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signin" class="form-submit" value="Log in">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- JS -->
<script src="registration/vendor/jquery/jquery.min.js"></script>
<script src="registration/js/main.js"></script>
</body>
</html>
