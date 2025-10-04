<?php
// Start the session and destroy it
 require('../config/autoload.php'); 
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect to Previous Page</title>
    <script type="text/javascript">
        // Function to redirect to the previous page after 2 seconds
        setTimeout(function() {
            if (document.referrer) {
                // If there is a referrer (previous page), go back to it
                window.location.href = '../guest/index.php';
            } else {
                // If no referrer, redirect to the homepage (or any fallback URL)
                window.location.href = '/';
            }
        }, 700);
    </script>
</head>
<style>
   .it {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: maroon;
            text-align: center;
             /* Optional background color */
        }
</style>
<body>
    <h1 style="text-align:center; color:maroon; margin:50px;" class="it">  You have been loged out!!!</style></h1>
    <p></p>
</body>
</html>
