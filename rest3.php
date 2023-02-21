<?php
include "rest3.register.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORGANIC - Online Shopping </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="rest3.css">
    <link rel="icon" href="/myphp-1/New folder/grocery website/organic-icon.webp">
</head>
<body>

<style>

    
    .cart #name{
        
            
            width: 125px;
            font-size: 15px;
            padding: 10px 15px;
            border-radius: 20px;
            color: aliceblue;
        
        
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            
        
    }
    
    .header a{
        color:white;
        
    }
    body{
        scroll-behavior: smooth;
    }
   #arr{
    margin-left:60px;
   }
   #cotact{
    scroll-behavior:smooth;
   }
   .cart a{
    margin:10px 25px;

   }
  
</style>
    <div class="header" id="up">
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
            <a href="rest3.cart.php"><i class="fa fa-shopping-cart"></i><span>0</span></a>
            <a href="rest3.user.register.php"><i class="fa fa-user"></i></a> <span id="name" >Hi!  <?=$_SESSION['user_name'];?></span>
        </div>
    </header>
    <div class="menu">

        <div class="box1">
            <h4><a href=""><i class="fa fa-bars"></i>Brows Catogories</a></h4>
            <div class="box ">

                <li><a href=""> <i class="fa fa-plus"></i> Grocery & frozen</a></li>
               
            </div>
            <div class="box">
                <li><a href="" id="home"> <i class="fa fa-plus"></i> fresh fruit<i id="arr" class="fa fa-arrow-right"></i></a></li>
                <div class="box2 act " id="bar">
                    <li><a href="">Fruit</a></li>
                    <li><a href="">vegitable</a></li>
                    <li><a href="">Drinks</a></li>
                    <li><a href="">Meat</a></li>
                </div>
               
            </div>
            
             
            <div class="box a1">
                <li><a href=""><i class="fa fa-plus"></i> fresh nuts</a></li>
                
            </div>
            <div class="box a1">
                <li><a href=""> <i class="fa fa-plus"></i> Vegitables</a></li>
                
            </div>
            <div class="box a1">
                <li><a href=""><i class="fa fa-plus"></i>  Root Vegitables</a></li>
                
            </div>
            <div class="box a1">
                <li><a href=""><i class="fa fa-plus"></i>  Organic</a></li>
                
            </div>
            <div class="box a1" id="water">
                <li><a href=""><i class="fa fa-plus"></i>  watercress</a></li>
                
            </div>
           
            
        </div>
        <li><a href="">Home</a></li>
        <li><a href="rest3.search.php">Products</a>
        <ul class="sub">
            <div class="box">
            <li><a href="#water">Services</a></li>
            <li><a href="#add1">Popular Items</a></li>
            <li><a href="#fp">Featured Products</a></li>
            <li><a href="rest3.search.php">See All products..</a></li>
            
            </div>
            
        </ul>
        </li>
        <li><a href="">Blog</a></li>
        <li><a href="">About</a></li>
        <li><a href="#contact">Contact</a></li>
    </div>


    <div class="container">
        
        <div class="slides">

            <div class="slide s1 curr">
             <div class="img">
                 <img src="/myphp-1/New folder/grocery website/grocery website/images/product-2.png" alt="">
             </div>
             <div class="dis">
                <p>ORGANIC FOOD</p>
                <h2>Looking for the fresh Organic Food</h2>
                <a href="">SHOP NOW</a>
                 
             </div>
            </div>
            <div class="slide s2 ">
                <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-3.png" alt="">
                </div>
                <div class="dis">
                   <p>ORGANIC FOOD</p>
                   <h2>Looking for the fresh Organic Food</h2>
                   <a href="">SHOP NOW</a>
                    
                </div>
               </div>
               <div class="slide s3 ">
                <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-6.png" alt="">
                </div>
                <div class="dis">
                   <p>ORGANIC FOOD</p>
                   <h2>Looking for the fresh Organic Food</h2>
                   <a href="">SHOP NOW</a>
                    
                </div>
               </div>

               
         </div>
         <div class="arrow">
            <a href=""><i class="arrow"></i></a>
         </div>
         <div class="btn">
            <label for="" class="rad-btn active"></label>
            <label for="" class="rad-btn"></label>
            <label for="" class="rad-btn"></label>
           </div>
    </div>
    <div id="services" class="services">
        <div class="box">
            <h2><i class="fa fa-truck"></i>fast delivery</h2>
            <p>Shipping order $100</p>
        </div>
        <div class="box">
            <h2><i class="fa fa-shield"></i>Online Support</h2>
            <p>fast deliveryservice</p>
        </div>
        <div class="box">
            <h2><i class="fa fa-headphones"></i>special offer</h2>
            <p>fast delivery service</p>
        </div>
        <div class="box">
            <h2><i class="fa fa-bars"></i>fast delivery</h2>
            <p>Shipping order $100</p>
        </div>
    </div>
    <div class="arrow1">
        <a href="" id="reft1" class="left1"><i class="fa fa-chevron-left "></i></a>
        <a href="" id="right1" class="right1"><i class="fa fa-chevron-right"></i></a>
     </div>
    <div class="catogery">
        <div class="cat">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-1.png" alt="">
            </div>
        <h4>Bannana(100Kg)</h4>

        </div>
        <div class="cat">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-2.png" alt="">
            </div>
        <h4>Tomato(200Kg)</h4>

        </div>
        <div class="cat">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-3.png" alt="">
            </div>
        <h4>Orange(250Kg)</h4>

        </div>
        <div class="cat">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-4.png" alt="">
            </div>
        <h4>Milk(2000packs)</h4>

        </div>
        <div class="cat">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-5.png" alt="">
            </div>
        <h4>Grapes(1000Kg)</h4>

        </div>
        <div class="cat">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-6.png" alt="">
            </div>
        <h4>Cocoa(500Kg)</h4>

        </div>
        <div class="cat">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-2.png" alt="">
            </div>
        <h4>Tomato(200Kg)</h4>

        </div>
        <div class="cat">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-4.png" alt="">
            </div>
        <h4>Milk(2000packs)</h4>

        </div>
        <div class="cat">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-1.png" alt="">
            </div>
        <h4>Bannana(100Kg)</h4>

        </div>
        <div class="cat">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-2.png" alt="">
            </div>
        <h4>Tomato(200Kg)</h4>

        </div>
        

    </div>
    <div class="add2">
        <div class="dis">
            <p>sale 15% off</p>
                <h4>Buy Longan Litchi</h4>
        </div>
        <img src="/myphp-1/New folder/grocery website/grocery website/images/category-4.png" alt="">
    </div>

    
     <div class="add1" id="add1">
        <div class="box1">
            <img src="/myphp-1/New folder/grocery website/grocery website/images/category-1.png" alt="">
            <div class="dis">
                <p>sale 15% off</p>
                <h4>Buy Longan Litchi</h4>
            </div>
        </div>
        <div class="box2">
            <img src="/myphp-1/New folder/grocery website/grocery website/images/category-2.png" alt="">
            <div class="dis">
                <p>sale 15% off</p>
                <h4>Buy Longan Litchi</h4>
            </div>
        </div>
     </div>

     <div class="arrow2">
        <a href="" id="reft1" class="left2"><i class="fa fa-chevron-left "></i></a>
        <a href="" id="right1" class="right2"><i class="fa fa-chevron-right"></i></a>
     </div>
     <h4 id="popular">Popular Items</h4>
     <div class="product">

       <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-1.png" alt="">
            </div>
            <div class="dis">

                <p>Bannana</p>
                <h4>Rs.50.00 <del>Rs.100.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-1.png' width='100px'>" >
            <input type="hidden" value="banana" name="name">
            <input type="hidden" value="50" name="price">
            <input type="hidden" value="A banana is an elongated, edible fruit  botanically a berry  produced by several kinds of large herbaceous flowering plants in the genus Musa. In some countries, bananas used for cooking may be called 'plantains', distinguishing them from dessert bananas" name="dis">
            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-2.png" alt="">
            </div>
            <div class="dis">

                <p>Tomato</p>
                <h4>Rs.50.00 <del>Rs.60.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-2.png' width='100px'>" >
            <input type="hidden" value="Tomato" name="name">
            <input type="hidden" value="50" name="price">
            <input type="hidden" name="dis" value="The tomato is the edible berry of the plant Solanum lycopersicum, commonly known as the tomato plant. The species originated in western South America, Mexico, and Central America. The Mexican Nahuatl word tomatl gave rise to the Spanish word tomate, from which the English word tomato derived.">
            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-3.png" alt="">
            </div>
            <div class="dis">

                <p>Orange</p>
                <h4>Rs.60.00 <del>Rs.90.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-3.png' width='100px'>" >
            <input type="hidden" value="Orange" name="name">
            <input type="hidden" value="60" name="price">
             <input type="hidden" name="dis" value="Orange S.A., formerly France Télécom S.A. is a French multinational telecommunications corporation. It has 266 million customers worldwide and employs 89,000 people in France, and 59,000 elsewhere. In 2015, the group had revenue of €40 billion. The company's head office is located in the 15th arrondissement of Paris">

            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-4.png" alt="">
            </div>
            <div class="dis">

                <p>Orange</p>
                <h4>Rs.190.00 <del>Rs.290.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' width='100px'>" >
            <input type="hidden" value="Milk" name="name">
            <input type="hidden" value="190" name="price">
            <input type="hidden" value="Milk is a white liquid food produced by the mammary glands of mammals. It is the primary source of nutrition for young mammals before they are able to digest solid food. Immune factors and immune-modulating components in milk contribute to milk immunity." name="dis">
            <input type="number" value="1" name="quantity">
            
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-5.png" alt="">
            </div>
            <div class="dis">

                <p>Grapes</p>
                <h4>Rs.100.00 <del>Rs.190.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' width='100px'>" >
            <input type="hidden" value="Grapes" name="name">
            <input type="hidden" value="100" name="price">
            <input type="number" value="1" name="quantity">
            <input type="hidden" value="A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis. Grapes are a non-climacteric type of fruit, generally occurring in clusters. The cultivation of grapes began perhaps 8,000 years ago, and the fruit has been used as human food over history" name="dis">
          
            <div class="btn1">  
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-6.png" alt="">
            </div>
            <div class="dis">

                <p>Cocoa Bean</p>
                <h4>Rs290.00 <del>Rs.390.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-3.png' width='100px'>" >
            <input type="hidden" value="Cocoa Bean" name="name">
            <input type="hidden" value="290" name="price">
            <input type="hidden" value="The cocoa bean (technically cocoa seed) or simply cocoa (/koʊ.koʊ/), also called the cacao bean (technically cacao seed) or cacao (/kəˈkaʊ/),[1] is the dried and fully fermented seed of Theobroma cacao, from which cocoa solids (a mixture of nonfat substances) and cocoa butter (the fat) can be extracted. Cocoa beans native to the Amazon rainforest are the basis of chocolate, and Mesoamerican foods including tejate, an indigenous Mexican drink that also includes maize, and pinolillo, a similar Nicaraguan drink made from a cornmeal & cocoa powder." name="dis">
            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-7.png" alt="">
            </div>
            <div class="dis">

                <p>Apple</p>
                <h4>Rs.80.00 <del>Rs.90.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-7.png' width='100px'>" >
            <input type="hidden" value="Apple" name="name">
            <input type="hidden" value="80" name="price">
            <input type="hidden" value="An apple is an edible fruit produced by an apple tree (Malus domestica). Apple trees are cultivated worldwide and are the most widely grown species in the genus Malus. The tree originated in Central Asia, where its wild ancestor, Malus sieversii, is still found today. Apples have been grown for thousands of years in Asia and Europe and were brought to North America by European colonists. Apples have religious and mythological significance in many cultures, including Norse, Greek, and European Christian tradition." name="dis">
            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-8.png" alt="">
            </div>
            <div class="dis">

                <p>Cheese</p>
                <h4>Rs.200.00 <del>Rs.290.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-8.png' width='100px'>" >
            <input type="hidden" value="Cheese" name="name">
            <input type="hidden" value="200" name="price">
            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-9.png" alt="">
            </div>
            <div class="dis">

                <p>Carot</p>
                <h4>Rs.10.00 <del>Rs.30.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-9.png' width='100px'>" >
            <input type="hidden" value="Carot" name="name">
            <input type="hidden" value="10" name="price">
            <input type="hidden" value="The carrot (Daucus carota subsp. sativus) is a root vegetable, typically orange in color, though purple, black, red, white, and yellow cultivars exist,[2][3][4] all of which are domesticated forms of the wild carrot, Daucus carota, native to Europe and Southwestern Asia. The plant probably originated in Persia and was originally cultivated for its leaves and seeds. The most commonly eaten part of the plant is the taproot, although the stems and leaves are also eaten. The domestic carrot has been selectively bred for its enlarged, more palatable, less woody-textured taproot." name="dis">
            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-1.png" alt="">
            </div>
            <div class="dis">

                <p>Bannana</p>
                <h4>Rs.50.00 <del>Rs.100.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-1.png' width='100px'>" >
            <input type="hidden" value="banana" name="name">
            <input type="hidden" value="50" name="price">
            <input type="hidden" value="A banana is an elongated, edible fruit  botanically a berry  produced by several kinds of large herbaceous flowering plants in the genus Musa. In some countries, bananas used for cooking may be called 'plantains', distinguishing them from dessert bananas" name="dis">
            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-2.png" alt="">
            </div>
            <div class="dis">

                <p>Tomato</p>
                <h4>Rs.50.00 <del>Rs.60.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-2.png' width='100px'>" >
            <input type="hidden" value="Tomato" name="name">
            <input type="hidden" value="50" name="price">
            <input type="hidden" name="dis" value="The tomato is the edible berry of the plant Solanum lycopersicum, commonly known as the tomato plant. The species originated in western South America, Mexico, and Central America. The Mexican Nahuatl word tomatl gave rise to the Spanish word tomate, from which the English word tomato derived.">
            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-3.png" alt="">
            </div>
            <div class="dis">

                <p>Orange</p>
                <h4>Rs.60.00 <del>Rs.90.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-3.png' width='100px'>" >
            <input type="hidden" value="Orange" name="name">
            <input type="hidden" value="60" name="price">
             <input type="hidden" name="dis" value="Orange S.A., formerly France Télécom S.A. is a French multinational telecommunications corporation. It has 266 million customers worldwide and employs 89,000 people in France, and 59,000 elsewhere. In 2015, the group had revenue of €40 billion. The company's head office is located in the 15th arrondissement of Paris">

            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-4.png" alt="">
            </div>
            <div class="dis">

                <p>Orange</p>
                <h4>Rs.190.00 <del>Rs.290.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' width='100px'>" >
            <input type="hidden" value="Milk" name="name">
            <input type="hidden" value="190" name="price">
            <input type="hidden" value="Milk is a white liquid food produced by the mammary glands of mammals. It is the primary source of nutrition for young mammals before they are able to digest solid food. Immune factors and immune-modulating components in milk contribute to milk immunity." name="dis">
            <input type="number" value="1" name="quantity">
            
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-5.png" alt="">
            </div>
            <div class="dis">

                <p>Grapes</p>
                <h4>Rs.100.00 <del>Rs.190.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' width='100px'>" >
            <input type="hidden" value="Grapes" name="name">
            <input type="hidden" value="100" name="price">
            <input type="number" value="1" name="quantity">
            <input type="hidden" value="A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis. Grapes are a non-climacteric type of fruit, generally occurring in clusters. The cultivation of grapes began perhaps 8,000 years ago, and the fruit has been used as human food over history" name="dis">
          
            <div class="btn1">  
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-6.png" alt="">
            </div>
            <div class="dis">

                <p>Cocoa Bean</p>
                <h4>Rs290.00 <del>Rs.390.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-6.png' width='100px'>" >
            <input type="hidden" value="Cocoa Bean" name="name">
            <input type="hidden" value="290" name="price">
            <input type="hidden" value="The cocoa bean (technically cocoa seed) or simply cocoa ink made from a cornmeal & cocoa powder." name="dis">
            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-7.png" alt="">
            </div>
            <div class="dis">

                <p>Apple</p>
                <h4>Rs.80.00 <del>Rs.90.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-7.png' width='100px'>" >
            <input type="hidden" value="Apple" name="name">
            <input type="hidden" value="80" name="price">
            <input type="hidden" value="An apple is an edible fruit produced by an apple tree (Malus domestica). Apple trees are cultivated worldwide and are the most widely grown species in the genus Malus. The tree originated in Central Asia, where its wild ancestor, Malus sieversii, is still found today. Apples have been grown for thousands of years in Asia and Europe and were brought to North America by European colonists. Apples have religious and mythological significance in many cultures, including Norse, Greek, and European Christian tradition." name="dis">
            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-8.png" alt="">
            </div>
            <div class="dis">

                <p>Cheese</p>
                <h4>Rs.200.00 <del>Rs.290.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-8.png' width='100px'>" >
            <input type="hidden" value="Cheese" name="name">
            <input type="hidden" value="200" name="price">
            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-9.png" alt="">
            </div>
            <div class="dis">

                <p>Carot</p>
                <h4>Rs.10.00 <del>Rs.30.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-9.png' width='100px'>" >
            <input type="hidden" value="Carot" name="name">
            <input type="hidden" value="10" name="price">
            <input type="hidden" value="The carrot (Daucus carota subsp. sativus) is a root vegetable, typically orange in color, though purple, black, red, white, and yellow cultivars exist,[2][3][4] all of which are domesticated forms of the wild carrot, Daucus carota, native to Europe and Southwestern Asia. The plant probably originated in Persia and was originally cultivated for its leaves and seeds. The most commonly eaten part of the plant is the taproot, although the stems and leaves are also eaten. The domestic carrot has been selectively bred for its enlarged, more palatable, less woody-textured taproot." name="dis">
            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
   
    
    
