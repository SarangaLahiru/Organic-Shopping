<?php
session_start();
include "rest3.register.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="rest3.sucess.css">
</head>
<body>
   <div class="box1">
    <img src="/myphp-1/New folder/grocery website/organic-icon.webp" alt="">
    <div class="box">
        <p>hello ! <span><?=$_SESSION['user'];?></span></p>
        
        <h4>Go to login page and Enjoy Shopping </h4>
    </div>
    <a href="rest3.login.php">Go to login page</a>
   </div>
</body>
</html>