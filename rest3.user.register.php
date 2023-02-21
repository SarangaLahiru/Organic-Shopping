<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORGANIC-Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="rest3.user.register.css">
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
   if($_GET['err']=='emptyInput'){
      echo "
      <div class='err'>
      <h4>Please fill all the blanks</h4>
     </div>
      ";
   }
   else if($_GET['err']=='invalidName'){
      echo "
      <div class='err'>
      <h4>Please Enter valid Name</h4>
     </div>
      ";
   }
   else if($_GET['err']=='invalidpass'){
      echo "
      <div class='err'>
      <h4>Password not match</h4>
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
               <i class="fa fa-user"></i>
               <input type="text" placeholder="Username" name="name">
            </div>
            <div class="frm-g">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input type="email" placeholder="E-mail" name="email">
             </div> <div class="frm-g">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password" name="pass">
             </div>
             <div class="frm-g">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Conform  Password" name="repass">

             </div>
             <input type="submit" name="btn" value="SUBMIT">
             <p>Already have an account <a href="rest3.login.php">Login</a></p>

        </form>
       </div>

    </div>
    
</body>
</html>