</div>

<div class="arrow1 deal" id="fp">
    <a href="" id="reft1" class="left2"><i class="fa fa-chevron-left "></i></a>
    <a href="" id="right1" class="right2"><i class="fa fa-chevron-right"></i></a>
 </div>
 <h4 id="popular" >Featured products</h4>
 <div class="product">

 <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-1.png" alt="">
            </div>
            <div class="dis">

                <p>Bannana</p>
                <h4>Rs.50.00 <del>Rs.100.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-1.png' width='100px'>" >
            <input type="hidden" value="banana" name="name">
            <input type="hidden" value="50" name="price">
            <input type="hidden" value="A banana is an elongated, edible fruit  botanically a berry  produced by several kinds of large herbaceous flowering plants in the genus Musa. In some countries, bananas used for cooking may be called 'plantains', distinguishing them from dessert bananas" name="dis">
            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-2.png" alt="">
            </div>
            <div class="dis">

                <p>Tomato</p>
                <h4>Rs.50.00 <del>Rs.60.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-2.png' width='100px'>" >
            <input type="hidden" value="Tomato" name="name">
            <input type="hidden" value="50" name="price">
            <input type="hidden" name="dis" value="The tomato is the edible berry of the plant Solanum lycopersicum, commonly known as the tomato plant. The species originated in western South America, Mexico, and Central America. The Mexican Nahuatl word tomatl gave rise to the Spanish word tomate, from which the English word tomato derived.">
            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-3.png" alt="">
            </div>
            <div class="dis">

                <p>Orange</p>
                <h4>Rs.60.00 <del>Rs.90.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-3.png' width='100px'>" >
            <input type="hidden" value="Orange" name="name">
            <input type="hidden" value="60" name="price">
             <input type="hidden" name="dis" value="Orange S.A., formerly France Télécom S.A. is a French multinational telecommunications corporation. It has 266 million customers worldwide and employs 89,000 people in France, and 59,000 elsewhere. In 2015, the group had revenue of €40 billion. The company's head office is located in the 15th arrondissement of Paris">

            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-4.png" alt="">
            </div>
            <div class="dis">

                <p>Orange</p>
                <h4>Rs.190.00 <del>Rs.290.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' width='100px'>" >
            <input type="hidden" value="Milk" name="name">
            <input type="hidden" value="190" name="price">
            <input type="hidden" value="Milk is a white liquid food produced by the mammary glands of mammals. It is the primary source of nutrition for young mammals before they are able to digest solid food. Immune factors and immune-modulating components in milk contribute to milk immunity." name="dis">
            <input type="number" value="1" name="quantity">
            
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-5.png" alt="">
            </div>
            <div class="dis">

                <p>Grapes</p>
                <h4>Rs.100.00 <del>Rs.190.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' width='100px'>" >
            <input type="hidden" value="Grapes" name="name">
            <input type="hidden" value="100" name="price">
            <input type="number" value="1" name="quantity">
            <input type="hidden" value="A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis. Grapes are a non-climacteric type of fruit, generally occurring in clusters. The cultivation of grapes began perhaps 8,000 years ago, and the fruit has been used as human food over history" name="dis">
          
            <div class="btn1">  
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-6.png" alt="">
            </div>
            <div class="dis">

                <p>Cocoa Bean</p>
                <h4>Rs290.00 <del>Rs.390.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-3.png' width='100px'>" >
            <input type="hidden" value="Cocoa Bean" name="name">
            <input type="hidden" value="290" name="price">
            <input type="hidden" value="The cocoa bean (technically cocoa seed) or simply cocoa (/koʊ.koʊ/), also called the cacao bean (technically cacao seed) or cacao (/kəˈkaʊ/),[1] is the dried and fully fermented seed of Theobroma cacao, from which cocoa solids (a mixture of nonfat substances) and cocoa butter (the fat) can be extracted. Cocoa beans native to the Amazon rainforest are the basis of chocolate, and Mesoamerican foods including tejate, an indigenous Mexican drink that also includes maize, and pinolillo, a similar Nicaraguan drink made from a cornmeal & cocoa powder." name="dis">
            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-7.png" alt="">
            </div>
            <div class="dis">

                <p>Apple</p>
                <h4>Rs.80.00 <del>Rs.90.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-7.png' width='100px'>" >
            <input type="hidden" value="Apple" name="name">
            <input type="hidden" value="80" name="price">
            <input type="hidden" value="An apple is an edible fruit produced by an apple tree (Malus domestica). Apple trees are cultivated worldwide and are the most widely grown species in the genus Malus. The tree originated in Central Asia, where its wild ancestor, Malus sieversii, is still found today. Apples have been grown for thousands of years in Asia and Europe and were brought to North America by European colonists. Apples have religious and mythological significance in many cultures, including Norse, Greek, and European Christian tradition." name="dis">
            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-8.png" alt="">
            </div>
            <div class="dis">

                <p>Cheese</p>
                <h4>Rs.200.00 <del>Rs.290.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-8.png' width='100px'>" >
            <input type="hidden" value="Cheese" name="name">
            <input type="hidden" value="200" name="price">
            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-9.png" alt="">
            </div>
            <div class="dis">

                <p>Carot</p>
                <h4>Rs.10.00 <del>Rs.30.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-9.png' width='100px'>" >
            <input type="hidden" value="Carot" name="name">
            <input type="hidden" value="10" name="price">
            <input type="hidden" value="The carrot (Daucus carota subsp. sativus) is a root vegetable, typically orange in color, though purple, black, red, white, and yellow cultivars exist,[2][3][4] all of which are domesticated forms of the wild carrot, Daucus carota, native to Europe and Southwestern Asia. The plant probably originated in Persia and was originally cultivated for its leaves and seeds. The most commonly eaten part of the plant is the taproot, although the stems and leaves are also eaten. The domestic carrot has been selectively bred for its enlarged, more palatable, less woody-textured taproot." name="dis">
            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-1.png" alt="">
            </div>
            <div class="dis">

                <p>Bannana</p>
                <h4>Rs.50.00 <del>Rs.100.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-1.png' width='100px'>" >
            <input type="hidden" value="banana" name="name">
            <input type="hidden" value="50" name="price">
            <input type="hidden" value="A banana is an elongated, edible fruit  botanically a berry  produced by several kinds of large herbaceous flowering plants in the genus Musa. In some countries, bananas used for cooking may be called 'plantains', distinguishing them from dessert bananas" name="dis">
            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-2.png" alt="">
            </div>
            <div class="dis">

                <p>Tomato</p>
                <h4>Rs.50.00 <del>Rs.60.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-2.png' width='100px'>" >
            <input type="hidden" value="Tomato" name="name">
            <input type="hidden" value="50" name="price">
            <input type="hidden" name="dis" value="The tomato is the edible berry of the plant Solanum lycopersicum, commonly known as the tomato plant. The species originated in western South America, Mexico, and Central America. The Mexican Nahuatl word tomatl gave rise to the Spanish word tomate, from which the English word tomato derived.">
            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-3.png" alt="">
            </div>
            <div class="dis">

                <p>Orange</p>
                <h4>Rs.60.00 <del>Rs.90.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-3.png' width='100px'>" >
            <input type="hidden" value="Orange" name="name">
            <input type="hidden" value="60" name="price">
             <input type="hidden" name="dis" value="Orange S.A., formerly France Télécom S.A. is a French multinational telecommunications corporation. It has 266 million customers worldwide and employs 89,000 people in France, and 59,000 elsewhere. In 2015, the group had revenue of €40 billion. The company's head office is located in the 15th arrondissement of Paris">

            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-4.png" alt="">
            </div>
            <div class="dis">

                <p>Orange</p>
                <h4>Rs.190.00 <del>Rs.290.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' width='100px'>" >
            <input type="hidden" value="Milk" name="name">
            <input type="hidden" value="190" name="price">
            <input type="hidden" value="Milk is a white liquid food produced by the mammary glands of mammals. It is the primary source of nutrition for young mammals before they are able to digest solid food. Immune factors and immune-modulating components in milk contribute to milk immunity." name="dis">
            <input type="number" value="1" name="quantity">
            
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-5.png" alt="">
            </div>
            <div class="dis">

                <p>Grapes</p>
                <h4>Rs.100.00 <del>Rs.190.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' width='100px'>" >
            <input type="hidden" value="Grapes" name="name">
            <input type="hidden" value="100" name="price">
            <input type="number" value="1" name="quantity">
            <input type="hidden" value="A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis. Grapes are a non-climacteric type of fruit, generally occurring in clusters. The cultivation of grapes began perhaps 8,000 years ago, and the fruit has been used as human food over history" name="dis">
          
            <div class="btn1">  
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-6.png" alt="">
            </div>
            <div class="dis">

                <p>Cocoa Bean</p>
                <h4>Rs290.00 <del>Rs.390.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-6.png' width='100px'>" >
            <input type="hidden" value="Cocoa Bean" name="name">
            <input type="hidden" value="290" name="price">
            <input type="hidden" value="The cocoa bean (technically cocoa seed) or simply cocoa (/koʊ.koʊ/), also called the cacao bean (technically cacao seed) or cacao (/kəˈkaʊ/),[1] is the dried and fully fermented seed of Theobroma cacao, from which cocoa solids (a mixture of nonfat substances) and cocoa butter (the fat) can be extracted. Cocoa beans native to the Amazon rainforest are the basis of chocolate, and Mesoamerican foods including tejate, an indigenous Mexican drink that also includes maize, and pinolillo, a similar Nicaraguan drink made from a cornmeal & cocoa powder." name="dis">
            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-7.png" alt="">
            </div>
            <div class="dis">

                <p>Apple</p>
                <h4>Rs.80.00 <del>Rs.90.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-7.png' width='100px'>" >
            <input type="hidden" value="Apple" name="name">
            <input type="hidden" value="80" name="price">
            <input type="hidden" value="An apple is an edible fruit produced by an apple tree (Malus domestica). Apple trees are cultivated worldwide and are the most widely grown species in the genus Malus. The tree originated in Central Asia, where its wild ancestor, Malus sieversii, is still found today. Apples have been grown for thousands of years in Asia and Europe and were brought to North America by European colonists. Apples have religious and mythological s tradition." name="dis">
            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    
    <div class="item">
        <form action="rest3.productdetails.php" method="POST">
            <div class="img">
                <img src="/myphp-1/New folder/grocery website/grocery website/images/product-8.png" alt="">
            </div>
            <div class="dis">

                <p>Cheese</p>
                <h4>Rs.200.00 <del>Rs.290.00</del></h4>
            </div>
           
            <input type="hidden" name="image" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-8.png' width='100px'>" >
            <input type="hidden" value="Cheese" name="name">
            <input type="hidden" value="200" name="price">
            <input type="hidden" value="Cheese is a dairy product produced in wide ranges of flavors, textures, and forms by coagulation of the milk protein casein. It comprises proteins and fat ..." name="dis">
            <input type="number" value="1" name="quantity">
            <div class="btn1">
               
            <input type="submit" value="Add to cart" name="btn">
            <input type="submit" value="view more" name="btn1">
           </div>
           
        </form>
    </div>
    
      

