<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORGANIC - Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="rest3.login.css">
    <link rel="icon" href="/myphp-1/New folder/grocery website/organic-icon.webp">
</head>
<body>
<style>
       .err{
            background-color: rgb(236, 133, 133);
            width: 200px;
            color: aliceblue;
            padding: 10px 15px;
            text-align: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            border-radius: 20px;
            position:absolute;
            top:150px;
            left:765px;

        }
   </style>

 <?php
  if(isset($_GET['err'])){
   if($_GET['err']=='emptyInput1'){
      echo "
      <div class='err'>
      <h4>Please Enter inputs</h4>
     </div>
      ";
   }
   if($_GET['err']=='invalidpassword_Or_Username'){
    echo "
    <div class='err'>
    <h4>Invalid password or Username</h4>
   </div>
    ";
 }
   
  
  }
 ?> 
<div class="box">
       <div class="box1">
        <img src="/myphp-1/New folder/grocery website/organic-icon.webp" alt="">
        <form action="rest3.register.php" method="POST">
            
            <div class="frm-g">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input type="email" placeholder="E-mail" name="email">
             </div> <div class="frm-g">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password" name="pass">
             </div>
             
             <input type="submit" name="btn1" value="LOGIN">
             <p>If you are New user <a href="rest3.user.register.php">Register Now!</a></p>

        </form>
       </div>

    </div>
</body>
</html>