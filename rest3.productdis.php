<?php
include "rest3.productdetails.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All products</title>
    <link rel="stylesheet" href="rest3.productdis.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="/myphp-1/New folder/grocery website/organic-icon.webp">
</head>
<body>
    <div class="header">
        <a href="">Call us : +01900220033</a>
        <a href="">USD</a>
        <a href="">Languages</a>
    </div>
    <header class="header1">
         <h2><img id="theme" src="/myphp-1/New folder/grocery website/organic-icon.webp" alt="" width="95px"></h2>
        <div class="search">
            <input type="text" id="search" placeholder="Search here...">
            <i class="fa fa-search"></i>           
        </div>
        <div class="cart">
            <i class="fa fa-shopping-cart"></i><span>0</span>
            <i class="fa fa-user"></i>
        </div>
    </header>
    <div class="menu">

        <div class="box1">
            <h4><a href=""><i class="fa fa-bars"></i>Brows Catogories</a></h4>
          <!---- <div class="box ">

                <li><a href=""> <i class="fa fa-plus"></i> Grocery & frozen</a></li>
               
            </div>
            <div class="box">
                <li><a href="" id="home"> <i class="fa fa-plus"></i> fresh fruit<i class="fa fa-arrow-right"></i></a></li>
                <div class="box2 act ">
                    <li><a href="">Home</a></li>
                    <li><a href="">Home</a></li>
                    <li><a href="">Home</a></li>
                    <li><a href="">Home</a></li>
                </div>
               
            </div> -->
            
             
          <!----  <div class="box a1">
                <li><a href=""><i class="fa fa-plus"></i> fresh nuts</a></li>
                
            </div>
            <div class="box a1">
                <li><a href=""> <i class="fa fa-plus"></i> Vegitables</a></li>
                
            </div>
            <div class="box a1">
                <li><a href=""><i class="fa fa-plus"></i>  Root Vegitables</a></li>
                
            </div>
            <div class="box a1">
                <li><a href=""><i class="fa fa-plus"></i>  Root Vegitables</a></li>
                
            </div>
            <div class="box a1">
                <li><a href=""><i class="fa fa-plus"></i>  Root Vegitables</a></li>
                
            </div> -->
           
            
        </div>
        <li><a href="rest3.php">Home</a></li>
        <li><a href="">Products</a>
        <ul class="sub">
            <div class="box">
            <li><a href="">Home</a></li>
            <li><a href="">Home</a></li>
            <li><a href="">Home</a></li>
            <li><a href="">Home</a></li>
            <li><a href="">Home</a></li>
            </div>
            <div class="box">
                <li><a href="">Home</a></li>
                <li><a href="">Home</a></li>
                <li><a href="">Home</a></li>
                <li><a href="">Home</a></li>
                <li><a href="">Home</a></li>
                </div>
                <div class="box">
                    <li><a href="">Home</a></li>
                    <li><a href="">Home</a></li>
                    <li><a href="">Home</a></li>
                    <li><a href="">Home</a></li>
                    <li><a href="">Home</a></li>
                    </div>
        </ul>
        </li>
        <li><a href="">Blog</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Contact</a></li>
    </div>


    <div class="container">

    <h1><?=$_SESSION['item_name']?></h1>

    <div class="box">
        <?=$_SESSION['image']?>
    </div>

    <div class="box1">
        <?=$_SESSION['dis']?>

        <form action="rest3.productdetails.php" method="POST">
            
           
            <input type="hidden" name="image" value="<?=$_SESSION['image']?>" >
            <input type="hidden" value="<?=$_SESSION['item_name']?>" name="name">
            <input type="hidden" value="<?=$_SESSION['price']?>" name="price">
            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
           
           </div>
           
        </form>
    </div>
        
       
   
        </div>
    </div>
    <script>
        window.addEventListener('scroll',function(){
    var header1=document.querySelector('.header1');
    header1.classList.toggle('hd',window.scrollY >30)
    
    console.log(window.scrollY)
    
})
    </script>
</body>
</html>