</div> 



<div class="add2 a2">
    <div class="dis">
        <p>sale 25% off</p>
            <h4>Buy hurry up</h4>
    </div>
    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-9.png" width="270px" alt="">
</div>
<div class="add2 a3">
    <div class="dis">
        <p>sale 35% off</p>
            <h4>Buy Now</h4>
    </div>
    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-1.png" width="270px" alt="">
</div>

<div class="add2 a3 a7">
    <div class="dis">
        <p>sale 35% off</p>
            <h4>Buy Now</h4>
    </div>
    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-4.png" width="270px" alt="">
</div>

<div class="add2 a3 a8">
    <div class="dis">
    <h4>Our client say's</h4>
        <p>"Contrary to popular belif.or this is not simply good.but this work is should be realy appreciate. It is realy good and fast delivery thans!!!"</p>
            
    </div>
    
</div>


 <div class="add1">
    <div class="box1 b1">
        <img src="/myphp-1/New folder/grocery website/grocery website/images/category-3.png" alt="">
        <div class="dis">
            <p>sale 15% off</p>
            <h4>Buy Now</h4>
        </div>
    </div>
    <div class="box1 b2">
        <img src="/myphp-1/New folder/grocery website/grocery website/images/category-3.png" alt="">
        <div class="dis">
            <p>sale 15% off</p>
            <h4>Buy Now</h4>
        </div>
    </div>
    
 </div>


 <div class="add1 add3">
    <div class="box1 b1 b4">
        <img src="/myphp-1/New folder/grocery website/grocery website/images/category-1.png" alt="">
        <div class="dis">
            <p>sale 15% off</p>
            <h4>Buy Now</h4>
        </div>
    </div>
    <div class="box1 b2 b3">
        <img src="/myphp-1/New folder/grocery website/grocery website/images/category-4.png" alt="">
        <div class="dis">
            <p>sale 15% off</p>
            <h4>Buy Now</h4>
        </div>
    </div>
    
 </div>
 
  
   <div class="email" id="contact">

    <div class="box1">
        <h2>Join our Newsletter</h2> 

        <p>GET E-mail update about our lates shop and <span>special offer!</span></p>

    </div>
    <div class="box1">
        <input type="text" placeholder="Your email address">
        <input type="button" value="Sing Up">
    </div>
   </div>

   <footer>
    <div class="box2">
        <h2>Help & Contact</h2>
        <li><a href="">Your account</a></li>
        <li><a href="">Your Order</a></li>
        <li><a href="">Shipping rates</a></li>
        <li><a href="">Returns</a></li>
        <li><a href="">Contact us</a></li>
    </div>
    <div class="box2">
        <h2>Product Categories</h2>
        <li><a href="">Your account</a></li>
        <li><a href="">Your Order</a></li>
        <li><a href="">Shipping rates</a></li>
        <li><a href="">Returns</a></li>
        <li><a href="">Contact us</a></li>
    </div>
    <div class="box2">
        <h2>Payment info</h2>
        <li><a href="">Your account</a></li>
        <li><a href="">Your Order</a></li>
        <li><a href="">Shipping rates</a></li>
        <li><a href="">Returns</a></li>
        <li><a href="">Contact us</a></li>
    </div>
    <div class="box2">
        <h2>About Us</h2>
        <li><a href="">Your account</a></li>
        <li><a href="">Your Order</a></li>
        <li><a href="">Shipping rates</a></li>
        <li><a href="">Returns</a></li>
        <li><a href="">Contact us</a></li>
    </div>
   </footer>
   <div class="ftr">
    <h2>.Store</h2>
    <p> Copyright 2023 &copy; </p>
   </div>
   <div class="uparrow">
    <a href="#up"><i class="fa fa-chevron-up" ></i></a>
   </div>
    
   
  
    <script src="rest3.js"></script>
    <script>
        window.addEventListener('scroll',function(){
    var header1=document.querySelector('.header1');
    header1.classList.toggle('hd',window.scrollY >30)
    
    console.log(window.scrollY)
    
})
    </script>

<script>
        window.addEventListener('scroll',function(){
    var up=document.querySelector('.uparrow');
    up.classList.toggle('upto',window.scrollY >200)
    
    console.log(window.scrollY)
    
})
    </script>
</body>
</html>