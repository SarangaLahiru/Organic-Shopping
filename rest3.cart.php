<?php
include "rest3.productdetails.php";
?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="rest3.cart.css">
     <link rel="stylesheet" href="rest3.css">
     <link rel="icon" href="/myphp-1/New folder/grocery website/organic-icon.webp">
</head>
<body>
    <style>
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
text-decoration:none;


}

</style>
    </style>
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
            <a href="rest3.cart.php"><i class="fa fa-shopping-cart"></i><span>0</span></a>
            <a href=""><i class="fa fa-user"></i><span id="name" >Hi!  <?=$_SESSION['user_name'];?></span></a>
        </div>
    </header>
    <div class="menu">

        <div class="box1">
            <h4><a href=""><i class="fa fa-bars"></i>Brows Catogories</a></h4>
            <div class="box ">

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
                <li><a href=""><i class="fa fa-plus"></i>  Root Vegitables</a></li>
                
            </div>
            <div class="box a1">
                <li><a href=""><i class="fa fa-plus"></i>  Root Vegitables</a></li>
                
            </div>
           
            
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

    <table>
        <tr>
        
            <td ></td>
            <td>Item</td>
            <td >Quantity</td>
            <td></td>
            <td>Price</td>
            <td></td>
            <td></td>
           
        </tr>
        <?php
        $total=0;
        if(isset($_SESSION['cart_item'])){
            foreach($_SESSION['cart_item'] as $key => $value){
                
                echo "
                <form action='rest3.productdetails.php' method='POST'>
            <tr>
            <td >".$value['image']."</td>
            <td>".$value['name']."</td>
            <td>".$value['quantity']."</td>
            <td></td>
            <td>".$value['price']*$value['quantity']."</td>
            <td><input type='submit' value='Remove' name='remove' id='remove'></td>
            <td><input type='hidden' value='".$value['name']."' name='name' id='remove'></td>
        </tr>
            
        </form>
            ";
    
            $total+=$value['price']*$value['quantity'];  
               
              
            }
        }
       
        ?>
    </table>

    <div class="bill">

        <table id="pay">

        <tr>
            <td id="">Total Price</td>
            <td>Rs.<?=$total?>.00</td>
        </tr>
        <tr>
            <td >Discount</td>
            <td id="discount">-$0.00</td>
            <td></td>
        </tr>
        <tr>
            <td id="total1" >Total </td>
            <td id="total">Rs.<?=$total?>.00</td>
            <td></td>
        </tr>
        <tr>
            
            <td ><img src="/myphp-1/New folder/grocery website/grocery website/images/Visa_Logo.png" alt="" width='100px'> </td>
            <td ><img src="/myphp-1/New folder/grocery website/grocery website/images//MasterCard_Logo.svg.png" width='80px' alt="" width='200px'> </td>
            
        </tr>
        
            <td id="paymoney"><button>Make Purchcase</button></td>
      
        </table>
       

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