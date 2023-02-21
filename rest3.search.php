<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All products</title>
    <link rel="stylesheet" href="rest3.search.css">
    <link rel="stylesheet" href="rest3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="/myphp-1/New folder/grocery website/organic-icon.webp">
</head>
<body>
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
                <i id="searchbtn" class="fa fa-search"></i>           
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
            <li><a href="#water">Services</a></li>
            <li><a href="#add1">Popular Items</a></li>
            <li><a href="#fp">Featured Products</a></li>
            <li><a href="rest3.search.php">See All products..</a></li>
            
            </div>
            
        </ul>
            </li>
            <li><a href="">Blog</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
        </div>
    
    
        <div class="container">

        <h2 id="assrc1">As your search : <span id="src"></span></h2>
    
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

                <p>Milk</p>
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

                <p>Milk</p>
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
    </body>
    <script src="rest3.search.js"></script>

    <script>
        window.addEventListener('scroll',function(){
    var header1=document.querySelector('.header1');
    header1.classList.toggle('hd',window.scrollY >30)
    
    console.log(window.scrollY)
    
})
    </script>
</body>
</html>